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

Route::get('/ola/{nome}/{sobrenome?}', [EventController::class, 'BemVindo'])->where(['nome'=> '[A-Za-z]+', 'sobrenome'=>'[A-Za-z]+']);

Route::get('/operadores/{number1}/{number2}/{operador}', [EventController::class, 'Operadores'])->where(['number1' => '[0-9]+', 'number2' => '[0-9]+', 'operador'=> '[A-Za-z]+']);

Route::get('/dados-pessoas/{nome}/{sobrenome}/{idade}/{rm}/{genero}/{endereco}', [EventController::class, 'Dados'])->where(['nome' => '[A-Za-z]+', 'sobrenome' => '[A-Za-z]+', 'idade'=> '[0-9]+', 'rm'=> '[0-9]+', 'genero'=> '[f,m]' ]);


