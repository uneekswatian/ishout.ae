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
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');
// Route::get('/login', 'HomeController@platformLogin');
Route::get('/about-us', 'HomeController@aboutUs');
Route::get('/influencers-marketing', 'HomeController@influencersMarketing');
Route::get('/social-media-management', 'HomeController@socialMediaManagement');
Route::get('/content-production', 'HomeController@contentProduction');
Route::get('/influencers-marketing-case-studies', 'HomeController@influencersMarketingCaseStudies');
Route::get('/social-media-management-case-studies', 'HomeController@socialMediaManagementCaseStudies');
Route::get('/content-production-case-studies', 'HomeController@contentProductionCaseStudies');
Route::get('/contact-us', 'HomeController@contactUs');
Route::post('/send-mail', 'HomeController@sendEmail');
Route::post('/contact-us', 'HomeController@sendEmail');