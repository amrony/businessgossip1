<?php

namespace App\Http\Controllers;

use App\ArticleCategoryNews;
use Illuminate\Http\Request;

class ArticleCategoryNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articleCategories = ArticleCategoryNews::all();
        return view('admin.article-category-news.view-news', compact('articleCategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article-category-news.add-news');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title.*' => 'required',
            'sub_title.*' => 'required',
            'body.*' => 'required',
        ]);
//        dd($request->input('group-a'));

//        $a = $request->title;
        foreach ($request->input('group-a') as $key => $v){
//dd($v['title']);

            $articleCategories = new ArticleCategoryNews();
            $articleCategories->title = $v['title'];
            $articleCategories->sub_title = $v['sub_title'];
            $articleCategories->body = $v['body'];

            $articleCategories->save();
        }


        return redirect('/article-category')->with('message', 'Insert Successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleCategoryNews $articleCategoryNews)
    {
//        return view('admin.article-category-news.view-news');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $articleCategoryNews = ArticleCategoryNews::find($id);
        return view('admin.article-category-news.edit-news', compact('articleCategoryNews'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $articleCategory =  ArticleCategoryNews::find($id);

        $articleCategory->title = $request->title;
        $articleCategory->sub_title = $request->sub_title;
        $articleCategory->body = $request->body;
        $articleCategory->save();

        return redirect('/article-category')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ArticleCategoryNews  $articleCategoryNews
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $articleCategory = ArticleCategoryNews::find($id);
        $articleCategory->delete();

        return redirect('/article-category')->with('message', 'Delete Successfully');
    }
}
