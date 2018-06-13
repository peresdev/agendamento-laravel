<?php

namespace agendamento\Http\Controllers;

use agendamento\Paciente;
use agendamento\Medico;
use agendamento\Http\Requests\AgendamentosRequest;
use agendamento\Agendamento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class AgendamentoController extends Controller
{

    public function lista(){
        $agendamentos = Agendamento::all();
        return view('agendamento.listagem')->with('agendamentos', $agendamentos);
    }

    public function mostra($id){
        $agendamento = Agendamento::find($id);
        if(empty($agendamento)) {
            return "Esse agendamento não existe";
        }
        return view('agendamento.detalhes')->with('a', $agendamento);
    }

    public function novo(){
        return view('agendamento.formulario')->with('pacientes', Paciente::all())->with('medicos', Medico::all());
    }

    public function adiciona(AgendamentosRequest $request){
        
        DB::table('agendamentos')->insert(
            ['Data' => $request->all()['Data'], 'PacienteID' => $request->all()['PacienteID'], 'MedicoID' => $request->all()['MedicoID']]
        );
        
        return redirect()
            ->action('AgendamentoController@lista')
            ->withInput(Request::only('Data'));
    }

    public function remove($id){
        $agendamento = Agendamento::find($id);
        $agendamento->delete();
        return redirect()
            ->action('AgendamentoController@lista');
    }

}
