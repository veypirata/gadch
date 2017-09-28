
    <div class="row">
      <div class="col-md-3 col-sm-3">
         <hr>
          <h4 id=""><p class="bg-success">Para subir una nueva foto de perfil seleccione </p></h4><br>
        <input name="file-input" id="file-input" type="file" />
        <hr>
      </div>
      <div class="col-md-6 col-sm-6">


                <div id="html-content-holder" style="width: 400px; height: 500px;">
                      <div id="inferior" style="background-image: url('http://<?php echo $ipvisitante ?>/credenciales/photo/<?php echo $foto ?>');background-size: 400px 500px; width: 400px; height: 500px;position: relative; ">
                        <div id="superior" style="background-image: url('<?php echo base_url()?>perfil/facebook1.png');background-size: 400px 500px; width: 400px; height: 500px; "></div>
                    </div><br>
                    <input id="btn-Preview-Image" type="button" class="btn btn-success" onclick="mostrar()" value="Generar Foto"/>

                    <br/>

                    <div id="previewImage">
                    </div>
                   <br> <a id="btn-Convert-Html2Image" class="btn btn-info" href="#">Descargar Foto </a>


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
                        document.getElementById('h3').style.display='none';
                         document.getElementById('superior').style.display='block';
                        document.getElementById('inferior').style.display='block';
                         document.getElementById('btn-Preview-Image').style.display='block';
                         document.getElementById('btn-Convert-Html2Image').style.display='none';
                         document.getElementById('titulo').style.display='block';
                        document.getElementById('previewImage').innerHTML="";
                      });

                    });

                </script>

              </div><br><br><br><br>
      </div>

      <div class="col-md-3 col-sm-3">
        <hr>
        <h4 id="titulo"><p class="bg-success">Hola <b><?php echo $nombre ?></b> Genere su foto para el perfil de sus redes sociales.</p></h4>

        <h4 id="h3"><p class="bg-info">Muy bien <b><?php echo $nombre ?></b> la foto para su Perfil de sus redes sociales ya esta disponibles para su descarga.</p></h4>
        <hr>
      </div><br><br>
    </div>
