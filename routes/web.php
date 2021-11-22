<?php

use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Http;
//$response=Http::get('http://127.0.0.1:8000/api/book');
//$response=Http::post('http://127.0.0.1:8000/api/book',[
//    'title' => 'Good is good everyday',
//    'author'=> 'Jehovah',
//    'isbn' => '1234577',
//    'quantity' => 7,
//    'publisher' => 'Magnificent',
//    'pubDate' => '2011-07-24',
//    'condition' =>'new'
//]);
//dd($response->status());
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

//Route::middleware(['Auth'])->group(function(){
Route::get('/home/admin', '\App\Http\Controllers\loginController@home')->name('home');
Route::get('/member', '\App\Http\Controllers\MemberController@member')->name('member');
Route::get('/book', '\App\Http\Controllers\BookController@book')->name('book');
Route::get('/book/issue', '\App\Http\Controllers\BookRentalController@issuedbook')->name('issuedbook');
//});
Route::get('/book/view', '\App\Http\Controllers\TestAPI@viewBook');
Route::get('/book/search/{id}', '\App\Http\Controllers\TestAPI@searchBook');
Route::get('/book/add', '\App\Http\Controllers\TestAPI@addBook');
Route::get('/book/update/{id}', '\App\Http\Controllers\TestAPI@updateBook');
Route::get('/book/delete/{id}', '\App\Http\Controllers\TestAPI@deleteBook');

Route::get('/member/search',[\App\Http\Controllers\MemberController::class,'viewMemberSearch'])->name('memberName-search-view');
Route::post('/member/search',[\App\Http\Controllers\MemberController::class,'searchMemberByName'])->name('member-search-do');
Route::get('/book/search',[\App\Http\Controllers\BookController::class,'viewBookSearch'])->name('bookName-search-view');
Route::post('book/search',[\App\Http\Controllers\BookController::class,'searchBookByName'])->name('book-search-do');
