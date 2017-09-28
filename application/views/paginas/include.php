<?php
	class funciones{

	public function input($label='',$type='',$name='',$place='',$condicion=''){
		echo'
			<div class="form-group">
              <label class="control-label col-md-3">'.$label.'</label>
              <div class="col-md-7">
                <input type="'.$type.'" name="'.$name.'" class="form-control" placeholder="'.$place.'"  required>
              </div>
            </div>
		';
		}
	public function inputv($label='',$type='',$name='',$place='',$condicion='',$ci=''){
		echo'
			<div class="form-group">
              <label class="control-label col-md-3">'.$label.'</label>
              <div class="col-md-7">
                <input type="'.$type.'" name="'.$name.'" class="form-control" placeholder="'.$place.'" value="'.$ci.'" required>
              </div>
            </div>

		';
		}

	public function inputvm($label='',$type='',$name='',$place='',$condicion='',$value=''){
		if($value!=''||$value!=null)
			$imprimir='<div class="form-group has-success has-feedback">
			  <label class="control-label" for="inputSuccess2">'.$label.'</label>
			  <input type="'.$type.'" name="'.$name.'" class="form-control" value="'.$value.'" id="inputSuccess2" aria-describedby="inputSuccess2Status" placeholder="'.$place.'" required>
			  <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
			  <span id="inputSuccess2Status" class="sr-only">(success)</span>
			</div>';
		else
		$imprimir='
			<div class="form-group has-warning has-feedback">
			  <label class="control-label" for="inputWarning2">'.$label.'</label>
			  <input type="'.$type.'" class="form-control" id="inputWarning2" name="'.$name.'"  value="'.$value.'" placeholder="'.$place.'" aria-describedby="inputWarning2Status"  required>
			  <span class="glyphicon glyphicon-warning-sign form-control-feedback" aria-hidden="true"></span>
			  <span id="inputWarning2Status" class="sr-only">(warning)</span>
			</div>
		';
		echo $imprimir;
	}

	public function coordinacion(){
		echo '<select id="coordinacion" name="jefatura" class="form-control" ><option value=""> ___ SELECCIONE JEFARUTRA___</option><option value="descalonizacion y Fortalecimiento">Descalonizacion y Fortalecimiento</option><option value="Prevencion y Atencion de Riesgos">Prevención y Atención de Riesgos</option></select>';
	}

	public function planificacion(){
		echo '<select id="Dplanificacionn" name="direccion" class="form-control" onchange="Jplanificacionnn(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Planificacion Estrategica y Desarrollo Organizacional">Planificacion Estrategica y Desarrollo Organizacional</option><option value="Programacion de Operaciones">Programacion de Operaciones</option><option value="Ordenamiento Territorial y Limites">Jefatura de Ordenamiento Territorial y Limites</option><option value="Fortalecimiento Institucional">Jefatura de Fortalecimiento Institucional</option></select>';
	}

	public function economia(){
		echo '<select id="Deconomian" name="direccion" class="form-control" onchange="Jeconomia(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Recursos Humanos">Recursos Humanos</option><option value="Administrativa y Servicios Generles">Administrativa y servicios Generles</option><option value="Finanzas">Finanzas</option><option value="Contrataciones">Jefatura de Contrataciones</option></select>';
	}
	public function juridica(){
		echo '<select id="Djuridica" name="direccion" class="form-control" onchange="Djuridica(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Analisis y Gestion Juridica">Analisis y Gestion Juridica</option><option value="Defensa Legal">Defensa Legal</option><option value="Notaria de Gobierno">Notaria de Gobierno</option><option value="Desarrollo Normativo">Jefatura de Desarrollo Normativo</option></select>';
	}

	public function obras(){
		echo '<select id="Dobrass" name="direccion" class="form-control" onchange="Jobras(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Infraestructura  Urbana, Rural y Viviendas">Infraestructura  Urbana, Rural y Viviendas</option><option value="Infraestructura Vial">Infraestructura Vial</option><option value="Riegos">Riegos</option></select>';
	}

	public function hidrocarburos(){
		echo '<select id="Dhidrocarburos" name="direccion" class="form-control" onchange="Dhidrocarburos(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Energia y Electrificacion">Energia y Electrificacion</option><option value="Hidrocarburos">Hidrocarburos</option><option value="Mineria">Mineria</option></select>';
	}

	public function medio(){
		echo '<select id="Dmedio" name="direccion" class="form-control" onchange="Dmedio(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Cuencas y Recursos Hidricos">Cuencas y Recursos Hidricos</option><option value="Recursos Naturales y Medio Ambiente">Recursos Naturales y Medio Ambiente</option></select>';
	}

	public function desarrollo(){
		echo '<select id="Ddesarrollo" name="direccion" class="form-control" onchange="Ddesarrollo(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Desarrollo Agropecuario e Industrial">Desarrollo Agropecuario e Industrial</option></select>';
	}

	public function cultura(){
		echo '<select id="Dcultura" name="direccion" class="form-control" onchange="Dcultura(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Turismo">Turismo</option><option value="Cultura">Jefatura de Cultura</option><option value="CICC">Fefatura de del CICC</option></select>';
	}

	public function social(){
		echo '<select id="Dsocial" name="direccion" class="form-control" onchange="Dsocial(this.options[selectedIndex].value);"><option value=""> ___ SELECCIONE DIRECCION___</option><option value="Igualdad de Oportunidades">igualdad de Oportunidades</option><option value="Atencion a Personas con Discapacidad">Atencion a Personas con Discapacidad</option><option value="Deportes">Deportes</option><option value="Gestion Educativa y Juventud">Jefatura de Gestion Educativa y Juventud</option></select>';
	}

	public function estrategica(){
		echo '<select id="Destrategica" name="jefatura" class="form-control" ><option value=""> ___ SELECCIONE JEFATURA___</option><option value="Preinversion">Preinversion</option></select>';
	}

	public function administrativa(){
		echo '<select id="Jadministrativa" name="jefatura" class="form-control" ><option value=""> ___ SELECCIONE JEFATURA___</option><option value="Sistemas Tecnologias de informacion">Sistemas Tecnologias de informacion</option><option value="Activos Fijos">Activos Fijos</option><option value="Archivos Generales">Archivos Generales</option><option value="Almacenes">Almacenes</option></select>';
	}
	public function finanzas(){
		echo '<select id="JFivanzas" name="jefatura" class="form-control" ><option value=""> ___ SELECCIONE JEFATURA___</option><option value="Tesoreria y Credito Publico">Tesoreria y Credito Publico</option><option value="contabilidad">contabilidad</option><option value="Presupuestos">Presupuestos</option></select>';
	}
	public function vial(){
		echo '<select id="JFivanzas" name="jefatura" class="form-control" ><option value=""> ___ SELECCIONE JEFATURA___</option><option value="Transporte Interprovincial">Transporte Interprovincial</option></select>';
	}

	public function ciudadana(){
		echo '<select id="Dciudadana" name="direccion" class="form-control" ><option value=""> ___ SELECCIONE JEFATURA___</option><option value="Seguridad Ciudadana">Seguridad Ciudadana</option></select>';
	}

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
				case 'DIRECCION DE TRANSPARENCIA Y LUCHA CONTRA LA CORRUPCION': $dependencia="Transparencia";	break;
				case 'DIRECCION DE AUDITORIA INTERNA': $dependencia="Auditoria Interna";	break;

				default: $dependencia="Error secretario".$car;
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
	public function sexo($cargo="", $sexo=""){
		if($sexo=='F'){
			if($cargo=='Secretario') $cargon='Secretaria de ';
			else if($cargo=='Director') $cargon='Directora de ';
			else if($cargo=='Jefe') $cargon='Jefa de ';
			else $cargon=$cargo." de ";
		}else{
			$cargon=$cargo." de ";
		}
		return $cargon;
	}

	public function cargoambiental($sexo=""){
		if($sexo=='F'){
			$cargon=" INSPECTORA AMBIENTAL";
		}else{
			$cargon=" INSPECTOR AMBIENTAL ";
		}
		return $cargon;
	}

	public function despacho($sexo="",$secre=""){
		if($sexo=='F'){

		if ($secre=='ASESORIA GENERAL')  $imprimir='Asesora General';
		if ($secre=='COORDINACION DE RELACIONAMIENTO INTERNACIONAL')  $imprimir='Coor. de Relacionamiento Internacional';
		if ($secre=='COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL')  $imprimir='Coordinadora de Asamblea L.';
		}else {
			if ($secre=='ASESORIA GENERAL')  $imprimir='Asesor General';
		if ($secre=='COORDINACION DE RELACIONAMIENTO INTERNACIONAL')  $imprimir='Coordinador de Relacionamiento I.';
		if ($secre=='COORDINACION DE ASAMBLEA LEGISLATIVA DEPARTAMENTAL')  $imprimir='Coordinador de la Asamblea L.';
		}
		return $imprimir;
	}

	public function foto($nombre='',$num='',$documento=''){
		$url= base_url();
		if($nombre==null || $nombre==''){
			$foto='prifil/noperfil.png';
		}
		else{
			$foto="photo/".$nombre;
		}
	    $impr=' <div  class="modal fade" id="foto'.$num.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	    <div class="modal-dialog" role="document">
	      <div class="modal-content" style="Background:#DCDCDC;">
	        <div class="modal-header" >
	          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	          <h4 class="modal-title" id="exampleModalLabel">Foto de '.$documento.'</h4>
	        </div>
	        <center>
	          <img src="'.$url.$foto.'" id="fotot" width="500" height="500">
	        </center>
	        </div>

	      </div>
	    </div>';
	   return $impr;
	  }

	  public function mensaje($num='',$nombre='',$id_user='',$ci=''){
		$url= base_url();
	    $impr='
                <div class="modal fade" id="mensaje'.$num.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Nuevo Mensaje de observación a '.$nombre.'</h4>
      </div>
      <div class="modal-body">
         <form class="form-horizontal" method="POST" action="'.$url.'index.php/cuser/estado_observado">

          <div class="form-group">
            <label for="message-text" class="control-label">Mensaje:</label>
            <textarea class="form-control" name="mensaje" id="message-text"></textarea>
          </div>


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        <input type="submit" class="btn btn-primary" name="obsevado" value="Enviar Mensaje"/>

      </div>
      <input type="hidden" name="ci" value="'.$ci.'">
      <input type="hidden" name="id_user" value="'.$id_user.'">
      </form>
    </div>
  </div>
</div>
</div>
                ';
	   return $impr;
	  }

	    public function corporativo($id_user='',$nombre='',$telefono=''){
		$url= base_url();
	    $impr='
                <div class="modal fade" id="corporativo'.$id_user.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="exampleModalLabel">Asignar Linea Corporativa a '.$nombre.'</h4>
				      </div>
				      <div class="modal-body">
				      <form class="form-horizontal" method="POST" action="'.$url.'index.php/cuser/corporativo">

				          <div class="form-group">
				            <label for="message-text" class="control-label">Telefono:</label>
				            <input type="number" name="telefono" value="'.$telefono.'">
				          </div>
				       	  <div class="form-group">
				            <label for="message-text" class="control-label">Monto:</label>
				            <input type="number" name="monto" value="">
				          </div>
					       <div class="form-group">
				            <label for="message-text" class="control-label">Codigo:</label>
				            <input type="text" name="codigo" value="">
				          </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					        <input type="submit" class="btn btn-primary" name="obsevado" value="Asignar"/>

					      </div>
				      <input type="hidden" name="id_user" value="'.$id_user.'">
				      </form>
				   	 </div>
				  	</div>
				  </div>
				</div>

                ';
	   return $impr;
	  }

	  public function editar_corporativo($id_num='',$numero='',$codigo='',$monto=''){
		$url= base_url();
	    $impr='
                <div class="modal fade" id="editar_corporativo'.$id_num.'" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="exampleModalLabel">Editar el munero '.$numero.'</h4>
				      </div>
				      <div class="modal-body">
				      <form class="form-horizontal" method="POST" action="'.$url.'index.php/cuser/editar_corporativo">

				          <div class="form-group">
				            <label for="message-text" class="control-label">Telefono:</label>
				            <input type="number" name="telefono" value="'.$numero.'">
				          </div>
				       	  <div class="form-group">
				            <label for="message-text" class="control-label">Monto:</label>
				            <input type="number" name="monto" value="'.$monto.'">
				          </div>
					       <div class="form-group">
				            <label for="message-text" class="control-label">Codigo:</label>
				            <input type="text" name="codigo" value="'.$codigo.'">
				          </div>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
					        <input type="submit" class="btn btn-primary"  value="Editar"/>

					      </div>
				      <input type="hidden" name="id_num" value="'.$id_num.'">
				      </form>
				   	 </div>
				  	</div>
				  </div>
				</div>

                ';
	   return $impr;
	  }
	}
?>
