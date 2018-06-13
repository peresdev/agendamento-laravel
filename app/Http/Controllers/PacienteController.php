<?php

namespace agendamento\Http\Controllers;

use agendamento\Http\Requests\PacientesRequest;
use agendamento\Paciente;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class PacienteController extends Controller
{

    public function lista(){
        $pacientes = Paciente::all();
        return view('paciente.listagem')->with('pacientes', $pacientes);
    }

    public function mostra($id){
        $paciente = Paciente::find($id);
        if(empty($paciente)) {
            return "Esse paciente não existe";
        }
        return view('paciente.detalhes')->with('p', $paciente);
    }

    public function novo(){
        return view('paciente.formulario');
    }

    public function adiciona(PacientesRequest $request){
        Paciente::create($request->all());

        return redirect()
            ->action('PacienteController@lista')
            ->withInput(Request::only('Nome'));
    }

    public function remove($id){
        $paciente = Paciente::find($id);
        $paciente->delete();
        return redirect()
            ->action('PacienteController@lista');
    }
    
}
