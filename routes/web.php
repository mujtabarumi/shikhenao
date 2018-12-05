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

Route::view('Course-List', 'courseList')->name('course.list');
Route::view('Course-Teacher', 'teacherGrid')->name('course.teacher');
Route::view('Course-Teacher-Details', 'teacherDetails')->name('course.teacherDetails');


Route::view('/Admin', 'Admin.dashboard')->name('admin.dashboard');

