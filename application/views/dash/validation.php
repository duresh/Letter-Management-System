<?php

$name = &$_POST['names'];
// $name = $this->input->post('names');
if($name!=""){
// include('db.php');//include database file
// $username = mysqli_query("SELECT UserID FROM sysusers WHERE UserID = '$name'");
$username = $this->db->get_where("sysusers", array('UserID' => $name));
// $count = mysqli_num_rows($username);

if($username->num_rows() != 0){
	echo 1;
}else{
	echo 0;
}
}

	
?>