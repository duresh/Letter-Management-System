<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letter extends CI_Model {

	public function insert_letters($letter_data){
		$this->db->insert('letterdata',$letter_data);
	}

	public function load_action($ID){

		$this->db->select('*');
		$this->db->where('ID', $ID);
		$query = $this->db->get('letterdata');
		$array = $query->row_array();
		return $array;
	}

	public function load_report(){

		$this->db->select('*');
		$query = $this->db->get('letterdata');
		$array = $query->result();
		return $array;
	}

	public function load_report2(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('forwardTo =', $_SESSION["uname"]);
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function load_pending(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('action =', 'Pending' );
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function load_intermediate(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('actionStatus =', 'Intermediate' );
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function load_final(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('actionStatus =', 'Final' );
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function action_comp(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('forwardTo =', $_SESSION["uname"]);
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function action_pend(){

		$this->db->select('*');
		$this->db->from('letterdata');
		$this->db->where('forwardTo =', $_SESSION["uname"]);
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function action_reorg(){

		$this->db->select('*');
		$this->db->from('letterdata');
		// $this->db->where('forwardTo =', $_SESSION["uname"]);
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function action_reorg_no(){

		$this->db->select('*');
		$this->db->from('sysusers');
		$this->db->where('UserType', 'User');
		$this->db->or_where('UserType', 'Director');
		$query = $this->db->get();
		$array = $query->result();
		return $array;
	}

	public function action_taken(){
		  $this->db->select('*');
		  $this->db->from('letterdata');
		  $this->db->where('forwardTo =', $_SESSION['uname']);
		  $this->db->or_where('actionForward =' , $_SESSION['uname']);
		  $query = $this->db->get();

		   if( $query->num_rows() > 0) {
		  	foreach( $query->result() as $row ){
		  		$data [] =  array(
		  			"ID" => $row->ID,
		  			"recieveDate" => $row->recieveDate,
		  			"referenceNo" => $row->referenceNo,
		  			"receivedBy" => $row->receivedBy,
		  			"collectedBy" => $row->collectedBy,
		  			"letterDate" => $row->letterDate,
		  			"forwardTo" => $row->forwardTo,
		  			"reason" => $row->reason,
		  			"action" => $row->action,
		  			"actionStatus" => $row->actionStatus,
		  			"actionForward" => $row->actionForward
		  		);

		  		
		  	}
		  		// $result['passval'] = $data;
		  		return $data;
	}
}

	public function take_action($action_data,$id){
		$this->db->where('ID', $id );
		$this->db->update('letterdata', $action_data);
	}

	public function letterchange($action_data,$id){
		$this->db->where('ID', $id );
		$this->db->update('letterdata', $action_data);
	}



}

/* End of file Letters.php */
/* Location: ./application/models/Letters.php */