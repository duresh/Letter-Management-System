<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Action extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		//Do your magic here
	}

	public function index()
	{
		$this->load->database();
		$this->load->view('inc/header_rep');
		$this->load->view('dash/actionTaken');
		$this->load->view('inc/footer');

	}

	public function action_pass(){
		$this->load->view('inc/header_rep');
		$this->load->view('dash/action');
		$this->load->view('inc/footer');
	}

	public function letter_report(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->load_report();
		  $this->load->view('report/letterReportAdmin', $data);
		  $this->load->view('inc/footer');
	}

	public function letter_report2(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->load_report2();
		  $this->load->view('report/letterReport', $data);
		  $this->load->view('inc/footer');
	}

	public function letter_pending(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->load_pending();
		  $this->load->view('report/pending', $data);
		  $this->load->view('inc/footer');
	}

	public function letter_intermediate(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->load_intermediate();
		  $this->load->view('report/intermediate', $data);
		  $this->load->view('inc/footer');
	}

	public function letter_final(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->load_final();
		  $this->load->view('report/final', $data);
		  $this->load->view('inc/footer');
	}

	public function action_complete(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->action_comp();
		  $this->load->view('report/actionComplete', $data);
		  $this->load->view('inc/footer');
	}

	public function action_pending(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->action_pend();
		  $this->load->view('report/actionPending', $data);
		  $this->load->view('inc/footer');
	}

	public function reorganize(){

		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->action_reorg();
		  $this->load->view('report/reorganize', $data);
		  $this->load->view('inc/footer');
	}

	public function reorganize_no(){
		  // $ID = $_GET['id'];
		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['report'] = $this->Letter->action_reorg_no();
		  $this->load->view('report/changeUser', $data);
		  $this->load->view('inc/footer');
	}

	public function letterchange_process(){

		if($this->input->post('submit')){

			$id = $this->input->post('letterID');
			$username = $this->input->post('username');

			$action_data = array(
			
				'ID' => $id,
				'forwardTo' => $username			

		);
			$this->load->view('inc/header_rep');
			$this->load->model('Letter');
			$this->Letter->letterchange($action_data,$id );
			$this->load->view('report/reorganize');
			$this->load->view('inc/footer');
			
		}
	}



	public function action_taken(){

		  
		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['passval'] = $this->Letter->action_taken();
		  $this->load->view('dash/actionTaken',$data);
		  $this->load->view('inc/footer');			
		  		
		  		
		  			 
	}

	public function action_load(){
		  $ID = $_GET['id'];
		  $this->load->view('inc/header_rep');
		  $this->load->model('Letter');
		  $data['action'] = $this->Letter->load_action($ID);
		  $this->load->view('dash/action', $data);
		  $this->load->view('inc/footer');
	}

	public function action_submit(){

		if($this->input->post('submit')){
			$id = $this->input->post('id');
			$reason = $this->input->post('reason');
			$recBy = $this->input->post('recBy');
			$recdate = $this->input->post('recdate');
			$action = $this->input->post('action');
			$fno = $this->input->post('fno');
			$ac = $this->input->post('ac');
			$forwardto = $this->input->post('forwardto');
			$adate = $this->input->post('adate');
			$atd = date('Y-m-d',strtotime($adate));
			
			$action_data = array(
			
				'reason' => $reason,
				'receivedBy' => $recBy,
				'recieveDate' => $recdate,
				'action' => $action,
				'FileNo' => $fno,
				'actionStatus' => $ac,
				'actionForward' => $forwardto,
				'ID' => $id,
				'atDate' => $atd
				

		);
			$this->load->view('inc/header_rep');
			$this->load->model('Letter');
			$this->Letter->take_action($action_data,$id);
			redirect('action/action_taken','refresh');
		}


		
	}

}

/* End of file action.php */
/* Location: ./application/controllers/action.php */