<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include'inc/include.php';
 $input=new funciones();?>
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
                                   $n++;
                                   ?>
                                   <tr>
                                     <td><?php echo $n;?></td>
                                     <td><?php echo $row['id_c'];?></td>
                                     <td><?php echo  $row['nombreT'];?></td>
                                     <td><?php echo  $row['ci'];?></td>
                                     <td><?php echo  $row['secretaria'];?></td>
                                     <td><a href="<?php echo $row['id_c'];?>" class="btn btn-block btn-primary btn-xs" id="facebook" ><i class="fa fa-facebook"></i>acebook</a></td>
                                     <td><a href="<?php echo $row['id_c'];?>" class="btn btn-block btn-info btn-xs" id="twitter" ><i class="fa fa-twitter"></i> Twitter</a></td>
                                   </tr>
                                   <?php } ?>
                                </tbody>

                              </table>
                               </div>
                               <div class="col-md-4">
                                <div class="listar_redes"><br>
                                  <div class="box box-primary box-solid">
                                    <div class="box-header with-border">
                                      <h3 class="box-title" id="titulo"></h3>
                                    </div>
                                    <form role="form">
                                      <div class="box-body">


                                        <div class="cuentas" id="cuentas">

                                        </div>
<label for=""></label>
                                      </div>
                                      <!-- /.box-body -->

                                      <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                      </div>
                                    </form>
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
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/admin/listar_funcionario.js" >
      <?php include'inc/pie.php'; ?>
