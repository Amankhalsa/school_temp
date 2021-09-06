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

Route::get('/form', function () {
    return view('form');
});
Route::get('/class', function () {
    return view('class_on');
});

Route::get('/resume', function () {
    return view('resume');
});
Route::get('/department', function () {
    return view('add_department');
});
Route::get('/Attendance', function () {
    return view('Attendance');
});
Route::get('/Homework', function () {
    return view('Homework');
});

Route::get('/Gallery', function () {
    return view('Gallery');
});
Route::get('/ENQUIRY', function () {
    return view('ENQUIRY');
});
Route::get('/Gatepass', function () {
    return view('Gatepass');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
