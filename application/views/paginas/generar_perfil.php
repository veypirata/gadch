 <?php
   include'admin/inc/header.php';
 ?>
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
 </head>
  <body  class="hold-transition skin-blue sidebar-mini" >

  <section class="content">
  			<div class="row">
  				<div class="col-xs-3"><br><img src="<?php echo base_url()?>/perfil/logo.png"  width="200" ></div>
  				<div class="col-xs-6"><center><h2><div class="alert alert-success" ><i class="glyphicon glyphicon-ok" aria-hidden="true"> FELICIDADES USTED ESTÁ A UN PASO DE OBTENER CON SU CREDENCIAL DE IDENTIFICACIÓN </i></div></h2></center></div>
  				<div class="col-xs-2"><br><img src="<?php echo base_url()?>/perfil/bandera.png"  width="200" height="50" ></div>
  			</div>
            <div class="row">
            <div class="col-xs-3">


            </div>

              <div class="col-xs-6">

			<?php if(isset($credencial)){
         foreach ($credencial->result() as $row) {
           $foto=$row->foto;
           $ciI=$row->ci;
           $nombreT=$row->nombreT;
          }?>
          <h3 id="titulo"><p class="bg-success">Hola <b><?php echo $nombreT ?></b> Genere su foto para el perfil de sus redes sociales.</p></h3>
          <input name="file-input" id="file-input" type="file" />
        <div id="html-content-holder" style="width: 500px; height: 500px;">
              <div id="inferior" style="background-image: url('<?php echo base_url()."photo/".$foto?>');background-size: 100% auto; width: 500px; height: 500px;position: relative; ">
            <div id="superior" style="background-image: url('<?php echo base_url()?>perfil/fondo3.png');background-size: 100% auto; width: 500px; height: 500px; "></div>
            </div><br>
            <input id="btn-Preview-Image" type="button" class="btn btn-success" onclick="mostrar()" value="Generar Foto"/>

            <br/>
            <h3 id="h3"><p class="bg-success">Muy bien <b><?php echo $nombreT ?></b> la foto para su Perfil de sus redes sociales ya esta disponibles para su descarga.</p></h3>
            <div id="previewImage" style=" background-color:red ">
            </div>
           <br> <a id="btn-Convert-Html2Image" class="btn btn-info" href="#">Descargar Foto </a><br><br><br>


        <script>

        $(function(){
          document.getElementById('titulo').style.display='block';
          document.getElementById('btn-Convert-Html2Image').style.display='none';
          document.getElementById('h3').style.display='none';
        });

        $(document).ready(function(){


        var element = $("#html-content-holder"); // global variable
        var getCanvas; // global variable

            $("#btn-Preview-Image").on('click', function () {
                 html2canvas(element, {
                 onrendered: function (canvas) {
                        $("#previewImage").append(canvas);
                        getCanvas = canvas;
                        document.getElementById('h3').style.display='block';
                         document.getElementById('superior').style.display='none';
                        document.getElementById('inferior').style.display='none';
                         document.getElementById('btn-Preview-Image').style.display='none';
                         document.getElementById('btn-Convert-Html2Image').style.display='block';
                         document.getElementById('titulo').style.display='none';

                     }
                 });

            });

          $("#btn-Convert-Html2Image").on('click', function () {
            var imgageData = getCanvas.toDataURL("image/png");
            // Now browser starts downloading it instead of just showing it
            var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
            $("#btn-Convert-Html2Image").attr("download", "<?php echo $ciI?>.png").attr("href", newData);
          });

        });

        </script>
        <?php }else echo "error";?>
              </div><br><br><br>

              <div class="col-xs-3">


              </div>
            </div><!-- /.row -->
          </section>
  <br><br><br><br><br>



  <?php include'admin/inc/footer.php'; ?>
