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

Route::get('/', 'AppearanceController@index');
Route::get('/about', 'AppearanceController@about');
Route::get('/contact', 'AppearanceController@contact');
Route::get('/individual-services', 'AppearanceController@individual_services');
Route::get('/references', 'AppearanceController@references');
Route::get('/services', 'AppearanceController@services');


Route::resource('admin/site', 'SiteController');
Route::resource('admin/services', 'ServiceController');
Route::resource('admin/references', 'ReferenceController');
Route::resource('admin/about', 'AboutController');
Route::resource('admin/contact', 'ContactController');
Route::resource('admin/help', 'HelpController');
Route::resource('admin/generations', 'GenerationController');
Route::resource('admin/team', 'TeamController');
Route::resource('admin/slides', 'SlideController');
