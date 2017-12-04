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

Route::get('/', function () {
    return view('layouts.admin');
});

Auth::routes();

//test about index
Route::get('/about', 'AboutController@index')->name('admin.about_section.index');


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=>'admin'], function(){
    
        Route::get('/admin', function(){
    
            return view('admin.index');
    
    
        });


        Route::resource('admin/about_section', 'AboutController',['name'=>[
            
                'index'=>'admin.about.index',
                'create'=>'admin.about.create',
                'edit'=>'admin.about.edit'
            
            
            ]]);
            




    });




