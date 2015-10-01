<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes - Curso POO Code.Education</title>

    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                            $cliente1 = new \app\Cliente\Cliente(1, 'marcus', 'Marcus', 'buthy88@gmail.com', '066.166.899-13', 'M');
                            $cliente2 = new \app\Cliente\Cliente(2, 'joao', 'João', 'joao@gmail.com', null, 'M');
                            $cliente3 = new \app\Cliente\Cliente(3, 'maria', 'Maria', 'maria@gmail.com', null, 'F');
                            $cliente4 = new \app\Cliente\Cliente(4, 'silvia', 'Silvia', 'silvia@gmail.com', null, 'F');
                            $cliente5 = new \app\Cliente\Cliente(5, 'magnus', 'Magnus', 'magnus@gmail.com', null, 'M');
                            $cliente6 = new \app\Cliente\Cliente(6, 'inez', 'Inez', 'inez@gmail.com', null, 'F');
                            $cliente7 = new \app\Cliente\Cliente(7, 'gustavo', 'Gustavo', 'gustavo@gmail.com', null, 'M');
                            $cliente8 = new \app\Cliente\Cliente(8, 'marcio', 'Marcio', 'marcio@gmail.com', null, 'M');
                            $cliente9 = new \app\Cliente\Cliente(9, 'pedro', 'Pedro', 'pedro@gmail.com', null, 'M');
                            $cliente10 = new \app\Cliente\Cliente(10, 'joana', 'Joana', 'joana@gmail.com', null, 'F');

                            $clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);

                            foreach ($clientes as $arr) {
                                echo "<tr><th>".$arr->getId()."</th><th>".$arr->getLogin()."</th><th>".$arr->getNome()."</th><th><span class=\"btn btn-primary btn-xs\" onClick=\"javascript:abrirModal('".$arr->getNome()."', 'Login: ".$arr->getLogin()."<br>E-mail: ".$arr->getEmail()."<br>CPF: ".$arr->getCpf()."<br>Sexo: ".$arr->getSexo()."');\">Ver informações</span></th></tr>";
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

    <script src="/js/jquery-1.11.0.js"></script>
    <script src="/js/bootstrap.min.js"></script>
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