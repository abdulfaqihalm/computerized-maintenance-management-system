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


// DUMMY ROUTES ========================================================================================>
//SERVICE ===================================================>
Route::get('/service', function () {
    return view('service.create');
});

//USERS ===================================================>
Route::get('/users', function () {
    return view('users.index');
});

//HOSPITAL ===================================================>
Route::get('/hospital', function () {
    return view('hospital.index');
});

Route::get('/hospital/create', function () {
    return view('hospital.create');
});

Route::get('/hospital/edit', function () {
    return view('hospital.edit');
});

//ERROR ===================================================>
Route::get('/403', function () {
    return view('errors.403');
});

Route::get('/404', function () {
    return view('errors.404');
});

// DUMMY ROUTES END ========================================================================================>

Route::get('/','GuestController@getPage');


// Default laravel for User Auth
Auth::routes();

// CRUD ROUTING

// Route for Admin only
Route::group(['middleware' => ['auth', 'role:Admin']], function() {
    Route::resource('/part','PartController');
    Route::resource('/site','SiteController');
    Route::resource('/purchase-order','PurchaseOrderController');
});

// Route for Admin, Engineer, ... and ...
Route::group(['middleware' => ['auth', 'role:Engineer|Admin']], function() {
    Route::resource('/request','RequestOrderController');
    Route::resource('/work-order','WorkOrdersDetailController');
    Route::resource('/service','WorkOrdersServiceDetailController');
});



Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');

