

function pregunta(){

  var ci=document.getElementsByName("ci")[0].value;
  var email=document.getElementsByName("email")[0].value;
  var nombre=document.getElementsByName("nombre")[0].value;
  var cargo=document.getElementsByName("cargo")[0].value;
  var fechan=document.getElementsByName("fechan")[0].value;
  var lugarn=document.getElementsByName("lugarn")[0].value;
  var secretaria=document.getElementsByName("secretaria")[0].value; 
  var contrato=document.getElementsByName("contrato")[0].value;
   var expedito=document.getElementsByName("expedito")[0].value;
   var imprimir="POR FAVOR VERIFICAR DATOS\n\n"+"Nombre  = "+nombre+"\nci = "+ci+"\nemail ="+email+"\nfecha de nacimiento  =  "+fechan+"\nlugar de nacimiento  = "+lugarn+"\ncontrato  = "+contrato+"\ncargo  = "+cargo+"\nexpedito  = "+expedito+"\nsecretaria  = "+secretaria+"\n\n ¿ESTA DE ACUERDO CON LOS DATOS QUE ENVIARA? \n SI -> Aceptar \n NO -> Cancelar";
    if (confirm(imprimir)){ 
       document.formulario.submit() 
    } 
} 