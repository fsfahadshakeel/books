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

//******************* Frontend *******************/
Route::get('/', 'Home@index')->name('home');
Route::get('/home', 'Home@index')->name('home');
Route::get('/for-him', 'Home@for_him')->name('for-him');
Route::get('/about-us', 'Home@about_us')->name('about-us');
Route::get('/contact-us', 'Home@contact_us')->name('contact-us');


//******************* Backend *******************/
Route::get('/backend', 'Backend@index')->name('login');
Route::post('/authorization', 'Backend@authorization')->name('authorization');
Route::get('/authorization', 'Backend@authorization')->name('authorization');
Route::group(['middleware' => 'backendAuth'], function() {
});
Route::get('/logout', 'Backend@logout')->name('logout');