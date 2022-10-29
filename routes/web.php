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

Route::get('/', function () {
    return view('index');
});
Route::get('/journals', function () {
    return view('journals');
});
Route::get('/journal-details', function () {
    return view('journal-details');
});
Route::get('/manuscript', function () {
    return view('manuscript');
});
Route::get('/Join_editor', function () {
    return view('Join_editor');
});
Route::get('/join_reviewer', function () {
    return view('join_reviewer');
});