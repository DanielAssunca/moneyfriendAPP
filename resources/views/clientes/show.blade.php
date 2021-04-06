@extends('shared.base')
@section('content')


    <body>
        {{--AQUI VAI SER CONSTRIODO O MENU DA APLICAÇÃO!!! --}}
        <nav class="navbar navbar-inverse float-left">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle pull-left">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">MoneyFrienD</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Sair</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="active"><a href="{{ route('dividas.index') }}">Dividas</a></li>
                    <li class="visible-xs"><a href="#">Sair</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Detalhes do Cliente</div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                                        <h4>Sobre o Cliente</h4>
                                        <p>Nome: {{ $clientes->nome }}</p>
                                        <p>E-Mail: {{ $clientes->email }}</p>
                                        <p>Telefone: {{ $clientes->telefone }}</p>
                                        <p>Tipo de Cliente: {{ $clientes->tipocliente }}</p>
                                        <p style="text-align: justify">Customizações: {{ $clientes->customizacoes }}</p>
                                        <p style="text-align: justify">Observações: {{ $clientes->observacoes }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection
