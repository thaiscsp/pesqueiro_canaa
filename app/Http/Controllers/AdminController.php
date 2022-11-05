<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Session, DB;

class AdminController extends Controller
{
    public function login(Request $request) {
        $email = $request->input('email');
        $senha = md5($request->input('senha'));

        $admins = Admin::all();
        if (DB::table('admins')->where([['email', '=', $email], ['pwd', '=', $senha]])->first()) {
            Session::flash('sucesso', 'Admin logado com sucesso.');
            Session::put('admin', $email);
            return redirect('admin');
        } else {
            Session::flash('erro', 'Ocorreu um erro.<br>Confira se os dados foram digitados corretamente.');
            return redirect('admin');
        }
    }

    public function logout() {
        Session::forget('admin');
        return redirect('/');
    }

    public function gerenciar_admins(Request $request) {
        if ($request->input('operacao') == 'Adicionar') {
            $admin = new Admin();
            $admin->email = $request->input('email');
            $admin->pwd = md5($request->input('senha'));
            $admin->save();
            Session::flash('sucesso', 'Admin adicionado com sucesso.');
            return redirect('gerenciar-admins');
        } elseif ($request->input('operacao') == 'Remover') {
            $admins = Admin::all();
            foreach ($admins as $admin) {
                if ($admin->email==Session::get('admin')) {
                    Session::flash('erro', 'Você não pode remover o admin com o qual está logado.');
                } elseif (  $admin->email == $request->input('email') and
                            $admin->pwd == md5($request->input('senha'))
                        ) {
                    $admin->delete();
                    Session::flash('sucesso', 'Admin removido com sucesso.');
                } else {
                    Session::flash('erro', 'Ocorreu um erro.<br>Confira se os dados foram digitados corretamente.');
                }
            }
            return redirect('gerenciar-admins');
        }
    }
}
