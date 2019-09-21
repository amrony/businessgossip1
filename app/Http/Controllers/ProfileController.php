<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleSubCategory;
use App\BusinessSize;
use App\BusinessStage;
use App\Community;
use App\Country;
use App\Industry;
use App\Profession;
use App\Profile;
use App\ProfileInfo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:profile');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function myProfile()
    {
        $profileInfo = auth('profile')->user()->profileInfo;
        $communities = Community::where('is_approved', 1)->get();
        return view('profile.dashboard.index', compact('communities','profileInfo'));
    }
    public function edit(){

        $professions = Profession::all();
        $industries = Industry::all();
        $business_stages = BusinessStage::all();
        $business_sizes = BusinessSize::all();
        $countries = Country::all();
        $profileInfo = auth('profile')->user()->profileInfo;
//        dd($profileInfo);
        return view('profile.dashboard.create', compact(
            'countries',
            'professions',
              'industries',
              'business_stages',
              'business_sizes',
              'profileInfo'
        ));
    }

    public function update(Request $request){
//        dd(Auth::user('profile')->id);
//        return $request->all();
        $this->validate($request, [
//           'first_name' => 'required',
//           'last_name' => 'required',
           'profession_id' => 'required|not_in:0',
//           'your_self' => 'required',
           'industry_id' => 'required|not_in:0',
           'business_stage_id' => 'required|not_in:0',
           'business_size_id' => 'required|not_in:0',
           'country_id' => 'required|not_in:0',
        ]);

//        $profile = auth('profile')->user();
        $profileInfo =  new ProfileInfo();
//        $profileId = auth('profile')->user()->id;

        $image = $request->file('image');
        $slug = str_slug($request->first_name);


        if (isset($image))
        {
//          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('profile_image'))
            {
                Storage::disk('public')->makeDirectory('profile_image');
            }

            // Delete Old News Image
            if (Storage::disk('public')->exists('profile_image/'.$profileInfo->image))
            {
                Storage::disk('public')->delete('profile_image/'.$profileInfo->image);
            }


//                resize image for category and upload
            $profileImage = Image::make($image)->resize(300,300)->stream();
            Storage::disk('public')->put('profile_image/'.$imageName,$profileImage);
        } else{
            $imageName = "default.png";
        }

        $data =  $request->except('image');
        $data['image'] = $imageName;
        $data['slug'] = Str::slug(trim($request->first_name));

        ProfileInfo::updateOrCreate(['profile_id' => Auth::user('profile')->id],$data
            );

        return back()->with('message', 'Profile Update Successfully');
    }

}
