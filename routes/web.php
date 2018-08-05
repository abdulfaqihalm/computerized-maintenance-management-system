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
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
| The middleware authentication occurs in Controller
*/


// DUMMY ROUTES ========================================================================================>
//SERVICE ===================================================>
Route::get('/service', function () {
    return view('service.create');
});

// DUMMY ROUTES END ========================================================================================>

Route::get('/','GuestController@getPage');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Auth::routes();

// Route for Admin only
Route::resource('/part','PartController')->except(['show']);
Route::resource('/site','SiteController')->except(['show']);
Route::resource('/purchase-order','PurchaseOrderController')->except(['edit','update']);
Route::resource('/user', 'UserController')->except(['show','create', 'store']);
Route::resource('/role', 'RoleController')->except(['show', 'edit', 'update']); 

// Route for Admin, Engineer, ... and ...
Route::resource('/request','RequestOrderController')->except(['edit','update']);
Route::resource('/work-order-detail','WorkOrdersDetailController');
Route::resource('/work-order-service-detail','WorkOrdersServiceDetailController');


