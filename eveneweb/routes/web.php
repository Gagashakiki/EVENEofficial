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

//Clientside
Route::get('/', 'Client\ClientController@home');

Route::get('/blog', 'Client\ClientController@blog');

Route::get('/blog/{id}', 'Client\ClientController@blogdetail');

Route::get('/inspiration', 'Client\ClientController@inspiration');

Route::get('/inspiration/{slug}', function () {
  return view('aaa');
});

Route::get('/about-us', 'Client\ClientController@aboutUs');

//profile
Route::get('/profile', 'Client\UserController@profile');
Route::post('/profile/submit', 'Client\UserController@editprofile');

//vendor
Route::get('/vendor/{category}', 'Client\VendorController@listVendorsByCategory');
Route::get('/vendor/detail/{id}', 'Client\VendorController@vendorDetail');
Route::get('/vendor/{category}/{event}', 'Client\VendorController@listVendorsByCategoryAndEvent');
Route::get('/search', 'Client\VendorController@searchVendors');
Route::get('/account/vendors', 'Client\VendorController@listUserVendors');
Route::get('/account/vendors/create', 'Client\VendorController@createVendor');
Route::post('/account/vendors/create', 'Client\VendorController@createVendorSubmit');
Route::get('/account/vendors/edit/{id}', 'Client\VendorController@editVendor');
Route::post('/account/vendors/edit', 'Client\VendorController@editVendorSubmit');
Route::delete('/account/vendors/delete/{id}', 'Client\VendorController@deleteVendorSubmit');
Route::post('/vendor/review', 'Client\VendorController@vendorReviewSubmit');

//Userauth
Route::post('/signup/submit', 'Client\UserController@daftar');
Route::get('verify', 'Client\UserController@verify')->name('signup.verify');
Route::post('/login/submit', 'Client\UserController@login');
Route::get('/logout', 'Client\UserController@logout');

Route::get('/why-join-us', 'Client\ClientController@joinReason');

Route::get('/account/messages', 'Client\UserController@listMessages');

Route::post('/ask-vendor', 'Client\UserController@askVendor');

// Message Controller
Route::post('/message/requestInvoice', 'Client\MessageController@requestInvoice');
Route::post('/order', 'Client\OrderController@createOrder');

// Order Controller
Route::get('/account/orders', 'Client\OrderController@listVendorOrder');
Route::get('/account/cart', 'Client\OrderController@listCustomerOrder');

// Admin Routing
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', function () {
    return view('admin.login');
  });
  Route::post('/login/submit', 'Admin\authcontroller@login');
  Route::get('/logout', 'Admin\authcontroller@logout');

  Route::get('/dashboard', 'Admin\AdminController@dashboard');

  Route::get('/vendor', 'Admin\AdminController@order');

  Route::get('/approve/{id}', 'Admin\AdminController@approve');

  Route::delete('/deletevendor/{id}', 'Client\UserController@deletevendor');

  Route::get('/blog', 'Admin\AdminController@blog');

  Route::get('/insertblog', 'Admin\AdminController@formblog');
  Route::post('/insertblog/submit', 'Admin\AdminController@insert');
  Route::delete('/deleteblog/{id}', 'Admin\AdminController@deleteblog');
  Route::get('/editblog/{id}', 'Admin\AdminController@edit');
  Route::post('/editblog/submit', 'Admin\AdminController@editsubmit');

  Route::get('/inspiration', 'Admin\AdminController@inspiration');
  Route::get('/form-inspiration', 'Admin\AdminController@forminsp');
  Route::get('/edit-inspiration/{id}', 'Admin\AdminController@editinsp');
  Route::post('/edit-inspiration/submit', 'Admin\AdminController@editinsps');
  Route::post('/form-inspiration/submit', 'Admin\AdminController@insertinsp');
  Route::delete('/deleteinsp/{id}', 'Admin\AdminController@deleteinsp');

  Route::get('/users/customer', 'Admin\AdminController@listUserCustomer');
  Route::get('/users/vendor', 'Admin\AdminController@listUserVendor');

  Route::delete('/deleteuser/{id}', 'Admin\AdminController@deleteuser');

  Route::get('/transactions', 'Admin\AdminController@listTransactions');
  Route::post('/transactions/{transactionId}', 'Admin\AdminController@confirmTransaction');
});
