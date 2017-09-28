<div class="row">
  <div class="col-md-5">
    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>index.php/user/twitter">
    <br>


    <label  class="col-md-3 control-label">Cuenta</label>
     <div class=" input-group">
       <input type="text" class="form-control" name="cuentaTw" required placeholder="Cuenta (@veymar_serrudo)" id="basic-url" aria-describedby="basic-addon3" >
       <span class="input-group-addon">1</span>
     </div><br>

  <label  class="col-md-3 control-label">Tweets</label>
   <div class=" input-group">
     <input type="number" class="form-control" name="tweetsTw" required placeholder="Tweets" >
     <span class="input-group-addon">2</span>
   </div><br>

   <label  class="col-md-3 control-label">Siguiendo</label>
    <div class=" input-group">
      <input type="number" class="form-control" name="siguiendoTw" required placeholder="Siguiendo" >
      <span class="input-group-addon">3</span>
    </div><br>

    <label  class="col-md-3 control-label">Seguidores</label>
     <div class=" input-group">
       <input type="number" class="form-control" name="seguidoresTw" required placeholder="Seguidores" >
       <span class="input-group-addon">4</span>
     </div><br>

     <label  class="col-md-3 control-label">Me Gusta</label>
      <div class=" input-group">
        <input type="number" class="form-control" name="meGustaTw" required placeholder="Me Gusta" >
        <span class="input-group-addon">5</span>
      </div><br>

   <div class="form-group">
   <div class="col-sm-offset-3 col-sm-10">
     <input type="submit" name="facebook" class="btn btn-primary" value="Enviar">
   </div>
 </div>
  </form>
  </div>
  <div class="col-md-7">
    <?php include'img/twitter.fot'; ?>
  </div>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">INSTRUCCIONES PARA LLENAR FORMULARITO TWITTER</h4>
      </div>
      <div class="modal-body">
        <h4>POR FAVOR, LEA ESTAS INSTRUCCIONES DETENIDAMENTE </h4>
        <p>Para completar el formulario, Ud. Deberá ingresar a su cuenta de <a href="https://twitter.com"  target="_blank" >Twitter</a> del cual obtendrá los datos necesarios para llenar este formulario.  En la pagina siguiente  encontrará la explicación completa con imagenes</p>
        <ul>
          <li> Copiar el nombre de usuario de twitter</li>
          <li> Introducir Cantidad de Tweets</li>
          <li> Introducir Cantidad de personas siguiendo</li>
          <li> Introducir Cantidad Seguidores</li>
          <li> Introducir Cantidad de Me Gusta</li>

        </ul>
        <br>
        <p>Click en CONTINUAR o fuera del cuadro para pasar a la siguiente pagina</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-info" data-dismiss="modal">Continuar</button>
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">
    $(document).ready(function(){
        window.onload= (function(){
            $("#myModal").modal('show');
        });
    });
    </script>
