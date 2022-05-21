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

Route::get('/', 'Site\HomeController@index')->name('/');
Route::get('privacy', 'Site\HomeController@privacy')->name('privacy');
Route::get('services', 'Site\HomeController@services')->name('services');
Route::get('service/{id}', 'Site\HomeController@service')->name('service');
Route::get('terms', 'Site\HomeController@terms')->name('terms');
Route::get('contact-us', 'Site\HomeController@contact')->name('contact');
Route::post('postContact', 'Site\HomeController@postContact')->name('postContact');

