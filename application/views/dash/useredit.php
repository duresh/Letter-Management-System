<?php


	$name=trim($this->input->post('User'));
	$user=$_SESSION["uname"];
	$BATZ='MakeCrazyEncryption890-9987';
  	$password = hash('sha256',$this->input->post('inputPassword').$BATZ);
	$cpassword=$this->input->post('RetypePassword');
	$usrCrON=date("Y-m-d");
	
	
if($name && $password && $cpassword){

$data = array(
        'Password' => $password,
        'userCreatedBy' => $user,
        'userCreated' => $usrCrON
);

$this->db->where('UserID', $name );
$this->db->update('sysusers', $data);

// $query=mysqli_query( "UPDATE sysusers SET Password='$password',userCreatedBy='$user',userCreated='$usrCrON' WHERE UserID='$name'");//data insertion to the database

echo 1;

}else{

echo 0;

}

?>