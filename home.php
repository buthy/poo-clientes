<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes - Curso POO Code.Education</title>

    <link href="<?php echo BASE_URL;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL;?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">

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
                    <table class="table table-striped table-bordered table-hover" id="tabela">
                        <thead>
                            <tr>
                                <th># <i class="fa fa-sort"></i></th>
                                <th>Nome</th>
                                <th>Login</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $array = array(
                                1 => array(
                                    "id" => 1,
                                    "login" => "marcus",
                                    "nome" => "Marcus David",
                                    "email" => "buthy88@gmail.com",
                                    "cpf" => "066.166.899-13",
                                    "sexo" => "M"
                                ),
                                2 => array(
                                    "id" => 2,
                                    "login" => "buthy",
                                    "nome" => "Buthy",
                                    "email" => "buthy88@gmail.com",
                                    "cpf" => "066.166.899-13",
                                    "sexo" => "M"
                                ),
                                3 => array(
                                    "id" => 3,
                                    "login" => "teste",
                                    "nome" => "Teste",
                                    "email" => "buthy88@gmail.com",
                                    "cpf" => "066.166.899-13",
                                    "sexo" => "M"
                                )
                            );

                            for ($i = 1; $i <= 3; $i++) {
                                $clientes = new app\Cliente\Cliente($array[$i]["id"], $array[$i]["login"], $array[$i]["nome"], $array[$i]["email"], $array[$i]["cpf"], $array[$i]["sexo"]);
                                echo "<tr><th>".$clientes->getId()."</th><th>".$clientes->getLogin()."</th><th>".$clientes->getNome()."</th><th><span class=\"btn btn-primary btn-xs\" onClick=\"javascript:abrirModal('".$clientes->getNome()."', 'Login: ".$clientes->getLogin()."<br>E-mail: ".$clientes->getEmail()."<br>CPF: ".$clientes->getCpf()."<br>Sexo: ".$clientes->getSexo()."');\">Ver informações</span></th></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade" id="infoCliente" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                    <h4 class="modal-title" id="modal-title"></h4>
                </div>
                <div class="modal-body" id="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo BASE_URL;?>/js/jquery-1.11.0.js"></script>
    <script src="<?php echo BASE_URL;?>/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function(){
            $('#tabela').dataTable({
                "info":     false,
                "paging": false,
                "searching": false
            });
        });

        function abrirModal(titulo, conteudo) {
            $("#modal-title", "#infoCliente").html(titulo);
            $("#modal-body", "#infoCliente").html(conteudo);
            $("#infoCliente").modal();
        }
    </script>

</body>

</html>