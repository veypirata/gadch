<?php
	/**
	*
	*/
	class Mgob extends CI_Model
	{

		function __construct()
		{
			parent::__construct();

		}


		public function guardar($parametro){
			$url=  base_url();
			$ci=$parametro['ci'];
				$campos = array(
				'nombret' => $parametro['nombret'],
				'ci'=>$parametro['ci'],
				'sexo'=>$parametro['sexo'],
				'foto'=>$parametro['foto'],
				'fechaR'=>$parametro['fechaR'],
				'cargo'=>$parametro['cargo'],
				'fechaI_institucion'=>$parametro['fechaI_institucion'],
				'contrato'=>$parametro['contrato'],
				'correo'=>$parametro['correo'],
				'expedito'=>$parametro['expedito'],
				'telefono'=>$parametro['telefono'],
				'whatsapp'=>$parametro['whatsapp'],
				'secretaria'=>$parametro['secretaria'],
				'direccion'=>$parametro['direccion'],
				'jefatura'=>$parametro['jefatura'],
				'estado_t'=>'0',
				'situacion'=>'activo',
				'lugar_nacimiento'=>$parametro['lugar_nacimiento'],
				'fecha_nacimiento'=>$parametro['fecha_nacimiento'],
				'id_user'=>$parametro['id_user'],
				'userid'=>$parametro['id'],
				'codigo'=>$parametro['cod'],


				 );
			$this->db->insert('trabajadores',$campos);
			$id_c= $this->db->insert_id();
			$detalle= array(
				'ci' => $parametro['ci'],
				'fechah' => date('Y-m-d'),
				'id_h' => $this->session->userdata('s_id'),
				'usuariohabilitado' => $this->session->userdata('s_nombre'),
				'estado' => 'h',
				'cara1'=>0,
				'cara2'=>0,
				'entregado'=>0,
				'terminado'=>0,
				'costo' => 0,
				'id_c' => $id_c,
				);
			$this->db->insert('detalle',$detalle);
			header ("Location: $url"."index.php/gob/trabajador/".$ci.".html");

		}


		public function buscar($ci){

				$this->db->select('*');
				$this->db->from('trabajadores');
				$this->db->where('ci',$ci);
				$trabajador=$this->db->get();
				if($trabajador->num_rows==1){
					return 1;
				}else{
					$this->db->select('*');
					$this->db->from('userinfo');
					$this->db->where('SSN',$ci);
					$trabajadora=$this->db->get();
					if($trabajadora->num_rows==1){
						return 2;
					}
					else{
						return 3;
					}
				}
		}

		public function seleccionar_datos($ci){
			 $query=$this->db->query("SELECT * FROM trabajadores t inner join detalle d on t.id_c=d.id_c where t.ci='".$ci."'");
			return $query;
		}

		public function buscarant($ci){
			$query=$this->db->query("SELECT * FROM userinfo  where SSN='".$ci."'");
			return $query;
		}
		public function verificar($ci){
			//$query=$this->db->query("SELECT count(*) FROM userinfo  where SSN='".$ci."'");
			$this->db->select('*');
				$this->db->from('userinfo');
				$this->db->where('SSN',$ci);

				$usuario=$this->db->get();
			if($usuario->num_rows==1){
				return 1;
			}else return 0;
		}


		public function imprimir($id){
			$query=$this->db->query("SELECT * FROM detalle d INNER JOIN trabajadores t on d.ci=t.ci WHERE d.id_detalle='$id'");
			$this->db->query("update  detalle
			SET estado= 'd'
		    WHERE id_detalle=".$id."");
			return $query;
		}
		public function verificart($ci){
			//$query=$this->db->query("SELECT count(*) FROM userinfo  where SSN='".$ci."'");
			$this->db->select('*');
				$this->db->from('trabajadores');
				$this->db->where('ci',$ci);

				$usuario=$this->db->get();
			if($usuario->num_rows==1){
				return 1;
			}else return 0;
		}

		public function update($subir,$ci,$id){
			$this->db->query("UPDATE trabajadores SET foto='$subir' ,modificado=1 WHERE ci=$ci AND id_c =$id;");
		}
		public function modificar_cero($ci,$id){
			$this->db->query("UPDATE trabajadores SET secretaria='', direccion='', jefatura='' WHERE ci=$ci AND id_c =$id;");
		}
		public function modificar($parametro){
			$ci=$parametro['ci'];
			$modificar = array(
				'contrato'=>$parametro['contrato'],
				'secretaria'=>$parametro['secretaria'],
				'direccion'=>$parametro['direccion'],
				'jefatura'=>$parametro['jefatura'],
				'cargo'=>$parametro['cargo'],
				'foto'=>$parametro['foto'],
				'estado_t'=>'0'
				);
			 $this->db->where('id_c', $parametro['id']);
         $this->db->update('trabajadores', $modificar);
         $url=base_url();
  		header ("Location: $url"."index.php/gob/trabajador/".$ci.".html");
		}
	}
