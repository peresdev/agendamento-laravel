@extends('layout.principal')

@section('conteudo')
	<div class="container">
	    <h1>Data: {{$a->Data}}</h1>

	    <ul>
	        <li><b>Data:</b> {{$a->Data or ''}}</li>
	        <li><b>Paciente:</b> {{$a->paciente->Nome or ''}}</li>
	        <li><b>Médico:</b> {{$a->medico->Nome or ''}}</li>
	    </ul>
	</div>
@stop