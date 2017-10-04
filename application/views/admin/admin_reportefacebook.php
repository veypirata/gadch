<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
include'inc/include.php';
$input=new funciones();
$db_default= $this->load->database('funcionarios', TRUE);?>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                  <p><h3 class="box-title ">REPORTES </h3></p>
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
                            <h2>Listado de cantidad de compartidos facebook</h2><hr>
                          </center>
                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-8" id="listar_redes">
                      <table id="tabla" class="display table table-condensed" collspacign="0" width="100%">
                        <thead>
                         <tr >
                           <td>nº</td>
                           <td>Nombre</td>
                           <td>CI</td>
                           <td>Secretaria</td>
                           <td>Cantidad</td>
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
                             <td><?php echo $row['nombreT'];?></td>
                             <td><?php echo $row['ci'];?></td>
                             <td><?php echo $row['secretaria'];?></td>
                             <td><?php echo $row['cantidad'];?></td>
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
    <script type="text/javascript">
      var base_url='<?php echo base_url(); ?>';
    </script>
    <?php include'inc/footer.php'; ?>
    <?php include'inc/pie.php'; ?>

