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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//about section routes
Route::get('/about', 'AboutController@index')->name('admin.about_section.index');

Route::get('/about/edit/{id}', 'AboutController@edit')->name('admin.about_section.edit');

Route::post('/about/update/{id}', 'AboutController@update')->name('admin.about_section.update');


//campaign section routes

Route::get('/campaign','CampaignController@index')->name('admin.campaign_section.index');

Route::get('/campaign/edit/{id}','CampaignController@edit')->name('admin.campaign_section.edit');

Route::post('/campaign/update/{id}', 'CampaignController@update')->name('admin.campaign_section.update');

Route::post('/campaign/insert', 'CampaignController@insert')->name('admin.campaign_section.insert');

Route::get('/campaign/create', 'CampaignController@create')->name('admin.campaign_section.create');

Route::get('/campaign/delete/{id}','CampaignController@delete')->name('admin.campaign_section.delete');


//for upload and view image 


Route::get('/campaign/upload','CampaignController@create')->name('admin.campaign_section.create');


// Donor section

Route::get('/donor','DonorController@index')->name('admin.donor_section.index');

Route::post('/donor/insert', 'DonorController@insert')->name('admin.donor_section.insert');

Route::get('/donor/create', 'DonorController@create')->name('admin.donor_section.create');

Route::get('/donor/edit/{id}','DonorController@edit')->name('admin.donor_section.edit');

Route::post('/donor/update/{id}', 'DonorController@update')->name('admin.donor_section.update');
Route::get('/donor/delete/{id}','DonorController@delete')->name('admin.donor_section.delete');



// Gallery section

Route::get('/gallery','GalleryController@index')->name('admin.gallery_section.index');

Route::post('/gallery/insert', 'GalleryController@insert')->name('admin.gallery_section.insert');

Route::get('/gallery/create', 'GalleryController@create')->name('admin.gallery_section.create');

Route::get('/gallery/edit/{id}','GalleryController@edit')->name('admin.gallery_section.edit');

Route::post('/gallery/update/{id}', 'GalleryController@update')->name('admin.gallery_section.update');
Route::get('/gallery/delete/{id}','GalleryController@delete')->name('admin.gallery_section.delete');


//contact section

Route::get('/contact','ContactController@index')->name('admin.contact_section.index');

Route::get('/contact/edit/{id}','ContactController@edit')->name('admin.contact_section.edit');

Route::post('/contact/update/{id}', 'ContactController@update')->name('admin.contact_section.update');

Route::get('/contact/delete/{id}','ContactController@delete')->name('admin.contact_section.delete');

Route::post('/contact/insert', 'ContactController@insert')->name('admin.contact_section.insert');

Route::get('/contact/create', 'ContactController@create')->name('admin.contact_section.create');



//dropzone 

Route::get('/', ['as' => 'upload', 'uses' => 'CampaignController@getUpload']);
//Route::post('upload', ['as' => 'upload-post', 'uses' =>'IController@postUpload2']);
Route::post('upload', 'CampaignController@showUploadFile');

Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'CampaignController@deleteUpload']);

Route::get('example-2', ['as' => 'upload-2', 'uses' => 'CampaignController@getServerImagesPage']);
Route::get('server-images', ['as' => 'server-images', 'uses' => 'CampaignController@getServerImages']);
Route::get('example-3', ['as' => 'upload-3', 'uses' => 'CampaignController@getUpload3']);













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




