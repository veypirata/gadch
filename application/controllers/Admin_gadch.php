<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_gadch extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('madmin_gadch');
	}

	public function index()
	{
		$this->load->view('vcliente');
	}

  public function secretaria(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $secretaria = $this->input->post('secretaria');
      $secre = $this->madmin_gadch->secretaria($secretaria);
      $mostrarsecre= array('mostrar'=>$secre);
      $this->load->view('admin/admin_funcionario', $mostrarsecre);
    }else $this->load->view('vlogin');
  }

  public function direccion(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null){
      $direccion = $this->input->post('direccion');
      $dir = $this->madmin_gadch->direccion($direccion);
      $mostrardir= array('mostrar'=>$dir);
      $this->load->view('admin/admin_funcionario', $mostrardir);
    }else $this->load->view('vlogin');
  }

  public function jefatura(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $jefatura = $this->input->post('jefatura');
      $jef = $this->madmin_gadch->jefatura($jefatura);
      $mostrarjef= array('mostrar'=>$jef);
      $this->load->view('admin/admin_funcionario', $mostrarjef);
    }else $this->load->view('vlogin');
  }

  public function cargo(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $cargo = $this->input->post('cargo');
      $contrato = $this->input->post('contrato');
      $jef = $this->madmin_gadch->cargo($cargo,$contrato);
      $mostrarjef= array('mostrar'=>$jef);
      $this->load->view('admin/admin_funcionario', $mostrarjef);
    }else $this->load->view('vlogin');
  }
	function cargo_p(){

		$cargo = $this->input->post('cargo');
		$contrato = $this->input->post('contrato');
			$jef = $this->madmin_gadch->cargo_pru();
			//$mostrarjef= array('mostrar'=>$jef);
			//$this->load->view('admin/admin_funcionario', $mostrarjef);
			//echo $jef->num_rows();
			echo json_encode($jef);

	}
	 public function facebook_mostrar(){
		$id_facebook = $this->input->post('id_usuario');
 			$jef = $this->madmin_gadch->facebook_mostrar($id_facebook);
 			echo json_encode($jef);
	 }
	 public function twitter_mostrar(){
		$id_twitter = $this->input->post('id_usuariot');
 			$jef = $this->madmin_gadch->twitter_mostrar($id_twitter);
 			echo json_encode($jef);
	 }

}
