<?php

use Illuminate\Http\Request;

//Register Login
Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::get('/company/{user}', 'UserController@getData');
Route::patch('/update-company/{user}', 'UserController@updateCompany');

//Kode Akun
Route::post('/kodeakun/wipeall/', 'KodeAkunController@deleteAll'); // delete all kode akun based on user_id, require user id params
Route::get('/kodeakun', 'KodeAkunController@index');
Route::get('/kodeakun/{kodeAkun}', 'KodeAkunController@show');
Route::post('/kodeakun', 'KodeAkunController@store');
Route::patch('/kodeakun/{kodeAkun}', 'KodeAkunController@update');
Route::delete('/kodeakun/{kodeAkun}', 'KodeAkunController@destroy');


//Delete All API
Route::delete('/transaksi/delete-all/{user}', 'TransaksiController@deleteAll');

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

//Laporan API
Route::get('/neracasaldo/{year}/{month}/', 'TransaksiController@neracaSaldo');
Route::get('/transaksi-tgl/{year}/{month}/', 'TransaksiController@selectedTransaksi');
Route::get('/labarugi/{year}/{month}/', 'TransaksiController@labaRugi');
Route::get('/test/{year}/{month}/', 'TransaksiController@test');