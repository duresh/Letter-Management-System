<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Letters extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Letter');
		//Do your magic here
	}

	public function index()
	{
		$this->load->database();
		$this->load->view('inc/header_rep');
		$this->load->view('dash/letterinput');
		$this->load->view('inc/footer');
	}

	public function searchoes(){
		$this->load->view('dash/searchoes');
	}

	public function searchoffice(){
		$this->load->view('dash/searchoffice');
	}

	public function register_process(){

		if($this->input->post('submit')){

			$recievedDate = $this->input->post('RecievedDate');
		    $rd = date('Y-m-d',strtotime($recievedDate));
			$recievedby = $this->input->post('recievedby');
			$refNo = $this->input->post('refNo');
			$collectedBy = $this->input->post('collectedBy');
			$letterDate = $this->input->post('letterDate');
		    $ld = date('Y-m-d',strtotime($letterDate));
			$forwardto = $this->input->post('forwardto');
			$reason = $this->input->post('reason');

			  $this->db->select('ID');
			  $this->db->from('letterdata');
			  $this->db->order_by('ID', 'ASC');
			  $query = $this->db->get();

			  if( $query->num_rows() > 0) {
			  	foreach( $query->result() as $row ){
			  		$letterid =   $row->ID;
			  	}
			  	$letterid++;
			  	// echo json_encode($data);

			  	$letter_data = array(

			  		'ID' => $letterid,
			  		'recieveDate' => $rd,
			  		'referenceNo' => $refNo,
			  		'receivedBy' => $recievedby,
			  		'collectedBy' => $collectedBy,
			  		'letterDate' => $ld,
			  		'forwardTo' => $forwardto,
			  		'reason' => $reason,
			  		'action' => 'Pending',
			  		'actionStatus' => 'Pending',
			  		'dataInsertBy' => $_SESSION['uname']
			  	);

			  	$this->Letter->insert_letters($letter_data);
			  	redirect('letters','refresh');
			  }

		}
	}

}

/* End of file Letters.php */
/* Location: ./application/controllers/Letters.php */