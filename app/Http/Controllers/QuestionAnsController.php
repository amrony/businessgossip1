<?php

namespace App\Http\Controllers;

use App\ArticleCategory;
use App\ArticleSubCategory;
use App\Community;
use App\QuestionAns;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;

class QuestionAnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $communities = Community::latest()->get();
//        dd($community);
        return view('admin.question.index', compact('communities'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\QuestionAns  $questionAns
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $articleCategories = ArticleCategory::all();
        $articleSubcategories = ArticleSubCategory::all();
        $community = Community::find($id);
        return view('admin.question.show',compact('community','articleCategories', 'articleSubcategories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\QuestionAns  $questionAns
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $articleCategories = ArticleCategory::all();
//        $articleSubcategories = ArticleSubCategory::all();
//        $community = Community::find($id);
//        return view('admin.question.edit',compact('community','articleCategories', 'articleSubcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\QuestionAns  $questionAns
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionAns $questionAns)
    {
        $community = Community::find($request->id);
        $attributes = $request->validate([
            'profile_id' => '',
            'question' => 'required',
            'description' => 'required',
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|',
            'is_approved' => '',
            'tag' => '',
        ]);

        $community->update($attributes);
        return redirect('/question')->with('message','Update Successfully');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\QuestionAns  $questionAns
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $community = Community::find($id);
        $community->delete();

        return redirect('/question')->with('message','Delete Successfully');
    }

    public function approval($id){
       $community =  Community::find($id);
       if ($community->is_approved == false){
           $community->is_approved = true;
           $community->save();
           return redirect()->back()->with('message', 'Question Successfully Approved');
       }
    }
}
