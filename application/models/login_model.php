<?php
class Login_model extends CI_Model
{
	public function __construct()
   {
      parent::__construct();
      $this->load->database();
   }
   public function comprobar_usuario($p,$u)
   {
   	$p=md5($p);
      $query = $this->db->get_where('usuario', array('usuario' => $u,'clave' => $p));
      return $query->row_array();
   }

}	

?>