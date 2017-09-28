<div class="row">
  <div class="col-md-12">
      <p><b>SALIDAS DEL MES DISPONIBLES</b> </p>
  </div>
</div>
<div class="row">

  <div class="col-md-8">

    <div class="panel panel-info">
      <a href="#"data-toggle="modal" data-target="#permiso1" >
       <br><font face="calibri" size="2"  >  1.- CONFORME AL REGLAMENTO INTERNO DE PERSONAL DE LA GOBERNACION EN SU ART. 29 <br>
      </font>
       <font face="calibri" size="3" > <b>COMISIÓN OFICIAL PRESENTAR EL FORMULARIO CON VºBº DE RR.HH. EN PORTERIA</b>
       </font>
     </a>
    </div>
    <div class="modal fade" id="permiso1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Permiso </h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url() ?>index.php/user/art29" method="post">
              <input type="hidden" name="id_inm_superior" value="<?php echo $user->id_c ?>">
              <input type="hidden" name="id_funcionario" value="<?php echo $id_user ?>">
              <input type="hidden" name="tipo_p" value="ART.29">
              <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="fecha_salida" value="<?php echo date('Y-m-d') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Hora de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="hora_salida" value="<?php echo date('H:i') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Destino</label>
                    <div class="col-md-7">
                      <input type="text" name="destino" value="">
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-11">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary pull-right" name="enviar" value="enviar">
                </div>
              </div>
            </form>
          </div><br>
          <div class="modal-footer">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <?php if($art27->num_rows<'1'){ ?>
    <div class="panel panel-info">
      <a href="#"data-toggle="modal" data-target="#permiso2" >
       <br><font face="ariel" size="2"  >2.- CONFORME AL REGLAMENTO INTERNO DE PERSONAL DE LA GOBERNACIÓN EN SU ART. 27
       </font>
       <font face="calibri" size="3" >  <br>     <b>PERMISO PARTICULAR PRESENTAR EL FORMULARIO CON VºBº DE RR.HH. EN PORTERÍA</b>
       </font>
     </a>
    </div>
    <div class="modal fade" id="permiso2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Permiso </h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url() ?>index.php/user/art29" method="post">
              <input type="hidden" name="id_inm_superior" value="<?php echo $user->id_c ?>">
              <input type="hidden" name="id_funcionario" value="<?php echo $id_user ?>">
              <input type="hidden" name="tipo_p" value="ART.27">
              <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="fecha_salida" value="<?php echo date('Y-m-d') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Hora de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="hora_salida" value="<?php echo date('H:i') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Destino</label>
                    <div class="col-md-7">
                      <input type="text" name="destino" value="">
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-11">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary pull-right" name="enviar" value="enviar">
                </div>
              </div>
            </form>
          </div><br>
          <div class="modal-footer">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
<?php } ?>
    <div class="panel panel-info">
    <br>
      <a href="#"data-toggle="modal" data-target="#permiso3" >
        <font face="calibri" size="2"  >
          3.-		CONFORME AL REGLAMENTO INTERNO DE PERSONAL DE LA GOBERNACIÓN EN SU ART. 27 NUMERAL II
        </font>
        <font face="calibri" size="3" >   <br>      <b>PERMISO POR ATENCIÓN  EN CAJA DE SALUD PRESENTAR CON VºBº DE RR.HH. EN PORTERÍA</b>
        </font>
        </a>

    </div>
    <div class="modal fade" id="permiso3">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Permiso </h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url() ?>index.php/user/art29" method="post">
              <input type="hidden" name="id_inm_superior" value="<?php echo $user->id_c ?>">
              <input type="hidden" name="id_funcionario" value="<?php echo $id_user ?>">
              <input type="hidden" name="tipo_p" value="ART.29 NUMERAL II">
              <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="fecha_salida" value="<?php echo date('Y-m-d') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Hora de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="hora_salida" value="<?php echo date('H:i') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Destino</label>
                    <div class="col-md-7">
                      <input type="text" name="destino" value="">
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-11">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary pull-right" name="enviar" value="enviar">
                </div>
              </div>
            </form>
          </div><br>
          <div class="modal-footer">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="panel panel-info">
      <a href="#"data-toggle="modal" data-target="#permiso4" >
     <br><font face="calibri" size="2"  >4.- 		 CONFORME  REGLAMENTO INTERNO DE PERSONAL  DE LA GOBERNACIÓN EN SU ART. 29 NUMERAL IV:
          </font>
          <font face="calibri" size="3" >   <br>    <b>     PERMISO  POR VIAJE PLANIFICADO  PRESENTACIÓN CON VºBº DE RR .HH. EN PORTERÍA</b>
          </font>
        </a>
    </div>
    <div class="modal fade" id="permiso4">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Permiso </h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url() ?>index.php/user/art29" method="post">
              <input type="hidden" name="id_inm_superior" value="<?php echo $user->id_c ?>">
              <input type="hidden" name="id_funcionario" value="<?php echo $id_user ?>">
              <input type="hidden" name="tipo_p" value="ART.29 NUMERAL IV">
              <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="fecha_salida" value="<?php echo date('Y-m-d') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Hora de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="hora_salida" value="<?php echo date('H:i') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Destino</label>
                    <div class="col-md-7">
                      <input type="text" name="destino" value="">
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-11">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary pull-right" name="enviar" value="enviar">
                </div>
              </div>
            </form>
          </div><br>
          <div class="modal-footer">

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <div class="panel panel-info">
      <a href="#"data-toggle="modal" data-target="#permiso5" >
     <br><font face="calibri" size="2"  >5.-CONFORME  REGLAMENTO INTERNO DE PERSONAL  DE LA GOBERNACIÓN EN SU ART. 28  PARRAFO 3
      </font>
      <font face="calibri" size="3" >   <br><b>   		PERMISOS  SIN GOCE DE HABER PRESENTAR EL FORMULARIO A RR.HH. CON 24 HRS. DE ANTICIPACIÓN    </b>
      </font>
    </a>
    </div>
    <div class="modal fade" id="permiso5">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Permiso </h4>
          </div>
          <div class="modal-body">
            <form class="" action="<?php echo base_url() ?>index.php/user/art29" method="post">
              <input type="hidden" name="id_inm_superior" value="<?php echo $user->id_c ?>">
              <input type="hidden" name="id_funcionario" value="<?php echo $id_user ?>">
              <input type="hidden" name="tipo_p" value="ART.28 PARRAFO 3">
              <div class="form-group">
                    <label class="control-label col-md-3">Fecha de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="fecha_salida" value="<?php echo date('Y-m-d') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Hora de Salida</label>
                    <div class="col-md-7">
                      <input type="time" name="hora_salida" value="<?php echo date('H:i') ?>">
                    </div>
              </div>
              <div class="form-group">
                    <label class="control-label col-md-3">Destino</label>
                    <div class="col-md-7">
                      <input type="text" name="destino" value="">
                    </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2"></label>
                <div class="col-md-11">
                      <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancelar</button>
                      <input type="submit" class="btn btn-primary pull-right" name="enviar" value="enviar">
                </div>
              </div>
            </form>
          </div><br>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Historial del Mes Total :   <?php
        $anio_actual=date('Y');
        $mes_actual=date('m');
        $salidas=$db_default->query("SELECT * FROM permisos WHERE id_funcionario='$id_user' and MONTH(fecha_registro_p) = '$mes_actual' AND YEAR(fecha_registro_p) = '$anio_actual' ORDER BY fecha_registro_p DESC");
         ?></h3><span class="badge bg-blue"><?php echo $salidas->num_rows(); ?></span>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <?php
      ?>
      <div class="box-body">
        <div class="box">
          <div class="box-body">
            <table id="example2" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <td></td>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($salidas->result() as $row) {
                  if($row->estado_p=='0'){
                    $estado='<span class="label label-warning pull-right">Proceso</span>';
                  }else if($row->estado_p=='1'){
                    $estado='<span class="label label-success pull-right">Aprobado</span>';
                  }else{
                    $estado='<span class="label label-danger pull-right">Reprobado</span>';
                  }
                  ?>
                <tr>
                  <td> <font face="calibri" size="1"> <?php echo $row->fecha_registro_p." | ".$row->destino_p." ".$estado?>  </font></td>
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
