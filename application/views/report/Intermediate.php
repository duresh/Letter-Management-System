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
              <span class="label label-warning" style="font-size:13px"><a href="<?php echo site_url(); ?>action/letter_pending" style="color:white;text-decoration:none;">Pending</a></span>
                <span class="label label-primary" style="font-size:13px"><a href="<?php echo site_url(); ?>action/letter_intermediate" style="color:white;text-decoration:none;">Intermediate</a></span>
                <span class="label label-success" style="font-size:13px"><a href="<?php echo site_url(); ?>action/letter_final" style="color:white;text-decoration:none;">Final</a></span>
                <span class="label label-default" style="font-size:13px"><a href="<?php echo site_url(); ?>action/letter_report" style="color:white;text-decoration:none;">All</a></span>
                </h3>
                
               
            </div>
            <div class="box-content">
    <!--New sysusers Processed-->
                <?php
    // include('db.php');
      // $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM letterdata WHERE  actionStatus='Intermediate'");
    ?>
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="myTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Recieved Date</th>
        <th>Reference No</th>
        <th>Recieved By</th>
        <th>Collected By</th>
        <th>Letter Posted Date</th>
        <th>Forward To</th>
        <th>Reason</th>
        <th>Action Taken</th>
        <th>File Number</th>
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



