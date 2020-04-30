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
Route::get('/', 'Client\Clientcontroller@home');

Route::get('/blog', 'Client\Clientcontroller@blog');

Route::get('/blog/{id}', 'Client\Clientcontroller@blogdetail');

Route::get('/inspiration', 'Client\Clientcontroller@inspiration');

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

Route::get('/why-join-us', 'Client\Clientcontroller@joinReason');

Route::get('/account/messages', 'Client\UserController@listMessages');

Route::post('/ask-vendor', 'Client\Clientcontroller@askVendor');

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
  Route::get('/logout', 'admin\authcontroller@logout');

  Route::get('/dashboard', 'Admin\AdminController@dashboard');

  Route::get('/vendor', 'Admin\AdminController@order');

  Route::get('/approve/{id}', 'admin\AdminController@approve');

  Route::delete('/deletevendor/{id}', 'Client\UserController@deletevendor');

  Route::get('/blog', 'admin\AdminController@blog');

  Route::get('/insertblog', 'admin\AdminController@formblog');
  Route::post('/insertblog/submit', 'admin\AdminController@insert');
  Route::delete('/deleteblog/{id}', 'admin\AdminController@deleteblog');
  Route::get('/editblog/{id}', 'admin\AdminController@edit');
  Route::post('/editblog/submit', 'admin\AdminController@editsubmit');

  Route::get('/inspiration', 'admin\AdminController@inspiration');
  Route::get('/form-inspiration', 'admin\AdminController@forminsp');
  Route::get('/edit-inspiration/{id}', 'admin\AdminController@editinsp');
  Route::post('/edit-inspiration/submit', 'admin\AdminController@editinsps');
  Route::post('/form-inspiration/submit', 'admin\AdminController@insertinsp');
  Route::delete('/deleteinsp/{id}', 'admin\AdminController@deleteinsp');

  Route::get('/users/customer', 'admin\AdminController@listUserCustomer');
  Route::get('/users/vendor', 'admin\AdminController@listUserVendor');

  Route::delete('/deleteuser/{id}', 'admin\AdminController@deleteuser');

  Route::get('/transactions', 'admin\AdminController@listTransactions');
  Route::post('/transactions/{transactionId}', 'admin\AdminController@confirmTransaction');
});
