<?php

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

Route::get('/home', function () {
    return view('admin');
});

Route::get('/productos', function () {
    return view('locales.index');
});

Route::get('/locales',
    array('as' => 'showLocal', function () { return view('locales.index'); })
);


Route::get('/locales/create', 
    array('as' => 'createLocal', function () { return view('locales.create'); })
);

Route::get('/locales/update', function () { return view('locales.update'); });


Route::get('/clientes', function () { return view('clientes.index'); });



