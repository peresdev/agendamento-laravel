@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <h1>Novo usuário</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/usuarios/adiciona" method="post">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group">
                <label>Usuário</label>
                <input name="Login" class="form-control" value="{{ old('Login') }}" />
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input name="Senha" type="password" class="form-control" value="{{ old('Senha') }}" />
            </div>
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </form>
    </div>
@stop