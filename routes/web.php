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

Route::get('/', function () {
    return view('home');
})->name('/');

Route::get('/Account-Active/{email}/{token}', 'Auth\RegisterController@AccountActive')->name('account.active');

Route::view('Course-List', 'courseList')->name('course.list');
Route::view('Course-Teacher', 'teacherGrid')->name('course.teacher');
Route::view('Course-Teacher-Details', 'teacherDetails')->name('course.teacherDetails');


Route::view('/Admin', 'Admin.dashboard')->name('admin.dashboard');
Route::POST('/Registration', 'Auth\RegisterController@sendNewUserRegisterMail')->name('registration');
Route::POST('/Login', 'Auth\LoginController@login')->name('LOGIN');


Route::get('/Dashboard/{route}', 'DashboardController@redirect')->name('Login.Redirection');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
