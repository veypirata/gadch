/*$.post(base_url+"index.php/admin_gadch/cargo_p",
{
  'cargo':1,
  'contrato':1
},
function(data){

  var c = JSON.parse(data);
  var n=1;
  $.each(c,function(i,item){
    $('#table1 tbody').append(
      '<tr >'+
        '<td>'+n+'</td>'+
        '<td>'+item.id_c+'</td>'+
        '<td>'+item.nombreT+'</td>'+
        '<td>'+item.ci+'</td>'+
        '<td>'+item.secretaria +'</td>'+
        '<td> <a href="'+item.id_c+'" class="btn btn-block btn-primary btn-xs" id="facebook" ><i class="fa fa-facebook"></i>acebook</a></td>'+
          '<td> <a href="'+item.id_c+'" class="btn btn-block btn-info btn-xs" id="twitter" ><i class="fa fa-twitter"></i> Twitter</a></td>'+
      '</tr>'
    );
    n++;
  });
  $('#table1').DataTable({
    'paginf':true,
    'info':true,
    'filter':true,
  });
});*/
$( document ).ready(function() {
  $("#listar_redes1").hide();
});
$("body").on("click","#listar_redes  #facebook",function(event){
  var n=1;
  $('#label-form2').hide();
  $("#input_text").hide();
  $("#listar_redes1").show();
  $('#cuentas',).empty();
  $('#titulo',).empty();
  $('#titulo').append('Facebook');
  event.preventDefault();
  idSelect=$(this).attr("href");
  id_trabajador=$(this).parent().parent().children("td:eq(1)").text();
  nombre=$(this).parent().parent().children("td:eq(2)").text();
  ci=$(this).parent().parent().children("td:eq(3)").text();
  secretaria=$(this).parent().parent().children("td:eq(4)").text();
  $.post(base_url+"index.php/admin_gadch/facebook_mostrar",
  {
    'id_usuario':id_trabajador
  },
  function(data){
    var fb = JSON.parse(data);
    $('#cuentas').html(
      '<label for="">'+nombre+'</label>'
    );
    $("#id_funcionario").val(idSelect);
    $("#eliminar").val(idSelect);
    $("#tipo_red").val("facebook");
    $("#panel").removeClass();
    $("#panel").addClass(" box box-primary box-solid");
    $("#facebook1").removeClass();
    $("#facebook1").addClass(" btn btn-block btn-primary  btn-xs ");

    $('#label-form').html(
      'Compartido'
    );
    $.each(fb,function(i,items){
        $('#cuentas').append(
      '<div class="col-md-12">'+
                   '<div id="facebook">'+
                       '<div class="panel-heading">'+
                          ' <div class="row">'+
                              ' <div class="col-xs-3">'+
                                   '<i class="fa fa-facebook fa-5x"></i>'+
                               '</div>'+
                               '<div class="col-xs-9 text-right">'+
                                 ' <div>Amigos De Facebook</div>'+
                                  ' <div class="huge">'+items.amigos_facebook+'</div>'+

                              ' </div>'+
                          ' </div>'+
                       '</div>'+
                      ' <a href="'+items.url_facebook+'" target="_blank" data-toggle="tooltip" data-placement="bottom" title="'+items.url_facebook+'">'+
                          ' <div class="panel-footer">'+
                              ' <span class="pull-left">Ir a Cueta '+n+'</span>'+
                              ' <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>'+
                              ' <div class="clearfix"></div>'+
                          ' </div>'+
                      ' </a>'+
                  ' </div> <br>'+

               '</div>'
        );
        n++;
    });
  });
});

$("body").on("click","#listar_redes #twitter ",function(event){
  var n=1;
  $('#input_text').html("");
  $('#label-form2').show();
  $("#input_text").show();
  $("#listar_redes1").show();
  $('#cuentas',).empty();
  $('#titulo',).empty();
  $('#titulo').append('Twitter');
  event.preventDefault();
  idSelect=$(this).attr("href");
  id_trabajador1=$(this).parent().parent().children("td:eq(1)").text();
  nombre=$(this).parent().parent().children("td:eq(2)").text();
  ci=$(this).parent().parent().children("td:eq(3)").text();
  secretaria=$(this).parent().parent().children("td:eq(4)").text();
  $.post(base_url+"index.php/admin_gadch/twitter_mostrar",
  {
    'id_usuariot':id_trabajador1
  },
  function(data){
    $('#cuentas').html(
      '<label for="">'+nombre+'</label>'
    );
    $('#label-form').html(
      'Tweets Actual '
    );
    $('#label-form2').html(
      'Tweetss Anterior'
    );
    $("cantidad").val("");
    $("#id_funcionario").val(idSelect);
    $("#eliminar").val(idSelect);
    $("#tipo_red").val("twitter");
    $("#panel").removeClass();
    $("#panel").addClass(" box box-info box-solid");
    $("#facebook1").addClass("btn btn-block btn-info btn-xs");


    var tw = JSON.parse(data);
    $.each(tw,function(i,items){
      var m=1;
      if(n==1){
        $('#input_text').append('<input type="number" class="form-control" id="cantidad"  placeholder="Cantidad Compartido" name="tweets" value="'+items.tweets_twitter+'">');
      }

        $('#cuentas').append(
            '<div class="col-md-12">'+
                         '<div class="panel panel-info">'+
                             '<div class="panel-heading">'+
                                ' <div class="row">'+
                                    ' <div class="col-xs-3">'+
                                         '<i class="fa fa-twitter fa-5x"></i>'+
                                     '</div>'+
                                     '<div class="col-xs-9 text-right">'+

                                        ' <div class="huge">Tweets <i class="fa fa-arrow-circle-right"></i> '+items.tweets_twitter+'</div>'+
                                        ' <div class="huge">Siguiendo <i class="fa fa-arrow-circle-right"></i>  '+items.siguiendo_twitter+'</div>'+
                                        ' <div class="huge">Seguidores  <i class="fa fa-arrow-circle-right"></i> '+items.seguidores_twitter+'</div>'+
                                        ' <div class="huge">Me Gusta <i class="fa fa-arrow-circle-right"></i>  '+items.me_gusta_twitter+'</div>'+

                                    ' </div>'+
                                ' </div>'+
                             '</div>'+
                            ' <a href="https://www.twitter.com/'+items.cuenta_twitter+'" target="_blank" data-toggle="tooltip" data-placement="bottom" title="'+items.cuenta_twitter+'">'+
                                ' <div class="panel-footer">'+
                                    ' <span class="pull-left">Ir a Cueta '+n+'</span>'+
                                    ' <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>'+
                                    ' <div class="clearfix"></div>'+
                                ' </div>'+
                            ' </a>'+
                        ' </div>'+

                     '</div>'
            );
            n++;

    });

  });
});
$("#facebook1").click(insertar);



$("body").on("click","#listar_redes1 #eliminar",function(event){
  id_select=$(this).attr("value");
  eliminar(id_select);
});

function insertar (){
  if($("#cantidad").val()!=''){
    $.ajax({
      url: base_url+"index.php/admin_gadch/insertar_compartido",
      type:"POST",
      data:$("#form-insertar").serialize(),
      success:function(respuesta){
        alert(respuesta);
      $('input[type="number"]').val('');
      }
    });
  }else{
    alert("llenar el campo cantidad");
  }

}

function eliminar (id_select){
    $.ajax({
      url: base_url+"index.php/admin_gadch/eliminar",
      type:"POST",
      data:{id:id_select},
      success:function(respuesta){
        alert(respuesta);
        location.reload();
      }
    });
}

function limpiar(){
  $("#cantidad").each(function(){
			$($(this)).val('');
	});
}
