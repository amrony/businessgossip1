<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Artisan;

Route::resource('/about_us','AboutUsController');
Route::get('/about_us/delete/{id}','AboutUsController@destroy')->name('about_us.delete');

Route::resource('/features','OurFeaturesController');
Route::get('/features/delete/{id}','OurFeaturesController@destroy')->name('delete-feature');

Route::resource('/testimonial','TestimonialController');
Route::get('testimonial/delete/{id}','TestimonialController@destroy')->name('testimonial-delete');

Route::resource('company','CompanyController');
Route::get('/company/delete/{id}', 'CompanyController@destroy')->name('delete-company');

Route::resource('community','CommunityController');
Route::get('question/add','CommunityController@questionAdd')->name('question_add');

Route::resource('answers','AnswersController');


Route::resource('question','QuestionAnsController');
Route::get('question/delete/{id}','QuestionAnsController@destroy')->name('question-delete');

Route::put('/question/{id}/approve','QuestionAnsController@approval')->name('question-approve');


Route::get('settings','SettingController@create')->name('settings.create');
Route::put('password/update','SettingController@updatePassword')->name('password_update');

//Route::get('copyright','SettingController@')->name('copyright');

Route::resource('copyright','CopyRightController');
Route::get('copyright/destroy/{id}','CopyRightController@destroy')->name('delete-copyright');


Route::get('/user/index', 'UserController@index')->name('new-user');
Route::post('/user/store', 'UserController@store')->name('add-user');
Route::get('/user/show', 'UserController@show')->name('view-user');



Route::resource('page','PageController');
//Route::get('/page/index', 'PageController@index')->name('new-page');
//Route::get('/page/show', 'PageController@show')->name('view-page');
//Route::post('/page/store', 'PageController@store')->name('add-page');
//Route::get('/page/edit/{id}', 'PageController@edit')->name('edit-page');
//Route::post('/page/update', 'PageController@update')->name('update-page');
Route::get('/page/destroy/{id}', 'PageController@destroy')->name('delete-page');


Route::get('/article/category/index', 'ArticleCategoryController@index')->name('article-category');
Route::get('/article/category/show', 'ArticleCategoryController@show')->name('view-article-category');
Route::post('/article/category/store', 'ArticleCategoryController@store')->name('add-article-category');
Route::get('/article/category/edit/{id}', 'ArticleCategoryController@edit')->name('edit-article-category');
Route::post('/article/category/update', 'ArticleCategoryController@update')->name('update-article-category');
Route::get('/article/category/delete/{id}', 'ArticleCategoryController@destroy')->name('delete-article-category');

Route::get('/article/sub/category/index', 'ArticleSubCategoryController@index')->name('article-sub-category');
Route::post('/article/sub/category/store', 'ArticleSubCategoryController@store')->name('add-article-sub-category');
Route::get('/article/sub/category/show', 'ArticleSubCategoryController@show')->name('view-article-sub-category');
Route::get('/article/sub/category/edit{id}', 'ArticleSubCategoryController@edit')->name('edit-article-sub-category');
Route::post('/article/sub/category/update', 'ArticleSubCategoryController@update')->name('update-article-sub-category');
Route::get('/article/sub/category/delete/{id}', 'ArticleSubCategoryController@destroy')->name('delete-article-sub-category');


Route::get('/news/body', 'ArticleSubCategoryController@news_body')->name('news-body');

Route::resource('article-category', 'ArticleCategoryNewsController');
Route::get('/article/news/category/delete/{id}', 'ArticleCategoryNewsController@destroy')->name('article-category-delete');

Route::resource('news','NewsController');
Route::get('news/delete/{id}', 'NewsController@destroy')->name('news-delete');

Route::resource('business-profile','BusinessProfileController');
Route::get('business-profile/destroy/{id}','BusinessProfileController@destroy')->name('business-profile.delete');

Route::resource('profile-article','BusinessProfileArticleController');
Route::get('profile-article/destroy/{id}','BusinessProfileArticleController@destroy')->name('profile-article.delete');

Route::resource('buying-advice','BuyingAdviceController');
Route::get('buying-advice.delete/{id}','BuyingAdviceController@destroy')->name('buying-advice.delete');


Route::resource('/','BusinessController');
Route::get('/article/news','BusinessController@viewArticleNews')->name('article-news');
Route::get('/buying-guides','BusinessController@viewBuyingGuides')->name('article.buying-guides');
Route::get('/expert-advice','BusinessController@expertAdvice')->name('article.expert-advice');


Route::get('profile/login','BusinessController@profileLogin')->name('profile');
Route::get('profile/signup','BusinessController@profileSignup')->name('profile-signup');
Route::get('/profile','BusinessController@viewProfile');
Route::get('/buying/{id}/guides/','BusinessController@viewBuying')->name('buying-guides');
Route::get('/buying/{id}/news/','BusinessController@firstBuying')->name('first-buying');
Route::get('/view/{id}/news/','BusinessController@viewNews')->name('view-news');
//Route::get('/news/{id}/view/','BusinessController@firstNews')->name('first-news');

//Route::get('/latest/{id}/news/','BusinessController@latestNews')->name('latest-news');
//edit
Route::get('/latest/news', 'BusinessController@article_news')->name('news-articles');



Route::get('/profile/Dashboard','ProfileController@myProfile')->name('profile-dashboard');
Route::get('/profile/edit','ProfileController@edit')->name('profile-edit');

Route::post('/profile/update','ProfileController@update')->name('profile.update');


Route::post('/profile/login', 'Auth\LoginController@profileLogin');
Route::post('profile/signup', 'Auth\RegisterController@createProfile');

//Route::get('test', function (){
//    $exitCode = Artisan::call('storage:link', [] );
//    dd($exitCode);
//});


Route::view('/home', 'home')->middleware('auth');



Route::get('registration', function (){
    return view('auth.login');
});



Route::get('sadmin', function (){
    return view('auth.profile');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
