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

                               <table id="table1" class="display table table-condensed" collspacign="0" width="100%">
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
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="cuentas" id="cuentas">

                                        </div>

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
