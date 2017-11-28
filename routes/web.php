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
    return view('admin');
});

/** Resource Route de Clientes */
Route::get('/productos',
    array('as' => 'showProducto', function () { return view('elements.productos.index'); })
);

Route::get('/productos/create', 
    array('as' => 'createProducto', function () { return view('elements.productos.create'); })
);

Route::get('/productos/edit', 
    array('as' => 'updateProducto', function () { return view('elements.productos.update'); })
);


/** Resource Route de Locales */
Route::get('/locales',
    array('as' => 'showLocal', function () { return view('elements.locales.index'); })
);

Route::get('/locales/create', 
    array('as' => 'createLocal', function () { return view('elements.locales.create'); })
);

Route::get('/locales/edit', 
    array('as' => 'updateLocal', function () { return view('elements.locales.update'); })
);



/** Resource Route de Clientes */
Route::get('/clientes', function () { return view('elements.clientes.index'); });



