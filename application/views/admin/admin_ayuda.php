<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
$fecha_hoy=Date('Y-m-d');
$id_i=$this->session->userdata('s_id');
$cargo_t=$this->session->userdata('s_cargo');
$cantidad_dia=$db_default->query("SELECT COUNT(*) as cantidad FROM persona t inner join detalle_visitas dv on t.id_persona=dv.id_persona WHERE id_usuario_ingreso=$id_i and dv.estado_v=0;");
$registros_dia=$db_default->query("SELECT COUNT(*) as registros FROM detalle_visitas WHERE fecha_ingreso_v ='$fecha_hoy'");
if(isset($error)) echo $error;
?>
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
                                    <h1>En Construcción</h1>

                                  </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
