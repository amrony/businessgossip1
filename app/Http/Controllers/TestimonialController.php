<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testimonial.create');
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
            'name' => 'required',
            'designation' => 'required|max:20',
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);

        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
            $imageName = 'testimonial-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('testimonial'))
            {
                Storage::disk('public')->makeDirectory('testimonial');
            }

//                resize image for category and upload
            $profileImage = Image::make($image)->resize(800,800)->stream();
            Storage::disk('public')->put('testimonial/'.$imageName,$profileImage);
        }else{
            $imageName = "default.png";
        }

        $attributes['image']  = $imageName;

        Testimonial::create($attributes);

        return redirect('/testimonial/create')->with('message', 'Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
//        dd($testimonial);
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $attributes = $request->validate([
            'name' => 'required',
            'designation' => 'required|max:20',
            'image' => '',
            'title' => 'required',
            'description' => 'required',
        ]);

        $tastimonial = Testimonial::find($request->id);

        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
            $imageName = 'testimonial-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('testimonial'))
            {
                Storage::disk('public')->makeDirectory('testimonial');
            }

            //                delete old image
            if (Storage::disk('public')->exists('testimonial/'.$tastimonial->image))
            {
                Storage::disk('public')->delete('testimonial/'.$tastimonial->image);
            }

//                resize image for category and upload
            $testimonialImage = Image::make($image)->resize(800,800)->stream();
            Storage::disk('public')->put('testimonial/'.$imageName,$testimonialImage);
        }else{
            $imageName = $tastimonial->image;
        }

        $attributes['image']  = $imageName;
        $tastimonial->update($attributes);

        return redirect()->back()->with('message','Update Successfully');

//        return redirect('/testimonial')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimonial = Testimonial::find($id);
        if (Storage::disk('public')->exists('testimonial/'.$testimonial->image))
        {
            Storage::disk('public')->delete('testimonial/'.$testimonial->image);
        }
        $testimonial->delete();
        return redirect('/testimonial')->with('message','Delete Successfully');
    }
}
