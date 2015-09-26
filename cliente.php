<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes - Curso POO Code.Education</title>

    <link href="<?php echo BASE_URL;?>/css/bootstrap.css" rel="stylesheet">

</head>

<body>

    <div class="container">

        <h2 class="page-header">
            Clientes
            <small>
                Curso de POO da Code.Education
            </small>
        </h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                Lista de clientes
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //array_walk($clientes, $exibirClientes); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <?php
    if(isset($_GET['acao'])) {
        switch($_GET['acao']) {
            case 'mostrar':
                $id = $_GET['id'];
                echo modalClientes($clientes, $id);
                break;
        }
    }
    ?>

    <script src="<?php echo BASE_URL;?>/js/jquery-1.11.0.js"></script>
    <script src="<?php echo BASE_URL;?>/js/bootstrap.min.js"></script>

</body>

</html>