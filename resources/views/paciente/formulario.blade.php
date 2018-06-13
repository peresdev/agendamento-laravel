@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <h1>Novo paciente</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/pacientes/adiciona" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group">
                <label>Nome</label>
                <input name="Nome" class="form-control" value="{{ old('Nome') }}" />
            </div>
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </form>
    </div>
@stop