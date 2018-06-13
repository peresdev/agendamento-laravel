@extends('layout.principal')

@section('conteudo')
	<div class="container">
	    <h1>Usuário: {{$u->Login}}</h1>

	    <ul>
	        <li>
	            <b>Usuário:</b> {{$u->Login}}
	        </li>
	        <li><b>Senha:</b> *****</li>
	    </ul>
	</div>
@stop