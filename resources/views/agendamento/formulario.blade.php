@extends('layout.principal')

@section('conteudo')
    <div class="container">
        <h1>Novo agendamento</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/agendamentos/adiciona" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <div class="form-group">
                <label>Data</label>
                <input name="Data" class="form-control data" value="{{ old('Data') }}" />
            </div>
            <div class="form-group">
                <label>Paciente</label>
                <select name="PacienteID" class="form-control">
                    @foreach($pacientes as $p)
                        <option value="{{$p->PacienteID}}">{{$p->Nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Médico</label>
                <select name="MedicoID" class="form-control">
                    @foreach($medicos as $m)
                        <option value="{{$m->MedicoID}}">{{$m->Nome}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Adicionar</button>
        </form>
    </div>
@stop