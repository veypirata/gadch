<?php include'inc/header.php'; ?>
<script language="Javascript">
  function imprSelec(seleccion1) {
    var ficha = document.getElementById(seleccion1);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write( ficha.innerHTML );
    ventimp.document.close();
    ventimp.print( );
    ventimp.close();
  }
  function ventanaNueva(documento,ancho,alto){
           window.open(documento,'nuevaVentana','width=' + ancho + ', height=' + alto);
        }
  </script>
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

                               <div class="col-xs-10" >
                                 <hr> <center>
                                 <?php
                                       $user=$existe_reporte->row();
                                        echo '</h1><b>Reporte del  Control de Ingreso y Salida del Personas a GADCH del  '. $user->fecha_ingreso_v.'</b></h1>'?> </center><hr>
                               <table cellpadding="2" cellspacing="2" border="1" class="table table-striped table-hover table-bordered table-condensed" id="table" >
                                 <thead>
                                   <tr>
                                     <th><font face="calibri" size="4" color="black" >Nº</font></th>
                                     <th><font face="calibri" size="4" color="black" >Nombre</font></th>
                                     <th><font face="calibri" size="4" color="black" >CI</font></th>
                                     <th><font face="calibri" size="4" color="black" >F/H de Ingreso</font></th>
                                     <th><font face="calibri" size="4" color="black" >F/H de Salida</font></th>
                                     <th><font face="calibri" size="4" color="black" >Estadia</font></th>
                                     <th><font face="calibri" size="4" color="black" >Dependencia</font></th>
                                     <th><font face="calibri" size="4" color="black" >Asunto</font></th>
                                     <th><font face="calibri" size="4" color="black" >Acceso</font></th>

                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_reporte->result_array()  as  $row)
                                   {
                                    $dia_num=$row['fecha_ingreso_v'];
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><font face="calibri" size="3" color="black" ><?php echo $n;?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo strtoupper($row['nombre_p']);?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  $row['ci_p'];?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  $row['hora_ingreso_v'];?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  $row['hora_salida_v'];?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><center><?php echo  $row['tiempo_estadia'];?></center></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  strtoupper($row['dependencia_v']);?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  strtoupper($row['asunto_v']);?></font></td>
                                      <td><font face="calibri" size="3" color="black" ><?php echo  $row['acceso_v'];?></font></td>
                                    </tr>
                                    <?php }
                                    $direccion=base_url().'index.php/admin_control/imprimir_palel_detalle_dia/'.$dia_num;
                                    ?>
                                 </tbody>
                               </table>
                               </div>
                                <a href="" onclick=" ventanaNueva('<?php echo $direccion ?>', 500, 400)" class="btn btn-info"> Imprimir texto</a>
                               <div class="col-xs-1">
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <script type="text/javascript">

      </script>
      <?php include'inc/pie.php'; ?>
