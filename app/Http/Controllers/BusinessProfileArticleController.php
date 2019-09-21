<?php

namespace App\Http\Controllers;

use App\BusinessProfile;
use App\BusinessProfileArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BusinessProfileArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profileArticles = BusinessProfileArticle::all();
        return view('admin.business-profile.profile-article.index',compact('profileArticles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessProfiles = BusinessProfile::all();
        return view('admin.business-profile.profile-article.create', compact('businessProfiles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate( [
           'business_profile_id' => 'required|not_in:0',
           'title' => 'required',
           'short_description' => 'required',
           'long_description' => 'required',
           'image' => 'required',
       ]);
//       $profileArticle = new BusinessProfileArticle();
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = 'business_profile-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('business_profile'))
            {
                Storage::disk('public')->makeDirectory('business_profile');
            }

//                resize image for category and upload
            $profileImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('business_profile/'.$imageName,$profileImage);
        }else{
            $imageName = "default.png";
        }

     $attributes['image']  = $imageName;
//        dd($attributes);
        BusinessProfileArticle::create($attributes);
// dd($attributes);
        return redirect('/profile-article/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function show(BusinessProfileArticle $businessProfileArticle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessProfiles = BusinessProfile::all();
        $profileArticle = BusinessProfileArticle::find($id);
        return view('admin.business-profile.profile-article.edit',compact('businessProfiles','profileArticle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusinessProfileArticle $businessProfileArticle)
    {
        $attributes = $request->validate( [
            'business_profile_id' => 'required',
            'title' => 'required',
            'short_description' => 'required',
            'long_description' => 'required',
            'image' => ''
        ]);
//       $profileArticle = new BusinessProfileArticle();
        $businessProfileArticle = BusinessProfileArticle::find($request->article_id);
        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'business_profile-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('business_profile'))
            {
                Storage::disk('public')->makeDirectory('business_profile');
            }

            if (Storage::disk('public')->exists('business_profile/'.$businessProfileArticle->image))
            {
                Storage::disk('public')->delete('business_profile/'.$businessProfileArticle->image);
            }

//                resize image for category and upload
            $profileImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('business_profile/'.$imageName,$profileImage);
        }else{
            $imageName = $businessProfileArticle->image;
        }
//        dd($attributes);
        $attributes['image']  = $imageName;
//        dd($businessProfileArticle);
        $businessProfileArticle->update($attributes);

        return redirect('/profile-article')->with('message','Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BusinessProfileArticle  $businessProfileArticle
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusinessProfileArticle $businessProfileArticle, $id)
    {
        $businessProfileArticle = BusinessProfileArticle::find($id);
        if (Storage::disk('public')->exists('business_profile/'.$businessProfileArticle->image))
        {
            Storage::disk('public')->delete('business_profile/'.$businessProfileArticle->image);
        }
        $businessProfileArticle->delete();
        return redirect('/profile-article')->with('message','Delete Successfully');
    }
}
