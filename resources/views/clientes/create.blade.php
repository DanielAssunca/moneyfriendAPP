@extends('shared.base')

@section('content')

    <body>
        {{-- AQUI VAI SER CONSTRUIDO O MENU DA APLICAÇÃO!!! --}}
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
                        <li><a href="#">Sair!</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="main">
            <div class="menu">
                <ul>
                    <li><a href="{{ route('index') }}">Home</a></li>
                    <li class="active"><a href="{{ route('clientes.index') }}">Clientes</a></li>
                    <li class="visible-xs"><a href="#">Sair</a></li>
                </ul>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                @foreach ($errors->all() as $error)
                                    {{ $error }}<br>
                                @endforeach
                            </div>
                        @endif
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <h3>Cadastro de Cliente</h3>
                            </div>
                            <div class="panel-body">

                                <form method="post" action="{{ route('clientes.store') }}">
                                    {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="form-group">
                                                <label for="nome">Nome</label>
                                                <input type="text" class="form-control" placeholder="Nome" name="nome"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="email">E-mail</label>
                                                <input type="email" class="form-control" placeholder="e-mail" name="email"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="celular">Celular</label>
                                                <input type="tel" class="form-control" placeholder="Celular" required
                                                    name="celular">
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="telefone">Telefone</label>
                                                <input type="tel" class="form-control" placeholder="Telefone de Contato"
                                                    required name="telefone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <label for="tipocliente">Tipo de Cliente</label>
                                                <select class="form-control" name="tipocliente" required>
                                                    <option>Pessoa Fisica</option>
                                                    <option>Pessoa Juridica</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Cep:
                                                        <input class="form-control" name="cep" type="text" id="cep" value=""
                                                            size="5" maxlength="9" onblur="pesquisacep(this.value);" />
                                                    </label><br />

                                                    <label>Rua:
                                                        <input class="form-control" name="rua" type="text" id="rua"
                                                            size="60" /></label><br />
                                                    <label>Número:
                                                        <input class="form-control" name="numero" type="text" id="numero"
                                                            size="5" /></label><br />
                                                    <label>Bairro:
                                                        <input class="form-control" name="bairro" type="text" id="bairro"
                                                            size="40" /></label><br />

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <label>Cidade:
                                                        <input class="form-control" name="cidade" type="text" id="cidade"
                                                            size="40" /></label><br />
                                                    <label>Estado:
                                                        <input class="form-control" name="uf" type="text" id="uf"
                                                            size="2" /></label><br />

                                                    <label>IBGE:
                                                        <input class="form-control" name="ibge" type="text" id="ibge"
                                                            size="8" /></label><br />
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Observações:</span>
                                                </div>
                                                <textarea name="observacao"
                                                    style="margin: 0px; width: 538px; height: 100px;" class="form-control"
                                                    aria-label="With textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <a href="{{ url()->previous() }}" class="btn btn-info">Voltar</a>
                                            <button type="submit" class="btn btn-primary">Cadastrar</button>
                                        </div>

                                    </div>

                            </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        </div>

    </body>
@endsection
