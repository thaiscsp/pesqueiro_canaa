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

Route::get('/gerenciar-produtos', function () {
    return view('gerenciar-produtos');
});
Route::post('/gerenciar-produtos', [ProdutoController::class, 'gerenciar_produtos']);

Route::get('/porcoes', function () {
    return view('porcoes');
});
