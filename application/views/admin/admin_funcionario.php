<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include'inc/include.php';
 $input=new funciones();
 $db_default= $this->load->database('funcionarios', TRUE);?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <p><h3 class="box-title ">CONTROL DE INGRESO | GADCH</h3></p>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                          <div class="row">
                            <div class="col-md-12">
                              <center>
                                <h2>Listar Trabajadores</h2><hr>
                              </center>
                            </div>
                          </div>
                     <div class="row">
                              <div class="col-md-8" id="listar_redes">
                                <center>
                                  <input type="submit"  id="holaa" name="" value="prueba">
                               </center>
                               <table id="tabla" class="display table table-condensed" collspacign="0" width="100%">
                                <thead>
                                 <tr >
                                   <td>nº</td>
                                   <td>Codigo</td>
                                   <td>Nombre</td>
                                   <td>Ci</td>
                                   <td>Secretaria</td>
                                   <td>Facebook</td>
                                   <td>Twitter</td>

                                 </tr>
                                </thead>
                                <tbody>
                                  <?php $n=0; foreach ($mostrar->result_array()  as  $row)
                                  {
                                    $id_c=$row['id_c'];
                                   $n++;
                                   ?>
                                   <tr>
                                     <td><?php echo $n;?></td>
                                     <td><?php echo $row['id_c'];?></td>
                                     <td><?php echo  $row['nombreT'];?></td>
                                     <td><?php echo  $row['ci'];?></td>
                                     <td><?php echo  $row['secretaria'];?></td>
                                     <td>
                                       <?php 	$facebook_count=$db_default->query("SELECT * FROM facebook where id_funcionario=$id_c ") ?>
                                       <a href="<?php echo $row['id_c'];?>" class="btn btn-block btn-xs" id="facebook" ><i class="fa fa-facebook"></i>acebook <span class="badge"><?php echo $facebook_count->num_rows() ?></span></a></td>
                                     <td>
                                       <?php 	$twitter_count=$db_default->query("SELECT * FROM facebook where id_funcionario=$id_c ")?>
                                       <a href="<?php echo $row['id_c'];?>" class="btn btn-block btn-info btn-xs" id="twitter" ><i class="fa fa-twitter"></i> Twitter <span class="badge"><?php echo  $twitter_count->num_rows() ?></span></a></td>
                                   </tr>
                                   <?php } ?>
                                </tbody>

                              </table>
                               </div>
                               <div class="col-md-4" id="listar_redes1">
                                <div class="listar_redes1"><br>
                                  <div  id="panel">
                                    <div class="box-header with-border">
                                      <h3 class="box-title" id="titulo"></h3>
                                    </div>
                                      <div class="box-body">
                                        <div class="cuentas" id="cuentas">
                                        </div>
                                          <form class="form-horizontal"  id="form-insertar">
                                            <div class="form-group">
                                              <label for="inputEmail3" id="label-form" class="col-sm-3 control-label"></label>
                                              <div class="col-sm-9">
                                                <input type="number" class="form-control" id="cantidad" name="cantidad"  placeholder="Cantidad Compartido" value="">
                                                <input type="hidden" class="form-control" id="id_funcionario" name="id_funcionario"   value="">
                                                <input type="hidden" class="form-control" id="tipo_red" name="tipo_red"   value="">
                                              </div>
                                            </div>
                                            <div class="form-group">
                                             <div class="col-sm-offset-3 col-sm-9">
                                              <button type="button"  name="button" id="facebook1"> registrarrr</button>
                                              <button type="button" class="btn btn-block btn-danger btn-xs" value=""  name="button" id="eliminar"> Eliminar</button>


                                              </div>
                                            </div>
                                          </form>
                                      </div>
                                      <!-- /.box-body -->

                                  </div>
                                </div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
              var base_url='<?php echo base_url(); ?>';
            </script>


            </script>
      <?php include'inc/footer.php'; ?>
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/admin/listar_funcionario.js" > </script>
      <?php include'inc/pie.php'; ?>
