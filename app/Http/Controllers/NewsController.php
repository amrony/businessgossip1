<?php

namespace App\Http\Controllers;

use App\AdditionalNews;
use App\ArticleCategory;
use App\ArticleSubCategory;
use App\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();
        return view('admin.news.create', compact('articleCategories', 'articleSubCategories'));
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
        $this->validate($request, [
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|not_in:0',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'icon' => 'required',
            'title.*' => 'required',
            'body.*' => 'required',
        ]);
        //        get form image
        $image = $request->file('image');
        $icon = $request->file('icon');
        $slug = str_slug($request->title);
        if (isset($image))
        {
//          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('news'))
            {
                Storage::disk('public')->makeDirectory('news');
            }
//                resize image for category and upload
            $newsImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('news/'.$imageName,$newsImage);
        }else{
            $imageName = "default.png";
        }
        if (isset($icon))
        {
            //          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $iconName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$icon->getClientOriginalExtension();
            //                check category directory is exists
            if (!Storage::disk('public')->exists('icon'))
            {
                Storage::disk('public')->makeDirectory('icon');
            }
            //                resize image for category and upload
            $iconImage = Image::make($icon)->resize(1600,479)->stream();
            Storage::disk('public')->put('icon/'.$iconName,$iconImage);
        }else{
            $iconName = "default.png";
        }
        $news = new  News();
        $news->article_category_id = $request->article_category_id;
        $news->article_sub_category_id = $request->article_sub_category_id;
        $news->title = $request->title;
        $news->slug = Str::slug(trim($request->title));
        $news->body = $request->body;
        $news->image = $imageName;
        $news->icon = $iconName;
        $news->save();
//        dd($request->input('group-a'));
        foreach ($request->input('group-a') as $key => $v){
            $additional_news = new AdditionalNews();
            $additional_news->news_id = $news->id;
            $additional_news->title = $v['additional_title'];
            $additional_news->body = $v['additional_body'];;
            $additional_news->save();
        }
        return redirect('/news/create')->with('message', 'Insert Successfully');
    }



    /**
     * g
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();
        return view('admin.news.edit', compact('news', 'articleCategories', 'articleSubCategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'article_category_id' => 'required',
            'article_sub_category_id' => 'required',
            'title' => 'required',
            'body' => 'required',
            'image' => '',
            'icon' => '',
            'additional_title.*' => 'required',
            'additional_body.*' => 'required',
        ]);



        $news = News::find($request->id);

//        dd($request->all());

        //        get form image
         $image = $request->file('image');
        $icon = $request->file('icon');
        $slug = str_slug($request->title);
       if (isset($image))
        {
//          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$image->getClientOriginalExtension();

//                check category directory is exists
            if (!Storage::disk('public')->exists('news'))
            {
                Storage::disk('public')->makeDirectory('news');
            }

            // Delete Old News Image
            if (Storage::disk('public')->exists('news/'.$news->image))
            {
                Storage::disk('public')->delete('news/'.$news->image);
            }

//                resize image for category and upload

            $newsImage = Image::make($image)->resize(1600,479)->stream();
            Storage::disk('public')->put('news/'.$imageName,$newsImage);

        }else {
            $imageName = $news->image;
        }
        if (isset($icon))
        {
            //          make unique name for image
            $currentDate = Carbon::now()->toDateString();
            $iconName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$icon->getClientOriginalExtension();

            //                check category directory is exists
            if (!Storage::disk('public')->exists('icon'))
            {
                Storage::disk('public')->makeDirectory('icon');
            }

            // Delete Old News Image
            if (Storage::disk('public')->exists('icon/'.$news->icon))
            {
                Storage::disk('public')->delete('icon/'.$news->icon);
            }

            //                resize image for category and upload

            $iconImage = Image::make($icon)->resize(1600,479)->stream();
            Storage::disk('public')->put('icon/'.$iconName,$iconImage);
        }else {
            $iconName = $news->icon;
        }

        $news->article_category_id = $request->article_category_id;
        $news->article_sub_category_id = $request->article_sub_category_id;
        $news->title = $request->title;
        $news->slug = $slug;
        $news->body = $request->body;
        $news->image = $imageName;
        $news->icon = $iconName;



        $news->save();


//        dd($request->add_additional_title);
        foreach($request->additional_news_id as $key => $additional_news_id){
            $additional_news = AdditionalNews::find($additional_news_id);
			//dd($additional_news);
            $additional_news->title = $request->additional_title[$key];
            $additional_news->body = $request->additional_body[$key];
            $additional_news->save();
        }
        if($request->add_additional_title != null){
            foreach($request->add_additional_title as $key => $add_addition_title){
                $additional_news = new AdditionalNews;
                //dd($additional_news);
                $additional_news->news_id = $news->id;
                $additional_news->title = $add_addition_title;
                $additional_news->body = $request->add_additional_body[$key];
                $additional_news->save();

            }
        }

        return redirect('/news')->with('message', 'Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news, $id)
    {
        $news = News::find($id);

        if (Storage::disk('public')->exists('news/'.$news->image))
        {
            Storage::disk('public')->delete('news/'.$news->image);
        }

        if (Storage::disk('public')->exists('icon/'.$news->icon))
        {
            Storage::disk('public')->delete('icon/'.$news->icon);
        }

        $news->delete();

        return redirect('/news')->with('message', 'Delete Successfully');

    }
}
