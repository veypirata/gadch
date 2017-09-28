<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	private $fb;
	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		//$this->load->library('FacebookSDK');
		$this->load->model('Mlogin');
		$this->load->model('Mgob');
		//$this->fb=$this->facebookSDK;
	}

	public function index(){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($this->input->post()){
			$this->form_validation->set_rules('ci_usuario',' CI','required|min_length[6]');
				if($this->form_validation->run()){
						$ci=$this->input->post('ci_usuario');
						$dato=$this->Mlogin->login_verificar($ci);
						if($dato==1){
							$datos = array('datos' => $this->Mgob->seleccionar_datos($ci));
							$this->load->view('paginas/gadch_index',$datos);
						}else{
							$sms['error']=' <script type="text/javascript">
								      alert(" Error de  contraseña o usuario por favor intente de nuevo");
								    </script>';
							$this->load->view('gadch_login',$sms);
						}
				} else $this->load->view('gadch_login');
		}else{
			if($id_i!=null){
				$ci=$this->session->userdata('s_ci_g');
				$datos = array('datos' => $this->Mgob->seleccionar_datos($ci));
				$this->load->view('paginas/gadch_index',$datos);
			} else {
				$this->load->view('gadch_login');
			}
		}
	}

	public function admin(){
		$url=base_url();
		$id_i=$this->session->userdata('s_id_g');
		if($this->input->post()){
			$usuario=$this->input->post('usuario');
			$pass=$this->input->post('password');
			$dato=$this->Mlogin->login_verificar_usuario($usuario,$pass);
			if($dato==1){
				
				$this->load->view('admin/admin_index');
			}else{
				$sms['error']=' <script type="text/javascript">
								alert(" Error de  contraseña o usuario por favor intente de nuevo");
							</script>';
				$this->load->view('gadch_login',$sms);
			}
		}else{

		}
	}
}
//fin login
