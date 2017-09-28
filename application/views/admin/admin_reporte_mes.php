<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include 'inc/meses.php';
$mes=new meses();
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
                                     <th>Mes</th>
                                     <th>Cantidad</th>
                                     
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_reporte->result_array()  as  $row)
                                   {
                                    $mes_num=$row['mes'];
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><?php echo $n;?></td>
                                      <td><?php echo $mes->mes($mes_num) ?></td>
                                      <td><a href="<?php echo base_url().'index.php/admin_control/reporte_dia/'.$mes_num ?>" class="btn btn-success" >
                                          Ver Detalle <span class="badge"><?php echo  $row['cantidad'];?></span>
                                        </a></td>
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
