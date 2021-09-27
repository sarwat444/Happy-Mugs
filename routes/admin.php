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



Route::group(['namespace' =>'Admin','middleware' => 'auth:admin'],function (){

    Route::get('/','DashboardController@index')->name('admin.dashboard');
       Route::get('/logout','LoginController@logout')->name('admin.logout');


    ######################## Begin Images Routes #####################################
    Route::group(['prefix' => "images"],function (){
        // Route::get('/images/datatables/{type}', 'ImagesController@datatables')->name('admin-images-datatables'); //JSON REQUEST
        Route::get('/','ImagesController@index')->name('admin.images');
        Route::post('/2','ImagesController@index2')->name('admin.images2');
        Route::get('/create','ImagesController@create')->name('admin.images.create');
        Route::post('/store','ImagesController@store')->name('admin.images.store');
        Route::post('/edit','ImagesController@edit')->name('admin.images.edit');
        Route::post('/update/{ids}','ImagesController@update')->name('admin.images.update');
        Route::post('/delete/','ImagesController@delete')->name('admin.images.delete');


        Route::post('/motives/chrrs','ImagesController@getMotivesChrrs')->name('admin.motives_charrs');


        Route::post('/move/','ImagesController@move')->name('admin.images.move');
        Route::post('/update/image/category/{id}','ImagesController@updateCategory')->name('admin.images.update_category');


    });

    ######################## End Images Routes #####################################


    Route::group(['prefix' => "motives"],function (){
        // Route::get('/images/datatables/{type}', 'ImagesController@datatables')->name('admin-images-datatables'); //JSON REQUEST
        Route::get('/','MotiveController@index')->name('admin.motives');

        Route::get('/create','MotiveController@create')->name('admin.motives.create');
        Route::post('/store','MotiveController@store')->name('admin.motives.store');
        Route::post('/edit','MotiveController@edit')->name('admin.motives.edit');
        Route::post('/update/{ids}','MotiveController@update')->name('admin.motives.update');
        Route::post('/delete/','MotiveController@delete')->name('admin.motives.delete');

    });

    ######################## End Images Routes #####################################




        Route::group(['prefix' => "sections"],function (){
            // Route::get('/images/datatables/{type}', 'ImagesController@datatables')->name('admin-images-datatables'); //JSON REQUEST
            Route::get('/','SectionController@index')->name('admin.sections');

            Route::get('/create','SectionController@create')->name('admin.sections.create');
            Route::post('/store','SectionController@store')->name('admin.sections.store');
            Route::post('/edit','SectionController@edit')->name('admin.sections.edit');
            Route::post('/update/{ids}','SectionController@update')->name('admin.sections.update');
            Route::post('/delete/','SectionController@delete')->name('admin.sections.delete');

        });

        ######################## End Images Routes #####################################




  });






Route::group(['namespace' =>'Admin','middleware' => 'guest:admin'],function (){

      Route::get('/login','LoginController@getLogin')->name('get.admin.login');
      Route::post('/login/store','LoginController@Login')->name('admin.login');

});
