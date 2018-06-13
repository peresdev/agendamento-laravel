@extends('layout.principal')

@section('conteudo')
    <div class="container">
    @if($agendamentos->isEmpty())
        <div class="alert alert-danger">
            Não existe nenhum agendamento cadastrado.
        </div>

    @else
        <h1>Agendamentos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <th>Data / Hora</th>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Ação</th>
            </thead>
            <tbody>
            @foreach ($agendamentos as $a)
                <tr>
                    <td> {{$a->Data}} </td>
                    <td> {{$a->paciente->Nome or ''}} </td>
                    <td> {{$a->medico->Nome or ''}} </td>
                    <td>
                        <a href="/agendamentos/mostra/{{$a->AgendamentoID}}">Mostrar</a> |
                        <a href="{{action('AgendamentoController@remove', $a->AgendamentoID)}}">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif

    @if(old('Data'))
        <div class="alert alert-success">
            <strong>Sucesso!</strong>
            O agendamento para {{ old('Data') }} foi realizado.
        </div>
    @endif
    </div>

@stop