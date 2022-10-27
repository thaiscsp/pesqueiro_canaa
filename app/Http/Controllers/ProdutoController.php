<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Storage;

class ProdutoController extends Controller
{
    public function salvar(Request $request) {
        $imagem = $request->file('imagem');
        $nome_arquivo = $imagem->getClientOriginalName();
        $imagem->storeAs('images', $nome_arquivo);

        $produto = new Produto();
        $produto->nome = $request->input('nome');
        $produto->tipo = $request->input('tipo');
        $produto->tipo_especifico = $request->input('tipo-especifico');
        $produto->preco = $request->input('preco');
        $produto->caminho_imagem = '/public/storage/' . $nome_arquivo;
        $produto->save();

        echo(':)');
    }

    public function get_produtos() {
        $produtos = json_encode(Produto::all(), JSON_UNESCAPED_UNICODE);
        return response($produtos, 200);
    }     
}
