<?php include'inc/header.php'; ?>
<?php include'inc/menu.php' ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                         <h4><b>Nuevo Usuario Para el manejo del Sistemas </b></h4><br>
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
                                             $input_ci_u = array(
                                                'type' => 'number',
                                                'name' => 'ci_u',
                                                'maxlength' => '10',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir C.I.',
                                                'value' => set_value('ci_u')
                                                );
                                            ?>
                                            <?php
                                             $input_nombre_u = array(
                                                'type' => 'text',
                                                'name' => 'nombre_u',
                                                'maxlength' => '50',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Nombre',
                                                'value' => set_value('nombre_u')
                                                );
                                            ?>

                                            <?php
                                             $input_usuario_u = array(
                                                'type' => 'text',
                                                'name' => 'usuario_u',
                                                'maxlength' => '10',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Login',
                                                'value' => set_value('usuario_u')
                                                );
                                            ?>
                                            <?php
                                             $input_pass_u = array(
                                                'type' => 'password',
                                                'name' => 'password_u',
                                                'maxlength' => '10',
                                                'class' => 'form-control',
                                                'placeholder'=>'Introducir Asunto',
                                                'value' => set_value('password_u')
                                                );
                                            ?>
                                            <?php
                                             $input_cargo_u = array(
                                                  '2' => 'Administrador',
                                                  '1' => 'RRHH',
                                                  '0' => 'Oficial'
                                                  );
                                              $clase='class="form-control"';
                                            ?>
                                             <?php
                                             $input_dependencia_u = array(
                                                  'Despacho' => 'Despacho',
                                                  'Madona' => 'Madona'
                                                  );
                                              $clase='class="form-control"';
                                            ?>

                                            <?php echo form_open('',['class'=>'navbar-form navbar-center']) ?>
                                            <hr>

                                            <div class="form-group">
                                                    <?php echo form_label('Nombre de la Persona ','') ?><br>
                                                    <?php echo form_input($input_nombre_u) ?>
                                                    <?php echo form_error('nombre_p') ?>
                                            </div>
                                             <div class="form-group">
                                                    <?php echo form_label('C.I: ','') ?><br>
                                                    <?php echo form_input($input_ci_u) ?>
                                                    <?php echo form_error('ci_u') ?>
                                            </div>
                                            <div class="form-group">
                                                    <?php echo form_label('Usuario ','') ?><br>
                                                    <?php echo form_input($input_usuario_u) ?>
                                                    <?php echo form_error('usuario_u') ?>
                                            </div>
                                            <div class="form-group">
                                                    <?php echo form_label('Contraseña ','') ?><br>
                                                    <?php echo form_input($input_pass_u) ?>
                                                    <?php echo form_error('password_u') ?>
                                            </div>
                                             <div class="form-group">
                                                <?php echo form_label('Cargo','') ?><br>
                                                <?php echo form_dropdown('cargo_u',$input_cargo_u,set_value('cargo_u'),$clase) ?><?php echo form_error('cargo_u') ?><br>
                                                </div>
                                                <div class="form-group">
                                                <?php echo form_label('Dependencia','') ?><br>
                                                <?php echo form_dropdown('dependencia_u',$input_dependencia_u,set_value('dependencia_u'),$clase) ?><?php echo form_error('dependencia_u') ?><br>
                                                </div>
                                                <br>
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
