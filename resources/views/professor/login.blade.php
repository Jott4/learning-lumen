<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>SENAI - Sistema de gerenciamento</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Logar no sistema</h3>
                </div>
                <div class="panel-body">
                    <form role="form">
                        <fieldset>
                            <div class="alert alert-danger alert-dismissable">
                                <button aria-hidden="true" class="close" data-dismiss="alert" type="button">×</button>
                                E-mail ou senha estão incorretos!
                            </div>
                            <div class="form-group">
                                <input autofocus class="form-control" name="email" placeholder="E-mail" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" placeholder="Senha" type="password"
                                       value="">
                            </div>
                            <a class="btn btn-lg btn-success btn-block" href="disciplina/lista.html">Entrar</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
