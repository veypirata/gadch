$.post(base_url+"index.php/admin_gadch/cargo_p",
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
});
$("body").on("click","#listar_redes  #facebook",function(event){
  var n=1;
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
    $.each(fb,function(i,items){
        $('#cuentas').append(
      '<a href="'+items.url_facebook+'"  class="btn btn-block btn-primary btn-xs"> Ir a Cueta '+n+'</a>'
    );
    n++;
    });


  });
});

$("body").on("click","#listar_redes #twitter ",function(event){
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
    var tw = JSON.parse(data);
    $.each(tw,function(i,items){
        $('#cuentas').append(
      '<a href="'+items.cuenta_twitter+'" class="btn btn-block btn-info btn-xs">Ir a Cuenta</a><br><br>'
    );
    });


  });
})



$.material.init();
