<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>GADCH</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style1.css">


</head>

<body >
  <div class="" id="particles-js">


<center><?php if(isset($error)){
    echo $error;
    }?></center>
<div class="pen-title">

</div>

<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"  ><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Ingresar con Cuenta</div>
  </div>
  <div class="form formulario" >
    <h2>Formulario de Ingreso</h2>

     <?php
       $input_usuario = array(
          'type' => 'text',
          'name' => 'usuario',
          'maxlength' => '20',
          'class' => 'form-control',
          'placeholder'=>'Usuario',
          'value' => set_value('usuario')
          );
      ?>
      <?php
        $input_ci_usuario = array(
           'type' => 'text',
           'name' => 'ci_usuario',
           'maxlength' => '20',
           'class' => 'form-control',
           'placeholder'=>'CI',
           'value' => set_value('ci_usuario')
           );
       ?>
      <?php
       $input_pass = array(
          'type' => 'password',
          'name' => 'password',
          'maxlength' => '15',
          'class' => 'form-control',
          'placeholder'=>'Contraseña'

          );
      ?>


      <?php echo form_open('',['class'=>'navbar-form navbar-center ']) ?>
      <hr>
        <div class="form-group">
                <?php echo form_input($input_ci_usuario) ?>
                <?php echo form_error('usuario') ?>
        </div>

       <hr>
       <button type="submit" >Ingresar</button>
      <?php echo form_close() ?><br>


  </div>
  <div class="form formulario" >
    <h2>Ingreso con Usuario</h2>
    <form method="post" action="<?php echo base_url() ?>index.php/login/admin" class="navbar-form navbar-center">
      <hr>
      <div class="form-group">
              <?php echo form_input($input_usuario) ?>
              <?php echo form_error('usuario') ?>
      </div>
      <div class="form-group">
              <?php echo form_input($input_pass) ?>
              <?php echo form_error('usuario') ?>
      </div>
      <hr>

      <button>Ingresar</button>
    </form>
  </div>
</div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="<?php echo base_url() ?>assets/js/particle/particles.js"></script>
  <script src="<?php echo base_url() ?>assets/js/particle/app.js"></script>
  <script src="<?php echo base_url() ?>assets/js/particle/stats.js"></script>
    <script src="<?php echo base_url() ?>assets/js/index.js"></script>
</body>
</html>
