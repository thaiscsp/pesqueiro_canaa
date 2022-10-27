<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

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
    return view('index');
});

Route::get('/adicionar-produto', function () {
    return view('adicionar-produto');
});
Route::post('/adicionar-produto', [ProdutoController::class, 'salvar']);

Route::get('/porcoes', function () {
    return view('porcoes');
});
