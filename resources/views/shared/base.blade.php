<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistema de Acompanhamento de Clientes</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo asset('css/style.css')?>" type="text/css">


</head>

<body>

     <div class="row">
        <div class="col-md-12">

            @yield('content')


        </div>
    </div>
    <script type="text/javascript" src="<?php echo asset('js/script.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/jquery-3.1.1.js')?>"></script>
    @yield('script')
</body>





</html>
