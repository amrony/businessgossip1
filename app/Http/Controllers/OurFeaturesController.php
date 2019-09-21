<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\OurFeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class OurFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ourFeatures = OurFeatures::all();
        return view('admin.features.index',compact('ourFeatures'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.features.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image'            => 'required',
            'title_one'            => 'required',
            'title_two'            => 'required',
            'title_three'            => 'required',
            'title_four'            => 'required',
            'description_one'            => 'required',
            'description_two'            => 'required',
            'description_three'            => 'required',
            'description_four'            => 'required',
        ]);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'featutes-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('featutes'))
            {
                Storage::disk('public')->makeDirectory('featutes');
            }

//                resize image for category and upload
            $featuresImage = Image::make($image)->resize(1600,1600)->stream();
            Storage::disk('public')->put('featutes/'.$imageName,$featuresImage);
        }else{
            $imageName = "default.png";
        }

        $attributes['image']  = $imageName;
//        dd($attributes);
        OurFeatures::create($attributes);
        return redirect('/features/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OurFeatures  $ourFeatures
     * @return \Illuminate\Http\Response
     */
    public function show(OurFeatures $ourFeatures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OurFeatures  $ourFeatures
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $features = OurFeatures::find($id);
//        dd($features);
        return view('admin.features.edit', compact('features'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OurFeatures  $ourFeatures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OurFeatures $ourFeatures)
    {
        $attributes = $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image'            => ''
        ]);

        $features = OurFeatures::find($request->id);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'about_us-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('featutes'))
            {
                Storage::disk('public')->makeDirectory('featutes');
            }
//                delete old image
            if (Storage::disk('public')->exists('featutes/'.$features->image))
            {
                Storage::disk('public')->delete('featutes/'.$features->image);
            }

//                resize image for category and upload
            $AboutImage = Image::make($image)->resize(1600,1600)->stream();
            Storage::disk('public')->put('featutes/'.$imageName,$AboutImage);
        }else{
            $imageName = $features->image;
        }

        $attributes['image']  = $imageName;
        $features->update($attributes);

        return redirect()->back()->with('message','Update Successfully');

//        return redirect('/features')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OurFeatures  $ourFeatures
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $features = OurFeatures::find($id);
        if (Storage::disk('public')->exists('featutes/'.$features->image))
        {
            Storage::disk('public')->delete('featutes/'.$features->image);
        }
        $features->delete();

        return redirect('/features')->with('message','Delete Successfully');
    }
}
