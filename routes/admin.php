<?php

use Illuminate\Support\Facades\Route;



Route::group(['prefix'=>'admin'],function (){
    Route::get('login', 'AuthController@index')->name('admin.login');
    Route::POST('login', 'AuthController@login')->name('admin.login');
});

Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function (){
    Route::get('/', function () {
        return view('Admin/index');
    })->name('adminHome');


    #### Admins ####
    Route::resource('admins','AdminController');
    Route::POST('delete_admin','AdminController@delete')->name('delete_admin');
    Route::get('my_profile','AdminController@myProfile')->name('myProfile');

    #### Contact ###
    Route::group(['prefix' => 'contacts'], function () {
        Route::get('/', 'ContactUsController@index')->name('contact.index');
        Route::post('delete', 'ContactUsController@delete')->name('delete_contact');
        Route::get('changeStatus/{id}', 'ContactUsController@changeStatus')->name('changeStatus');
        Route::put('contact/update/{id}', 'ContactUsController@contactUpdate')->name('contact.update');
    });

    #### Services ####
    Route::resource('services','ServiceController');
    Route::post('services.delete','ServiceController@delete')->name('services.delete');

    #### ServiceProjects ####
    Route::resource('projects','ProjectController');
    Route::post('projects.delete','ProjectController@delete')->name('projects.delete');

    #### Clients ####
    Route::resource('clients','ClientController');
    Route::post('clients.delete','ClientController@delete')->name('clients.delete');

    #### Privacy ####
    Route::get('privacy','SettingController@privacy')->name('admin.privacy');
    Route::post('privacyUpdate','SettingController@privacyUpdate')->name('privacyUpdate');
    Route::get('setting','SettingController@setting')->name('admin.setting');
    Route::post('settingUpdate','SettingController@settingUpdate')->name('settingUpdate');


    #### Auth ####
    Route::get('logout', 'AuthController@logout')->name('admin.logout');
});
