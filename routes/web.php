<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

Route::get('products/{product}','ProductsController@show');

Route::get('/products', 'ProductsController@index');
Route::post('/products/{product}/update', 'ProductsController@update');
Route::post('/products/create', 'ProductsController@create');
Route::get('/products/{product}/delete', 'ProductsController@delete');
