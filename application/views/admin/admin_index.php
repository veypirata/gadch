<?php include'inc/header.php'; ?>
<script src="<?php echo base_url();?>assets/js/easyautocomplete/jquery.easy-autocomplete.min.js"></script>

<!-- CSS file -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/easyautocomplete/easy-autocomplete.min.css">

<!-- Additional CSS Themes file - not required-->
<link rel="stylesheet" href="<?php echo base_url();?>assets/js/easyautocomplete/easy-autocomplete.themes.min.css">
<?php include'inc/menu.php';
$fecha_hoy=Date('Y-m-d');
$url_ser=base_url();
$porciones = explode("/", $url_ser);
$ipvisitante='192.168.197.8';//$porciones[2];

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
                                      <div class="box box-info">
                                          <div class="box-body box-profile">
                                            <div class="" id="imagen">

                                            </div>

                                            <h3 class="profile-username text-center" id="nombre"></h3>
                                            <div class="box-body">
                                            <div class="row">
                                                <div class="col-md-6" >

                                                  <div id="compartido_fb">
                                                  </div>
                                                </div>
                                                <div class="col-md-6" >
                                                  <div id="compartido_tw">

                                                  </div>

                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12" >
                                                  <div id="compartido_su">

                                                  </div>
                                                  <div id="amigos_facebook">

                                                  </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6" id="facebook_index">
                                                <h2>Facebook</h2><hr>

                                              </div>
                                              <div class="col-md-6" id="twitter_index">
                                                <h2>Twitter</h2><hr>


                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                        <div class="" id="terminar">
                                          <button type="button" onclick="refrescar()" name="button" class="btn btn-primary">Terminar</button>
                                        </div>
                                  </div>
                                  </div>
                                  </div>
                        </div>
                    </div>
                </div>
            </div>
          </div>
            <script type="text/javascript">
            var ip='<?php echo "http://".$ipvisitante ?>';

            $( document ).ready(function() {
            eliminar();
            $('#compartido_fb').show();
            $('#terminar').hide();
            });
            var base_url='<?php echo base_url(); ?>';

                 var direccion="<?php echo base_url()?>photo/";
            	var options = {

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
                              var selectedItemValue = $("#provider-json").getSelectedItemData().id_c;
                              $("#data-holder").val(selectedItemValue).trigger("change");
                          },
                  onClickEvent: function() {
                    eliminar();
            				//var value = $("#provider-json").getSelectedItemData().ci;
                    var nombre = $("#provider-json").getSelectedItemData().nombreT;
                    var imagen = $("#provider-json").getSelectedItemData().foto;
                    var id = $("#provider-json").getSelectedItemData().id_c;

            				//$("#data-holder").val(value).trigger("change");

                    facebook(id);
                    twitter(id);
                    persona(nombre,imagen);
                    llenar(id);

            			},
            			onKeyEnterEvent: function(){
                    eliminar();
            				//var value = $("#provider-json").getSelectedItemData().ci;
                    var nombre = $("#provider-json").getSelectedItemData().nombreT;
                    var imagen = $("#provider-json").getSelectedItemData().foto;
                    var id = $("#provider-json").getSelectedItemData().id_c;
                  //  var id = $("#provider-json").getSelectedItemData().id_c;
                  //$("#data-holder").val(value).trigger("change");

                    facebook(id);
                    twitter(id);
                    persona(nombre,imagen);
                    llenar(id);
            			}
            		}
            	};

            	$("#provider-json").easyAutocomplete(options);

              // llenar
              function persona(nombre,imagen){
                $("#nombre").append(nombre);
                $("#imagen").append('  <img class="profile-user-img img-responsive img-circle" src="'+ip+'/credenciales/photo/'+imagen+'" alt="User profile picture">');
              }

              function refrescar(){
                location.reload();
                $("#terminar").hide();
              }
              function eliminar(){
                $("#facebook_index,#amigos_facebook,#twitter_index,#nombre,#imagen,#compartido_fb,#compartido_tw,#compartido_su").empty();
                $("#terminar").show();

              }
              function llenar(id){
                $.post(base_url+"index.php/admin_gadch/compartido_mostrar",
                {
                  'id_funcioanrio':id
                },
                function(data){
                  var c = JSON.parse(data);
                  var n=1;

                  $.each(c,function(i,item){
                    var fb_con=String(item.fb);
                    var tw_con=String(item.tw);
                    var su_con=0;
                    var nul = 'null';
                      if(tw_con==nul  && fb_con==nul){
                        su_con=0;
                      }else{

                       if(tw_con!=nul && fb_con!=nul){
                         su_con=parseInt(fb_con)+parseInt(tw_con);
                       }else{
                         if(tw_con!=nul ){
                           su_con=tw_con;
                         }else{
                           su_con=fb_con;                          //  alert(su_con);
                         }
                       }
                      }

                    if(fb_con==0)
                    { var span_fb='<span class="btn btn-block btn-xs btn-danger">sa'+fb_con+'</span>' }
                    if((fb_con>=1 && fb_con<=24))
                    { var span_fb='<span class="btn btn-block btn-xs btn-warning">'+fb_con+'</span>' }
                    if((fb_con>=25 && fb_con<=49))
                    { var span_fb='<span class="btn btn-block btn-xs " id="amarillo" >'+fb_con+'</span>' }
                    if((fb_con>=50 && fb_con<=74))
                    { var span_fb='<span class="btn btn-block btn-xs btn-info" >'+fb_con+'</span>' }
                    if((fb_con>=75 && fb_con<=99))
                    { var span_fb='<span class="btn btn-block btn-xs " id="v_lechuga">'+fb_con+'</span>' }
                    if(fb_con>=100)
                    { var span_fb='<span class="btn btn-block btn-xs btn-success">'+fb_con+'</span>' }
                    if(fb_con=='null')
                    { var span_fb='<span class="btn btn-block btn-xs btn-danger">0</span>' }


                    if(tw_con==0)
                    { var span_tw='<span class="btn btn-block btn-xs btn-danger">'+tw_con+'</span>' }
                    if((tw_con>=1 && tw_con<=24))
                    { var span_tw='<span class="btn btn-block btn-xs btn-warning">'+tw_con+'</span>' }
                    if((tw_con>=25 && tw_con<=49))
                    { var span_tw='<span class="btn btn-block btn-xs " id="amarillo" >'+tw_con+'</span>' }
                    if((tw_con>=50 && tw_con<=74))
                    { var span_tw='<span class="btn btn-block btn-xs label-info" >'+tw_con+'</span>' }
                    if((tw_con>=75 && tw_con<=99))
                    { var span_tw='<span class="btn btn-block btn-xs " id="v_lechuga">'+tw_con+'</span>' }
                    if(tw_con>=100)
                    { var span_tw='<span class="btn btn-block btn-xs btn-success">'+tw_con+'</span>' }
                    if(tw_con=='null')
                    { var span_tw='<span class="btn btn-block btn-xs btn-danger">0</span>' }

                    if(su_con==0)
                    { var span_su='<span class="btn btn-block btn-xs btn-danger">'+su_con+'</span>' }
                    if((su_con>=1 && su_con<=24))
                    { var span_su='<span class="btn btn-block btn-xs btn-warning">'+su_con+'</span>' }
                    if((su_con>=25 && su_con<=49))
                    { var span_su='<span class="btn btn-block btn-xs " id="amarillo" >'+su_con+'</span>' }
                    if((su_con>=50 && su_con<=74))
                    { var span_su='<span class="btn btn-block btn-xs btn-info" >'+su_con+'</span>' }
                    if((su_con>=75 && su_con<=99))
                    { var span_su='<span class="btn btn-block btn-xs " id="v_lechuga">'+su_con+'</span>' }
                    if(su_con>=100)
                    { var span_su='<span class="btn btn-block btn-xs btn-success">'+su_con+'</span>' }
                    if(su_con=='null')
                    { var span_su='<span class="btn btn-block btn-xs btn-success">0</span>' }

                    $('#compartido_fb').append(
                      '<label for="">Total Compartido de Facebook</label>'+
                        span_fb
                    );
                    $('#compartido_tw').append(
                      '<label for="">Total Compartido de Twitter</label>'+
                        span_tw
                    );
                    $('#compartido_su').append(
                      '<label for="">Total Compartido</label>'+
                          span_su
                    );
                  });
                });

              }
              function facebook(id){
                $.post(base_url+"index.php/admin_gadch/facebook_mostrar",
                {
                  'id_usuario':id
                },

                function(data){
                  $('#facebook_index').append('<h2>Facebook</h2>');
                  var c = JSON.parse(data);
                  var n=1;
                  var afb_con=0;
                  $.each(c,function(i,item){
                    afb_con=parseInt(afb_con)+parseInt(item.amigos_facebook);


                    $('#facebook_index').append(
                  '  <ul class="list-group list-group-unbordered">'+
                    '  <li class="list-group-item">'+
                      '  <b>Amigos</b> <a class="pull-right">'+item.amigos_facebook+'</a>'+
                    '  </li>'+
                    '  <li class="list-group-item">'+
                        '<b>Ult. Revision</b> <a class="pull-right">'+item.fecha_registro_actualizado+'</a>'+
                      '</li> </lu>'+
                       '<a href="'+item.url_facebook+'" target="_blank" class="btn btn-block btn-info btn-xs" id="facebook" ><i class="fa fa-facebook"></i> Ir a la Pagina </a>'+

                      '<hr>'
                    );
                    n++;
                  });
                  if((afb_con>=0 && afb_con<=249))
                  { var span_afb='<span class="btn btn-block btn-xs btn-danger">'+afb_con+'</span>' }
                  if((afb_con>=250 && afb_con<=499))
                  { var span_afb='<span class="btn btn-block btn-xs " id="amarillo" >'+afb_con+'</span>' }
                  if((afb_con>=500 && afb_con<=749))
                  { var span_afb='<span class="btn btn-block btn-xs btn-info" >'+afb_con+'</span>' }
                  if((afb_con>=750 && afb_con<=999))
                  { var span_afb='<span class="btn btn-block btn-xs " id="v_lechuga">'+afb_con+'</span>' }
                  if(afb_con>=100)
                  { var span_afb='<span class="btn btn-block btn-xs btn-success">'+afb_con+'</span>' }
                  if(afb_con=='null')
                  { var span_afb='<span class="btn btn-block btn-xs btn-danger">0</span>' }
                  $('#amigos_facebook').append(
                    '<label>Facebook de Facebook</label>'+
                    span_afb
                  );
                });
              }
              function twitter(id){
                $.post(base_url+"index.php/admin_gadch/twitter_mostrar",
                {
                  'id_usuariot':id
                },
                function(data){
                  $('#twitter_index').append("<h2>Twitter</h2>");
                  var c = JSON.parse(data);
                  var n=1;
                  $.each(c,function(i,item){
                    var link=String(item.cuenta_twitter);
                    if(link.indexOf('http') != -1){
                      var link_twitter=link;
                    }else{
                      var link_twitter="https://www.twitter.com/"+item.cuenta_twitter;
                    }
                    $('#twitter_index').append(
                    '  <ul class="list-group list-group-unbordered">'+
                      '  <li class="list-group-item">'+
                        '  <b>Tweets</b> <a class="pull-right">'+item.tweets_twitter+'</a>'+
                        '</li>'+
                        '<li class="list-group-item">'+
                        '  <b>seguirdores</b> <a class="pull-right">'+item.seguidores_twitter+'</a>'+
                        '</li>'+
                        '<li class="list-group-item">'+
                          '<b>siguiendo</b> <a class="pull-right">'+item.siguiendo_twitter+'</a>'+
                        '</li>'+
                        '<li class="list-group-item">'+
                          '<b>Me Gusta</b> <a class="pull-right">'+item.me_gusta_twitter+'</a>'+
                        '</li>'+
                        '<li class="list-group-item">'+
                            '<b>Ult. Revision</b> <a class="pull-right">'+item.fecha_registro_actualizado+'</a>'+
                          '</li>'+
                      '</ul>'+
                      '<a href="'+link_twitter+'" target="_blank" class="btn btn-block btn-info btn-xs"  ><i class="fa fa-twitter"></i> Ir a la Pagina </a>'+

                      ' <hr>'
                    );
                    n++;
                  });
                });
              }
            </script>

      <?php include'inc/footer.php'; ?>
      <?php include'inc/pie.php'; ?>
