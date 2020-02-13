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


//admin portal rotes
Route::get('/admin','mainController@admin');
Route::post('/checklogin','mainController@checklogin');
Route::get('/home','mainController@home');
Route::get('/logout','mainController@logout');
Route::get('/password_settings','mainController@password_settings');
Route::post('/change_password','mainController@change_password');

Route::get('/add_photos','mainController@add_photos');
Route::get('/view_photos','mainController@view_photos');
Route::post('/addphotos','mainController@addphotos');
Route::get('/delete_gallery/{id}','mainController@delete_gallery');
Route::get('/update_gallery/{id}','mainController@update_gallery');
Route::post('/up_photos','mainController@up_photos');

Route::get('/news_events','mainController@news_events');
Route::post('/add_news_events','mainController@add_news_events');
Route::get('/view_news_events','mainController@view_news_events');
Route::get('/delete_news/{id}','mainController@delete_news');
Route::get('/update_news/{id}','mainController@update_news');
Route::post('/up_news_events','mainController@up_news_events');

//homepages routes
Route::get('/','bestowalController@home');
Route::get('/aboutus','bestowalController@aboutus');
Route::get('/courses','bestowalController@courses');
Route::get('/Career','bestowalController@Career');
Route::get('/policy','bestowalController@policy');
Route::get('/contactus','bestowalController@contactus');

Route::get('/corporate','bestowalController@corporate');
Route::get('/ieeeacademic','bestowalController@ieeeacademic');

Route::get('/digital_marketing','bestowalController@digital_marketing');
Route::get('/virtual_reality','bestowalController@virtual_reality');
Route::get('/cloud_computing','bestowalController@cloud');
Route::get('/embedded_systems','bestowalController@embedded');
Route::get('/python','bestowalController@python');
Route::get('/iot','bestowalController@iot');
Route::get('/artificalintelligence','bestowalController@artificalintelligence');
Route::get('/machinelearning','bestowalController@machinelearning');
Route::get('/mobileapp','bestowalController@mobileapp');
Route::get('/ethical','bestowalController@ethical');
Route::get('/java','bestowalController@java');
Route::get('/php','bestowalController@php');
Route::get('/dotnet','bestowalController@dotnet');
Route::get('/webdesign','bestowalController@webdesign');
Route::get('/softwareTesting','bestowalController@softwareTesting');