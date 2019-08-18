<!DOCTYPE html>
<html>
<head>
    <title>@yield('titulo-head')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.12/jquery.mask.js"></script>
    <script src="https://kit.fontawesome.com/847516fe54.js"></script>
    <style>
        .actions {
            width: 200px;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            float: right;
        }

        .jumbo-header {
            height: 100px;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="jumbotron jumbo-header">
        <div>Sistema de Cadastro</div>
        <div class="row">
            <div style="font-size: 150%" class="col-sm-9">@yield('header-titulo')</div>
        </div>
    </div>

    @yield('conteudo')
</div>
</body>
</html>