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

Auth::routes();

Route::get('/home', function() {
    return view('index');

})->name('home')->middleware('auth');


Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {

Route::redirect('/', 'clients', 301);
Route::get('clients', 'ClientController@index');
Route::get('orders', 'OrderController@index');
Route::get('orders/{order}/products', 'OrderController@getItens')->name('order.products');
Route::resource('products', 'ProductController');
});


