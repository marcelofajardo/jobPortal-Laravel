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

Route::get('/applicant/login', 'ApplicantLoginController@showLogin')->name('applicant.login');
Route::post('/applicant/login', 'ApplicantLoginController@doLogin')->name('applicant.doLogin');
Route::get('applicant/register', function () {
    return view('applicant.register');
})->name('applicant.register');
Route::get('/employer/register', function () {
    return view('employer.register');
})->name('employer.register');
Route::get('/employer/login', function () {
    return view('employer.login');
})->name('employer.login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
