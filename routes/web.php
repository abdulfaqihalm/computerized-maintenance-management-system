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


Route::get('/req', function() {
    return view('requests.create');
});


Route::get('/wo', function() {
    return view('service.create');
});

Route::get('/po', function() {
    return view('purchaseorders.create');
});


Route::get('/service', function() {
    return view('service.create');
});

Route::Get('stok', function(){
    return view('parts.create');
});

// DUMMY ROUTES END ========================================================================================>

Route::get('/','GuestController@getPage');
Route::get('/home', 'HomeController@index')->middleware('auth')->name('home');
Auth::routes();

// Route for Admin only
Route::resource('/part','PartController')->except(['show']);
Route::resource('/modality','ModalityController')->except(['show']);
Route::resource('/purchase-order','PurchaseOrderController')->except(['edit','update']);
Route::resource('/user', 'UserController')->except(['show','create', 'store']);
Route::resource('/role', 'RoleController')->except(['show', 'edit', 'update']); 
Route::resource('/hospital', 'HospitalController')->except(['show']);

// Route for Admin and Logistic
Route::resource('/purchase-order','PurchaseOrderController')->except(['edit','update']);
Route::post('/select-ajax-purchase-order', ['as'=>'select-ajax-purchase-order', 'uses'=>'PurchaseOrderController@selectAjax']);

// Route for Admin, Site
Route::resource('/request','RequestOrderController')->except(['edit','update', 'index']);
Route::post('/select-ajax', ['as'=>'select-ajax','uses'=>'RequestOrderController@selectAjax']);

//Route for Admin, Site, Engineer 
Route::get('/request', ['as'=>'request.index', 'uses'=>'IndexRequestOrderController@index']);

// Route for Admin, Engineer
Route::resource('/work-order-detail','WorkOrdersDetailController');
Route::get('/work-order-detail/{requestId}/create', ['as'=>'work-order-detail-by-request.create','uses'=>'WorkOrdersDetailController@createByRequest']);
Route::post('/work-order-detail-by-request', ['as'=>'work-order-detail-by-request.store','uses'=>'WorkOrdersDetailController@storeByRequest']);
Route::resource('/work-order-service-detail','ServiceDetailController')->except(['create']);



