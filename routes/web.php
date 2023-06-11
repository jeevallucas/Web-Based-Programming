<?php

Route::get('/index', function () {
    return view('index');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', 'PageController@home');
    Route::get('/profile', 'PageController@profile');
    Route::get('/student', 'PageController@student');
    Route::get('/contact', 'PageController@contact');

    Route::get('/student/search', 'PageController@search');
    Route::get('/student/formadd', 'PageController@formadd');
    Route::post('/student/save', 'PageController@save');

    Route::get('/student/formedit/{id}', 'PageController@formedit');
    Route::put('/student/update/{id}', 'PageController@update');
    Route::get('/student/delete/{id}', 'PageController@delete');

    Route::get('/logout', 'AuthController@logout');
});

Route::group(['middleware' => ['guest']], function () {
    Route::get('/register', 'AuthController@register');
    Route::post('/simpan', 'AuthController@simpan');
    Route::get('/', 'AuthController@login');
    Route::post('/ceklogin', 'AuthController@ceklogin');
});