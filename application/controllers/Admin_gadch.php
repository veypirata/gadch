<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_gadch extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('madmin_gadch');
	}

	public function index()
	{
		$this->load->view('admin/admin_index');
	}

  public function secretaria(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $secretaria = $this->input->post('secretaria');
      $secre = $this->madmin_gadch->secretaria($secretaria);/*envia datos al modelo para la consulta*/
      $mostrarsecre= array('mostrar'=>$secre);
      $this->load->view('admin/admin_funcionario', $mostrarsecre);
    }else {
			$url=  base_url();
			header ("Location: $url");
		}
  }

  public function direccion(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null){
      $direccion = $this->input->post('direccion');
      $dir = $this->madmin_gadch->direccion($direccion);
      $mostrardir= array('mostrar'=>$dir);
      $this->load->view('admin/admin_funcionario', $mostrardir);
		}else {
			$url=  base_url();
			header ("Location: $url");
		}
  }

  public function jefatura(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $jefatura = $this->input->post('jefatura');
      $jef = $this->madmin_gadch->jefatura($jefatura);
      $mostrarjef= array('mostrar'=>$jef);
      $this->load->view('admin/admin_funcionario', $mostrarjef);
		}else {
			$url=  base_url();
			header ("Location: $url");
		}
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
		}else {
			$url=  base_url();
			header ("Location: $url");
		}
  }

  public function cargo_p(){
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
	public function compartido_mostrar(){
				 $id_f = $this->input->post('id_funcioanrio');
				 $jef = $this->madmin_gadch->compartido_mostrar($id_f);
				 echo json_encode($jef);
	}



			 if($this->input->post()){
				 	$cantidad=$this->input->post('cantidad');
			 		$parametro['fecha']=date('Y:m:d H:m:s');
					$parametro['id_funcionario']=$this->input->post('id_funcionario');
			 		$parametro['id_usuario']=$id_i;
				 if($this->input->post('tipo_red')=='facebook'){
					 $parametro['cantidad']=$cantidad;
					 $parametro['tipo_red']='fb';
					 $fechaA=date('Y-m-d H:m:s');
					 $id_fb=$this->input->post('cuenta');
					 $this->madmin_gadch->modificar_facebook($fechaA,$id_fb);
					 if($this->madmin_gadch->insertar_compartido($parametro)==true) echo "Insertado con Exito";
					 else echo "Error al Insertar";
				 }else{
					 	$cantA=$this->input->post('cantidad');
					  $canAnte=$this->input->post('tweets');
						$parametro['cantidad']=$cantA-$canAnte;
						$parametro['tipo_red']='tw';
						$fecheA=date('Y-m-d H:m:s');
						$id_f=$this->input->post('id_funcionario');
						$id_tw=$this->input->post('cuenta');
						$this->madmin_gadch->modificar_twitter($fecheA,$cantA,$id_tw);
						if($this->madmin_gadch->insertar_compartido($parametro)==true) echo "Insertado con exito";
 					 else echo "Error al Insertar";

				 }
<<<<<<< HEAD
}


         // if($id_i!=null ){
                  if($this->input->post()){
                                 $parametro['cantidad']=$this->input->post('cantidad');
                                 $parametro['fecha']=date('Y:m:d H:m:s');
                                 $parametro['id_funcionario']=$this->input->post('id_funcionario');
                                 $parametro['id_usuario']=$id_i;
                          if($this->input->post('tipo_red')=='facebook'){
                                  if($this->madmin_gadch->insertar_compartido($parametro)==true) echo "Insertado con Exito";
                                  else echo "Error al Insertar";
                          }else{
                                    echo "En Proceso";
                          }

                 }else{
                           echo "En Proceso sin post";
                 }
=======
			 }else{
	     echo "En Proceso sin post";
	   }
>>>>>>> 18d6ec37d2d752f1e8a4e205a4d341714373f2d7

         // }else $this->load->view('vlogin');

  }

  public function eliminar(){
          $id=$this->input->post('id');
          $this->madmin_gadch->elminira_redes_fb($id);

          $this->madmin_gadch->elminira_redes_tw($id);
          if($this->madmin_gadch->modificar_redes($id)==true) echo "Modificado con con Exito";
          else echo "Error al Modificar";
  }

  public function mostrarreporte(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $jef = $this->madmin_gadch->mostrarreporte();
      $mostrarjef= array('mostrar'=>$jef);
      $this->load->view('admin/admin_reportefacebook', $mostrarjef);
		}else {
			$url=  base_url();
			header ("Location: $url");
		}

  }
  public function m_secretaria_facebook(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $secretaria = $this->input->post('secretaria');
//      $secre = $this->madmin_gadch->m_secretaria_f($secretaria)
      $secre = $this->madmin_gadch->m_secretaria_f($secretaria);/*envia datos al modelo para la consulta*/
      $mostrarsecre= array('mostrar'=>$secre);
      $this->load->view('admin/admin_reportefacebook', $mostrarsecre);
		}else {
			$url=  base_url();
			header ("Location: $url");
		}
  }

  public function m_direccion_facebook(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $direccion = $this->input->post('direccion');
      $direc = $this->madmin_gadch->m_direccion_f($direccion);/*envia datos al modelo para la consulta*/
      $mostrardireccion= array('mostrar'=>$direc);
      $this->load->view('admin/admin_reportefacebook', $mostrardireccion);
		}else {
			$url=  base_url();
			header ("Location: $url");
		}
  }
<<<<<<< HEAD
    public function m_jefatura_facebook(){
    $id_i=$this->session->userdata('s_id_admin');
    $cargo=$this->session->userdata('s_cargo');
    if($id_i!=null ){
      $jefatura = $this->input->post('jefatura');
      $direc = $this->madmin_gadch->m_jefatura_f($jefatura);/*envia datos al modelo para la consulta*/
      $mostrarjefatura= array('mostrar'=>$direc);
      $this->load->view('admin/admin_reportefacebook', $mostrarjefatura);
    }else $this->load->view('vlogin');
  }

    public function m_cargo_facebook(){
        $id_i=$this->session->userdata('s_id_admin');
        $cargo=$this->session->userdata('s_cargo');
        if($id_i!=null ){
          $cargo = $this->input->post('cargo');
          $contrato = $this->input->post('contrato');
          $direc = $this->madmin_gadch->m_cargo_f($cargo,$contrato);/*envia datos al modelo para la consulta*/
          $mostrarcargo= array('mostrar'=>$direc);
          $this->load->view('admin/admin_reportefacebook', $mostrarcargo);
        }else $this->load->view('vlogin');
    }
 }
=======

	public function buscador(){
		//$id_twitter = $this->input->post('id_usuariot');
		$jef = $this->madmin_gadch->buscador();
		echo json_encode($jef);
	}
}
>>>>>>> 18d6ec37d2d752f1e8a4e205a4d341714373f2d7
