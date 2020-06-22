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

Auth::routes();

Route::get('/', 'AppearanceController@index');
Route::get('/about', 'AppearanceController@about');
Route::get('/contact', 'AppearanceController@contact');
Route::post('/contact', 'AppearanceController@send_contact');
Route::get('/references', 'AppearanceController@references');
Route::get('/services', 'AppearanceController@services');
Route::get('/services/{service}', 'AppearanceController@individual_services');

Route::resource('admin/site', 'SiteController')->middleware('auth');
Route::resource('admin/services', 'ServiceController')->middleware('auth');
Route::resource('admin/references', 'ReferenceController')->middleware('auth');
Route::resource('admin/about', 'AboutController')->middleware('auth');
Route::resource('admin/contact', 'ContactController')->middleware('auth');
Route::resource('admin/help', 'HelpController')->middleware('auth');
Route::resource('admin/generations', 'GenerationController')->middleware('auth');
Route::resource('admin/team', 'TeamController')->middleware('auth');
Route::resource('admin/slides', 'SlideController')->middleware('auth');
