<?php include'inc/header.php'; ?>
<script language="Javascript">

  function imprSelec(seleccion1) {
    var ficha = document.getElementById(seleccion1);
    var ventimp = window.open(' ', 'popimpr');
    ventimp.document.write( ficha.innerHTML );
    ventimp.document.close();
    ventimp.print( );
    ventimp.close();
    window.close();
  }

  </script>
  <style type="text/css">
    #autohide-context { display:none!important; } /* hide "Exit Full Screen Mode" */
#window-controls { display:none!important; } /* hide window controls */
  </style>
<?php
include 'inc/meses.php';
$mes=new meses();
 $fecha2=date('Y-m-d H:i:s'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">

                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <a href="javascript:imprSelec('seleccion1')" class="btn btn-info"> Imprimir texto</a>
                               <div class="col-xs-10" id="seleccion1"><hr> <center>
                              <?php
                                    $user=$existe_reporte->row();
                                     echo '</h2><b>Reporte del  Control de Ingreso y Salida del Personas a GADCH del  '. $user->fecha_ingreso_v.'</b></h2>'?> </center><hr>
                               <table cellpadding="2" cellspacing="2" border="1"   >
                                 <thead>
                                   <tr>
                                     <th><font face="calibri" size="1" color="black" >Nº</font></th>
                                     <th><font face="calibri" size="1" color="black" >Nombre</font></th>
                                     <th><font face="calibri" size="1" color="black" >CI</font></th> 
                                     <th><font face="calibri" size="1" color="black" >F/H de Ingreso</font></th>
                                     <th><font face="calibri" size="1" color="black" >F/H de Salida</font></th>
                                     <th><font face="calibri" size="1" color="black" >Estadia</font></th>
                                     <th><font face="calibri" size="1" color="black" >Dependencia</font></th>
                                     <th><font face="calibri" size="1" color="black" >Asunto</font></th>
                                     <th><font face="calibri" size="1" color="black" >Acceso</font></th>

                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_reporte->result_array()  as  $row)
                                   {

                                    $n++;
                                    ?>
                                    <tr>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $n;?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo strtoupper($row['nombre_p']);?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  $row['ci_p'];?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  $row['hora_ingreso_v'];?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  $row['hora_salida_v'];?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><center><?php echo  $row['tiempo_estadia'];?></center></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  strtoupper($row['dependencia_v']);?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  strtoupper($row['asunto_v']);?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo  $row['acceso_v'];?></font></td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                               </table>
                               </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
