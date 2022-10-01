<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}

	public function index()
	{
		$this->load->database();
		$this->load->view('inc/header');
		$this->load->view('dash/dashboard');
		$this->load->view('inc/footer');
	}

	public function user_report()
	{
		$this->load->view('inc/header_rep');
		$this->load->view('report/userreport');
		$this->load->view('inc/footer');

		$this->db->select('*');
		  $this->db->from('sysusers');
		  // $this->db->where('UserType =', $usertype);
		  // $this->db->where('Status =' , 'Active');
		  $query = $this->db->get();

		  if( $query->num_rows() > 0) {
		  	foreach( $query->result() as $row ){
		  		$data [] =  array(
		  			"uid" => $row->UserID,
		  			"fname" => $row->FirstName,
		  			"utype" => $row->UserType,
		  			"ugroup" => $row->UserGroup,
		  			"userCreated" => $row->userCreated,
		  			"Status" => $row->Status,
		  			"userCreatedBy" => $row->userCreatedBy
		  		);

		  		
		  	}
		  		$result['passval'] = $data;
		  		// echo json_encode($result);
		  		// $this->load->view('inc/header_rep');
		  		$this->load->view('report/userreport',$result);
		  		// $this->load->view('inc/footer');
		  }	
	}

	


}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */