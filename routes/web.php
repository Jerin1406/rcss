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
    return view('welcome');
});
Route::get('/aboutdepartment', function () {
    return view('aboutdepartment');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/activitiesdept', function () {
    return view('activitiesdept');
});
Route::get('/associationdept', function () {
    return view('associationdept');
});
Route::get('/facultylogin', function () {
    return view('facultylogin');
});
Route::get('/galary', function () {
    return view('galary');
});
Route::get('/placementsdept', function () {
    return view('placementsdept');
});
Route::get('/studentlogin', function () {
    return view('studentlogin');
});


