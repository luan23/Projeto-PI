<?php
//	include "conexao.php";
//	//Define o numero de itens por pagina
//	$itens_por_pagina = 2;
//	//Pega a pagina atual
//	$pagina = intval($_GET['pagina']);
//	//Select que irá definir quantos registros irão ser exibidos
//	$select_limit = mysql_query("SELECT * FROM cliente LIMIT $pagina, $itens_por_pagina") or die(mysql_error);
//	//Grava dados na Variavel
//	$dados = mysql_fetch_assoc($select_limit);
//	//Contagem dos dados
//	$num = mysql_num_rows($select_limit);
//	//pega quantidade total de objetos no DB
//	$select_total = mysql_query("SELECT * FROM cliente");
//	$num_total = mysql_num_rows($select_total);
//	//Define numero total de páginas
//	$num_paginas = ceil($num_total/$itens_por_pagina);
	
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <head>
        <title>Condominio <!--Nome do condominio logado--></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Sistema Dedicado a gestão de Condomínios">
        <meta name="author" content="Luan Michel">

        <!-- Bootstrap Core CSS -->
        <link href="../../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        
        <!-- Custom CSS -->
        <link href="../../css/sb-admin.css" rel="stylesheet" type="text/css"/>
        
        <!-- Morris Charts CSS -->
        <link href="../../css/plugins/morris.css" rel="stylesheet" type="text/css"/>
        
        <!-- Custom Fonts -->
        <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
    </head>
    <body>
        <div id="wrapper">
       
            <!-- Navigation -->
            <?php include '../../includes/navBar_condomino.php'; ?>


            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Avisos e Comunicados
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Clique em cima do aviso que desejar ler.</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <?php if($num >0){ ?>
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Titulo</th>
                                            <th>Setor</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php do{ ?>
                                        <tr class="success">
                                            <td>Reforma do Prédio</td>
                                            <td>Sindico</td>
                                            <td>Nâo Lida</td>
                                            <td><a href="ler_comunicado.php?codigo=" target="blank"><i class="fa fa-fw fa-envelope"><strong>Ver</strong> </a></td>
                                        </tr>
                                        <?php }while($dados = mysql_fetch_assoc($select_limit))?>
                                    </tbody>
                                </table>
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li>
                                            <a href="clientes.php?pagina=0" aria-label="Previous">
                                                <span aria-hidden="true">Inicio</span>
                                            </a>
                                        </li>
                                        <?php for($i=0; $i<$num_paginas; $i++){ 
                                            $estilo = "";
                                            if($pagina == $i)
                                                $estilo = "class = 'active'";
                                        ?>
                                        <li <?php echo $estilo; ?><a href="clientes.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
                                        <?php } ?>
                                        <li>
                                          <a href="clientes.php?pagina=<?php echo $num_paginas-1; ?>" aria-label="Next">
                                            <span aria-hidden="true">Ultima</span>
                                          </a>
                                        </li>
                                      </ul>
                                </nav>
                                <?php } ?>
                            </div>
                        </div>
                    </div>    
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrappe -->
        <!-- jQuery -->
        <script src="../../js/jquery.js" type="text/javascript"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="../../js/bootstrap.min.js" type="text/javascript"></script>
        
    </body>
</html>
