<?php
class funciones{
  public function cargo($car='',$num=''){
    if($car=='COMUNICACION' || $car=='JURIDICA' || $car=='COORDINACION'){
      if($car=='COMUNICACION'){
        $dependencia="Comunicación";
      }else
      if($car=='JURIDICA') $dependencia="Juridica";
      else $dependencia="Coordinación";

    }else
    if($num==3){
      switch ($car) {
        case 'PLANIFICACION DEL DESARROLLO': $dependencia="Planificación";	break;
        case 'ECONOMIA Y FINANZAS PUBLICAS': $dependencia="Economía y Finanzas";	break;
        case 'OBRAS PUBLICAS, SERVICIO Y VIVIENDA': $dependencia="Obras Públicas";	break;
        case 'HIDROCARBUROS, ENERGIA Y MINERIA':$dependencia="Hidrocarburos";	break;
        case 'MEDIO AMBIENTE Y MADRE TIERRA': $dependencia="Medio Ambiente";	break;
        case 'DESARROLLO PRODUCTIVO Y ECONOMIA PLURAL': $dependencia="Desarrollo Productivo";	break;
        case 'CULTURA Y TURISMO': $dependencia="Cultura y Turismo";	break;
        case 'DESARROLLO SOCIAL': $dependencia="Desarrollo Social";	break;
        case 'DIRECCION GENERAL DE GABINETE DE DESPACHO': $dependencia="Gabinete de Despacho";	break;
        case 'DIRECCION DE TRANSPARENCIA Y LUCHA CONTRA LA CORRUPCION': $dependencia="Lucha Contra la Corrupción";	break;
        case 'DIRECCION DE AUDITORIA INTERNA': $dependencia="Auditoria Interna";	break;

        default: $dependencia=$car;
          break;
      }

    }else
    if($num==2){
      switch ($car) {
        case 'Planificacion Estrategica y Desarrollo Organizacional':$dependencia="Planificación"; break;
        case 'Programacion de Operaciones':$dependencia="Programación de Operaciones"; break;
        case 'Administrativa y Servicios Generles':$dependencia="Administrativa"; break;
        case 'Recursos Humanos':$dependencia="Recursos Humanos"; break;
        case 'Finanzas':$dependencia="Finanzas"; break;
        case 'Analisis y Gestion Juridica':$dependencia="Analisis"; break;
        case 'Defensa Legal':$dependencia="Defensa Legal"; break;
        case 'Infraestructura  Urbana, Rural y Viviendas':$dependencia="Infraestructura Urbana"; break;
        case 'Infraestructura Vial':$dependencia="Infraestructura Vial"; break;
        case 'Riesgos':$dependencia="Riegos"; break;
        case 'Riegos':$dependencia="Riegos"; break;
        case 'Energia y Electrificacion':$dependencia="Energia"; break;
        case 'Mineria':$dependencia="Mineria"; break;
        case 'Hidrocarburos':$dependencia="Hidrocarburos"; break;
        case 'Cuencas y Recursos Hidricos':$dependencia="Cuencas y R. H."; break;
        case 'Recursos Naturales y Medio Ambiente':$dependencia="Medio Ambiente"; break;
        case 'Desarrollo Agropecuario e Industrial':$dependencia="Desarrollo Agropecuario"; break;
        case 'Turismo':$dependencia="Turismo"; break;
        case 'Igualdad de Oportunidades':$dependencia="Igualdad de Oportunidades"; break;
        case 'Atencion a Personas con Discapacidad':$dependencia="A.P.D."; break;
        case 'Deportes':$dependencia="Deportes"; break;
        case 'Seguridad Ciudadana':$dependencia="Seguridad Ciudadana"; break;
        default: $dependencia="Error director".$car; break;
      }

    }
    else
    if($num==1){
      switch ($car) {
        case 'descalonizacion y Fortalecimiento':$dependencia="Descolonización"; break;
        case 'Prevencion y Atencion de Riesgos':$dependencia="Prevención"; break;
        case 'Preinversion':$dependencia="Preinversion"; break;
        case 'Sistemas Tecnologias de informacion':$dependencia="Sistemas"; break;
        case 'Activos Fijos':$dependencia="Activos Fijos"; break;
        case 'Archivos Generales':$dependencia="Archivos Generales"; break;
        case 'Tesoreria y Credito Publico':$dependencia="Tesoreria"; break;
        case 'contabilidad':$dependencia="Contabilidad"; break;
        case 'Presupuestos':$dependencia="Presupuestos"; break;
        case 'Transporte Interprovincial':$dependencia="Transportes "; break;
        case 'Ordenamiento Territorial y Limites':$dependencia="Limites"; break;
        case 'Contrataciones':$dependencia="Contrataciones"; break;
        case 'Desarrollo Normativo':$dependencia="Desarrollo Normativo"; break;
        case 'Notaria de Gobierno':$dependencia="Notaria de Gobierno"; break;
        case 'Cultura':$dependencia="Cultura"; break;
        case 'CICC':$dependencia="CICC"; break;
        case 'Fortalecimiento Institucional':$dependencia="Fortalecimiento Institucional"; break;

        case 'Gestion Educativa y Juventud':$dependencia="Gestion Educativa"; break;
        case 'Almacenes':$dependencia="Almacenes"; break;
        default: $dependencia="Error jefatura".$car;; break;
      }
    }
    return $dependencia;
  }
  public function despacho($sexo="",$secre=""){
		if($sexo=='F'){

		if ($secre=='ASESORIA GENERAL')  $imprimir='Asesora General';
		if ($secre=='COORDINACION DE RELACIONAMIENTO INTERNACIONAL')  $imprimir='Coordinadora de Relacionamiento I.';
		if ($secre=='COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL')  $imprimir='Coordinadora de Asamblea L.';
		}else {
			if ($secre=='ASESORIA GENERAL')  $imprimir='Asesor General';
		if ($secre=='COORDINACION DE RELACIONAMIENTO INTERNACIONAL')  $imprimir='Coordinador de Relacionamiento I.';
		if ($secre=='COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL')  $imprimir='Coordinador de la Asamblea L.';
		}
		return $imprimir;
  }

  public function sexo($cargo="", $sexo=""){
    if($sexo=='F'){
      if($cargo=='Secretario') $cargon='Secretaria ';
      else if($cargo=='Director') $cargon='Directora  ';
      else if($cargo=='Jefe') $cargon='Jefa  ';
      else $cargon=$cargo."  ";
    }else{
      $cargon=$cargo." ";
    }
    return $cargon;
  }
}

?>
