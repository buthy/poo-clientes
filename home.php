<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Clientes - Curso POO Code.Education</title>

    <link href="<?php echo BASE_URL; ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
                                <th>Login</th>
                                <th>Nome</th>
                                <th>Tipo</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $cliente1 = new \app\cliente\types\clientepf();
                            $cliente1   ->setId(1)
                                        ->setLogin('marcus')
                                        ->setNome('Marcus David')
                                        ->setEmail('buthy88@gmail.com')
                                        ->setEndereco('Rua Alberto Dalcanalle, 163, Centro')
                                        ->setCpf('066.166.899-13')
                                        ->setTipo('F')
                                        ->setGrauImportancia(4);
                            $cliente2 = new \app\cliente\types\clientepf();
                            $cliente2   ->setId(2)
                                        ->setLogin('silvia')
                                        ->setNome('Silvia Regina')
                                        ->setEmail('silvia@gmail.com')
                                        ->setEndereco('Rua Alberto Dalcanalle, 163, Centro')
                                        ->setCpf('000.000.000-00')
                                        ->setTipo('F')
                                        ->setGrauImportancia(4);
                            $cliente3 = new \app\cliente\types\clientepf();
                            $cliente3   ->setId(3)
                                        ->setLogin('magnus')
                                        ->setNome('Magnus Artuso')
                                        ->setEmail('magnus@gmail.com')
                                        ->setEndereco('Rua Alberto Dalcanalle, 163, Centro')
                                        ->setCpf('000.000.000-00')
                                        ->setTipo('F')
                                        ->setGrauImportancia(4);
                            $cliente4 = new \app\cliente\types\clientepf();
                            $cliente4   ->setId(4)
                                        ->setLogin('inez')
                                        ->setNome('Inez Artuso')
                                        ->setEmail('inez@gmail.com')
                                        ->setEndereco('Rua Alberto Dalcanalle, 163, Centro')
                                        ->setCpf('000.000.000-00')
                                        ->setTipo('F')
                                        ->setGrauImportancia(5);
                            $cliente5 = new \app\cliente\types\clientepf();
                            $cliente5   ->setId(5)
                                        ->setLogin('gevaldino')
                                        ->setNome('Gevaldino Moraes')
                                        ->setEmail('giba@gmail.com')
                                        ->setEndereco('Rua Alberto Dalcanalle, 163, Centro')
                                        ->setCpf('000.000.000-00')
                                        ->setTipo('F')
                                        ->setGrauImportancia(5);
                            $cliente6 = new \app\cliente\types\clientepj();
                            $cliente6   ->setId(6)
                                        ->setLogin('fisk')
                                        ->setNome('Fisk Fronteira')
                                        ->setEmail('fisk@fisk.com.br')
                                        ->setEndereco('Dionísio Cerqueira')
                                        ->setCnpj('00.000.000/0000-00')
                                        ->setTipo('J')
                                        ->setRazaoSocial('Fisk Fronteira e Cia Ltda')
                                        ->setEnderecoCobranca('Mesmo endereço')
                                        ->setGrauImportancia(5);
                            $cliente7 = new \app\cliente\types\clientepj();
                            $cliente7   ->setId(7)
                                        ->setLogin('mclee')
                                        ->setNome('McLee Editora Gráfica')
                                        ->setEmail('mclee@mclee.com.br')
                                        ->setEndereco('São Miguel do Oeste')
                                        ->setCnpj('00.000.000/0000-00')
                                        ->setTipo('J')
                                        ->setRazaoSocial('McLee Inc')
                                        ->setEnderecoCobranca('Rua XV de Novembro')
                                        ->setGrauImportancia(5);
                            $cliente8 = new \app\cliente\types\clientepj();
                            $cliente8   ->setId(8)
                                        ->setLogin('voxsis')
                                        ->setNome('Voxsis')
                                        ->setEmail('voxsis@voxsis.com.br')
                                        ->setEndereco('SMO/SC')
                                        ->setCnpj('00.000.000/0000-00')
                                        ->setTipo('J')
                                        ->setRazaoSocial('Voxsis Inc')
                                        ->setEnderecoCobranca('Mesmo endereço')
                                        ->setGrauImportancia(3);
                            $cliente9 = new \app\cliente\types\clientepj();
                            $cliente9   ->setId(9)
                                        ->setLogin('kepler')
                                        ->setNome('Kepler Sistemas')
                                        ->setEmail('kepler@kepler.inf.br')
                                        ->setEndereco('São Miguel do Oeste')
                                        ->setCnpj('00.000.000/0000-00')
                                        ->setTipo('J')
                                        ->setRazaoSocial('Kepler Co.')
                                        ->setEnderecoCobranca('SMO')
                                        ->setGrauImportancia(4);
                            $cliente10 = new \app\cliente\types\clientepj();
                            $cliente10  ->setId(10)
                                        ->setLogin('kam')
                                        ->setNome('KAM')
                                        ->setEmail('kam@kam.inf.br')
                                        ->setEndereco('Arapongas')
                                        ->setCnpj('00.000.000/0000-00')
                                        ->setTipo('J')
                                        ->setRazaoSocial('KAM Co.')
                                        ->setEnderecoCobranca('Arapongas, PR')
                                        ->setGrauImportancia(5);

                            $clientes = array($cliente1, $cliente2, $cliente3, $cliente4, $cliente5, $cliente6, $cliente7, $cliente8, $cliente9, $cliente10);

                            foreach ($clientes as $arr) {
                                $str = "";
                                $str .= "<tr>
                                        <th>".$arr->getId()."</th>
                                        <th>".$arr->getLogin()."</th>
                                        <th>".$arr->getNome()."</th>
                                        <th>".$arr->getTipo()."</th>
                                        <th>
                                            <span class=\"btn btn-primary btn-xs\" onClick=\"javascript:abrirModal(
                                                '".$arr->getNome()."',
                                                'Login: ".$arr->getLogin().
                                                "<br>E-mail: ".$arr->getEmail().
                                                "<br>Endereço: ".$arr->getEndereco().
                                                "<br>Grau de importância: ".$arr->getGrauImportancia();
                                                ($arr->getTipo() == 'F' ? $str .= "<br>CPF: ".$arr->getCpf() : $str .= "<br>CNPJ: ".$arr->getCnpj()."<br>Razão social: ".$arr->getRazaoSocial()."<br>Endereço de cobrança: ".$arr->getEnderecoCobranca() );
                                $str .=         "');\">
                                                Ver informações
                                            </span>
                                        </th>
                                     </tr>";

                                echo $str;
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

    <script src="<?php echo BASE_URL; ?>/js/jquery-1.11.0.js"></script>
    <script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
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