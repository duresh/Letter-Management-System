<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Model {

	public function insert_users($user_data){
		$this->db->insert('sysusers',$user_data);
	}

}

/* End of file Users.php */
/* Location: ./application/models/Users.php */