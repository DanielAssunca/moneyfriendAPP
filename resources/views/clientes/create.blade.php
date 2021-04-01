@extends('shared.base')

@section('content')
        @if($errors->any())
            <div class="alert alert-danger" role="alert">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
    <div class="panel panel-default">

        <div class="panel-heading"><h3>Cadastre o imóvel</h3></div>
        <div class="panel-body">

    <form method="post" action="{{route ('clientes.store')}}">
        {{ csrf_field() }}
        <h4>Dados do Cliente</h4>
        <hr>
        <div class="form-group">
            <label for="descricao">Nome</label>
            <input type="text" class="form-control" placeholder="Nome" name="nome" required>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="preco">Celular\ZAP</label>
                    <input type="text" class="form-control" placeholder="Celular" name="celular" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Telefone</label>
                    <input type="text" class="form-control" placeholder="Telefone Fixo" required name="telefone">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">E-MAIL</label>
                    <input type="text" class="form-control" placeholder="E-MAIL" required name="email">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label for="qtdQuartos">Observação</label>
                    <input type="text" class="form-control" placeholder="Observação" required name="observacao">
                </div>
            </div>


        </div>

        <h4>Endereço</h4>
        <hr>

            <div class="form-group">
                <label for="logradouroEndereco">Logradouro</label>
                <input type="text" class="form-control" placeholder="Logradouro" required name="logradouroEndereco">
            </div>
        <div class="row">
            <div class="col-md-10">
                <div class="form-group">
                    <label for="bairroEndereco">Bairro</label>
                    <input type="text" class="form-control" placeholder="Bairro" required name="bairroEndereco">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="numero">Número</label>
                    <input type="number" class="form-control" placeholder="Número" required name="numeroEndereco">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cidadeEndereco">Cidade</label>
                    <input type="text" class="form-control" placeholder="Cidade" required name="cidadeEndereco">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="cepEndereco">CEP</label>
                    <input type="text" class="form-control" placeholder="CEP" required name="cepEndereco">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="tipo">Situação</label>
                    <select class="form-control" name="situacao" required>
                        <option>Em Dias</option>
                        <option>Em Atraso</option>
                        <option>Devendo</option>
                        <option>Quite</option>
                    </select>
                </div>
            </div>

        </div>
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
        </div>
    </div>

@endsection
