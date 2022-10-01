<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	public function  __construct()
	{
	parent::__construct();
	$this->load->model('Users');
	


	}
	public function index()
	{
		$this->load->database();
		$this->load->view('home');
		
	}

	public function register(){
		$this->load->view('inc/user_header');
		$this->load->view('dash/register');
		$this->load->view('inc/footer');
	}

	public function edituser(){
		$this->load->view('inc/user_header');
		$this->load->view('dash/edituser');
		$this->load->view('inc/footer');
	}
	public function edituser1(){
		$this->load->view('inc/user_header');
		$this->load->view('dash/edituser1');
		$this->load->view('inc/footer');
	}

	public function deleteusers(){
		$this->load->view('inc/user_header');
		$this->load->view('dash/deleteusers');
		$this->load->view('inc/footer');
	}

	
	public function login_process()
	{
		if($this->input->post('login')){
			$username = $this->input->post('username');
			// encrypt the password
			$BATZ='MakeCrazyEncryption890-9987';
			$password = hash('sha256', $this->input->post('password').$BATZ);
		$user_data = array(
			'uname' => $username,
			'pword' => $password

		);
		
		$users_list = $this->db->get_where( 'sysusers', array('UserID' => $user_data['uname']));
		
		if($users_list->num_rows() > 0){
		foreach ($users_list -> result() as $user) {
			
			
			if($user_data['uname'] == $user->UserID && $user_data['pword'] == $user->Password){
				
				$_SESSION['uname'] = $user_data['uname'];
				$_SESSION['utype'] = $user->UserGroup;
				$data['alert'] = 'success';
				$this->load->view('home', $data);
				redirect('dashboard','refresh');
			}
		
			else{
				
				$data['alert'] = 'failed';
				$this->load->view('home', $data);
				// redirect('home','refresh');
				
			}
		}
		}
		else{
			
			$data['alert'] = 'failed';
			$this->load->view('home', $data);
			// redirect('home','refresh');
		}
	}
	}

	public function delete_process(){

		if($this->input->post('submit1')){
	
		$usertype=$this->input->post('UserType');

		
		  $this->db->select('*');
		  $this->db->from('sysusers');
		  $this->db->where('UserType =', $usertype);
		  $this->db->where('Status =' , 'Active');
		  $query = $this->db->get();
		  // return $query->result_array();
		  // var_dump($query->num_rows());

		 if( $query->num_rows() > 0) {
		  	
		  	  $this->load->view('inc/user_header');			
  			  
  			  foreach( $query->result() as $row ){

			      $data [] =  array("uid" => $row->UserID,"usertype" => $row->UserType);
			      // $data[] = ;
			    

			    }
			    	$result['passval'] = $data;
		  	 	  	// echo json_encode($result);
			      	$this->load->view('dash/deleteusers',$result);

			  	  // $result = array('data' => $data);


		  	  	
				
				$this->load->view('inc/footer');
		  	  	
				
		}
		else{

			return 0;
			echo 'no records';
		}
	}
	}

	public function logout(){
		session_unset();
		session_destroy();
		redirect('home','refresh');
	}

	public function validation(){
		$this->load->view('dash/validation');
	}
	public function searchusers(){
		$this->load->view('dash/searchusers');
	}
	public function useredit(){
		$this->load->view('dash/useredit');
	}

	public function delete(){
		$this->load->view('dash/delete_ac');
	}
	

	public function register_process(){
		
		if($this->input->post('create')){

			$name = $this->input->post('UserID');
			$FName = $this->input->post('FName');
			$LName = $this->input->post('LName');
			$usertype = $this->input->post('UserType');
			$UserGroup = $this->input->post('UserGroup');
			$cpassword = $this->input->post('RetypePassword');
			$usrCrON = date("Y-m-d");
			// encrypt the password
			$BATZ='MakeCrazyEncryption890-9987';
			$password = hash('sha256', $this->input->post('inputPassword').$BATZ);

			$user_data = array(
			
				'UserID' => $name,
				'FirstName' => $FName,
				'LastName' => $LName,
				'Password' => $password,
				'UserType' => $usertype,
				'UserGroup' => $UserGroup,
				'userCreated' => $usrCrON,
				'Status' => 'Active',
				'userCreatedBy' => $_SESSION["uname"]

		);
			// var_dump($user_data);
			$this->Users->insert_users($user_data);
			redirect('home/register','refresh');
		}else{
			// echo 'insert failed'.mysqli_error();
			redirect('home','refresh');
		}
	}
}