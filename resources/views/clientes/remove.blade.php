@extends('shared.base')
@section('content')

    @if (Session::has('mensagem'))
        <div class="row">
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <div align="center">
                        {{ Session::get('mensagem')['msg'] }}
                    </div>
                </div>
            </div>
        </div>
    @endif

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
                    <a class="navbar-brand" href="#">SysAcomp</a>
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
                            <div class="panel-heading">Remover o Cliente</div>
                            <div class="panel-body">
                                <form method="post" action="{{ route('clientes.destroy', $clientes->id) }}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4>Tem certeza que deseja remover o cliente?</h4>
                                            <hr>
                                            <h4>Sobre o Cliente</h4>
                                            <p>Nome: {{ $clientes->nome }}</p>
                                            <p>E-Mail: {{ $clientes->email }}</p>
                                            <p>Telefone: {{ $clientes->telefone }}</p>
                                            <p>Tipo de Cliente: {{ $clientes->tipocliente }}</p>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-danger">Remover</button>
                                    <a href="{{ route('clientes.index') }}" class="btn btn-defaut">Voltar</a>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </body>
@endsection
