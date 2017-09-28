<?php include'inc/header.php'; ?>
<script language="Javascript">

  function ventanaNueva(documento,ancho,alto){
           window.open(documento,'nuevaVentana','width=' + ancho + ', height=' + alto);
        }
  </script>
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
                            <div class="row"  >
                              <?php
                              $user=$existe_detalle->row();
                              echo "<b>Nombre : ".strtoupper($user->nombre_p)."</b><br>";
                              echo "<b> CI : ".strtoupper($user->ci_p)."</b><br>";
                              echo "<b> Primer Ingreso : ".strtoupper($user->fecha_registro_p)."</b><br>"; ?>
                              <div class="col-md-1 cool-sm-1 col-xs-0"></div>
                               <div class="col-xs-10"><br> <br>
                               <table class="table table-striped table-hover table-bordered table-condensed" id="table">
                                 <thead>
                                   <tr>
                                     <th><font face="calibri" size="2" color="black" >Nº</font></th>
                                     <th><font face="calibri" size="2" color="black" >F/H de Ingerso</font></th>
                                     <th><font face="calibri" size="2" color="black" >F/H de Salida</font></th>
                                     <th><font face="calibri" size="2" color="black" >Dependencia</font></th>
                                     <th><font face="calibri" size="2" color="black" >Asunto</font></th>
                                     <th><font face="calibri" size="2" color="black" >Acceso</font></th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_detalle->result_array()  as  $row) {
                                   	$n++;
                                    $id_persona=$row['id_persona'];
                                    ?>
                                    <tr>
                                      <td><font face="calibri" size="2" color="black" ><?php echo $n;?></font></td>
                                      <td><font face="calibri" size="2" color="black" ><?php echo $row['hora_ingreso_v'] ?></font></td>
                                      <td><font face="calibri" size="2" color="black" ><?php echo $row['hora_salida_v'] ?></font></td>
                                      <td><font face="calibri" size="2" color="black" ><?php echo $row['dependencia_v'] ?></font></td>
                                      <td><font face="calibri" size="2" color="black" ><?php echo strtoupper($row['asunto_v']) ?></font></td>
                                      <td><font face="calibri" size="2" color="black" ><?php echo $row['acceso_v'] ?></font></td>
                                    </tr>
                                    <?php
                                    $direccion=base_url().'index.php/admin_control/admin_imprimir_detalle_ingreso/'.$id_persona;
                                  } ?>
                                 </tbody>
                               </table>
                               </div>
                               <div class="col-xs-1">
                               </div>
                            </div>
                            <div class="row">
                              <a href="" onclick=" ventanaNueva('<?php echo $direccion ?>', 500, 400)" class="btn btn-info"> Imprimir texto</a>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
