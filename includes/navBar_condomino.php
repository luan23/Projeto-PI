<!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Nome do condomínio logado</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Nome do Usuário Logado <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!--<li>
                                <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-envelope"></i> Mensagem</a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-gear"></i> Configuração</a>
                            </li> -->
                            <li class="divider"></li>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-list-alt"></i> Ocorrências <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo" class="collapse">
                                <li class="active">
                                    <a href="abrir_ocorrencia.php" target="_self">Abrir Ocorrência</a>
                                </li>
                                <li>
                                    <a href="ocorrencia_aberta.php">Ver Todas Abertas</a>
                                </li>
                                <li>
                                    <a href="ocorrencia_fechada.php">Ver Todas Respondidas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="comunicados.php" target="_self"><i class="fa fa-fw fa-envelope"></i> Avisos e Comunicados</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo02"><i class="fa fa-fw fa-briefcase"></i> Encomendas <i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="demo02" class="collapse">
                                <li>
                                    <a href="encomendas.php">Encomendas Disponíveis</a>
                                </li>
                                <li>
                                    <a href="encomendas_retiradas.php">Encomendas Retiradas</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="reservas.php" target="_self"><i class="fa fa-fw fa-calendar"></i>Reserva de Espaços</a>
                        </li>
                        <li>
                            <a href="sugestao.php" target="_self"><i class="fa fa-fw fa-edit"></i>Reclamação e Sugetão</a>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>