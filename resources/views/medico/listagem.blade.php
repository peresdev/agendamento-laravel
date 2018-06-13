@extends('layout.principal')

@section('conteudo')
    
    <div class="container">
        @if($medicos->isEmpty())
            <div class="alert alert-danger">
                Você não tem nenhum médico cadastrado.
            </div>

        @else
            <h1>Médicos</h1>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <th>Médico</th>
                    <th>Ação</th>
                </thead>
                <tbody>
                @foreach ($medicos as $m)
                    <tr>
                        <td> {{$m->Nome}} </td>
                        <td>
                            <a href="/medicos/mostra/{{$m->MedicoID}}">Mostrar</a> |
                            <a href="{{action('MedicoController@remove', $m->MedicoID)}}">Remover</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif

        @if(old('Nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong>
                O médico {{ old('Nome') }} foi adicionado.
            </div>
        @endif
    </div>

@stop