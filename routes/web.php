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

/*Admin */

/*category*/
Route::get('/Admin-course-category-show', 'Admin\CourseCategoryController@show')->name('admin.courseCategory.show');
Route::POST('/Admin-course-category-show', 'Admin\CourseCategoryController@getData')->name('admin.courseCategory.get');

Route::POST('/Admin-course-category-Add', 'Admin\CourseCategoryController@add')->name('admin.courseCategory.add');

Route::POST('/Admin-course-category-Edit', 'Admin\CourseCategoryController@edit')->name('admin.courseCategory.edit');

Route::POST('/Admin-course-category-Update/{id}', 'Admin\CourseCategoryController@update')->name('admin.courseCategory.update');
Route::POST('/Admin-course-Update/{id}', 'Admin\CourseController@update')->name('admin.course.update');

/*course*/
Route::get('/Admin-course-show', 'Admin\CourseController@show')->name('admin.courses.show');
Route::POST('/Admin-course-show', 'Admin\CourseController@getData')->name('admin.course.get');
Route::POST('/Admin-course-Add', 'Admin\CourseController@add')->name('admin.course.add');
Route::POST('/Admin-course-Edit', 'Admin\CourseController@edit')->name('admin.course.edit');