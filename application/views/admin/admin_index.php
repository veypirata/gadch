<?php include'inc/header.php'; ?>
<script src="<?php echo base_url();?>assets/js/easyautocomplete/jquery.easy-autocomplete.min.js"></script>

<!-- CSS file -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/easyautocomplete/easy-autocomplete.min.css">

<!-- Additional CSS Themes file - not required-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/easyautocomplete/easy-autocomplete.themes.min.css">
<?php include'inc/menu.php';
$fecha_hoy=Date('Y-m-d');

?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box">
                        <div class="box-header with-border">
                          <p><h3 class="box-title ">CONTROL DE REDES SOCIALES</h3></p>

                          <div class="box-tools pull-right">
                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>

                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                          </div>
                        </div>
                    <!-- /.box-header -->
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-12">
                                  <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="inputEmail3" class="col-sm-3 control-label">Buscar Funcionario</label>
                                        <div class="col-sm-9" id="">

                                          <input type="text" class="form-control" id="provider-json" name="cantidad"  placeholder="Introducir Nombre" value="" required>

                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-4" id="contenido">
                                      <input type="hidden" id="data-holder"/>


                                        <!-- Profile Image -->
                                        <div class="box box-primary">
                                          <div class="box-body box-profile">
                                            <div class="" id="imagen">

                                            </div>

                                            <h3 class="profile-username text-center" id="nombre"></h3>

                                            <p class="text-muted text-center"></p>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <h2>facebook</h2>
                                                <ul class="list-group list-group-unbordered">
                                                  <li class="list-group-item">
                                                    <b>Amigos</b> <a class="pull-right">1,322</a>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <b>Ultima Revision</b> <a class="pull-right">543</a>
                                                  </li>

                                                </ul>
                                              </div>
                                              <div class="col-md-6">
                                                <h2>Twitter</h2>
                                                <ul class="list-group list-group-unbordered">
                                                  <li class="list-group-item">
                                                    <b>Tweets</b> <a class="pull-right">1,322</a>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <b>seguirdores</b> <a class="pull-right">543</a>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <b>siguiendo</b> <a class="pull-right">13,287</a>
                                                  </li>
                                                  <li class="list-group-item">
                                                    <b>Me Gusta</b> <a class="pull-right">13,287</a>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>



                                          </div>
                                          <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                        <!-- About Me Box -->
                                        <div class="box box-primary">

                                          <div class="box-body">


                                            <p>
                                              <span class="label label-danger">UI Design</span>
                                              <span class="label label-success">Coding</span>
                                              <span class="label label-info">Javascript</span>
                                              <span class="label label-warning">PHP</span>
                                              <span class="label label-primary">Node.js</span>
                                            </p>

                                            <hr>


                                          </div>
                                          <!-- /.box-body -->
                                        </div>
                                        <!-- /.box -->

                                  </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <script type="text/javascript">
            var base_url='<?php echo base_url(); ?>';
            // var options = {
            //
            //     url: "<?php echo base_url();?>index.php/admin_gadch/buscador",
            //
            //     getValue: function(element) {
            //         return element.nombreT;
            //     },
            //
            //     list: {
            //         onSelectItemEvent: function() {
            //             var selectedItemValue = $("#provider-json").getSelectedItemData().ci;
            //
            //             $("#inputTwo").val(selectedItemValue).trigger("change");
            //         },
            //         onHideListEvent: function() {
            //         	$("#inputTwo").val().trigger("change");
            //     	}
            //     }
            // };
                 var direccion="<?php echo base_url()?>photo/";
            	var options = {
            		//url: "<?php echo base_url();?>js/countries.json",
            		url: "<?php echo base_url();?>index.php/admin_gadch/buscador",

            		getValue: "nombreT",

            		theme:"blue-light",
            		template: {
            			type: "custom",
            			method: function(value, item) {
            				return item.nombreT ;
            			}
            		},

                template: {
                     type: "description",
                     fields: {
                         description: "secretaria"
                     }
                 },

            		list: {
            			maxNumberOfElements: 10,
            			match: {
            				enabled: true
            			},

                  onSelectItemEvent: function() {
                              var selectedItemValue = $("#provider-json").getSelectedItemData().ci;
                              $("#data-holder").val(selectedItemValue).trigger("change");
                          },
                  onClickEvent: function() {
            				var value = $("#provider-json").getSelectedItemData().ci;
                    var value1 = $("#provider-json").getSelectedItemData().nombreT;
                    var imagen = $("#provider-json").getSelectedItemData().foto;
                    var id = $("#provider-json").getSelectedItemData().id_c;
                      $("#imagen").append('  <img class="profile-user-img img-responsive img-circle" src="http://200.87.15.243/credenciales/photo/'+imagen+'" alt="User profile picture">').trigger("change");
                    $("#nombre").append(value1).trigger("change");
            				$("#data-holder").val(value).trigger("change");
                    llenar(id);
                    facebook(id);
                    twitter(id);
            			},
            			onKeyEnterEvent: function(){
            				var value = $("#provider-json").getSelectedItemData().ci;
                    var value1 = $("#provider-json").getSelectedItemData().nombreT;
                    var imagen = $("#provider-json").getSelectedItemData().foto;
                    var id = $("#provider-json").getSelectedItemData().id_c;
                    $("#nombre").append(value1).trigger("change");
                    $("#imagen").append('  <img class="profile-user-img img-responsive img-circle" src="http://200.87.15.243/credenciales/photo/'+imagen+'" alt="User profile picture">').trigger("change");
            				$("#data-holder").val(value).trigger("change");
                    llenar(id);
                    facebook(id);
                    twitter(id);
            			}
            		}
            	};

            	$("#provider-json").easyAutocomplete(options);

              // llenar
              function llenar(id){
                $.post(base_url+"index.php/admin_gadch/compartido_mostrar",
                {
                  'id_f':id
                },
                function(data){

                  var c = JSON.parse(data);
                  var n=1;
                  $.each(c,function(i,item){
                    $('#table1 tbody').append(

                    );
                    n++;
                  });
                });
              }
              function facebook(id){
                $.post(base_url+"index.php/admin_gadch/facebook_mostrar",
                {
                  'id_usuario':id
                },
                function(data){

                  var c = JSON.parse(data);
                  var n=1;
                  $.each(c,function(i,item){
                    $('#table1 tbody').append(

                    );
                    n++;
                  });
                });
              }
              function twitter(id){
                $.post(base_url+"index.php/admin_gadch/twitter_mostrar",
                {
                  'id_usuariot':id
                },
                function(data){

                  var c = JSON.parse(data);
                  var n=1;
                  $.each(c,function(i,item){
                    $('#table1 tbody').append(

                    );
                    n++;
                  });
                });
              }
            </script>

      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
