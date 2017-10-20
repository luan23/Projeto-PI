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
                                Reclamações e Sugestões
                            </h1>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-lg-12">
                           <div class="alert alert-info">
                               <strong>Preencha os campos para o registro.</strong>
                           </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    
                    <div class="row">
                        <div class="col-md-offset-3 col-md-6 ">
                            
                            <form role="form">
                                <fieldset>
                                <div class="form-group">
                                    <label>Selecione o Setor</label>
                                    <select class="form-control">
                                        <option value="#">Selecione</option>
                                        <option value="1">Portaria</option>
                                        <option value="2">Piscina</option>
                                        <option value="3">Salão de Festas</option>
                                        <option value="4">Estacionamento</option>
                                        <option value="5">Elevadores</option>
                                        <option value="6">Limpeza</option>
                                        <option value="7">Sindico</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nome: </label>
                                    <input class="form-control" type="text" placeholder="Digite seu nome" name="Nnome">
                                </div>
                                <div class="form-group">
                                    <label>E- mail</label><br>
                                    <input type="email" name="email" placeholder="Ex: maria@exemplo.com">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label>Digite sua Reclamação ou Sugestão</label>
                                        <textarea class="form-control" rows="3" name="Ntexto"></textarea>
                                    </div>
                                </div>
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Enviar</button>
                                </div>
                                </fieldset>
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
