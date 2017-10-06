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
    public function insertar_compartido($parametro){
            $db_default= $this->load->database('funcionarios', TRUE);
            $query=$db_default->insert('control_compartidos',$parametro);
            if($db_default->affected_rows()>0) return true;
            else return false;
    }

    public function modificar_redes($id){
            $db_default= $this->load->database('funcionarios', TRUE);
            $db_default->query("UPDATE trabajadores SET redesSociales='0' WHERE id_c=$id");
            //echo "UPDATE trabajadores SET redesSociales='0' WHERE id_c=$id";
            if($db_default->affected_rows()>0) return true;
            else return false;
    }

    public function elminira_redes_fb($id){
            $db_default= $this->load->database('funcionarios', TRUE);
            $db_default->WHERE('id_funcionario',$id);
            $db_default->delete('facebook');
    }

    public function elminira_redes_tw($id){
            $db_default= $this->load->database('funcionarios', TRUE);
            $db_default->WHERE('id_funcionario',$id);
            $db_default->delete('twitter');
    }
//    Mostrar tabla de facebook de registros de cantidad de compartidos//-------------------
    public function mostrarreporte(){
        $query=$this->db->query("SELECT * FROM trabajadores tr INNER JOIN control_compartidos cc
                ON tr.id_c = cc.id_funcionario
         WHERE cc.cantidad > 1");
        return $query;
    }  
    
    public function m_secretaria_f($secretaria){
        $query=$this->db->query("SELECT * FROM trabajadores tr WHERE tr.secretaria ='$secretaria' and  redesSociales=2");
        return $query;
    }
    
     public function m_direccion_f($direccion){
        $query=$this->db->query("SELECT * FROM trabajadores tr INNER JOIN control_compartidos cc
                ON tr.id_c = cc.id_funcionario WHERE tr.direccion ='$direccion'");
        return $query;
    }
     public function m_jefatura_f($jefatura){
        $query=$this->db->query("SELECT * FROM trabajadores tr INNER JOIN control_compartidos cc
                ON tr.id_c = cc.id_funcionario WHERE tr.jefatura ='$jefatura'");
        return $query;
    }
     
    public function m_cargo_f($cargo='',$contrato=''){
        if($cargo==1&&$contrato==1){
            $query=$this->db->query("SELECT * FROM trabajadores where  redesSociales=2 ");
        }else{
            if($cargo!=1&&$contrato==1){
                    $query=$this->db->query("SELECT * FROM trabajadores WHERE cargo ='$cargo' and redesSociales=2");
            }else if($cargo==1&&$contrato!=1){
                    $query=$this->db->query("SELECT * FROM trabajadores where contrato='$contrato' and redesSociales=2 ");
            }else{
                    $query=$this->db->query("SELECT * FROM trabajadores WHERE tr.cargo ='$cargo' and contrato='$contrato' and redesSociales=2");
            }
            }
        return $query;
    }
    
    
//    fin Mostrar tabla de facebook de registros de cantidad de compartidos//-------------------

		public function modificar_twitter($fechaA,$canAnte,$id_tw){
			$db_default= $this->load->database('funcionarios', TRUE);
			$db_default->query("UPDATE `twitter` SET tweets_twitter='$canAnte', fecha_registro_actualizado='$fechaA' WHERE id_twitter=$id_tw");
		}
		public function modificar_facebook($fechaA,$id_fb){
			$db_default= $this->load->database('funcionarios', TRUE);
			$db_default->query("UPDATE `facebook` SET  fecha_registro_actualizado='$fechaA' WHERE id_facebook=$id_fb");
		}

  }
