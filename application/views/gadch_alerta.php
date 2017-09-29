<div class="container">
  <div class="row">
      <div class="col-md-5">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Solicitudes del Mes Total :   <?php
                $anio_actual=date('Y');
                $mes_actual=date('m');
                $aprobar=$db_default->query("SELECT * FROM permisos p inner join trabajadores t on p.id_funcionario = t.id_c WHERE id_inmediato_superior='$id_user' AND p.estado_p='0' and MONTH(fecha_registro_p) = '$mes_actual'  AND YEAR(fecha_registro_p) = '$anio_actual' ORDER BY p.fecha_registro_p DESC");

                 ?></h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
              <!-- /.box-tools espero q esto este bien -->
            </div>
            <div class="box-body">
              <div class="box">
                <div class="box-body">
                  <table id="example3" class="table table-bordered table-hover">
                      <thead>
                        <tr>
                          <td></td>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        foreach ($aprobar->result() as $row) {
                          $fotop=$row->foto;
                          ?>
                        <tr>
                          <td> <font face="calibri" size="1">
                              <div class="col-md-2 pull-left">
                                <img src="http://192.168.197.8/credenciales/photo/<?php echo $fotop ?>" width="40" class="img-circle" alt="User Image">
                              </div>
                              <div class="col-md-6">
                                <b>Nomnre : <?php echo $row->nombreT ?></b><br>
                                <b>Destino : <?php echo $row->destino_p ?></b><br>
                                <b>Tipo : <?php echo $row->tipo_p ?></b><br>
                                <b>F. Solicitud :<?php echo $row->fecha_registro_p ?></b><br>
                                <b>F. Salida : <?php echo $row->fecha_salida_p." ".$row->hora_salida_p ?></b>
                              </div>

                              <div class="col-md-4 pull-right">
                                <a href="<?php echo base_url().'index.php/user/aprobar/1/'.$row->id_permiso ?>" > <span class="label label-success ">Aprobar</span> </a>
                                <a href="<?php echo base_url().'index.php/user/aprobar/2/'.$row->id_permiso ?>">  <span class="label label-danger">Cancelar</span></a>
                              </div>
                            </font>
                          </td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.box-body -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <div class="col-md-5">
          <div class="box box-primary">
              <div class="box-header with-border">
                  <h3 class="box-title">Historial del Mes   <?php

                  $aprobados=$db_default->query("SELECT * FROM permisos p inner join trabajadores t on p.id_funcionario = t.id_c WHERE id_inmediato_superior='$id_user' and (estado_p='1' or estado_p='2')  and MONTH(fecha_registro_p) = '$mes_actual' AND YEAR(fecha_registro_p) = '$anio_actual' ORDER BY p.fecha_revision_p DESC");

                   ?></h3>

                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                <!-- /.box-tools -->
              </div>
              <div class="box-body">
                <div class="box">
                  <div class="box-body">
                    <table id="example4" class="table table-bordered table-hover">
                        <thead>
                          <tr>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          foreach ($aprobados->result() as $row) {
                            $fotop=$row->foto;
                           if($row->estado_p=='1'){
                              $color='success';
                            }else{
                              $color='danger';
                            }
                            ?>
                          <tr class="<?php echo $color ?>">
                            <td >
                              <div >
                              <font  face="calibri" size="1">

                                <div class="col-md-9 pull-left">
                                  <b>Nomnre : <?php echo $row->nombreT ?></b><br>
                                  <b>Destino : <?php echo $row->destino_p ?></b><br>
                                  <b>F. Revision :<?php echo $row->fecha_revision_p ?></b><br>
                                  <b>F. Solicitud :<?php echo $row->fecha_registro_p ?></b><br>
                                  <b>F. Salida : <?php echo $row->fecha_salida_p." ".$row->hora_salida_p ?></b>
                                </div>
                                <div class="col-md-2 pull-rigth">
                                  <img src="http://192.168.197.8/credenciales/photo/<?php echo $fotop ?>" width="40" class="img-circle" alt="User Image">
                                </div>
                              </font>
                              </div>
                            </td>
                          </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.box-body -->
                </div>
              </div>
              <!-- /.box-body -->
            </div>
          </div>
    </div>
  </div>
