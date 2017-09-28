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
                         <h4><b>Control de Ingreso y Salida del Personas a GADCH</b></h4><br>
                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <?php if(isset($existe_persona)){

                                         foreach ($existe_persona->result_array()  as  $row){
                                            $nombre=$row['nombre_p'];
                                            $ci=$row['ci_p'];
                                            $id_persona=$row['id_persona'];

                                         }
                                    ?>

                                    <div id="alta">
                                        <center>

                                            <?php
                                             $input_dependencia_p = array(
                                                'type' => 'text',
                                                'name' => 'dependencia_p',
                                                'maxlength' => '100',
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
                                                'required'=>'',
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


                                            <?php echo form_open('',['class'=>'navbar-form navbar-center']);
                                            echo "<b>Nombre : ".$nombre."</b><br>";
                                            echo "<b>Ci : ".$ci."</b>";?>
                                            <hr>
                                            <div class="form-group">
                                                <input type="hidden" name="id_persona" value='<?php echo $id_persona ?>'>
                                                <input type="hidden" name="ci" value='<?php echo $ci ?>'>
                                                
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
                                                    <?php echo form_label('Asunto de Visita','') ?><br>
                                                    <?php echo form_input($input_asunto_p) ?>
                                                    <?php echo form_error('asunto_p') ?>
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
                                            <div class="row">

                                            </div>
                                             <div class="row">

                                            </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
