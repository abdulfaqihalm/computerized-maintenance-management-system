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


//Dummy Route
Route::get('/part-index', function () {
    return view('parts.index');
});

Route::get('/edit-part', function () {
    return view('parts.edit');
});

Route::get('/create-part', function () {
    return view('parts.create');
});

Route::get('/','GuestController@getPage');


// Default laravel for User Auth
Auth::routes();

// CRUD ROUTING

// Route for Admin only
Route::group(['middleware' => ['auth', 'role:Admin']], function() {
    Route::resource('/part','PartController');
    Route::resource('/site','SiteController');
    Route::resource('/purchaseorder','PurchaseOrderController');
});

// Route for Admin, Engineer, ... and ...
Route::group(['middleware' => ['auth', 'role:Engineer|Admin']], function() {
    Route::resource('/request','RequestOrderController');
    Route::resource('/workordersdetail','WorkOrdersDetailController');
    Route::resource('/workordersservicedetail','WorkOrdersServiceDetailController');
});



Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

