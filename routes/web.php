<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'JobApplicationController@showdata');
Route::get('/addjobapplication', 'JobApplicationController@index');
Route::post('/addapplication','JobApplicationController@addapplication');
Route::post('/updateapplication','JobApplicationController@updateapplication');
Route::get('/editapplication/{id}','JobApplicationController@editapplication');
Route::get('/viewapplication/{id}','JobApplicationController@viewapplication');
Route::get('/removeapplication/{id}','JobApplicationController@removeapplication');