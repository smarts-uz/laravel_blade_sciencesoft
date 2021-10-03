<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
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
Route::get('/getCategoryByName', 'App\Http\Controllers\HomePageController@getCategoryByName')->name('getCategoryByName');
Route::get('/getCategoryById', 'App\Http\Controllers\HomePageController@getCategoryById')->name('getCategoryById');
Route::get('/getBlogByTag', 'App\Http\Controllers\HomePageController@getBlogByTag')->name('getBlogByTag');
Route::get('/getPortfolioByTechnology', 'App\Http\Controllers\HomePageController@getPortfolioByTechnology')->name('getPortfolioByTechnology');
Route::get('getTeamByJob', 'App\Http\Controllers\HomePageController@getTeamByJob')->name('getTeamByJob');
Route::get('/SingleBlog/{id}', 'App\Http\Controllers\HomePageController@SingleBlog')->name('SingleBlog');
Route::get('/SingleProduct/{id}', 'App\Http\Controllers\HomePageController@SingleProduct')->name('SingleProduct');

Route::get('getPage/{page}', 'App\Http\Controllers\HomePageController@getPage')->name('getPage');
Route::get('getBlade/{page}', 'App\Http\Controllers\HomePageController@getBlade')->name('getBlade');
Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('index');
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');


Auth::routes();
// Admin CRUD
Route::group(['middleware'=>'auth'], function() {
    Route::resource('categories', 'App\Http\Controllers\CategoryController');
    Route::resource('blogs', 'App\Http\Controllers\BlogController');
    Route::post('ckeditor/upload', 'App\Http\Controllers\CKEditorController@upload')->name('upload');
    Route::resource('consultations', 'App\Http\Controllers\ConsultationController');
    Route::resource('cardLists', 'App\Http\Controllers\CardListsController');
    Route::resource('companyTeams', 'App\Http\Controllers\CompanyTeamController');
    Route::resource('portfolios', 'App\Http\Controllers\PortfolioController');
    Route::resource('products', 'App\Http\Controllers\ProductController');
    Route::resource('news', 'App\Http\Controllers\NewsController');
});


Route::post('/languages/update_rtl_status', 'App\Http\Controllers\LanguageController@update_rtl_status')->name('languages.update_rtl_status');
Route::post('/languages/key_value_store', 'App\Http\Controllers\LanguageController@key_value_store')->name('languages.key_value_store');
// Route::post('/env_key_update', 'BusinessSettingsController@env_key_update')->name('env_key_update.update');
// lang
Route::post('/consultation', 'App\Http\Controllers\HomePageController@postConsultation')->name('consultation');
Route::post('', 'App\Http\Controllers\HomePageController@postFile')->name('postFile');
Route::get('lang/{locale}', function ($locale){
    Illuminate\Support\Facades\App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
Route::get('language', 'App\Http\Controllers\LanguageController@changeLanguage')->name('language.change');
Route::get('/languages', 'App\Http\Controllers\LanguageController@index')->name('languages.index');
Route::get('/languages/create', 'App\Http\Controllers\LanguageController@create')->name('languages.create');
Route::post('/languages/store', 'App\Http\Controllers\LanguageController@store')->name('languages.store');
Route::get('/languages/show/{id}', 'App\Http\Controllers\LanguageController@show')->name('languages.show');
Route::get('/languages/edit/{id}', 'App\Http\Controllers\LanguageController@edit')->name('languages.edit');
Route::put('/languages/update', 'App\Http\Controllers\LanguageController@update')->name('languages.update');
Route::get('/languages/destroy/{id}', 'App\Http\Controllers\LanguageController@destroy')->name('languages.destroy');
