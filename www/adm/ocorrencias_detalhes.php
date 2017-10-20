
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
                                Controle de Ocorrências.
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Detalhe de Ocorrência</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th>Código</th>
                                            <th>Titulo</th>
                                            <th>Data da Ocorrência</th>
                                            <th>Status</th>
                                        </tr>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Portão Principal</td>
                                            <td>22/01/2017</td>
                                            <td>Não respondida</td>
                                        </tr>
                                    </tbody>
                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead>
                                        <th>Conteúdo</th>
                                    </thead>
                                    <tbody>
                                        <td>Comunico que quando passam das 23h os portões do condominios continuam abertos</td>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <form class="role">
                                <div class="form-group">
                                    <label>Digite Sua Rersposta</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            </form>
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