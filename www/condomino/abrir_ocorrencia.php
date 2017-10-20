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
                                Abertura de Ocorrência
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Cadastre sua Ocorrêcia</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="..." method="post">
                                <div class="form-group">
                                    <label>Assunto</label>
                                    <input class="form-control" placeholder="Informe o Assunto da Ocorrência">
                                </div>
                                <div class="form-group">
                                    <label>Conteúdo.</label>
                                    <textarea class="form-control" rows="3" placeholder="Descreva o conteúdo de sua ocorrência."></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Selecionar Arquivo. <span class="alert-danger"><small> *Não Obrigatório.</small></span></label>
                                    <input type="file">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                                </div>
                                
                            </form>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ocorrências Abertas 4</h3>
                                </div>
                                <div class="panel-body">
                                    <a href="ocorrencia_aberta.php">Todas Ocorrências Abertas</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Ocorrências Respondidas 55</h3>
                                </div>
                                <div class="panel-body">
                                    <a href="ocorrencia_fechada.php">Todas Ocorrências Respondidas</a>
                                </div>
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