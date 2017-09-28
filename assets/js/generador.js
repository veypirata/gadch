
    function secretaria(n){
      switch(n){
        case "COORDINACION": return 1;
        case "PLANIFICACION DEL DESARROLLO": return 2;
        case "ECONOMIA Y FINANZAS PUBLICAS": return 3;
        case "JURIDICA": return 4;
        case "COMUNICAION": return 5;
        case "OBRAS PUBLICAS, SERVICIO Y VIVIENDA": return 6;
        case "HIDROCARBUROS, ENERGIA Y MINERIA": return 7;
        case "MEDIO AMBIENTE Y MADRE TIERRA": return 8;
        case "DESARROLLO PRODUCTIVO Y ECONOMIA PLURAL": return 9;
        case "CULTURA Y TURISMO": return 10;
        case "DESARROLLO SOCIAL": return 11;
        case "DIRECCION GENERAL DE GABINETE DE DESPACHO": return 12;
        case "ASESORIA GENERAL": return 13;
        case "COORDINACION DE RELACIONES INTERNACIONALES": return 14;
        case "COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL": return 15;
        case "DIRECCION DE TRANSPARENCIA Y LUCHA CONTRA LA CORRUPCION": return 16;
        case "DIRECCION DE AUDITORIA INTERNA": return 17;
        default: return 18;
      } 
    } 
    function mostrar(n){
      if(secretaria(n)==1) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(coor);  }
      if(secretaria(n)==2) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dplanificacion);  }
      if(secretaria(n)==3) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Deconomia); }
      if(secretaria(n)==4) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Djuridica); }
      if(secretaria(n)==6) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dobras);  }
      if(secretaria(n)==7) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dhidrocarburos);  }
      if(secretaria(n)==8) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dmedio);  }
      if(secretaria(n)==9) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Ddesarrollo); }
      if(secretaria(n)==10) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dcultura); }
      if(secretaria(n)==11) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(Dsocial);  }
      if(secretaria(n)==5) {$('#direccion').html('');$('#jefatura').html('');  }
      if(secretaria(n)==12) {$('#direccion').html('');$('#jefatura').html('');$('#direccion').append(ciudadana);  }
      if(secretaria(n)==13 || secretaria(n)==14 || secretaria(n)==15 || secretaria(n)==16 || secretaria(n)==17) {$('#direccion').html('');$('#jefatura').html('');  }      
    }

    function Dplanificacionn(n){
      switch(n){
        case "Planificacion Estrategica y Desarrollo Organizacional": return 1;
        default: return 2;
      }
    }
    function Jplanificacionnn(n){
      if(Dplanificacionn(n)==1) {$('#jefatura').html('');$('#jefatura').append(Jestrategica); } 
      if(Dplanificacionn(n)==2) {$('#jefatura').html(''); }
    
    }

    function Deconomian(n){
      switch(n){
        case "Administrativa y Servicios Generles": return 1;
        case "Finanzas": return 2;
        default: return 0;
        
      }
    }
    function Jeconomia(n){

      if(Deconomian(n)==1) {$('#jefatura').html('');$('#jefatura').append(Jeadministrativa);  }
      if(Deconomian(n)==2) {$('#jefatura').html('');$('#jefatura').append(Jfinanzas);  }
      if(Deconomian(n)==0) {$('#jefatura').html(''); }
    }

    function Dobrass(n){
      switch(n){
        case "Infraestructura Vial": return 1;

        default: return 0;
      
      }
    }
    function Jobras(n){

      if(Dobrass(n)==1) {$('#jefatura').html('');$('#jefatura').append(Jvial);  }
      if(Dobrass(n)==0) {$('#jefatura').html(''); }
    }
