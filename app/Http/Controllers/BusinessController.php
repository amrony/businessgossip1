<?php

namespace App\Http\Controllers;

use App\AboutUs;
use App\AdditionalBuyingAdvice;
use App\AdditionalNews;
use App\ArticleCategory;
use App\ArticleSubCategory;
use App\BuyingAdvice;
use App\BuyingAdviceBusinessProfileArticle;
use App\Community;
use App\Company;
use App\News;
use App\OurFeatures;
use App\Testimonial;
use Illuminate\Http\Request;
use App\Page;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $latestNews = News::orderBy('id','desc')->latest()->take(3)->get();
//        dd($latestNews);
        $aboutUs = AboutUs::orderBy('id','desc')->first();
        $features = OurFeatures::orderBy('id','desc')->first();
        $testimonial = Testimonial::orderBy('id','desc')->first();
//        dd($aboutUs);
        return view('front-end.home.home', compact(
            'aboutUs',
            'features',
            'testimonial',
            'latestNews'
        ));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function profileLogin(){
        return view('front-end.profile.login');
    }
    public function profileSignup(){
        return view('front-end.profile.signup');
    }
    public function viewProfile(){
        return view('profile.home.profile');
    }

    public function article_news(Request $request){
//        $articleCategories = ArticleCategory::get();
        if($request->has('cat_id')){
//            $news = News::where('article_category_id', $request->cat_id)
//                ->latest()
//                ->take(20)
//                ->skip(1)
//                ->get();
//            $firstNews = News::first();
            $latestNews = News::where('article_category_id', $request->cat_id)
                ->latest()
                ->take(20)
                ->skip(1)
                ->get();
            $firstLatestNews = News::latest()->first();
        }
        else if($request->has('id') && $request->has('sub_cat_id')){
//            $news = News::where('article_category_id', $request->id)
//                ->where('article_sub_category_id', $request->sub_cat_id)
//                ->take(25)
//                ->skip(1)
//                ->get();

            $latestNews = News::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->latest()
                ->skip(1)
                ->take(20)
                ->get();
//            $firstNews = News::first();
            $firstLatestNews = News::latest()->first();
        }else{
            $firstLatestNews = News::latest()->first();
            $latestNews = News::latest()->skip(1)->take(25)->get();
//            $firstNews = News::first();
//            $news = News::take(25)->skip(1)->get();
        }

//        if ($request->has('id'))

//        if($request->has('cat_id')){
//            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->cat_id)
//                ->get();
//            $firstBuyingAdvice = BuyingAdvice::first();
//        }
//
//        else if($request->has('id') && $request->has('sub_cat_id')){
//            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->id)
//                ->where('article_sub_category_id', $request->sub_cat_id)
//                ->take(25)
//                ->skip(1)
//                ->get();
//            $firstBuyingAdvice = BuyingAdvice::first();
//        }else{
//            $firstBuyingAdvice = BuyingAdvice::first();
//            $buyingAdvices = BuyingAdvice::take(25)->skip(1)->get();
////            $latestNews = News::latest()->take(25)->get();
//        }

//        Community::where(['cat_id' => $req->catid, 'is_approoved' => 1])->get();
        if($request->has('cat_id')){
            $communities = Community::where(['article_category_id'=> $request->cat_id , 'is_approved'=> 1])->get();
        }

        else if($request->has('id') && $request->has('sub_cat_id')){
            $communities = Community::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->where('is_approved', 1)
                ->get();
//                dd($communities);
        }else{
            $communities = Community::where('is_approved', 1)->get();
//            dd($communities);
        }


        return view('front-end.menubar.articles.index', compact(
//            'news',
            'latestNews',
//            'firstBuyingAdvice',
//            'buyingAdvices',
            'firstLatestNews',
//            'firstNews',
            'communities'
        ));
    }

    public function expertAdvice(Request $request){
        if($request->has('cat_id')){
            $communities = Community::where(['article_category_id'=> $request->cat_id , 'is_approved'=> 1])->get();
        }

        else if($request->has('id') && $request->has('sub_cat_id')){
            $communities = Community::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->where('is_approved', 1)
                ->get();
//                dd($communities);
        }else{
            $communities = Community::where('is_approved', 1)->get();
//            dd($communities);
        }
        return view('front-end.article.expert-advice', compact('communities'));
    }


    public function viewArticleNews(Request $request){
        if($request->has('cat_id')) {
            $news = News::where('article_category_id', $request->cat_id)
                ->latest()
                ->take(20)
                ->skip(1)
                ->get();
            $firstNews = News::first();
        }  else if($request->has('id') && $request->has('sub_cat_id')) {
            $news = News::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->take(25)
                ->skip(1)
                ->get();

            $firstNews = News::first();
        }else{
            $firstNews = News::first();
            $news = News::take(25)->skip(1)->get();
        }

        if($request->has('cat_id')){
            $communities = Community::where(['article_category_id'=> $request->cat_id , 'is_approved'=> 1])->get();
        } else if($request->has('id') && $request->has('sub_cat_id')){
            $communities = Community::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->where('is_approved', 1)
                ->get();
//                dd($communities);
        }else{
            $communities = Community::where('is_approved', 1)->get();
//            dd($communities);
        }

        return view('front-end.article.news',compact('news','firstNews', 'communities'));
    }


    public function viewBuyingGuides(Request $request){
        if($request->has('cat_id')){
            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->cat_id)
                ->get();
            $firstBuyingAdvice = BuyingAdvice::first();
        }

        else if($request->has('id') && $request->has('sub_cat_id')){
            $buyingAdvices = BuyingAdvice::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->take(25)
                ->skip(1)
                ->get();
            $firstBuyingAdvice = BuyingAdvice::first();
        }else{
            $firstBuyingAdvice = BuyingAdvice::first();
            $buyingAdvices = BuyingAdvice::take(25)->skip(1)->get();
//            $latestNews = News::latest()->take(25)->get();
        }

        if($request->has('cat_id')){
            $communities = Community::where(['article_category_id'=> $request->cat_id , 'is_approved'=> 1])->get();
        } else if($request->has('id') && $request->has('sub_cat_id')){
            $communities = Community::where('article_category_id', $request->id)
                ->where('article_sub_category_id', $request->sub_cat_id)
                ->where('is_approved', 1)
                ->get();
//                dd($communities);
        }else{
            $communities = Community::where('is_approved', 1)->get();
//            dd($communities);
        }

        return view('front-end.article.buying-guides',compact('buyingAdvices','firstBuyingAdvice','communities'));
    }










    public function viewBuying($id){
        $buyingAdvice = BuyingAdvice::find($id);
//        dd($buyingAdvice);
        $profileArticles = BuyingAdviceBusinessProfileArticle::where('buying_advice_id', $id)->get();
//        dd($profileArticles);
        $addBuyingAdvices = AdditionalBuyingAdvice::all();
//        dd($addBuyingAdvices);
        return view('front-end.menubar.buying-guides.index',
            compact(
                'buyingAdvice',
                'profileArticles',
                'addBuyingAdvices'
            ));
    }

    public function viewNews($id){
        $news = News::find($id);
        $newes = AdditionalNews::all();
//           dd($news);
        return view('front-end.menubar.news.index',compact(
            'news',
            'newes'
        ));
    }



    public function firstBuying($id){
        $buyingAdvice = BuyingAdvice::find($id);
//        dd($buyingAdvice);
        $profileArticles = BuyingAdviceBusinessProfileArticle::where('buying_advice_id', $id)->get();
//        dd($profileArticles);
        $addBuyingAdvices = AdditionalBuyingAdvice::all();
//        dd($addBuyingAdvices);
        return view('front-end.menubar.buying-guides.index',
            compact(
                'buyingAdvice',
                'profileArticles',
                'addBuyingAdvices'
            ));
    }




}

