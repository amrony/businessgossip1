<?php

namespace App\Http\Controllers;

use App\BusinessProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BusinessProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businessProfiles = BusinessProfile::all();
//        dd($businessProfiles);
        return view('admin.business-profile.index',compact('businessProfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.business-profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        dd($request->all());
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'link' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => 'required'
        ]);


        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'profile-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('company-profile'))
            {
                Storage::disk('public')->makeDirectory('company-profile');
            }

//                resize image for category and upload
            $companyLogo = Image::make($image)->resize(200,200)->stream();
            Storage::disk('public')->put('company-profile/'.$imageName,$companyLogo);
        }else{
            $imageName = "default.png";
        }

        $attributes['image']  = $imageName;
        BusinessProfile::create($attributes);

        return redirect('/business-profile/create')->with('message', 'Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessProfile $businessProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessProfile = BusinessProfile::find($id);
        return view('admin.business-profile.edit', compact('businessProfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessProfile $businessProfile)
    {
//        dd($businessProfile);
        $attributes = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'link' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => ''
        ]);
        $businessProfile =  BusinessProfile::find($request->id);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'profile-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('company-profile'))
            {
                Storage::disk('public')->makeDirectory('company-profile');
            }

            if (Storage::disk('public')->exists('company-profile/'.$businessProfile->image))
            {
                Storage::disk('public')->delete('company-profile/'.$businessProfile->image);
            }

//                resize image for category and upload
            $companyLogo = Image::make($image)->resize(200,200)->stream();
            Storage::disk('public')->put('company-profile/'.$imageName,$companyLogo);
        }else{
            $imageName = $businessProfile->image;
        }
        $attributes['image']  = $imageName;
        $businessProfile->update($attributes);

        return redirect('/business-profile')->with('message','Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessProfile  $businessProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $businessProfile = BusinessProfile::find($id);
        if (Storage::disk('public')->exists('company_profile/'.$businessProfile->image))
        {
            Storage::disk('public')->delete('company_profile/'.$businessProfile->image);
        }
        $businessProfile->delete();
        return redirect('/business-profile')->with('message','Delete Successfully');
    }
}
