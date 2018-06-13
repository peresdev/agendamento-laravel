@extends('layout.principal')

@section('conteudo')
    
    <div class="container">
    @if($pacientes->isEmpty())
        <div class="alert alert-danger">
            Você não tem nenhum paciente cadastrado.
        </div>

    @else
        <h1>Pacientes</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Paciente</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach ($pacientes as $p)
                <tr>
                    <td> {{$p->Nome}} </td>
                    <td>
                        <a href="/pacientes/mostra/{{$p->PacienteID}}">Mostrar</a> |
                        <a href="{{action('PacienteController@remove', $p->PacienteID)}}">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    @if(old('Nome'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O paciente {{ old('Nome') }} foi adicionado.
        </div>
    @endif
    </div>

@stop