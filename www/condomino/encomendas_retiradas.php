<!DOCTYPE html>
<html lang="pt-br">
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
                                Pacotes e Encomendas
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Encomendas Retiradas</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <?php if($num >0){ ?>
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr class="success">
                                            <th>Tipo</th>
                                            <th>Entregue por</th>
                                            <th>Data de chegada</th>
                                            <th>Data de Retirada</th>
                                            <th>Retirada por: </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php do{ ?>
                                        <tr>
                                            <td>Carta</td>
                                            <td>Correios</td>
                                            <td>22/02/2015</td>
                                            <td>23/02/2015</td>
                                            <td>Augusto Reis</td>
                                        </tr>
                                        <tr>
                                            <td>Pacote</td>
                                            <td>josé Alves</td>
                                            <td>15/03/2016</td>
                                            <td>18/03/2016</td>
                                            <td>Antonia Ribeiro</td>
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
                                        <li<?php echo $estilo; ?><a href="clientes.php?pagina=<?php echo $i; ?>"><?php echo $i+1; ?></a></li>
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