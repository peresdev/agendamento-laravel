<?php

namespace agendamento;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    public $timestamps = false;
    protected $primaryKey = 'PacienteID';
    protected $fillable = array('Nome');

    public function agendamentos(){
        return $this->hasMany('agendamento\Agendamento', 'PacienteID');
    }
}
