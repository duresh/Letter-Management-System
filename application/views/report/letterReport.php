<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
?>
	<style>
		#Members{
  		padding-top:50px;
  		width:95%;
  		margin:0 Auto;
		}

	</style>
	<script>
		$(document).ready(function(){
    		$('#myTable').DataTable( {
        "order": [[ 0, "desc" ]]
    } );
		});
	</script>
    <div class="row" id="Members">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h3><i class="glyphicon glyphicon-envelope"></i> Recieved Letter Information
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                <span style="font-size:16px">Action Colour Codes:</span>
                <span class="label label-warning" style="font-size:13px"><a href="pending.php" style="color:white;text-decoration:none;">Pending</a></span>
                <span class="label label-primary" style="font-size:13px"><a href="Intermediate.php" style="color:white;text-decoration:none;">Intermediate</a></span>
                <span class="label label-success" style="font-size:13px"><a href="Final.php" style="color:white;text-decoration:none;">Final</a></span>
                <span class="label label-default" style="font-size:13px"><a href="letterReport.php" style="color:white;text-decoration:none;">All</a></span>
                </h3>
                
                <a href="#" onclick="HTMLtoPDF()">Download PDF</a>

               
            </div>
            <div class="box-content" id="HTMLtoPDF">
    <!--New sysusers Processed-->
                <?php
    // include('db.php');
      // $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT l.ID,l.recieveDate,l.referenceNo,l.receivedBy,l.collectedBy,l.letterDate,l.forwardTo,l.reason,l.action,l.FileNo,l.actionStatus,l.actionForward,l.atDate,s.UserID,s.UserGroup FROM letterdata l , sysusers s WHERE s.UserID=l.forwardTo AND s.UserGroup='".$group."'");
    ?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="myTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Recieved Date</th>
        <th>Reference No</th>
        <th>Recieved By</th>
        <th>Collected By</th>
        <th>Letter_Posted Date</th>
        <th>Forward To</th>
        <th>Reason</th>
        <th>Action Taken</th>
        <th>File Number</th>
        <!-- <th>Action_Taken Date</th> -->
        <th>Action Forward To</th>
       
    </tr>
    </thead>
    <tbody>
    <?php
    // while($row=mysqli_fetch_array($query)){
    foreach ($report as $row) {
      # code...
    
        
          echo '<tr><td>'.$row->ID.'</td>';
          echo '<td>'.$row->recieveDate.'</td>';
          echo '<td>'.$row->referenceNo.'</td>';
          echo '<td>'.$row->receivedBy.'</td>';
          echo '<td>'.$row->collectedBy.'</td>';
          echo '<td>'.$row->letterDate.'</td>';
          echo '<td>'.$row->forwardTo.'</td>';
          echo '<td>'.$row->reason.'</td>';
          // echo '<td>'.$row['action'].'</td>';
          
          
          if($row->action=='Pending' ){
            echo '<td><span class="label label-warning">Pending</span></td>';
          }
          
            else{
              if($row->actionStatus=="Final"){

              echo '<td><span class="label label-success">'.$row->action.'</span></td>';

              }
              else{
                echo '<td><span class="label label-primary">'.$row->action.'</span></td>';

              }
            
            
          }
          echo '<td>'.$row->FileNo.'</td>';
          echo '<td>'.$row->actionForward.'</td>';
          ?>
          
        </tr>  
        <?php  
      }

    ?>
    </tbody>
    </table>
                <!--End of sysusers Processed-->  
            </div>
        </div>
    </div>
</div><!--/row-->




<script type="text/javascript" src="../js/jspdf.js"></script>       
<script type="text/javascript" src="../js/pdfFromHTML.js"></script>       
