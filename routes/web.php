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

Route::get('/', 'FeedbackController@homepage');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/my-feedbacks', 'FeedbackController@views')->name('my-feedbacks');
Route::resource('/submit-a-feedback','FeedbackController');

Route::get('/verified-feedbacks','FeedbackController@view_verified');
Route::get('/not-verified-feedbacks','FeedbackController@view_not_verified');
Route::get('/verify/{id}','FeedbackController@verify')->name('verify');
Route::get('/all-feedbacks','FeedbackController@all');
