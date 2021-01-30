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
Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');

// about-company pages start
Route::get('/about/about-company', 'App\Http\Controllers\Front\softController@aboutCompany')->name('aboutCompany');
Route::get('/management-Team', 'App\Http\Controllers\Front\softController@managementTeam')->name('managementTeam');
Route::get('/careers', 'App\Http\Controllers\Front\softController@careers')->name('careers');
Route::get('/partnerships', 'App\Http\Controllers\Front\softController@partnerships')->name('partnerships');
Route::get('/Sciencesoft-Referral-Program', 'App\Http\Controllers\Front\softController@ScienceSoftReferralProgram')->name('ScienceSoftReferralProgram');
Route::get('/our-locations', 'App\Http\Controllers\Front\softController@ourLocations')->name('ourLocations');
// about-company pages end

// // about-approach pages start
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// // about-approach pages end

// // about-recognition pages start
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// Route::get('/', 'App\Http\Controllers\Front\softController@index')->name('index');
// about-recognition pages end



// services-technologies pages start
Route::get('/services/technologies/java', 'App\Http\Controllers\Front\softController@java')->name('java');
Route::get('/services/technologies/NET', 'App\Http\Controllers\Front\softController@net')->name('net');
Route::get('/industries/PHP', 'App\Http\Controllers\Front\softController@PHP')->name('PHP');
Route::get('/industries/python', 'App\Http\Controllers\Front\softController@python')->name('python');
Route::get('/industries/golang', 'App\Http\Controllers\Front\softController@golang')->name('golang');
Route::get('/industries/c++', 'App\Http\Controllers\Front\softController@cPlus')->name('cPlus');
Route::get('/industries/configureYourTeam', 'App\Http\Controllers\Front\softController@configureYourTeam')->name('configureYourTeam');
// services-technologies pages end

// Industries pages start
Route::get('/industries/healthcare', 'App\Http\Controllers\Front\softController@healthcare')->name('healthcare');
Route::get('/industries/banking-Financial-Services', 'App\Http\Controllers\Front\softController@bankingFinancialServices')->name('bankingFinancialServices');
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
