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
Route::get('/myvendors', 'Client\usercontroller@myvendors');
Route::get('/editvendors/{id}', 'Client\usercontroller@editvendor');
Route::get('/insertvendors','Client\usercontroller@insertvendor');
Route::post('/insertvendors/submit','Client\usercontroller@submitvendor');
Route::get('/vendor/{id}', 'Client\Clientcontroller@vendor');
Route::get('/detail/{id}', 'Client\Clientcontroller@vendordetail');
Route::get('/vendor/{id}/{jenis}', 'Client\Clientcontroller@vendorevent');
Route::get('/search', 'Client\Clientcontroller@searchvendor');
Route::delete('/deletevendor/{id}','Client\usercontroller@deletevendor');
Route::post('/editvendors/submit','Client\usercontroller@editvendorsubmit');
//Userauth
Route::post('/signup/submit', 'Client\usercontroller@daftar');
Route::get('verify', 'Client\usercontroller@verify')->name('signup.verify');
Route::post('/login/submit', 'Client\usercontroller@login');
Route::get('/logout', 'Client\usercontroller@logout');



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

    Route::get('/users', 'admin\admincontroller@listuser');
        Route::delete('/deleteuser/{id}', 'admin\admincontroller@deleteuser');


});
