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

Route::get('/verify-dns',function (){ return 'trustcor-ca-xsOBynEXREagpcHgCz0LqN4IhK+IuYNxHolc3Xc/Q+mXLSAb27vVzN71Bo6GbC1HEZ0V5ZNwG6hkNxZY2oCbuTVu6sCP5JNSiEUtPWiCXsahy1RGlhxXTYSH/IrqUpYLON7C8k9YDHNupEsCIN64'; });
