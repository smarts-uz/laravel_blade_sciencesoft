<?php

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

// Route::get('/', function () {
//     return view('front.pages.index');
// });
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');


Route::get('/contact-us','App\Http\Controllers\Front\softController@contact')->name('contact');

Route::get('/services/software-development','App\Http\Controllers\Front\softController@softwaredevelopment')->name('softwaredevelopment');

// about-company pages start
Route::get('/about/about-company', 'App\Http\Controllers\Front\softController@aboutCompany')->name('aboutCompany');
Route::get('/management-Team', 'App\Http\Controllers\Front\softController@managementTeam')->name('managementTeam');
Route::get('/about/careers', 'App\Http\Controllers\Front\softController@careers')->name('careers');
Route::get('/partnerships', 'App\Http\Controllers\Front\softController@partnerships')->name('partnerships');
Route::get('/Sciencesoft-Referral-Program', 'App\Http\Controllers\Front\softController@ScienceSoftReferralProgram')->name('ScienceSoftReferralProgram');
Route::get('/our-locations', 'App\Http\Controllers\Front\softController@ourLocations')->name('ourLocations');
// about-company pages end




// services-technologies pages start
Route::get('/services/java', 'App\Http\Controllers\Front\softController@java')->name('java');
Route::get('/services/NET', 'App\Http\Controllers\Front\softController@NET')->name('NET');
Route::get('/services/PHP', 'App\Http\Controllers\Front\softController@PHP')->name('PHP');
Route::get('/services/python', 'App\Http\Controllers\Front\softController@python')->name('python');
Route::get('/services/golang', 'App\Http\Controllers\Front\softController@golang')->name('golang');
Route::get('/services/c++', 'App\Http\Controllers\Front\softController@cPlus')->name('cPlus');
Route::get('/services/configureYourTeam', 'App\Http\Controllers\Front\softController@configureYourTeam')->name('configureYourTeam');
// services-technologies pages end

// Industries pages start
Route::get('/industries/healthcare', 'App\Http\Controllers\Front\softController@healthcare')->name('healthcare');
Route::get('/industries/banking_financial_services', 'App\Http\Controllers\Front\softController@banking_financial_services')->name('banking_financial_services');
Route::get('/industries/retail', 'App\Http\Controllers\Front\softController@retail')->name('retail');
Route::get('/industries/ecommerce', 'App\Http\Controllers\Front\softController@ecommerce')->name('ecommerce');
Route::get('/industries/manufacturing', 'App\Http\Controllers\Front\softController@manufacturing')->name('manufacturing');
Route::get('/industries/market-Advertising', 'App\Http\Controllers\Front\softController@marketAdvertising')->name('marketAdvertising');
Route::get('/industries/telecommunications', 'App\Http\Controllers\Front\softController@telecommunications')->name('telecommunications');
Route::get('/industries/elearning', 'App\Http\Controllers\Front\softController@elearning')->name('elearning');
Route::get('/industries/transportation-Logistics', 'App\Http\Controllers\Front\softController@transportationLogistics')->name('transportationLogistics');
Route::get('/industries/oil-Gas', 'App\Http\Controllers\Front\softController@oilGas')->name('oilGas');
Route::get('/industries/professional-Services', 'App\Http\Controllers\Front\softController@professionalServices')->name('professionalServices');
Route::get('/industries/insurance', 'App\Http\Controllers\Front\softController@insurance')->name('insurance');
// industry pages end

Route::get('getPage/{page}', 'App\Http\Controllers\HomePageController@getPage')->name('getPage');
Route::get('getBlade/{page}', 'App\Http\Controllers\HomePageController@getBlade')->name('getBlade');
Route::get('/', 'App\Http\Controllers\HomePageController@index')->name('index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Auth::routes();
// Admin CRUD
Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('blogs', App\Http\Controllers\BlogController::class);
Route::post('ckeditor/upload', 'App\Http\Controllers\CKEditorController@upload')->name('upload');
Route::resource('consultations', App\Http\Controllers\ConsultationController::class);
Route::resource('cardLists', App\Http\Controllers\CardListsController::class);
Route::resource('companyTeams', App\Http\Controllers\CompanyTeamController::class);


Route::resource('products', App\Http\Controllers\ProductController::class);