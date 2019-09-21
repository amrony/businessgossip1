<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\BusinessProfileArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aboutUs = AboutUs::all();
        return view('admin.about-us.index',compact('aboutUs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about-us.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return $request->all();

        $attributes = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image'            => ''
        ]);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'about_us-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('about_us'))
            {
                Storage::disk('public')->makeDirectory('about_us');
            }

//                resize image for category and upload
            $profileImage = Image::make($image)->resize(1600,1600)->stream();
            Storage::disk('public')->put('about_us/'.$imageName,$profileImage);
        }else{
            $imageName = "default.png";
        }

        $attributes['image']  = $imageName;
//        dd($attributes);
        AboutUs::create($attributes);
        return redirect('/about_us/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function show(AboutUs $aboutUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aboutUs = AboutUs::find($id);
        return view('admin.about-us.edit', compact('aboutUs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AboutUs $aboutUs)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image'            => ''
        ]);

        $aboutUs = AboutUs::find($request->id);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'about_us-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('about_us'))
            {
                Storage::disk('public')->makeDirectory('about_us');
            }
//                delete old image
            if (Storage::disk('public')->exists('about_us/'.$aboutUs->image))
            {
                Storage::disk('public')->delete('about_us/'.$aboutUs->image);
            }

//                resize image for category and upload
            $AboutImage = Image::make($image)->resize(1600,1600)->stream();
            Storage::disk('public')->put('about_us/'.$imageName,$AboutImage);
        }else{
            $imageName = $aboutUs->image;
        }

        $attributes['image']  = $imageName;
        $aboutUs->update($attributes);

        return redirect()->back()->with('message','Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AboutUs  $aboutUs
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aboutUs = AboutUs::find($id);
        if (Storage::disk('public')->exists('about_us/'.$aboutUs->image))
        {
            Storage::disk('public')->delete('about_us/'.$aboutUs->image);
        }
        $aboutUs->delete();

        return redirect('/about_us')->with('message', 'Delete Successfully');
    }
}
