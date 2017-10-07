</head>
  <body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
    <div class="wrapper">
      <header class="main-header">
        <a href="" class="logo">
          <span class="logo-mini"><b>AD</b>C</span>
          <span class="logo-lg"><b>ADControl <sup>V - 0.1 </sup></b></span>
        </a>
        <nav class="navbar   navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only"></span> CONTROL REDES SOCIALES | GADCH
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <li class="dropdown user user-menu ">
                <a href="#" class="dropdown-toggle " data-toggle="dropdown"><i class="fa fa-user"></i>
                  <small class="badge bg-green">Online</small>
                  <span class="hidden-xs"><?php echo $this->session->userdata('s_nombre');?></span>
                  <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                  <li class="user-header">
                    <p>

                      <small>GOBIERNO AUTONOMO DEPARTAMENTAL DE CHUQUISACA</small>
                    </p>
                  </li>
                  <li class="user-footer">
                    <div class="pull-right">
                        <a href="<?php echo base_url();?>index.php/admin_control/salir" class="btn btn-danger"><i class="glyphicon glyphicon-log-out"></i></a>
                        <a href="#" class="btn btn-info"><i class="glyphicon glyphicon-cog"></i></a>
                        <a href="#" class="btn btn-primary"><i class="glyphicon glyphicon-user"></i></a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <aside class="main-sidebar">
        <section class="sidebar">
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li>
              <a href="<?php echo base_url() ?>index.php/admin_gadch">
                <i class="fa fa-fw fa-dashboard"></i> <span>Escritorio</span>
              </a>
            </li>
            <li class="treeview">
             <a href="#">
               <i class="fa fa-folder"></i>
               <span>Ver Funcionarios</span>
                <i class="fa fa-angle-left pull-right"></i>
             </a>
              <ul class="treeview-menu">
              <li><a data-toggle="modal" href="#" data-target="#personalizado" ><i class="glyphicon glyphicon-circle-arrow-right"></i> Secretaria</a></li>
              <li><a data-toggle="modal" href="#" data-target="#ReportesA" ><i class="glyphicon glyphicon-circle-arrow-right"></i> Direccion</a></li>
              <li><a data-toggle="modal" href="#" data-target="#ReportesO"><i class="glyphicon glyphicon-circle-arrow-right"></i> Jefatura</a></li>
              <li><a data-toggle="modal" href="#" data-target="#Cargo" data-whatever="@getbootstrap"><i class="glyphicon glyphicon-circle-arrow-right"></i>Por Cargo</a></li>

              </ul>
            </li>
<!--Nuevo menu para mostrar sobre los datos de facebook----------------------------------------------->
        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                    <span>Mostrar datos</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebooks" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Secretaria</a></li><!--compartirfacebook ------hace referencia ms abajo -->
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookd" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Dirección</a></li>
<<<<<<< HEAD
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookj" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Jefatura</a></li>
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookc" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Por Cargo</a></li>
                         
=======
<<<<<<< HEAD
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookj" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Jefatura</a></li>
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookc" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Por Cargo</a></li>
                         
=======
<<<<<<< HEAD
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookj" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Jefatura</a></li>
                <li><a data-toggle="modal" href="#" data-target="#compartirfacebookc" ><i class="glyphicon glyphicon-circle-arrow-right"></i>Compartido Por Cargo</a></li>
                <li><a data-toggle="modal" href="<?php echo base_url();?>index.php/admin_gadch/mostrarreporte" data-whatever="@getbootstrap"><i class="glyphicon glyphicon-question-sign"></i>Mostrar Reporte</a></li>         
=======
                <li><a data-toggle="modal" href="<?php echo base_url();?>index.php/admin_gadch/mostrarreporte" data-whatever="@getbootstrap"><i class="glyphicon glyphicon-question-sign"></i>Mostrar Reporte</a></li>
>>>>>>> 18d6ec37d2d752f1e8a4e205a4d341714373f2d7
>>>>>>> 91d056aaa5981bac7f6e3705a03c9f893c2faec3
>>>>>>> 648c1d7ea54022fe192d16f47adc66111161339d
            </ul>
        </li>
<!--Fin menu mostrar datos de facebook---------------------------------------------------------------->
            <?php $cargo=$this->session->userdata('s_cargo');
              if($cargo!=0){
               ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-fw fa-user"></i>
                <span>Usuarios</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?php echo base_url() ?>index.php/admin_control/nuevo_usuario"><i class="fa fa-circle-o"></i> Nuevo Usuario</a></li>
                <li><a href="<?php echo base_url() ?>index.php/admin_control/listar_usuario"><i class="fa fa-circle-o"></i> Listar Usuario</a></li>
              </ul>
            </li>

            <?php } ?>
            <li>
              <a href="<?php echo base_url();?>index.php/admin_control/ayuda">
                <i class="glyphicon glyphicon-question-sign"></i> <span>Ayudacccc</span>
                <small class="label pull-right bg-yellow">!</small>
              </a>
            </li>

            <li>
              <a href="<?php echo base_url();?>index.php/admin_control/salir">
                <i class="glyphicon glyphicon-off"></i> <span>Cerrar Session</span>
                <small class="label pull-right bg-yellow">!</small>
              </a>
            </li>
        </section>
        <!-- /.sidebar -->
      </aside>

    <div class="modal fade" id="personalizado" >
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title" id="exampleModalLabel">Mostrar Trabajadores Por Secretaria</h4>
                </div>
                <center>

                  <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/secretaria">
                    <div class="form-group">

                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-4 control-label">SECRETARIA</label>
                      <div class="col-sm-5">
                       <?php include('secretaria.php'); ?><br>
                    </div>
                   </div>

                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-default">Mostrar</button>
                      </div>
                    </div>
                  </form>
                </center>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ReportesA" >
        <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Mostrar Trabajadores Por Direccion</h4>
                    </div>
                    <center>

                      <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/direccion">
                         <div class="form-group">

                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">DIRECCION</label>
                            <div class="col-sm-5">
                             <?php include('direccion.php'); ?><br>
                          </div>
                         </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button type="submit" class="btn btn-default">Mostrar</button>
                            </div>
                          </div>
                      </form>
                    </center>
                    </div>

        </div>
    </div>

    <div class="modal fade" id="ReportesO" >
        <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Mostrar Tabajadores Por Jefatura</h4>
                    </div>
                    <center>

                      <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/jefatura">


                          <div class="form-group">
                            <label for="inputPassword3" class="col-sm-4 control-label">JEFATURA</label>
                            <div class="col-sm-5">
                             <?php include('jefatura.php'); ?><br>
                          </div>
                         </div>

                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-9">
                              <button type="submit" class="btn btn-default">Mostrar</button>
                            </div>
                          </div>
                      </form>
                    </center>
                    </div>
        </div>
    </div>

    <div class="modal fade" id="Cargo" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Mostrar Tabajadores Por Cargo</h4>
                </div>
                <center>
                   <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/cargo">
                    <?php include('cargoReportes.php'); ?><br>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                          <button type="submit" class="btn btn-default">Mostrar</button>
                        </div>
                      </div>
                   </form>
                </center>
            </div>
        </div>
    </div>
<!--Nuevo MODAL FADE para mostrar sobre los datos de facebook----------------------------------------------->
 <div class="modal fade" id="compartirfacebooks" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Cantidad de compartidos por fechas</h4>
            </div>
            <center>
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/m_secretaria_facebook">
            <div class="form-group">
               <label for="inputPassword3" class="col-sm-4 control-label">SECRETARIA</label>
               <div class="col-sm-5">
                   <?php include('secretaria.php'); ?>
                   <br>
               </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-default">Mostrar</button>
                </div>
            </div>
            </form>
            </center>
            </div>
          </div>
    </div>
<div class="modal fade" id="compartirfacebookd" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Cantidad de compartidos por fechas</h4>
            </div>
            <center>
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/m_direccion_facebook">
            <div class="form-group">
               <label for="inputPassword3" class="col-sm-4 control-label">DIRECCION</label>
               <div class="col-sm-5">
                   <?php include('direccion.php'); ?>
                   <br>
               </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-default">Mostrar</button>
                </div>
            </div>
            </form>
            </center>
            </div>
          </div>
    </div>

<div class="modal fade" id="compartirfacebookj" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Cantidad de compartidos por fechas</h4>
            </div>
            <center>
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/m_jefatura_facebook">
            <div class="form-group">
               <label for="inputPassword3" class="col-sm-4 control-label">JEFATURA</label>
               <div class="col-sm-5">
                   <?php include('jefatura.php'); ?>
                   <br>
               </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-default">Mostrar</button>
                </div>
            </div>
            </form>
            </center>
            </div>
          </div>
    </div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 91d056aaa5981bac7f6e3705a03c9f893c2faec3
>>>>>>> 648c1d7ea54022fe192d16f47adc66111161339d

    <div class="modal fade" id="compartirfacebookc" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="exampleModalLabel">Mostrar Por Cargo</h4>
                </div>
                <center>
                   <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/m_cargo_facebook">
                    <?php include('cargoReportes.php'); ?><br>
                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                          <button type="submit" class="btn btn-default">Mostrar</button>
                        </div>
                      </div>
                   </form>
                </center>
            </div>
        </div>
    </div>
    <div class="modal fade" id="secretariareporte" >
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="exampleModalLabel">Cantidad de compartidos por fechas</h4>
            </div>
            <center>
            <form class="form-horizontal" method="POST" action="<?php echo base_url();?>index.php/admin_gadch/mostrarreporte">
                <div class="form-group">
                   <label for="inputPassword3" class="col-sm-4 control-label">SECRETARIA</label>
                   <div class="col-sm-5">
                       <?php include('secretaria.php'); ?>
                       <br>
                   </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-default">Mostrar</button>
                </div>
            </div>
            </form>
            </center>
            </div>
          </div>
    </div>

<input type="submit" value="" />
<!--Fin MODAL FADE para mostrar sobre los datos de facebook---------------------------------------------------> 
=======
<!--Fin MODAL FADE para mostrar sobre los datos de facebook--------------------------------------------------->
>>>>>>> 18d6ec37d2d752f1e8a4e205a4d341714373f2d7

       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
