<?php
	/**
	*
	*/
	class Mlogin extends CI_Model
	{
		function __construct()
		{
			parent::__construct();

		}
		public function login_verificar($users){
			  $db_default= $this->load->database('funcionarios', TRUE);
				$db_default->select('id_c,nombreT,ci');
				$db_default->from('trabajadores');
				$db_default->where('ci',$users);
				$usuario=$db_default->get();
				$usuario_num=$usuario->num_rows();
				if($usuario_num==1){
					$user=$usuario->row();
					$s_usuario=array('s_id_g'=>$user->id_c,'s_ci_g'=>$user->ci,'s_nombre_g'=>$user->nombreT);
					$this->session->set_userdata($s_usuario);
					return 1;
				}else {
					return 0;
				}
			}

			public function login_verificar_usuario($usuario,$pass){
				$db_default= $this->load->database('funcionarios', TRUE);
				$db_default->select('id_user,nombreU,cargo');
				$db_default->from('usuario');
				$db_default->where('usuario',$usuario);
				$db_default->where('pass',$pass);
				$db_default->where('acceso','srs');
				$usuario=$db_default->get();
				$usuario_num=$usuario->num_rows();
				if($usuario_num==1){
					$user=$usuario->row();
					$s_usuario=array('s_id_admin'=>$user->id_user,'s_cargo_admin'=>$user->cargo,'s_nombre_admin'=>$user->nombreU);
					$this->session->set_userdata($s_usuario);
					return 1;
				}else {
					return 0;
				}
			}
	}
	//fin mlogin
