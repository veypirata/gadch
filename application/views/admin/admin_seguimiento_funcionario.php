<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include'inc/include.php';
 $input=new funciones();
$fecha2=date('Y-m-d H:i:s');
$ServerActual = $_SERVER['SERVER_NAME'];
 ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <p><h3>Marcar Salida del Funcionario</h3></p>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <center>
                                   <?php
                                   foreach ($detalle_funcionario->result_array()  as  $row)
                                   {
                                      $nombre=$row['nombre_p'];
                                      //$situacion=$row['estado_f'];
                                      $foto=$row['foto_f'];
                                      $ci=$row['ci_p'];
                                      $cargot=$row['cargo_f'];
                                      $dependencia=$row['dependencia_f'];
                                      $fechai=$row['fecha_ingreso_v'];
                                      $horai=$row['hora_ingreso_v'];
                                      $id_detalle_visita=$row['id_visita'];
                                    }
                                   ?>
                                  </center>
                                </div>
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-6">
                                  <!-- Profile Image -->
                                  <div class="box box-warning">
                                    <div class="box-body box-profile">
                                      <form class="" action="<?php echo base_url()?>index.php/admin_control/registro_funcionario" method="post">
                                        <div class="alert alert-warning" role="alert">
                                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                                            <span class="sr-only">Error:</span>
                                            Registrar Salida de Funcionario
                                        </div>
                                        <img class="profile-user-img img-responsive img-circle" src="<?php echo'http://192.168.197.8/credenciales/photo/'.$foto ?>" alt="User profile picture">
                                        <h3 class="profile-username text-center"><?php echo $nombre ?></h3>
                                        <p class="text-muted text-center"><font face='calibri' size='3' color='black'><b><?php echo $cargot."  de ".$dependencia ?></b></font></p>
                                        <hr>
                                        <div class="timeline-body">
                                          <b>HORA DE INGRESO :</b>
                                          <span class="time"><i class="fa fa-clock-o"></i> <?php echo $horai ?></span>
                                        </div>
                                        <div class="timeline-body">
                                          <b>HORA DE SALIDA :</b>
                                           <span class="time"><i class="fa fa-clock-o"></i> <?php echo $fecha2?></span>
                                        </div>
                                        <hr>
                                        <a href="<?php echo base_url().'index.php/admin_control/baja/'.$id_detalle_visita.'/'.$ci ?>" class="btn btn-warning btn-block" >Terminar</a>
                                      </form>
                                    </div>
                                    <!-- /.box-body -->
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
