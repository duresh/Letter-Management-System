<?php

// get value of id that sent from address bar 
$id=$_GET['id'];
$user=$_SESSION["uname"];
$usrCrON=date("Y-m-d");
// Delete data in mysql from row that has this id 
// $sql="UPDATE sysusers set Status='Inactive',userCreatedBy='$user',userCreated='$usrCrON' WHERE UserID='$id'";

$data = array(
        'Status' => 'Inactive',
        'userCreatedBy' => $user,
        'userCreated' => $usrCrON
);

$this->db->where('UserID', $id );
$this->db->update('sysusers', $data);

redirect('home/deleteusers','refresh');

// $result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);

// if successfully deleted
// if($result){
// echo "Deleted Successfully";
// echo "<BR>";
// echo "<a href='deleteusers.php'>Back to main page</a>";
// echo '<META HTTP-EQUIV="Refresh" Content="0; URL=deleteusers.php">'; 
// }

// else {
// echo "ERROR";
// }
?> 

