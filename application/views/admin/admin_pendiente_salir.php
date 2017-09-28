<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
 $fecha2=date('Y-m-d H:i:s'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                         <h4><b>Control de Ingreso y Salida del Personas a GADCH</b></h4><br>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-1 cool-sm-1 col-xs-0"></div>
                               <div class="col-xs-10"><br> <br>
                               <table class="table table-striped table-hover table-bordered table-condensed" id="table">
                                 <thead>
                                   <tr>
                                     <th>Nº</th>
                                     <th>Nombre</th>
                                     <th>CI</th>
                                     <th>Hora de Ingreso</th>
                                     <th>Operador</th>
                                     <th>Dependencia</th>
                                     <th>Accion</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_persona->result_array()  as  $row) {
                                   	$ci=$row['ci_p'];
   									                $id_detalle_visita=$row['id_visita'];
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><?php echo $n;?></td>
                                      <td><?php echo $row['nombre_p'] ?></td>
                                      <td><?php echo $row['ci_p'] ?></td>
                                      <td><?php echo $row['hora_ingreso_v'] ?></td>
                                      <td><?php echo $row['nombre_u'] ?></td>
                                      <td><?php echo $row['dependencia_v'] ?></td>
                                     <td>
                                      	<a  href="<?php echo base_url().'index.php/admin_control/baja/'.$id_detalle_visita.'/'.$ci ?>" class="btn btn-danger" ><i class="glyphicon glyphicon-off"></i></a>
                                      </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                               </table>
                               </div>
                               <div class="col-xs-1">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
