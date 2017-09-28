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
<?php
 $fecha2=date('Y-m-d H:i:s'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                    <!-- /.box-header -->
                        <div class="box-body">
                          <a href="javascript:imprSelec('seleccion1')" class="btn btn-info"> Imprimir texto</a>
                            <div class="row" id="seleccion1">
                              <?php
                              $user=$existe_detalle->row();
                              echo "<b>Nombre : ".strtoupper($user->nombre_p)."</b><br>";
                              echo "<b> CI : ".strtoupper($user->ci_p)."</b><br>";
                              echo "<b> Primer Ingreso : ".strtoupper($user->fecha_registro_p)."</b><br>"; ?>
                              <div class="col-md-1 cool-sm-1 col-xs-0"></div>
                               <div class="col-xs-10"><br> <br>
                               <table  id="table">
                                 <thead>
                                   <tr>
                                     <th><font face="calibri" size="1" color="black" >Nº</font></th>
                                     <th><font face="calibri" size="1" color="black" >F/H de Ingerso</font></th>
                                     <th><font face="calibri" size="1" color="black" >F/H de Salida</font></th>
                                     <th><font face="calibri" size="1" color="black" >Dependencia</font></th>
                                     <th><font face="calibri" size="1" color="black" >Asunto</font></th>
                                     <th><font face="calibri" size="1" color="black" >Acceso</font></th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_detalle->result_array()  as  $row) {
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $n;?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $row['hora_ingreso_v'] ?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $row['hora_salida_v'] ?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $row['dependencia_v'] ?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo strtoupper($row['asunto_v']) ?></font></td>
                                      <td><font face="calibri" size="1" color="black" ><?php echo $row['acceso_v'] ?></font></td>
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
