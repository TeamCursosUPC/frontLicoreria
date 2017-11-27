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
                "id" => "1",
                "nombre" => "System Architect",
                "distrito" => "Edinburgh",
                "persona_contacto" => "5421",
                "telefono_contacto" => "2011/04/25",
                "estado" => "$320,800"
            ],
            [
                "id" => "2",
                "nombre" => "a Architect",
                "distrito" => "Edinburgh",
                "persona_contacto" => "5421",
                "telefono_contacto" => "2011/04/25",
                "estado" => "$320,800"
            ],
            [
                "id" => "3",
                "nombre" => "z Architect",
                "distrito" => "Edinburgh",
                "persona_contacto" => "5421",
                "telefono_contacto" => "2011/04/25",
                "estado" => "$320,800"
            ]
        ]
    ];

    return response()->json($datos);
});



