

<script type="text/javascript">

</script>
<div class="row">
  <div class="col-md-5">
    <form class="form-horizontal" method="post" action="<?php echo base_url() ?>index.php/user/facebook">
    <br>


    <label  class="col-md-2 control-label">Url</label>
     <div class=" input-group">
       <input type="url" class="form-control" required name="urlFacebook"  placeholder="Dirección Url" id="basic-url" aria-describedby="basic-addon3">
       <span class="input-group-addon">1</span>
     </div><br>
  <label  class="col-md-2 control-label">Amigos</label>
   <div class=" input-group">
     <input type="number" class="form-control" name="amigosFacebook" required  placeholder="Numero de Amigos" >
     <span class="input-group-addon">2</span>
   </div><br>
   <div class="form-group">
   <div class="col-sm-offset-2 col-sm-10">
     <input type="submit"  name="facebook" class="btn btn-primary boton" value="Emviar">
   </div>
 </div>
  </form>
  </div>
  <div class="col-md-7">
    <?php include'img/facebook.fot'; ?>
  </div>

</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">INSTRUCCIONES PARA LLENAR FORMULARIO FACEBOOK</h4>
      </div>
      <div class="modal-body">
        <h4>POR FAVOR, LEA ESTAS INSTRUCCIONES DETENIDAMENTE </h4>
        <p>Para completar el formulario, Ud. Deberá ingresar a su cuenta de <a href="https://www.facebook.com/profile.php"  target="_blank" >Facebook/perfil</a>  del cual obtendrá los datos necesarios para llenar este formulario.  En la pagina siguiente  encontrará la explicación completa con imagenes</p>
        <ul>
          <li>Copiar la dirección de la cuenta de su perfil de facebook</li>
          <li>De la misma introducir el la cantidad de amigos que cuenta en facebook</li>
        </ul>
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
