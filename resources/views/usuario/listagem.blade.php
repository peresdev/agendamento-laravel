@extends('layout.principal')

@section('conteudo')
    
    <div class="container">
    @if($usuarios->isEmpty())
        <div class="alert alert-danger">
            Você não tem nenhum paciente cadastrado.
        </div>

    @else
        <h1>Usuários</h1>
        <table id="usuario" class="table table-striped table-bordered table-hover">
            <thead>
                <th>Login</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach ($usuarios as $u)
                <tr>
                    <td> {{$u->Login}} </td>
                    <td>
                        <a href="/usuarios/mostra/{{$u->UsuarioID}}">Mostrar</a> |
                        <a href="{{action('UsuarioController@remove', $u->UsuarioID)}}">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    @if(old('Login'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O usuário {{ old('Login') }} foi adicionado.
        </div>
    @endif
    </div>

@stop