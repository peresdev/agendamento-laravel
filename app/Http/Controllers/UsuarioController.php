<?php

namespace agendamento\Http\Controllers;

use agendamento\Http\Requests\UsuariosRequest;
use agendamento\Usuario;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class UsuarioController extends Controller
{

    public function lista(){
        $usuarios = Usuario::all();
        return view('usuario.listagem')->with('usuarios', $usuarios);
    }

    public function mostra($id){
        $usuario = Usuario::find($id);
        if(empty($usuario)) {
            return "Esse usuário não existe";
        }
        return view('usuario.detalhes')->with('u', $usuario);
    }

    public function novo(){
        return view('usuario.formulario');
    }

    public function adiciona(UsuariosRequest $request){
        Usuario::create($request->all());

        return redirect()
            ->action('UsuarioController@lista')
            ->withInput(Request::only('Login'));
    }

    public function remove($id){
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect()
            ->action('UsuarioController@lista');
    }

}
