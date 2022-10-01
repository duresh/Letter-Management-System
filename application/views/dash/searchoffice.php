<?php
$q=$_GET['term'];
// include('db.php');
// $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT UserID FROM sysusers WHERE UserType='User' AND UserID LIKE '$q%' AND Status='Active'" );
$this->db->select('UserID');
$this->db->from('sysusers');
$this->db->where('UserType', 'User');
$this->db->where('Status', 'Active');
$this->db->like('UserID', $q , 'after');
$query = $this->db->get();

$data=array();

// while($row=mysqli_fetch_array($query)){
if( $query->num_rows() > 0) {

$result = $query->result();

foreach( $result as $row )
    {
	$data[]=array('value'=>$row->UserID);
	}


echo json_encode($data);
}
?>