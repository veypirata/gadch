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
                                     <th>Nombre</th>
                                     <th>Dependencia</th>
                                     <th>Usuario</th>
                                     <th>Cargo</th>
                                     <th>Editar</th>
                                     <th>Accion</th>
                                   </tr>
                                 </thead>
                                 <tbody>
                                   <?php $n=0; foreach ($existe_usuario->result_array()  as  $row)
                                   {
                                     $dependencia=$row['dependencia_u'];
                                     $cargo=$row['cargo_u'];
                                     $id_usuario=$row['id_usuario'];
                                     $estado=$row['estado'];
                                     if($dependencia=='Madona'){
                                       $dependencia_option='<option value="'.$dependencia.'">'.$dependencia.'</option><option value="Despacho">Despacho</option>';
                                     }else{
                                       $dependencia_option='<option value="'.$dependencia.'">'.$dependencia.'</option><option value="Madona">Madona</option>';
                                     }
                                     if($cargo==0){
                                       $mostrar_cargo='Oficial';
                                     } else if($cargo==1){
                                       $mostrar_cargo='RRHH';
                                     }else{
                                       $mostrar_cargo='Administrador';
                                     }
                                     if($estado==1 && ($cargo==1 || $cargo==0)){
                                       $btn= '<td><a href="'.base_url().'index.php/admin_control/habilitar/0/'.$id_usuario.'" class=" btn-success" >Habilitado <span class="glyphicon glyphicon-ok"> </span></a></td>';
                                     }else if($estado==0 && ($cargo==1 || $cargo==0)) {
                                       $btn= '<td><a href="'.base_url().'index.php/admin_control/habilitar/1/'.$id_usuario.'" class="btn-danger">Deshabilitado <span class="glyphicon glyphicon-remove"> </span></a></td>';
                                     } else{
                                        $btn= '<td><a href="#" class="btn-info">No Autopruzado <span class="glyphicon glyphicon-warning-sign"> </span></a></td>';
                                     }
                                   	$n++;
                                    ?>
                                    <tr>
                                      <td><?php echo $n;?></td>
                                      <td><?php echo $row['nombre_u'] ?></td>
                                      <td><?php echo $dependencia; ?></td>
                                      <td><?php echo $row['usuario_u'] ?></td>
                                      <td><?php echo $mostrar_cargo ?></td>
                                      <td><a href="#" data-toggle="modal" data-target="#exampleModal<?php echo $n ?>" data-whatever="@getbootstrap" >Editar <span class="glyphicon glyphicon-pencil"> </span></a></td>
                                      <?php echo $btn ?>
                                    </tr>
                                    <div class="modal fade" id="exampleModal<?php echo $n ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="exampleModalLabel"><?php echo $row['nombre_u'] ?></h4>
                                          </div>

                                            <form action="<?php echo base_url() ?>index.php/admin_control/modificar_usuario" method="post" >
                                              <div class="modal-body">
                                              <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario'] ?>">
                                              <div class="form-group">
                                                <label for="recipient-name" class="control-label">Usuario</label>
                                                <input type="text" class="form-control" name="usuario_u" value="<?php echo $row['usuario_u'] ?>">
                                              </div>
                                              <div class="form-group">
                                                <label for="recipient-name" class="control-label">Contraseña</label>
                                                <input type="password" name="pass_u" class="form-control"  value="">
                                              </div>

                                              <div class="form-group">
                                                <label for="recipient-name" class="control-label">Dependencia</label>
                                                <select class="form-control" name="dependencia_u">
                                                  <?php echo $dependencia_option; ?>
                                                </select>
                                              </div>
                                              <?php
                                              if($this->session->userdata('s_cargo')==1){
                                                echo '<div class="form-group">
                                                  <label for="recipient-name" class="control-label">Dependencia</label>
                                                  <select class="form-control" name="cargo_u">
                                                    <option value="1">Administrador</option>
                                                    <option value="0">Oficial de Control</option>
                                                  </select>
                                                </div>';
                                              }else{
                                                echo'<input type="hidden" name="cargo_u" value="'.$cargo.'">';
                                              }
                                               ?>

                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                            <input type="submit" name="" class="btn btn-primary" value="Modificar">

                                          </div>
                                            </form>
                                        </div>
                                      </div>
                                    </div>
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
