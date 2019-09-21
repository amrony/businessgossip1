<?php

namespace App\Http\Controllers;

use App\AdditionalBuyingAdvice;
use App\ArticleCategory;
use App\ArticleSubCategory;
use App\BusinessProfileArticle;
use App\BuyingAdvice;
use App\BuyingAdviceBusinessProfileArticle;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BuyingAdviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyingAdvices = BuyingAdvice::all();
//        dd($buyingAdvice);
        return view('admin.buying-advice.index',compact('buyingAdvices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $businessProfileArticles = BusinessProfileArticle::all();
//        dd($businessProfileArticle);
        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();
        return view('admin.buying-advice.create',
            compact('articleCategories','articleSubCategories','businessProfileArticles'));
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
//        $attributes = $request->validate([
//            'article_category_id' => 'required|not_in:0',
//            'article_sub_category_id' => 'required|not_in:0',
//            'business_profile_article_id' => 'required|not_in:0',
//            'title' => 'required',
//            'body' => 'required',
//            'additional_title.*' => '',
//            'additional_body.*>' => ''
//        ]);
        $this->validate($request, [
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|not_in:0',
            'business_profile_article_id' => 'required|not_in:0',
            'title' => 'required',
            'body' => 'required',
            'image' => 'required',
            'additional_title.*' => '',
            'additional_body.*>' => ''
        ]);


        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'buying_advice-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('buying_advice'))
            {
                Storage::disk('public')->makeDirectory('buying_advice');
            }

//                resize image for category and upload
            $buyingImage = Image::make($image)->resize(600,600)->stream();
            Storage::disk('public')->put('buying_advice/'.$imageName,$buyingImage);
        }else{
            $imageName = "default.png";
        }

//        $attributes['image']  = $imageName;

        $buyingAdvice = new BuyingAdvice();
        $buyingAdvice->article_category_id = $request->article_category_id;
        $buyingAdvice->article_sub_category_id = $request->article_sub_category_id;
        $buyingAdvice->business_profile_article_id = $request->article_sub_category_id;
        $buyingAdvice->title = $request->title;
        $buyingAdvice->body = $request->body;
        $buyingAdvice->image = $imageName;
        $buyingAdvice->business_profile_article_id = 1;
        $buyingAdvice->save();
//        dd($request->business_profile_article_id);
        $buyingAdvice->buying_advice_business_profiles()->attach($request->business_profile_article_id);
//        foreach ($request->business_profile_article_id as $key => $value){
//            $businessProfile = new BuyingAdviceBusinessProfileArticle;
//            $businessProfile->buying_advice_id = $buyingAdvice->id;
//            $businessProfile->business_profile_article_id = $value;
//            $businessProfile->save();
//         }
//        dd($request->input('group-a'));




        foreach ($request->input('group-a') as $key => $v ){
            $additionalBuyingAdvice = new AdditionalBuyingAdvice();
            $additionalBuyingAdvice->buying_advice_id = $buyingAdvice->id;
            $additionalBuyingAdvice->additional_title = $v['additional_title'];
            $additionalBuyingAdvice->additional_body = $v['additional_body'];
            $additionalBuyingAdvice->save();
        }
        return redirect('/buying-advice/create')->with('message','Insert Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function show(BuyingAdvice $buyingAdvice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $businessProfileArticles = BusinessProfileArticle::all();
        $buyingAdvice = BuyingAdvice::find($id);
        $articleCategories = ArticleCategory::all();
        $articleSubCategories = ArticleSubCategory::all();

        $titles = $buyingAdvice->buying_advice_business_profiles;

        return view('admin.buying-advice.edit', compact
        (
            'buyingAdvice',
            'articleCategories',
            'articleSubCategories',
            'businessProfileArticles'

        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyingAdvice $buyingAdvice)
    {

        $attributes = $request->validate([
            'article_category_id' => 'required|not_in:0',
            'article_sub_category_id' => 'required|not_in:0',
            'business_profile_article_id' => 'required|not_in:0',
            'title' => 'required',
            'body' => 'required',
            'image' => '',
            'additional_title' => '',
            'additional_body' => ''
        ]);


        $buyingAdvice = BuyingAdvice::find($request->id);

        $image = $request->file('image');
        if (isset($image))
        {
//          make unique name for image
//            $currentDate = Carbon::now()->toDateString();
            $imageName = 'buying_advice-'.uniqid().'.'.$image->getClientOriginalExtension();
//                check category directory is exists
            if (!Storage::disk('public')->exists('buying_advice'))
            {
                Storage::disk('public')->makeDirectory('buying_advice');
            }
            // Delete Old News Image
            if (Storage::disk('public')->exists('buying_advice/'.$buyingAdvice->image))
            {
                Storage::disk('public')->delete('buying_advice/'.$buyingAdvice->image);
            }
//                resize image for category and upload
            $buyingImage = Image::make($image)->resize(600,600)->stream();
            Storage::disk('public')->put('buying_advice/'.$imageName,$buyingImage);
        }else{
            $imageName = $buyingAdvice->image;
        }
//        $buyingAdvice = new BuyingAdvice();
        $buyingAdvice->article_category_id = $request->article_category_id;
        $buyingAdvice->article_sub_category_id = $request->article_sub_category_id;
        $buyingAdvice->title = $request->title;
        $buyingAdvice->body = $request->body;
        $buyingAdvice->image = $imageName;
        $buyingAdvice->business_profile_article_id = 1;
        $buyingAdvice->save();


        $buyingAdvice->buying_advice_business_profiles()->sync($request->business_profile_article_id);

//        dd($request->business_profile_article_id);
//        foreach ($request->business_profile_article_id as $key => $value){
//            $businessProfile = new BuyingAdviceBusinessProfileArticle;
//            $businessProfile->buying_advice_id = $buyingAdvice->id;
//            $businessProfile->business_profile_article_id = $value;
//            $businessProfile->save();
//        }


        foreach ($request->add_buyingAdvice_id as $key => $add_buyingAdvice_id){
            $additionalBuyingAdvice = AdditionalBuyingAdvice::find($add_buyingAdvice_id);
            $additionalBuyingAdvice->additional_title = $request->additional_title[$key];
            $additionalBuyingAdvice->additional_body = $request->additional_body[$key];
            $additionalBuyingAdvice->save();
//            dd($additionalBuyingAdvice);
        }
        if ($request->add_additional_title != null){
//            dd($request->all());
            foreach ($request->add_additional_title as $key => $add_additional_title){
//                dd($add_additional_title);
                $additionalBuyingAdvice = new AdditionalBuyingAdvice();
//                dd($additionalBuyingAdvice);
                $additionalBuyingAdvice->buying_advice_id = $buyingAdvice->id;
                $additionalBuyingAdvice->additional_title = $add_additional_title;
                $additionalBuyingAdvice->additional_body = $request->additional_body[$key];
                $additionalBuyingAdvice->save();
//                dd($additionalBuyingAdvice);

            }
        }
        return redirect('/buying-advice')->with('message','Update Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuyingAdvice  $buyingAdvice
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $buyingAdvice = BuyingAdvice::find($id);
        $buyingAdvice->delete();
        return redirect('/buying-advice')->with('message','Delete Successfully');
    }
}
