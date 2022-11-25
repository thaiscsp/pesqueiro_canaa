<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Storage, Session;
use Spatie\Dropbox\Client;

class ProdutoController extends Controller
{
        public function gerenciar_produtos(Request $request) {
            if ($request->input('operacao') == 'Adicionar') {
                $this->adiciona_produto($request);
                return redirect('gerenciar-cardapio');
            } 
            elseif ($request->input('operacao') == 'Remover') {
                $this->remove_produto($request);
                return redirect('gerenciar-cardapio');
            } elseif ($request->input('operacao') == 'Editar') {
                return redirect('editar-produto?id=' . $request->input('id'));
            }
        }

        public function adiciona_produto(Request $request) {
        $imagem = $request->file('imagem');
        $arquivo = $imagem->get();
        $nome_arquivo = $imagem->getClientOriginalName();
            
        $produto = new Produto();
        $produto->nome = $request->input('nome');
        if ($request->input('tipo-especifico') <> '') {
            $produto->tipo = $request->input('tipo') .'_'. $request->input('tipo-especifico');
        } else {
            $produto->tipo = $request->input('tipo');
        }
        $produto->preco = $request->input('preco');
        $produto->nome_arquivo = $nome_arquivo;
            
        $access_token = $this->dropbox_recupera_access_token();
        $this->dropbox_faz_upload_de_imagem($access_token, $nome_arquivo, $arquivo);
        $url = $this->dropbox_cria_shared_link($access_token, $produto->nome_arquivo);
        $produto->caminho_imagem = str_replace('https://www.dropbox.com/s/', '', $url);
        $produto->save();
        Session::flash('sucesso', 'Produto adicionado com sucesso.');
    }

    public function remove_produto(Request $request) {
        $access_token = $this->dropbox_recupera_access_token();

        $produtos = Produto::all();
        foreach ($produtos as $produto) {
            if ($produto->id == $request->input('id')) {
                $this->dropbox_remove_imagem($access_token, $produto->nome_arquivo);

                $produto->delete();

                Session::flash('sucesso', 'Produto removido com sucesso.');

            } else {
                Session::flash('erro', 'Não existe produto com esse nome.');
            }
        }
    }

    public function edita_produto(Request $request) {
        $produtos = Produto::all();
        $uri = $_SERVER['REQUEST_URI'];
        $index = strpos($uri,"=");
        $id = substr($uri, $index+1);
        //foreach ($produtos as $produto) {
            if ($produto = Produto::find($id)) {
                $produto->nome = $request->input('nome');
                if ($request->input('tipo')<>'' and $request->input('tipo-especifico')<>'') {
                    $produto->tipo = $request->input('tipo') .'_'. $request->input('tipo-especifico');
                } elseif ($request->input('tipo')<>'') {
                    $produto->tipo = $request->input('tipo');
                }
                $produto->preco = $request->input('preco');

                if ($request->file('imagem')) {
                    $access_token = $this->dropbox_recupera_access_token();
                    $this->dropbox_remove_imagem($access_token, $produto->nome_arquivo);

                    $imagem = $request->file('imagem');
                    $arquivo = $imagem->get();
                    $nome_arquivo = $imagem->getClientOriginalName();
                    $produto->nome_arquivo = $nome_arquivo;

                    $this->dropbox_faz_upload_de_imagem($access_token, $nome_arquivo, $arquivo);
                    $url = $this->dropbox_cria_shared_link($access_token, $produto->nome_arquivo);

                    $produto->caminho_imagem = str_replace('https://www.dropbox.com/s/', '', $url);
                    $produto->save();
                }

                $produto->save();
                Session::flash('sucesso', 'Produto editado com sucesso.');
            }
        //}
        return redirect('editar-produto?id=' .$produto->id);
    }

    public function dropbox_recupera_access_token() {
        try {
            $client = new \GuzzleHttp\Client();
            $res = $client->request("POST", "https://".env('DROPBOX_APP_KEY').":".env('DROPBOX_APP_SECRET')."@api.dropbox.com/oauth2/token", [
                'form_params' => [
                    'grant_type' => 'refresh_token',
                    'refresh_token' => env('DROPBOX_APP_REFRESH_TOKEN'),
                ]
            ]);
            if ($res->getStatusCode() == 200) {
                $access_token_request = json_decode($res->getBody());
                return $access_token_request->access_token;
            } else {
                return false;
            }
        }
        catch (Exception $e) {
            $this->logger->error("[{$e->getCode()}] {$e->getMessage()}");
            return false;
        }
    }

    public function dropbox_faz_upload_de_imagem($access_token, $nome_arquivo, $arquivo) {
        $client = new Client($access_token);
        $caminho_dropbox = '/images/'.$nome_arquivo;
        $client->upload($caminho_dropbox, $arquivo, $mode='add');
    }

    public function dropbox_cria_shared_link($access_token, $nome_arquivo) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\":\"/images/".$nome_arquivo."\"}");
        $headers = array();
        $headers[] = 'Authorization: Bearer ' . $access_token;
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        $json = json_decode($result);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
        $url = str_replace('dl=0', 'raw=1', $json->url);
        return $url;
    }

    public function dropbox_remove_imagem($access_token, $nome_arquivo) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/files/delete_v2');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\":\"/images/".$nome_arquivo."\"}");
        $headers = array();
        $headers[] = 'Authorization: Bearer ' . $access_token;
        $headers[] = 'Content-Type: application/json';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            echo 'Error:' . curl_error($ch);
        }
        curl_close($ch);
    }
}