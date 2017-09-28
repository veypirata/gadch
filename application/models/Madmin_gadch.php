<?php
	/**
	*
	*/
	class Madmin_gadch extends CI_Model
	{

    function __construct()
		{
			parent::__construct();
		}
    public function cargo($cargo='',$contrato=''){
			if($cargo==1&&$contrato==1){
				$query=$this->db->query("SELECT * FROM trabajadores where  redesSociales=2 ");
			}else{
				if($cargo!=1&&$contrato==1){
					$query=$this->db->query("SELECT * FROM trabajadores where cargo='$cargo'  and redesSociales=2");
				}else if($cargo==1&&$contrato!=1){
					$query=$this->db->query("SELECT * FROM trabajadores where contrato='$contrato' and redesSociales=2 ");
				}else{
					$query=$this->db->query("SELECT * FROM trabajadores where cargo='$cargo' and contrato='$contrato' and redesSociales=2");
				}
			}
			return $query;
		}

    public function secretaria($secretaria){
			$query=$this->db->query("SELECT * FROM trabajadores WHERE secretaria='$secretaria' and redesSociales=2");
			return $query;
		}

		public function direccion($direccion){
			$query=$this->db->query("SELECT * FROM trabajadores WHERE direccion='$direccion'  and redesSociales=2");
			return $query;
		}

		public function jefatura($jefatura){
			$query=$this->db->query("SELECT * FROM trabajadores WHERE jefatura='$jefatura'  and redesSociales=2");
			return $query;
		}
		public function cargo_pru(){
			$db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->query("SELECT * FROM trabajadores WHERE  (redesSociales=2 or redesSociales=1)");
			return $query->result();

		}

		public function facebook_mostrar($id_facebook){
			$db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->query("SELECT * FROM facebook where id_funcionario=$id_facebook");
			return $query->result();
		}

		public function twitter_mostrar($id_twitter){
			$db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->query("SELECT * FROM twitter where id_funcionario=$id_twitter");
			
			return $query->result();
		}
  }
