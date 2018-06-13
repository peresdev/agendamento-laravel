@extends('layout.principal')

@section('conteudo')
	<div class="container">
	    <h1>Paciente: {{$p->Nome}}</h1>

	    <ul>
	        <li>
	            <b>Nome:</b> {{$p->Nome}}
	        </li>
	    </ul>
	</div>
@stop