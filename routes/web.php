<?php

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
use App\Http\Controllers\EventController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola/{nome}/{sobrenome?}', [EventController::class, 'BemVindo']);

Route::get('/operadores/{number1}/{number2}/{operador}', [EventController::class, 'Operadores']);

Route::get('/dados-pessoas/{nome}/{sobrenome}/{idade}/{rm}/{genero}/{endereco}', [EventController::class, 'Dados']);


