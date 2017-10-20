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
                                Reserva de Espaço
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Escolha o Espaço Desejado</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <img alt="Bootstrap Thumbnail First" src="../../Imagens/piscina.JPG"/>
                                    <div class="caption">
                                            <h3>
                                                Piscina
                                            </h3>
                                            <p>
                                                Reserve a Piscina para Eventos.
                                            </p>
                                            <p>
                                                    <a class="btn btn-primary" href="#">Reservar</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <img alt="Bootstrap Thumbnail First" src="../../Imagens/salao.jpg"/>
                                    <div class="caption">
                                            <h3>
                                                Salão de Festas
                                            </h3>
                                            <p>
                                                Reserve o Salão de Festas para Eventos.
                                            </p>
                                            <p>
                                                    <a class="btn btn-primary" href="#">Reservar</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="thumbnail">
                                <img alt="Bootstrap Thumbnail First" src="../../Imagens/quadra.JPG"/>
                                    <div class="caption">
                                            <h3>
                                                Quadra de Esportes
                                            </h3>
                                            <p>
                                                Reserve o Quadra de Esportes.
                                            </p>
                                            <p>
                                                    <a class="btn btn-primary" href="#">Reservar</a>
                                            </p>
                                    </div>
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
