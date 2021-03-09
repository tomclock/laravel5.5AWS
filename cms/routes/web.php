<?php

use App\Book;
use Illuminate\Http\Request;
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
Route::get('/home','HomeController@index')->name('home');

Route::get('/', function () {
    return view('welcome');
});

/**
 * 新本を作成 
 */
Route::post('/books', function(){
    //   
});

/**
 * 本を削除
 */
Route::delete('/book/{book}', function(){
    //   
});
