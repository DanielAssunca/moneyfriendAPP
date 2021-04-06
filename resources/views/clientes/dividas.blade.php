@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Dividas do Cliente</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ver Informações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes->dividas as $divida)
                                <tr>
                                    <td>{{ $divida->nome }}</td>
                                    <td><a href="{{ route('dividas.show', $divida->id) }}">
                                            Informações do Dividas</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <a href="{{ route('clientes.index') }}" class="btn btn-info">Voltar</a>

@endsection
