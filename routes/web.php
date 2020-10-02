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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

// For Testing Purpose
Route::get('/active/page1', function () {
    return view('home', [
       'page' => 'ini page 1'
    ]);
})->name('active.page1');

Route::get('/active/page2', function () {

    return view('home', [
       'page' => 'ini page 2'
    ]);
})->name('active.page2');