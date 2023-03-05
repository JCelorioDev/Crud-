<?php

use App\Http\Controllers\MenuController;
use App\Models\PersonaModel;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $persona = PersonaModel::where('eliminado',false)->get();
    return view('welcome',compact('persona'));
});

Route::get('/registro',[MenuController::class,'index']);
Route::post('/guardar',[MenuController::class,'guardar']);
Route::get('/edit{id}',[MenuController::class,'edit']);
Route::post('/update{id}',[MenuController::class,'update']);
Route::get('/eliminar{id}',[MenuController::class,'eliminar']);
Route::delete('/destroy{id}',[MenuController::class,'destroy']);