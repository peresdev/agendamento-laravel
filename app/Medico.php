<?php

namespace agendamento;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
    protected $table = 'medicos';
    public $timestamps = false;
    protected $primaryKey = 'MedicoID';
    protected $fillable = array('Nome');

    public function agendamentos(){
        return $this->hasMany('agendamento\Agendamento', 'MedicoID');
    }
}
