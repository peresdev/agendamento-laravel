@extends('layout.principal')

@section('conteudo')
	<div class="container">
	    <h1>Médico: {{$m->Nome}}</h1>

	    <ul>
	        <li>
	            <b>Nome:</b>{{$m->Nome}}
	        </li>
	    </ul>
	</div>
@stop