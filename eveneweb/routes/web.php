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

//profile
Route::get('/profile', 'Client\usercontroller@profile');
Route::post('/profile/submit', 'Client\usercontroller@editprofile');

//vendor
Route::get('/vendor/{category}', 'Client\VendorController@listVendorsByCategory');
Route::get('/vendor/detail/{id}', 'Client\VendorController@vendorDetail');
Route::get('/vendor/{category}/{event}', 'Client\VendorController@listVendorsByCategoryAndEvent');
Route::get('/search', 'Client\VendorController@searchVendors');
Route::get('/account/vendors', 'Client\VendorController@listUserVendors');
Route::get('/account/vendors/create','Client\VendorController@createVendor');
Route::post('/account/vendors/create','Client\VendorController@createVendorSubmit');
Route::get('/account/vendors/edit/{id}', 'Client\VendorController@editVendor');
Route::post('/account/vendors/edit','Client\VendorController@editVendorSubmit');
Route::delete('/account/vendors/delete/{id}','Client\VendorController@deleteVendorSubmit');
Route::post('/vendor/review', 'Client\VendorController@vendorReviewSubmit');

//Userauth
Route::post('/signup/submit', 'Client\usercontroller@daftar');
Route::get('verify', 'Client\usercontroller@verify')->name('signup.verify');
Route::post('/login/submit', 'Client\usercontroller@login');
Route::get('/logout', 'Client\usercontroller@logout');

Route::get('/why-join-us', 'Client\Clientcontroller@joinReason');



// Admin Routing
Route::group(['prefix' => 'admin'], function () {
    Route::get('/login', function(){
        return view('admin.login');
    });
    Route::post('/login/submit', 'Admin\authcontroller@login');
    Route::get('/logout','admin\authcontroller@logout');

    Route::get('/dashboard', 'Admin\admincontroller@dashboard');

    Route::get('/vendor', 'Admin\admincontroller@order');

    Route::get('/approve/{id}','admin\admincontroller@approve');

    Route::delete('/deletevendor/{id}','Client\usercontroller@deletevendor');

    Route::get('/blog', 'admin\admincontroller@blog');

    Route::get('/insertblog', 'admin\admincontroller@formblog');
    Route::post('/insertblog/submit','admin\admincontroller@insert');
    Route::delete('/deleteblog/{id}','admin\admincontroller@deleteblog');
    Route::get('/editblog/{id}','admin\admincontroller@edit');
    Route::post('/editblog/submit','admin\admincontroller@editsubmit');

    Route::get('/inspiration', 'admin\admincontroller@inspiration');
    Route::get('/form-inspiration','admin\admincontroller@forminsp');
    Route::get('/edit-inspiration/{id}','admin\admincontroller@editinsp');
    Route::post('/edit-inspiration/submit','admin\admincontroller@editinsps');
    Route::post('/form-inspiration/submit','admin\admincontroller@insertinsp');
    Route::delete('/deleteinsp/{id}','admin\admincontroller@deleteinsp');

    Route::get('/users/customer', 'admin\admincontroller@listUserCustomer');
    Route::get('/users/vendor', 'admin\admincontroller@listUserVendor');

    Route::delete('/deleteuser/{id}', 'admin\admincontroller@deleteuser');
});
