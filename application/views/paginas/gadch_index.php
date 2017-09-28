<!DOCTYPE html>
  <?php
  $url_ser=base_url();
  $porciones = explode("/", $url_ser);
  $ipvisitante=$porciones[2];
  $db_default= $this->load->database('funcionarios', TRUE);
  ?>
  <?php
  include'include.php';
   $input=new funciones();

  foreach ($datos->result() as $row) {
        $id_user=$row->id_c;
        $nombre=$row->nombreT;
        $ciI=$row->ci;
        $sexo=$row->sexo;
        $foto=$row->foto;
        $cargot=$row->cargo;
        $estado=$row->estado_t;
        $expedito=$row->expedito;
        $terminado=$row->terminado;
        $entregado=$row->entregado;
        $secre=$row->secretaria;
        $dir=$row->direccion;
        $jefe=$row->jefatura;
        $redes=$row->redesSociales;
        $secretarianum=strlen($secre);
        $direccionnum=strlen($dir);
        $jefaturanum=strlen($jefe);

       $modificado=$row->modificado;

      }
      if($jefaturanum>3){
        $numero=1;
        $car=$jefe;
        $query=$db_default->query("SELECT * FROM trabajadores WHERE jefatura='$car' and cargo='Jefe'");
        $user=$query->row();

      // echo "Nombre1 : ".strtoupper($user->nombreT);
      }else
      if($direccionnum>3){
         $numero=2;
         $car=$dir;
         $query=$db_default->query("SELECT * FROM trabajadores WHERE direccion='$car' and cargo='Director'");
         $user=$query->row();

        //echo "Nombre : ".strtoupper($user->nombreT);

      }else
      if($secretarianum>3){
        $numero=3;
       $car=$secre;
       $query=$db_default->query("SELECT * FROM trabajadores WHERE secretaria='$car' and cargo='Secretario'");
       $user=$query->row();
      }

      if($cargot=="Gobernador"  ){
          $mos= "<font face='calibri' size='2' color='white'><b>  <p>$cargot  </p></b></font>";


      }else{
        if($car=="ASESORIA GENERAL" || $car=="COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL" || $car=='COORDINACION DE RELACIONAMIENTO INTERNACIONAL'){
          $mos= "<font face='calibri' size='2' color='black'><b>
        ".$input->despacho($sexo,$car)."
       </b></font>";

        }else{
          $mos= "<font face='calibri' size='2' color='black'><b>
        ".$input->sexo($cargot,$sexo).$input->cargo($car,$numero)."
       </b></font>";
        }

      }
  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $this->session->userdata('s_nombre_g') ?> </title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/AdminLTE.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap.min.css">


  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/html2canvas.js"></script>
  <script type="text/javascript">
    $(window).load(function(){

    $(function() {
    $('#file-input').change(function(e) {
      addImage(e);
     });

     function addImage(e){
      var file = e.target.files[0],
      imageType = /image.*/;

      if (!file.type.match(imageType))
       return;

      var reader = new FileReader();
      reader.onload = fileOnload;
      reader.readAsDataURL(file);
     }

     function fileOnload(e) {

      var result=e.target.result;
      $('#inferior').css("background-image",'url('+result+')');
     }
    });
    });

  </script>
  <style type="text/css">
    .error{
    background-color: #BC1010;
    padding: 6px 12px;
    border-radius: 4px;
    color: white;
    font-weight: bold;
    margin-left: 16px;
    margin-top: 6px;
    position: absolute;
}
.error:before{ /* Este es un truco para crear una flechita */
    content: '';
    border-top: 8px solid transparent;
    border-bottom: 8px solid transparent;
    border-right: 8px solid #BC1010;
    border-left: 8px solid transparent;
    left: -16px;
    position: absolute;
    top: 5px;
}
  </style>
  <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js'></script>
</head>

<body class="hold-transition skin-blue layout-top-nav" >
  <header class="main-header ">

      <a href="#" class="logo" style="  background: #F0F8FF">
        <span class="logo-lg"><b>GADCH</b></span>
      </a>
      <!-- Logo -->
      <nav class="navbar navbar-static-top" role="navigation" style="  background: #F0F8FF; ">
        <!-- Sidebar toggle button-->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">


            <li>
              <a href="<?php echo base_url() ?>index.php/user/salir"  class=" bg-danger " data-toggle="tooltip" data-placement="bottom" title="Cerrar sesión" ><i class="glyphicon glyphicon-off"></i> </a>
            </li>
          </ul>
        </div>
      </nav>


  </header>
  <div class="content-wrapper">
    <section class="content">

      <div class="row">
        <div class="col-md-2">
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="http://<?php echo $ipvisitante ?>/credenciales/photo/<?php echo $foto ?>" alt="User profile picture">
              <h3 class="profile-username text-center"><?php echo $nombre ?></h3>
              <p class="text-muted text-center"><?php echo $mos ?></p>
              <hr>


              <a href="#" class="btn btn-primary btn-block"><b>Editar Cuenta</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!--
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Permisos</h3>
            </div>


            <div class="box-body"   >
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                   <font face="calibri" size="1" ><b>COMISIÓN OFICIAL</b> </font><a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                   <font face="calibri" size="1" ><b>PERMISO PARTICULAR</b> </font><a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                   <font face="calibri" size="1" ><b>PERMISO POR ATENCIÓN EN CAJA </b> </font><a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                   <font face="calibri" size="1" ><b>PERMISO POR VIAJE  </b> </font><a class="pull-right"></a>
                </li>
                <li class="list-group-item">
                   <font face="calibri" size="1" ><b>PERMISOS SIN GOCE DE HABER </b> </font><a class="pull-right"></a>
                </li>
              </ul>
            </div>


          </div>
         box -->
        </div>
        <!-- /.col -->
        <div class="col-md-10">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs" style="  background: #F0F8FF">
              <li class="active"><a href="#activity" data-toggle="tab">Inicio</a></li>
              <li><a href="#timeline" data-toggle="tab">Credenciales</a></li>
              <li><a href="#photo" data-toggle="tab">Descarga Marco</a></li>


            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">

                  <?php
                  if($redes==0){
                    include'gadch_registrar_fb.php';
                  } else if($redes==1){
                    include'gadch_registrar_tw.php';
                  }else {
                    include'redesSociales.php';
                  }


                  ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <?php include'gadch_credenciales.php'; ?>

              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">


              </div>
              <div class="tab-pane" id="photo">
              <?php include'gadch_marco.php'; ?>

              </div>
              <?php if($cargot=='Jefe' || $cargot=='Director' || $cargot=='Secretario' ){ ?>
              <div class="tab-pane" id="alerta">


              </div>
                <?php } ?>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->

  <footer class="footer">
    <div class="pull-right ">
      <b>Version</b> 1.0    </div>
    <strong>Copyright &copy; <?php echo date('Y') ?> <a href="">Onlysoft</a>.</strong>
  </footer>

</div>

<script>
  $(function () {

   $('#example2').DataTable({
     "paging": true,
     "lengthChange": false,
     "lengthMenu":[[5,10,15,-1],[5,10,15,"todo"]],
     "searching": false,
     "ordering": false,
     "info": false,
     "autoWidth": false
   });
   $('#example3').DataTable({
     "paging": true,
     "lengthChange": false,
     "lengthMenu":[[5,10,15,-1],[5,10,15,"todo"]],
     "searching": false,
     "ordering": false,
     "info": false,
     "autoWidth": false
   });
   $('#example4').DataTable({
     "paging": true,
     "lengthChange": false,
     "lengthMenu":[[5,10,15,-1],[5,10,15,"todo"]],
     "searching": true,
     "ordering": false,
     "info": false,
     "autoWidth": false
   });
 });
</script>


<script src="<?php echo base_url() ?>assets/js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/app.min.js"></script>

</body>
</html>
