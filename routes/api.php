<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Models\Produto;

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

Route::get('/produtos', function() {
    $produtos = json_encode(Produto::all(), JSON_UNESCAPED_UNICODE);
    return response($produtos, 200);
});

Route::get('/produtos/{tipo}', function($tipo) {
    $produtos = json_encode(DB::table('produtos')->where('tipo', '=', $tipo)->get(), JSON_UNESCAPED_UNICODE);
    return response($produtos, 200);
});