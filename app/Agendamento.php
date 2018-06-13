<?php

namespace agendamento;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $table = 'agendamentos';
    public $timestamps = false;
    protected $primaryKey = 'AgendamentoID';
    protected $fillable = array('Data, PacienteID, MedicoID');

    protected $casts = [
        'data' => 'datetime:Y-m-d H:i',
    ];

    public function paciente(){
        return $this->belongsTo('agendamento\Paciente', 'PacienteID');
    }

    public function medico(){
        return $this->belongsTo('agendamento\Medico', 'MedicoID');
    }
}
