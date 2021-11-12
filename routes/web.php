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


Auth::routes();

Route::get('/', '\App\Http\Controllers\loginController@login')->name('login');

Route::middleware(['Auth'])->group(function(){
Route::get('/home/admin', '\App\Http\Controllers\loginController@home')->name('home');
Route::get('/member', '\App\Http\Controllers\MemberController@member')->name('member');
Route::get('/book', '\App\Http\Controllers\BookController@book')->name('book');
Route::get('/book/issue', '\App\Http\Controllers\BookRentalController@issuedbook')->name('issuedbook');
});
