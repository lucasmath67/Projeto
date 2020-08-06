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

Route::redirect('/', 'login', 301);
Route::redirect('/home', 'admin/clients', 301);
Route::redirect('/clients', 'admin/clients', 301);
Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
Route::get('clients', 'ClientController@index');
Route::get('orders', 'OrderController@index')->name('orders.index');
Route::get('orders/{order}', 'OrderController@edit')->name('order.edit');
Route::put('orders/{order}', 'OrderController@update')->name('order.update');
Route::get('orders/{order}/products', 'OrderController@getItens')->name('order.products');
Route::resource('products', 'ProductController');
});


