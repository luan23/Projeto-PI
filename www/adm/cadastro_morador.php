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
        <link href="../../css/estilo.css" rel="stylesheet" type="text/css"/>
        <!-- Custom CSS -->
        <link href="../../css/sb-admin.css" rel="stylesheet" type="text/css"/>
        
        <!-- Morris Charts CSS -->
        <link href="../../css/plugins/morris.css" rel="stylesheet" type="text/css"/>
        
        <!-- Custom Fonts -->
        <link href="../../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <script>
            function validarSenha(){
               senha = document.getElementById('Isenha').value;
               repetir_senha = document.getElementById('Irepetir_senha').value;
               
               if(repetir_senha != senha){
                   alert("Senhas Incompatíveis.");
                }else{
                document.cad_morador.submit();
                }
            }
        </script>
        
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
                                Cadastro de Usuário
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
                    <form class="role" name="cad_morador" method="post" action="../../negocio/cadastrar_morador.php">
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="Nnome">Nome: </label>
                                <input type="text" name="Nnome" class="form-control" maxlength="30" placeholder="Maximo 30 caracteres"/>
                            </div>
                            <div class="col-lg-3">
                                <label for="Ncpf">CPF:  </label>
                                <input type="text" name="Ncpf" onblur="ValidarCPF(cad_morador.Ncpf);" onKeyPress="MascaraCPF(cad_morador.Ncpf);" maxlength="14" class="form-control"/>
                            </div>
                            <div class="col-lg-3">
                                <label for="Nemail">Email</label>
                                <input type="email" name="Nemail" placeholder="Ex: nome@exemplo.com" class="form-control" maxlength="50" />
                            </div>
                            <div class="col-lg-3">
                                <label for="Ntel">Telefone</label>
                                <input type="text" name="Ntel" onkeypress="MascaraTelefone(cad_morador.Ntel);" onblur="ValidaTelefone(cad_morador.Ntel);" maxlength="14" class="form-control" />
                            </div>
                        </div>
                        <br />
                        <div class="divisao"></div>
                        <div class="row">
                            <div class="col-lg-offset-3 col-lg-3">
                                <label for="Nbloco">Selecione o Bloco</label>
                                <select name="Nbloco" class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="1">bloco 01</option>
                                    <option value="2">bloco 02</option>
                                </select>
                            </div>
                            <div class="col-lg-3">
                                <label for="Nbloco">Selecione o Apartamento</label>
                                <select name="Nbloco" class="form-control">
                                    <option value="">Selecione</option>
                                    <option value="1">apt 201</option>
                                    <option value="2">apt 202</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="divisao"></div>
                        <div class="row">
                            <div class="col-lg-3">
                                <label for="Nusuario">Nome de Usuário</label>
                                <input type="text" name="Nusuario" class="form-control" maxlength="10" placeholder="Maximo 10 caracteres" />
                            </div>
                            <div class="col-lg-3">
                                <label for="Nsenha">Digite sua Senha</label>
                                <input id="Isenha" type="password" name="Nsenha" class="form-control" required=""/>
                            </div>
                            <div class="col-lg-3">
                                <label for="Nrepetir_senha">Repita  sua Senha</label>
                                <input id="Irepetir_senha" type="password" name="Nrepetir_senha" class="form-control" />
                            </div>
                            <div class="col-lg-3">
                                <br />
                                <button type="button" class="btn btn-primary" onClick="validarSenha()">Cadastrar</button>
                                <button type="reset" class="btn btn-success">Limpar</button>
                            </div>
                        </div>
                    </form>
                   
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
        <script src="../../js/mascaras.js" type="text/javascript"></script>
    </body>
</html>