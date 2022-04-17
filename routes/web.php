<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

    Route::get('/index', 'autism@index' );

    Route::get('/enteractive', 'autism@enteractive' )->middleware('auth');

    Route::get('/routen', 'autism@routen' )->middleware('auth');

    Route::get('/comuni', 'autism@comuni' )->middleware('auth');

    Route::get('/', 'autism@index' );

    Route::get('/autism', 'autism@autism' );

    Route::get('/complex', 'autism@complex' )->middleware('auth');

    Route::get('/about', 'autism@about' );

    route::post('/interaction/result' , 'resultcontroller@interaction');

    route::post('/behaviors/result' , 'resultcontroller@behaviors');

    route::post('/communication/result' , 'resultcontroller@communication');

    route::post('/growth/result' , 'resultcontroller@growth');

    Route::get('/elag', 'resultcontroller@index' );


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
