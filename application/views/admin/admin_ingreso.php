<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';

 $fecha2=date('Y-m-d H:i:s'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                         <h4><b>prueba 2</b></h4><br>
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
                                     <th>Fecha de Registro</th>
                                     <th>Cantidad de Visistas</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_persona->result_array()  as  $row) {
                                   	$id_persona=$row['id_persona'];
   								                 $query=$db_default->query("SELECT * FROM `detalle_visitas` WHERE id_persona=$id_persona");
                                   $persona_num=$query->num_rows();
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><?php echo $n;?></td>
                                      <td><?php echo $row['nombre_p'] ?></td>
                                      <td><?php echo $row['ci_p'] ?></td>
                                      <td><?php echo $row['fecha_registro_p'] ?></td>
                                      <td><a href="<?php echo base_url().'index.php/admin_control/detalle_ingreso/'.$id_persona; ?>"><small class="badge bg-green"><?php echo $persona_num; ?></small></a></td>
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
