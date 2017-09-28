<?php
	/**
	*
	*/
	class Muser extends CI_Model
	{

		function __construct()
		{
			parent::__construct();

		}
    public function insert_permiso($permiso){
      $db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->insert('permisos',$permiso);
      if($query==TRUE) echo "si se pudo";
      else echo "no se pudo";
    }
		public function aprobar($permiso,$id){
      $db_default= $this->load->database('funcionarios', TRUE);
			$db_default->where('id_permiso', $id);
			$query=$db_default->update('permisos', $permiso);
			//echo$permiso['estado_p']." ".$id;
      if($query==TRUE) echo "si se pudo";
      else echo "no se pudo";
    }

		public function facebook($fb,$fb_c){
			$db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->insert('facebook',$fb);

			$db_default->where('id_c', $fb['id_funcionario']);
			$db_default->update('trabajadores', $fb_c);
			//echo$permiso['estado_p']." ".$id;
			if($query==TRUE) echo "si se pudo";
			else echo "no se pudo";
		}
		public function twitter($tw,$tw_c){
			$db_default= $this->load->database('funcionarios', TRUE);
			$query=$db_default->insert('twitter',$tw);

			$db_default->where('id_c', $tw['id_funcionario']);
			$db_default->update('trabajadores', $tw_c);
			//echo$permiso['estado_p']." ".$id;
			if($query==TRUE) echo "si se pudo";
			else echo "no se pudo";
		}
}
/// fin del modelo
