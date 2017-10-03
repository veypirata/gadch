<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Muser');
		$this->load->library('encrypt');
	}

	public function index()
	{
		$url=base_url();
		header ("Location: $url");
	}
	public function art29(){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($id_i!=null){
			if($this->input->post()){
				$fecha=date('Y-m-d H:m');
				$permiso['fecha_salida_p']=$this->input->post('fecha_salida');
				$permiso['hora_salida_p']=$this->input->post('hora_salida');
				$permiso['destino_p']=$this->input->post('destino');
				$permiso['id_inmediato_superior']=$this->input->post('id_inm_superior');
				$permiso['id_funcionario']=$this->input->post('id_funcionario');
				$permiso['fecha_registro_p']=$fecha;
				$permiso['firma_p']=$this->encrypt->encode($this->input->post('tipo_p'),$fecha);
				$permiso['tipo_p']=$this->input->post('tipo_p');
				$permiso['estado_p']=0;
				$this->Muser->insert_permiso($permiso);
				header ("Location: $url");
			}else{

			}
		}else{

		}
	}

	public function aprobar($estado='',$id_permiso){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($id_i!=null){
			if($estado!=''){
				 $permiso['fecha_revision_p']=date('Y-m-d H:m:s');
					$permiso['estado_p']=$estado;
				$this->Muser->aprobar($permiso,$id_permiso);
				header ("Location: $url");
			}else {

			}
		}else{

		}
	}

	public function facebook(){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($id_i!=null){
			if($this->input->post()){
				$fb['url_facebook']=$this->input->post('urlFacebook');
				$fb['amigos_facebook']=$this->input->post('amigosFacebook');
				$fb['id_funcionario']=$id_i;
				$fb['fecha_registro_facebook']=date('Y-m-d H:m');
				$fb_c['redesSociales']=1;
				$this->Muser->facebook($fb,$fb_c);
				header ("Location: $url");
			} else{
				header ("Location: $url");
			}

		}else{

		}
	}

	public function twitter(){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($id_i!=null){
			if($this->input->post()){
				$tw['cuenta_twitter']=$this->input->post('cuentaTw');
				$tw['tweets_twitter']=$this->input->post('tweetsTw');
				$tw['siguiendo_twitter']=$this->input->post('siguiendoTw');
				$tw['fecha_registro_twitter']=date('Y-m-d H:m');
				$tw['seguidores_twitter']=$this->input->post('seguidoresTw');
				$tw['me_gusta_twitter']=$this->input->post('meGustaTw');
				$tw['id_funcionario']=$id_i;
				$tw_c['redesSociales']=2;
				$this->Muser->twitter($tw,$tw_c);
				header ("Location: $url");
			}else{
				header ("Location: $url");
			}

		}else{

		}
	}

	public function salir(){
		$url=base_url();
			$this->session->sess_destroy();
			header ("Location: $url"."index.php");

	}
}
