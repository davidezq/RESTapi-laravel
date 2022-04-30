<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/libros",[LibroController::class,'index']); //muestra todos los registros
Route::post("/libros",[LibroController::class,'store']); //Agrega un elemento
Route::put("/libros/{id}",[LibroController::class,'update']); //Actualiza un elemento
Route::delete("/libros/{id}",[LibroController::class,'destroy']); //Elimina un elemento