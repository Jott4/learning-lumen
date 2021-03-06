<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SENAI - Sistema de gerenciamento</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="starter-template">
            <h1>Sistema de gerenciamento - SENAI</h1>
            <p class="lead">O sistema utilizado por todas as unidades do senai em todo o Brasil,<br>utilizada por mais
                de 5.000.000 de alunos.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Administrador</h3>
                </div>
                <div class="panel-body">
                    <p>Acesse a aplicação como adminsitrador.</p>
                    <a href="{{url('admin')}}" class="btn btn-primary">Sou administrador</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Professor</h3>
                </div>
                <div class="panel-body">
                    <p>Acesse a aplicação como professor.</p>
                    <a href="{{url('professor')}}" class="btn btn-primary">Sou professor</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Aluno</h3>
                </div>
                <div class="panel-body">
                    <p>Acesse a aplicação como aluno.</p>
                    <a href="{{url('aluno')}}" class="btn btn-primary">Sou aluno</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
