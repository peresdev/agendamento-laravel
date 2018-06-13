<?php

namespace agendamento\Http\Controllers;

use agendamento\Http\Requests\MedicosRequest;
use agendamento\Medico;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MedicoController extends Controller
{

    public function lista(){
        $medicos = Medico::all();
        return view('medico.listagem')->with('medicos', $medicos);
    }

    public function mostra($id){
        $medico = Medico::find($id);
        if(empty($medico)) {
            return "Esse medico não existe";
        }
        return view('medico.detalhes')->with('m', $medico);
    }

    public function novo(){
        return view('medico.formulario');
    }

    public function adiciona(MedicosRequest $request){
        Medico::create($request->all());

        return redirect()
            ->action('MedicoController@lista')
            ->withInput(Request::only('Nome'));
    }

    public function remove($id){
        $medico = Medico::find($id);
        $medico->delete();
        return redirect()
            ->action('MedicoController@lista');
    }

    public function listaJson(){
        $medicos = DB::select('select * from medicos');
        return response()->json($medicos);
    }

}
