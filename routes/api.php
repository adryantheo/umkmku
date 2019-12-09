<?php

use Illuminate\Http\Request;



//Register Login
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');

//Kode Akun
Route::get('/kodeakun', 'KodeAkunController@index');
Route::get('/kodeakun/{kodeAkun}', 'KodeAkunController@show');
Route::post('/kodeakun', 'KodeAkunController@store');
Route::patch('/kodeakun/{kodeAkun}', 'KodeAkunController@update');
Route::delete('/kodeakun/{kodeAkun}', 'KodeAkunController@destroy');

//Debits API
Route::get('/debits', 'DebitController@index');

//Transaksis- API
Route::get('/transaksi-all', 'TransaksiController@all');
Route::get('/transaksi-user', 'TransaksiController@transaksiUser');
Route::get('/transaksi', 'TransaksiController@index');
Route::get('/transaksi/{transaksi}', 'TransaksiController@show');
Route::post('/transaksi', 'TransaksiController@store');
Route::patch('/transaksi/{transaksi}', 'TransaksiController@update');
Route::delete('/transaksi/{transaksi}', 'TransaksiController@destroy');