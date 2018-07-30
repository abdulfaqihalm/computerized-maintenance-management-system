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

Route::get('/','GuestController@getPage');


// Default laravel for User Auth
Auth::routes();

// CRUD ROUTING 

// Route for Admin only 
Route::group(['middleware' => ['auth', 'role:Admin']], function() {
    Route::resource('/part','PartController')->except(['show']);
    Route::resource('/site','SiteController')->except(['show']);
    Route::resource('/purchaseorder','PurchaseOrderController')->except(['edit','update']);
});

// Route for Admin, Engineer, ... and ...
Route::group(['middleware' => ['auth', 'role:Engineer|Admin']], function() {
    Route::resource('/request','RequestOrderController')->except(['edit','update']);
    Route::resource('/workordersdetail','WorkOrdersDetailController');
    Route::resource('/workordersservicedetail','WorkOrdersServiceDetailController');
});



Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
