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
            <?php include '../../includes/navBar_adm.php'; ?>
            <div id="page-wrapper">

                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">
                                Bem Vindo, Usuário!
                                <small>A sua página inicial do sistema</small>
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Funções Administrativas</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                            <h3 class="alert-info">
                                                Cadastrar novo Usuário
                                            </h3>
                                            <p>
                                                Aqui você pode cadastrar um novo usuário, tanto condômino quanto usuario administrativo.    
                                            </p>
                                            <p>
                                                    <a class="btn btn-primary" href="#">Cadastrar</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                            <h3 class="alert-info">
                                                Resgatar Senha
                                            </h3>
                                            <p>
                                                Aqui você pode alterar a senha do usúario em caso de necessidade.
                                            </p>
                                            <p>
                                                <a class="btn btn-primary" href="#">Abrir</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                        <h3 class="alert-info">
                                                Deletar conta
                                        </h3>
                                        <p>
                                            Aqui você pode deletar conta de usuário que não irá mais usar o sistema.
                                        </p>
                                        <p>
                                                <a class="btn btn-primary" href="#">Abrir</a>
                                        </p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-success">
                               <strong>Funções Usuário</strong>
                           </div>
                        </div>
                        
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                            <h3 class="alert-success">
                                                Ocorrências
                                            </h3>
                                            <p>
                                                Aqui você pode visualizar e responder todas as ocorrências feitas pelos condôminos ou funcionários usuários do sistema    
                                            </p>
                                            <p>
                                                    <a class="btn btn-success" href="#">Abrir</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                            <h3 class="alert-success">
                                                Avisos e Comunicados
                                            </h3>
                                            <p>
                                                Aqui você pode publicar avisos e comunicados no perfil dos condominos, tanto individual quanto coletivo.
                                            </p>
                                            <p>
                                                <a class="btn btn-success" href="#">Abrir</a>
                                            </p>
                                    </div>
                            </div>
                        </div>
                        <div class="col-sm-4  col-md-4 col-lg-4">
                            <div class="thumbnail">
                                    <div class="caption">
                                        <h3 class="alert-success">
                                                Reserva de Espaços
                                        </h3>
                                        <p>
                                            Aqui você terá o controle das reservas de espaços.
                                        </p>
                                        <p>
                                                <a class="btn btn-success" href="#">Abrir</a>
                                        </p>
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
