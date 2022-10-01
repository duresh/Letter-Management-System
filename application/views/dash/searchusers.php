<?php
$q=&$_GET['term'];

// $query=$this->db->query("SELECT UserID FROM sysusers WHERE UserID LIKE '$q%'");

$this->db->from('sysusers');
$this->db->like('UserID', $q , 'after');
$query = $this->db->get();

$data=array();

// while($row=mysqli_fetch_array($query)){
// 	$data[]=array('value'=>$row['UserID']);
// }

// echo json_encode($data);

if( $query->num_rows() > 0) {
    $result = $query->result(); //or $query->result_array() to get an array
    foreach( $result as $row )
    {
         //access columns as $row->column_name
    	$data[] = array('value' => $row->UserID);
    }
    echo json_encode($data);
}    

?>