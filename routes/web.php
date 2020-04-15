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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {

    // Default route
    Route::get('/', 'HomeController@index')->name('home');
    
    // Admin user routes.    
    Route::get('/admin',['as'=>'admin.index','uses'=> 'AdminController@index']);
    Route::get('/userlist',['as'=>'admin.list','uses'=> 'AdminController@getData']);
    Route::get('/admin/updatestatus/{id}',array('as'=>'admin.updatestatus','uses'=>'AdminController@updateStatus'));
    Route::resource('admins','AdminController');

    // Approved user routes.
    Route::get('/approved', 'ApprovedController@index')->name('approved');
    Route::resource('approve','ApprovedController');

    // Unapproved user routes.
    Route::get('/unapproved', 'UnapprovedController@index')->name('unapproved');
    Route::resource('unapprove','UnapprovedController');
});