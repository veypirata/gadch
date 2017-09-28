<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gob extends CI_Controller {

	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('mgob');
	}

	public function index()
	{
		$this->load->view('vcliente');
	}



	public function buscar(){

			$cii=$this->input->post('ci');
			$ci = str_replace(' ', '', $cii);
			$resultado = $this->mgob->buscar($ci);
			if($resultado==1){
				$res1 = $this->mgob->trabagadores($ci);
				$existen1= array('credencial'=>$res1);
				$this->load->view('vexiste', $existen1);
			}else if($resultado==2){
				$res = $this->mgob->buscarant($ci);
				$existea= array('existea'=>$res);
				$this->load->view('vinsertar', $existea);
			}
			else {
				$error = array('error' =>  $ci);
				$this->load->view('vcliente',$error);
			}
	}

	public function trabajador($cim=""){
		$ci=substr($cim, 0, -5);
		$num=$this->mgob->verificar($ci);
		if($num!=1){
			$this->load->view('vcliente');
		}else{
			$res1 = $this->mgob->trabagadores($ci);
			$existen1= array('credencial'=>$res1);
			$this->load->view('vexiste', $existen1);
		}

	}
	public function insert(){
		$ci=$this->input->post('ci');

		$url=base_url();
		$num=$this->mgob->verificart($ci);
		if($num!=1){
		switch ($this->input->post('direccion')) {
			case 'Ordenamiento Territorial y Limites': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']=""; break;
			case 'Fortalecimiento Institucional': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']=""; break;
			case 'Contrataciones': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']=""; break;
			case 'Desarrollo Normativo': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Notaria de Gobierno': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Cultura': $parametro['jefatura']=$this->input->post('direccion') ;  $parametro['direccion']="";break;
			case 'CICC': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Gestion Educativa y Juventud': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']="";  break;
			default:$parametro['direccion']=$this->input->post('direccion');$parametro['jefatura']=$this->input->post('jefatura');
					break;
			}
			$nombre=$this->input->post('nombre');
			$cid=$this->input->post('ci');
			$cargo=$this->input->post('cargo');
			$contrato=$this->input->post('contrato');
			$email=$this->input->post('email');

			$fechaI=$this->input->post('fechaI');
			$telefono=$this->input->post('telefono');
			$expedito=$this->input->post('expedito');
			$secretaria=$this->input->post('secretaria');
			$sexo=$this->input->post('sexo');
			if($_FILES["foto"]["name"]!=null && $nombre!=null && $ci!=null && $cargo!=null && $contrato!=null && $email!=null && $expedito!=null && $secretaria!=null && $sexo!=null && $telefono!=null && $fechaI!=null){
			$config['overwrite']=true;
			//$config['upload_url']=base_url().'img/';
			$config['upload_path']="photo/";

			$config['allowed_types']='jpg|png';
			$config['max_siza']='1024';
			$config['file_name'] =Date('Y-m-d').$ci.".jpg";
			$subir=$config['file_name'];//poner id del usuario y hora;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);
			$parametro['nombret']=$this->input->post('nombre');
			$parametro['ci']=$this->input->post('ci');
			$parametro['whatsapp']=$this->input->post('whatsapp');
			$parametro['secretaria']=$this->input->post('secretaria');
			$parametro['id_user']=1;
			$parametro['sexo']=$this->input->post('sexo');
			$parametro['foto']=$subir;
			$parametro['fechaR']=Date('Y-m-d');
			$parametro['cargo']=$this->input->post('cargo');
			$parametro['fechaI_institucion']=$this->input->post('fechaI');
			$parametro['contrato']=$this->input->post('contrato');
			$parametro['correo']=$this->input->post('email');
			$parametro['expedito']=$this->input->post('expedito');
			$parametro['telefono']=$this->input->post('telefono');
			$parametro['lugar_nacimiento']=$this->input->post('lugarn');
			$parametro['fecha_nacimiento']=$this->input->post('fechan');
			$parametro['id']=$this->input->post('id');
			$parametro['cod']=$this->input->post('cod');
			if (!$this->upload->do_upload('foto')) {
            //*** ocurrio un error
	            $data['uploadError'] = $this->upload->display_errors();
	            echo $this->upload->display_errors();
	        	}else $this->mgob->guardar($parametro);
			}
			else{

				header ("Location: $url"."index.php/gob/trabajadores/".$ci);
			}
			}else $this->load->view('vcliente');

		}

		public function trabajadores($ci=""){
			$num=$this->mgob->verificar($ci);
			if($num!=1){
				$this->load->view('vcliente');
			}else{
				$res = $this->mgob->buscarant($ci);
				$existea= array('existea'=>$res);
				$this->load->view('vinsertar', $existea);
			}
		}

		public function update(){
			//echo $this->input->post('foto');
			$ci=$this->input->post('ci_user');
			$id=$this->input->post('id_user');
			if($_FILES["foto"]["name"]!=null){
			$config['overwrite']=true;
			$config['upload_path']="photo/";
			$config['allowed_types']='jpg|png';
			$config['max_siza']='1024';
			$config['file_name'] =Date('Y-m-d').time().$ci.".jpg";
			$subir=$config['file_name'];//poner id del usuario y hora;
			$this->load->library('upload',$config);
			$this->upload->initialize($config);

			if (!$this->upload->do_upload('foto')) {
            //*** ocurrio un error
	            $data['uploadError'] = $this->upload->display_errors();
	            echo $this->upload->display_errors();
	        	}else {
	        		$this->mgob->update($subir,$ci,$id);
	        		$res1 = $this->mgob->trabagadores($ci);
					$existen1= array('credencial'=>$res1);
					$this->load->view('vexiste', $existen1);
	        	}
			}
			else{
				$res1 = $this->mgob->trabagadores($ci);
					$existen1= array('credencial'=>$res1);
					$this->load->view('vexiste', $existen1);
			}
		}

		public function perfil($ci=''){
			if($ci){
				$num=$this->mgob->verificart($ci);
				if($num==1){
				$res1 = $this->mgob->trabagadores($ci);
					$existen1= array('credencial'=>$res1);
					$this->load->view('generar_perfil', $existen1);
				}else $this->load->view('vcliente');
			}else $this->load->view('vcliente');
		}

		public function prueba(){
			//echo"hola";
			$this->load->view('vprueba');
		}

		public function modificar(){
			if($this->input->post()){
			$ci=$this->input->post('ci');
			$id=$this->input->post('id');
			if($this->input->post('secretaria')!=null) {

			$this->mgob->modificar_cero($ci,$id);
			switch ($this->input->post('direccion')) {
			case 'Ordenamiento Territorial y Limites': $parametro['jefatura']=$this->input->post('direccion') ; break;
			case 'Contrataciones': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']=""; break;
			case 'Desarrollo Normativo': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Notaria de Gobierno': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Cultura': $parametro['jefatura']=$this->input->post('direccion') ;  $parametro['direccion']="";break;
			case 'CICC': $parametro['jefatura']=$this->input->post('direccion') ; $parametro['direccion']=""; break;
			case 'Gestion Educativa y Juventud': $parametro['jefatura']=$this->input->post('direccion') ;$parametro['direccion']="";  break;
			default:$parametro['direccion']=$this->input->post('direccion');$parametro['jefatura']=$this->input->post('jefatura');
					break;
			}
			$parametro['ci']=$ci;
			$parametro['id']=$id;
			$parametro['secretaria']=$this->input->post('secretaria');
			$parametro['cargo']=$this->input->post('cargo');
			$parametro['contrato']=$this->input->post('contrato');
			if($_FILES["foto"]["name"]!=null){
				$config['overwrite']=true;
				$config['upload_path']="photo/";
				$config['allowed_types']='jpg|png';
				$config['max_siza']='1024';
				$config['file_name'] =Date('Y-m-d').time().$ci.".jpg";
				$subir=$config['file_name'];//poner id del usuario y hora;
				$parametro['foto']=$subir;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);

				if (!$this->upload->do_upload('foto')) {
	            //*** ocurrio un error
		            $data['uploadError'] = $this->upload->display_errors();
		            echo $this->upload->display_errors();
		        }else {
		        		$this->mgob->modificar($parametro);
		        		$res1 = $this->mgob->trabagadores($ci);
						$existen1= array('credencial'=>$res1);
						$this->load->view('vexiste', $existen1);
		        }
			}
			else{
				$res1 = $this->mgob->trabagadores($ci);
					$existen1= array('credencial'=>$res1);
					$this->load->view('vexiste', $existen1);
			}
		}else{
			$res1 = $this->mgob->trabagadores($ci);
			$existen1= array('credencial'=>$res1);
			$this->load->view('vexiste', $existen1);
		}
		}else{ $this->load->view('vcliente'); }
		}
}
