<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

Route::get('/pruebas', function (Request $request) {
    $datos = [ 
        "draw" => 1,
        "recordsFiltered" => 1,
        "recordsTotal" => 10,
        "data" => [
            [
                "id" => 1,
                "nombre" => "Licoreria 32",
                "distrito" => "Santiago de Surco",
                "nombre_contacto" => "Alan Cornejo",
                "telefono_contacto" => "98689745",
                "createdAt" => "2017-11-20 03:54:32.540Z",
                "estado" => "$320,800"
            ],
            [
                "id" => 2,
                "nombre" => "San Juanito",
                "distrito" => "Monterico",
                "nombre_contacto" => "Yessenia Montalvo",
                "telefono_contacto" => "974125684",
                "createdAt" => "2017-11-18 01:54:32.540Z",
                "estado" => "$320,800"
            ],
            [
                "id" => 3,
                "nombre" => "24Nigth",
                "distrito" => "San Isidro",
                "nombre_contacto" => "Sebastian Quiroz",
                "telefono_contacto" => "98635277",
                "createdAt" => "2017-11-29T03:54:32.540Z",
                "estado" => "$320,800"
            ]
        ]
    ];

    return response()->json($datos);
});



