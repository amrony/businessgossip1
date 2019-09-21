<?php

namespace App\Providers;

use App\ArticleCategory;
use App\Company;
use App\CopyRight;
use App\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('*',function ($view){
            $articleCategories = ArticleCategory::get();
            $view->with('articleCategories', $articleCategories);

            $company = Company::orderBy('id','desc')->first();
            $view->with('company',$company);

            $copyRight = CopyRight::orderBy('id','desc')->first();
            $view->with('copyRight', $copyRight);
        });
    }

}
