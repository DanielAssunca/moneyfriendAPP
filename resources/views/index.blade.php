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
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active"><a href="{{route('clientes.index')}}">Clientes</a></li>
                <li class="visible-xs"><a href="#">Sair</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="panel panel-info">
                            <div class="panel-heading">
                                <h3 class="panel-title">Total de Emprestimos Ativos</h3>
                            </div>
                            <div class="panel-body">
                                <h3>10</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Emprestimos Recebidos</h3>
                            </div>
                            <div class="panel-body">
                                <h3>8</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 text-center">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Emprestimos  Atrasados</h3>
                            </div>
                            <div class="panel-body">
                                <h3>20%</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">Ultimos Emprestimos  Realziados</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th class="hidden-xs">Acoes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">Bootstrap 4 - O que ha de novo?</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-info" href="#">Detalhes</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Trabalhando com modais</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-info" href="#">Detalhes</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">O que e um Framework</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-info" href="#">Detalhes</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Utilizando Scrollspy</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-info" href="#">Detalhes</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">Emprestimos em Aberto</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th class="hidden-xs">Acoes</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">Front-end</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-warning" href="#">Editar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Back-end</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-warning" href="#">Editar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Database</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-warning" href="#">Editar</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Mobile</a>
                                            </td>
                                            <td class="hidden-xs">
                                                <a class="btn btn-xs btn-warning" href="#">Editar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>
@endsection
