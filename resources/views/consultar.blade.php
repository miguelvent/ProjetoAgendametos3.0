<!-- Miguel Vent - ProjetoWeb -->


@extends('layouts.main')
@section('title', 'Formulario | Consultar')
@section('content')
    <div class="row">
    <div class="card mb-3 col-12 d-flex justify-content-center">
        <div class="card-body w-100 m-auto">
            <h4 class="card-title">Consultar - Contatos Agendados</h5>
            @if(session()->has('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            <table class="w-100 table table-striped mt-3">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Origem</th>
                        <th scope="col">Contato</th>
                        <th scope="col">Observacão</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($agendamentos as $agendamento)
                        <tr class="cursor-pointer">
                            <th scope="row">{{ $agendamento->id }}</th>
                            <td>{{ $agendamento->nome }}</td>
                            <td>{{ $agendamento->telefone }}</td>
                            <td>{{ $agendamento->origem }}</td>
                            <td>{{ $agendamento->data_contato }}</td>
                            <td>{{ $agendamento->observacao }}</td>
                            <td class="d-flex">
                            <form action="/client/{{ $agendamento->id }}" method="POST">
                                    @csrf
                                    @method('GET')
                                    <button type="submit" class="btn d-flex">Deletar</button>
                                </form>
                                <form action="/client/{{ $agendamento->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn d-flex">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    </div>
@endsection
