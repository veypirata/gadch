
       <div class="row">
         <div class="col-md-3 col-sm-2">
           <h3 class="ser-title">Mensajes de Observacion</h3>
           <hr>
           <hr class="botm-line">
          <?php
           if($estado=='observado'){
           $query=$this->db->query("SELECT * FROM trabajadores t inner join mensajes m on t.id_c=m.id_c inner join usuario u on u.id_user=m.id_user  where t.ci='".$ciI."' order By fecha_m desc ");
                  foreach ($query->result_array()  as $row) {
                   $nomb=$row['nombreU'];

                     echo "<hr><p>".$row['mensaje_m']."</p>";
                     echo "<p>".$row['fecha_m']."</p>";
                      echo'<font face="calibri" size="1" color="black" >Revisado por: <b> Jefatura de Sistemas</b></font><hr>';
                  }
             }else if($estado=='aprobado'){ echo"<p> Exelente sin Observaiones</p><hr>";}
             else{echo"<p> En proceso de revision</p><hr>";}
            ?>
         </div>
         <div class="col-md-5 col-sm-5">
           <center>
              <?php if($estado=='aprobado' || $estado=='0'){ ?>
               <div id="seleccion" style=" width: 250px; height: 175px; " >
                       <div class="credencial" style="width: 250px; height: 175px; background: #f5f5f5 url(<?php echo base_url()."perfil/fondo.png" ?>) ;background-size:  250px 175px; border-top-left-radius: 10px;
                       border-top-right-radius: 10px; border-bottom-left-radius: 10px; border-bottom-right-radius:10px; ">
                       <div class="der" style="  width: 80px; padding-top:40px; float: left;"><center> <img src="http://200.87.15.243/credenciales/photo/<?php echo $foto; ?>" width="60" height="60" class="img-rounded"><br>
                            <font face="calibri" size="1" color="black"  ><b>CI:&nbsp;<?php echo $ciI ." ".$expedito.".";  ?></b></font>
                         </div>
                       <div class="hiz" >
                           <table border="0">
                           <tr height="45" ><td></td><td></td></tr>
                             <tr><td width="1"  ><font face="calibri" size="1" color="black" ><b></b></font></td><td ><font face="calibri" size="1" color="black"><b><br><?php echo strtoupper($nombre) ?></b></font></td></tr>
                             <?php if($cargot!='Gobernador'){?>
                             <tr><td ><font face="calibri" size="1" color="black"  ><b >&nbsp;</b></font></td><td height="10" ><?php echo $mos; ?></td></tr><?php
                             }else{?>
                              <tr><td  height="10" colspan="2"><font face="calibri" size="2" color="black"  ><b><center><?php echo $cargot;?></center> </b></font></td></tr><?php }?>
                           </table>
                       </div>
                       </div>
                      </div>
                      <br><br><br>
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo base_url()?>index.php/gob"><span class="btn btn-primary">Terminar</span></a>


                       <br><br>
                       <?php

                       if($entregado==0){
                         if($terminado==0){
                           echo'';
                         } else{
                           echo '<div class="alert alert-success"><h4>Su credencial ya está listo para que usted pase por la oficina de sistemas a buscar Gracias</h4></div>';
                         }
                         }else echo '<div class="alert alert-info"><h4>Usted ya retiro su credencial Gracias </h4></div>';
                         }else{?>

                       <form id="uploadForm" enctype='multipart/form-data' method='POST' action="<?php echo base_url()?>index.php/gob/modificar" enctype="multipart/form-data" method="POST" class="form-horizontal">



                          <!--aqui contenido-->
                             <?php
                              $mostrart=$this->db->query("SELECT * FROM trabajadores t   where ci='".$ciI."'");
                              foreach ($mostrart->result() as $row) {
                               $id_c=$row->id_c;
                               $nombre=$row->nombreT;

                               $ci=$row->ci;

                               $secretaria=$row->secretaria;

                               $cargot=$row->cargo;

                               $foto=$row->foto;
                               $contrato=$row->contrato;
                               }?>
                               <div class="form-group">
                                  <label class="control-label col-md-3" for="option">Nombre: </label>
                                   <label class="col-md-7" for="option"><?php echo $nombre ?></label>
                               </div>
                              <input type="hidden" name="id" value="<?php echo $id_c;?>">
                              <input type="hidden" name="ci" value="<?php echo $ci;?>">
                             <?php include('cargo.php'); ?>
                            <?php include('secretaria.php') ?>
                           <div class="form-group">
                             <div class="col-md-10">
                              <div id="direccion">
                               </div>
                           </div>
                           </div>
                           <div class="form-group">
                             <div class="col-md-10">
                               <div id="jefatura">
                               </div>
                             </div>
                           </div>

                              <ul class="ul">
                                 <li style="background: #f5f5f5 url(http://<?php echo $ipvisitante ?>/credenciales/photo/<?php echo $foto;?>) ;background-size: 100px auto;">
                                   <input type="file"  id="file-0" name="foto" required="">
                                   <div id="photo-0" class="link"></div>
                                   <div class="cerrar" id="cerrar-0"></div>
                                 </li>
                               </ul> <br><br>
                                <input type="submit" value="Registrar" class="btn btn-primary">

                     </form> <?php } ?>
             </center>
         </div>

         <div class="col-md-3 col-sm-3">
           <?php if($estado=='observado'){
             echo '<div class="service-info">
               <div class="icon">
                 <i class="glyphicon glyphicon-warning-sign"></i>
               </div>
               <div class="icon-info">
                 <h4>Importante</h4>
                 <p> En el caso de trabajar con comunicacion interna en otra jefatura, direccion o secretaria por favor introducir la dependencia que figura en su contrato </p>
               </div>
             </div>';
           }else if($estado=='aprobado') {
              echo' <div class="service-info">
               <div class="icon">
                 <i class="glyphicon glyphicon-thumbs-up"></i>
               </div>
               <div class="icon-info">
                 <h4>Comunicado</h4>
                 <p> La informacion enviada es aceptada por favor revise la pagina de manera constante para la entrega de su credencial </p>
               </div>
             </div>';
             } else{
               echo'<div class="service-info">
               <div class="icon">
                 <i class="glyphicon glyphicon-refresh"></i>
               </div>
               <div class="icon-info">
                 <h4>Comunicado</h4>
                 <p> La informacion que envio esta en proceso de revisión por favor espere resultados </p>
               </div>
             </div>
            '; } ?>
         </div>
       </div>
