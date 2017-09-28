<?php include'inc/header.php'; ?>
<?php include'inc/menu.php';
if($this->session->userdata('s_dependencia')=='Despacho')
 $query=$db_default->query("SELECT * FROM dependencias WHERE lugar_d='Despacho' order by nombre_d asc");
else
    $query=$db_default->query("SELECT * FROM dependencias WHERE lugar_d='Madona' order by nombre_d asc");
?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                         <h4><b>Nuevo Ingreso de Persona a la Madona </b></h4><br>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <center>

                                            <?php
                                             $input_ci_p = array(
                                                'type' => 'number',
                                                'name' => 'ci_n',
                                                'maxlength' => '10',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir C.I.',
                                                'value' => "$ci"
                                                );
                                            ?>
                                            <?php
                                             $input_nombre_p = array(
                                                'type' => 'text',
                                                'name' => 'nombre_p',
                                                'maxlength' => '50',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Nombre',
                                                'value' => set_value('nombre_p')
                                                );
                                            ?>

                                            <?php
                                             $input_dependencia_p = array(
                                                'type' => 'text',
                                                'name' => 'dependencia_p',
                                                'maxlength' => '200',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir dependencia',
                                                'value' => set_value('dependencia_p')
                                                );
                                            ?>
                                            <?php
                                             $input_asunto_p = array(
                                                'type' => 'text',
                                                'name' => 'asunto_p',
                                                'maxlength' => '200',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Asunto',
                                                'value' => set_value('asunto_p')
                                                );
                                            ?>
                                            <?php
                                             $input_contacto_p = array(
                                                'type' => 'text',
                                                'name' => 'contacto_p',
                                                'maxlength' => '50',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Nombre contacto',
                                                'value' => set_value('contacto_p')
                                                );
                                            ?>


                                            <?php echo form_open('',['class'=>'navbar-form navbar-center']) ?>
                                            <hr>
                                            <div class="form-group">
                                                    <?php echo form_label('CI de la Persona : ','') ?><br>
                                                    <?php echo form_label("$ci",'') ?><br>
                                                    <input type="hidden" name="ci_p" value='<?php echo $ci ?>'>
                                            </div>
                                            <div class="form-group">
                                                    <?php echo form_label('Nombre de la Persona ','') ?><br>
                                                    <?php echo form_input($input_nombre_p) ?>
                                                    <?php echo form_error('nombre_p') ?>
                                            </div>

                                             <div class="form-group">
                                                    <?php echo form_label('Asunto de Visita','') ?><br>
                                                    <?php echo form_input($input_asunto_p) ?>
                                                    <?php echo form_error('asunto_p') ?>
                                            </div>

                                            <div class="form-group">
                                                    <label for="sucursal">Dependencia</label>
                                                    <select name="dependencia_p"  class="form-control selectpicker" data-live-search="true">
                                                        <?php  foreach ($query->result_array()  as  $row){
                                                            $id_dependencia=$row['id_dependencia'];
                                                            $nombre_d=$row['nombre_d'];
                                                        echo "<option value='$nombre_d'>$nombre_d</option>";
                                                      } ?>
                                                    </select>
                                                </div>

                                             <div class="form-group">
                                                    <?php echo form_label('Contacto  ','') ?><br>
                                                    <?php echo form_input($input_contacto_p) ?>
                                                    <?php echo form_error('contacto_p') ?>
                                            </div><br>
                                             <button type="submit" name="btnci" class="btn btn-info"> <span class="glyphicon glyphicon-search" ></span> Registrar</button><br>
                                             <hr>
                                             <?php echo form_close() ?><br>
                                            </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>