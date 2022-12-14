<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\AdminController;

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


Route::get('/gerenciar-cardapio', function () {
    return view('gerenciar-cardapio');
});
Route::post('/gerenciar-cardapio', [ProdutoController::class, 'gerenciar_produtos']);

Route::get('/editar-produto', function () {
    return view('editar-produto');
});
Route::post('/editar-produto', [ProdutoController::class, 'edita_produto']);

Route::get('/admin', function () {
    return view('admin');
});
Route::post('/admin', [AdminController::class, 'login']);


Route::get('/gerenciar-admins', function () {
    return view('gerenciar-admins');
});
Route::post('/gerenciar-admins', [AdminController::class, 'gerenciar_admins']);


Route::get('/logout', function () {
    return view('logout');
});
Route::post('/logout', [AdminController::class, 'logout']);