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
                    <div class="panel panel-default">
                        <div class="panel-heading">Lista de Clientes</div>
                        <form method="GET" action="{{route('clientes.index', 'buscar' )}}">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="text"  style="text-transform:uppercase;" class="form-control" placeholder="Digite o nome do cliente"
                                            name="buscar">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info"
                                                style="padding-right: 20px; padding-left: 17px;"
                                                type="submit">Pesquisar</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Dividas</th>
                                            <th>Email</th>
                                            <th>Telefone</th>
                                            <th>Tipo de Cliente</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clientes as $cliente)
                                        <tr>
                                            <td>{{$cliente->nome}}</td>
                                              {{--<td><a href="{{route('clientes.dividas', $cliente->id)}}">Listar Dividas</a></td>--}}
                                            <td>{{$cliente->email}}</td>
                                            <td>{{$cliente->telefone}}</td>
                                            <td>{{$cliente->tipocliente}}</td>


                                            <td>
                                                <a href="{{route('clientes.edit', $cliente->id)}}"><i
                                                        class="glyphicon glyphicon-pencil"></i></a>
                                                <a href="{{route('clientes.remove', $cliente->id)}}"><i
                                                        class="glyphicon glyphicon-trash"></i></a>
                                                <a href="{{route('clientes.show', $cliente->id)}}"><i
                                                        class="glyphicon glyphicon-zoom-in"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div align="center" class="row">
                            {{ $clientes->links() }}

                        </div>
                    </div>
                    <a href="{{route('clientes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
