<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// API untuk tampil data
Route::get('/mahasiswa/read', 'MhsAPIController@read');

// API untuk menambahkan data
Route::post('/mahasiswa/create', 'MhsAPIController@create');

// API untuk mengubah data
Route::post('/mahasiswa/update/{id}', 'MhsAPIController@update');

// API untuk menghapus data
Route::delete('/mahasiswa/delete/{id}', 'MhsAPIController@delete');