<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleSubCategory;
use App\Community;
use App\ProfileInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communities = Community::where('is_approved', 1)->paginate(10);
        return view('front-end.community.index', compact('communities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'profile_id' => '',
            'question'=> 'required',
            'description'=> 'required',
            'article_category_id'=> 'required|not_in:0',
            'article_sub_category_id'=> 'required|not_in:0',
            'is_approved' => '',
            'tag' => ''
        ]);

        $attributes['profile_id'] = Auth::guard('profile')->id();
        Community::create($attributes);
        return redirect()->back()->with('message','Thank You');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show(Community $community)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(Community $community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        //
    }
    public function questionAdd(){
        $articleCategories = ArticleCategory::all();
        $articleSubcategories = ArticleSubCategory::all();
        return view('front-end.community.add-question', compact('articleCategories','articleSubcategories'));
    }
}
