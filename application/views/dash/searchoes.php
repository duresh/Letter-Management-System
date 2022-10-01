<?php
$q=$_GET['term'];
// include('db.php');
// $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT UserID FROM sysusers WHERE UserType='OES' AND UserID LIKE '$q%'");
$this->db->select('UserID');
$this->db->from('sysusers');
$this->db->where('UserType', 'OES');
$this->db->where('Status', 'Active');
$this->db->like('UserID', $q , 'after');
$query = $this->db->get();

$data=array();


if( $query->num_rows() > 0) {
$result = $query->result();
// while($row=mysqli_fetch_array($query)){
foreach( $result as $row )
    {
	$data[]=array('value'=>$row->UserID);
	}

echo json_encode($data);
}
?>