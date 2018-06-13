<?php

namespace agendamento;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = 'usuarios';
    public $timestamps = false;
    protected $primaryKey = 'UsuarioID';
    protected $fillable = array('Login, Senha');
}
