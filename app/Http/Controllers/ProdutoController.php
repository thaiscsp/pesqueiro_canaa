<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use Storage, Session;
use Spatie\Dropbox\Client;

class ProdutoController extends Controller
{
    public function gerenciar_produtos(Request $request) {
        // Se for solicitada a adição de um produto
        if ($request->input('operacao') == 'Adicionar') {

            // Recupera, respectivamente, o objeto da imagem, o arquivo em si e o nome do arquivo (com a extensão)
            $imagem = $request->file('imagem');
            $arquivo = $imagem->get();
            $nome_arquivo = $imagem->getClientOriginalName();
            
            // Instancia um novo produto no banco de dados e insere os dados nas colunas
            $produto = new Produto();
            $produto->nome = $request->input('nome');
            if ($request->input('tipo-especifico') <> '') {
                $produto->tipo = $request->input('tipo') .'_'. $request->input('tipo-especifico');
            } else {
                $produto->tipo = $request->input('tipo');
            }
            $produto->preco = $request->input('preco');
            $produto->nome_arquivo = $nome_arquivo;

            // API Dropbox - Solicitação de chaves temporárias (access tokens) a partir de chave permanente (refresh token)
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
                    $access_token = $access_token_request->access_token;
                } else {
                    return false;
                }
            }
            catch (Exception $e) {
                $this->logger->error("[{$e->getCode()}] {$e->getMessage()}");
                return false;
            }
            
            // API Dropbox - Abre conexão com o Dropbox e faz o upload do arquivo
            $client = new Client($access_token);
            $caminho_dropbox = '/images/'.$nome_arquivo;
            $client->upload($caminho_dropbox, $arquivo, $mode='add');
            
            // API Dropbox - Cria link compartilhável do arquivo que foi enviado ao Dropbox (para inserção nas tags img)
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/sharing/create_shared_link_with_settings');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\":\"/images/".$produto->nome_arquivo."\"}");
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

            // API Dropbox - Recupera a url informada na resposta json
            $url = str_replace('dl=0', 'raw=1', $json->url);
            // API Dropbox - Redução do caminho da imagem à sua identificação única (isso foi só pra contornar o problema do link)
            $produto->caminho_imagem = str_replace('https://www.dropbox.com/s/', '', $url);
            
            // Produto salvo no banco de dados
            $produto->save();

            // Informação de sucesso e retorno à página original
            Session::flash('sucesso', 'Produto adicionado com sucesso.');
            return redirect('gerenciar-cardapio');
        } 
        // Se for solicitada a remoção de um produto
        elseif ($request->input('operacao') == 'Remover') {
            // API Dropbox - Solicitação de chaves temporárias (access tokens) a partir de chave permanente (refresh token)
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
                    $access_token = $access_token_request->access_token;
                } else {
                    return false;
                }
            }
            catch (Exception $e) {
                $this->logger->error("[{$e->getCode()}] {$e->getMessage()}");
                return false;
            }

            // Recupera todos os produtos no banco
            $produtos = Produto::all();
            foreach ($produtos as $produto) {

                // Procura o produto com id idêntica à que foi informada para remoção
                if ($produto->id == $request->input('id')) {

                    // API Dropbox - Solicita remoção do arquivo de acordo com seu nome no Dropbox
                    $ch = curl_init();
                    curl_setopt($ch, CURLOPT_URL, 'https://api.dropboxapi.com/2/files/delete_v2');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                    curl_setopt($ch, CURLOPT_POST, 1);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, "{\"path\":\"/images/".$produto->nome_arquivo."\"}");
                    $headers = array();
                    $headers[] = 'Authorization: Bearer ' . $access_token;
                    $headers[] = 'Content-Type: application/json';
                    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                    $result = curl_exec($ch);
                    if (curl_errno($ch)) {
                        echo 'Error:' . curl_error($ch);
                    }
                    curl_close($ch);
                    
                    // Remove o produto do banco
                    $produto->delete();

                    // Informação de sucesso
                    Session::flash('sucesso', 'Produto removido com sucesso.');

                } else {
                    // Informação de erro
                    Session::flash('erro', 'Não existe produto com esse nome.');
                }
            }

            // Retorno à página original
            return redirect('gerenciar-cardapio');
        }
    }
}