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
    		$('#actionT').DataTable( {
        "order": [[ 1, "desc" ]]
    } );
		});
	</script>
                <?php
                if(isset($passval)){
                ?>
    <div class="row" id="Members">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h3><i class="glyphicon glyphicon-envelope"></i> Recieved Letter Information
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                <span style="font-size:16px">Action Colour Codes:</span>
                <span class="label label-warning" style="font-size:13px">Pending</span>
                <span class="label label-primary" style="font-size:13px">Intermediate</span>
                <span class="label label-success" style="font-size:13px">Final</span>
                </h3>

               
            </div>
            <div class="box-content">
    <!--New sysusers Processed-->
                
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="actionT">
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
        <th>Action Forward To</th>
       
    </tr>
    </thead>
    <tbody>
    <?php
    
    foreach ( $passval as $row ):
    // while($row=mysqli_fetch_array($query)){
        
          echo '<tr><td>'.$row['ID'].'</td>';
          echo '<td>'.$row['recieveDate'].'</td>';
          echo '<td>'.$row['referenceNo'].'</td>';
          echo '<td>'.$row['receivedBy'].'</td>';
          echo '<td>'.$row['collectedBy'].'</td>';
          echo '<td>'.$row['letterDate'].'</td>';
          echo '<td>'.$row['forwardTo'].'</td>';
          echo '<td>'.$row['reason'].'</td>';
          // echo '<td>'.$row['action'].'</td>';
          
          
          if($row['action']=='Pending' && $row['forwardTo']==$_SESSION['uname'] ){
          ?>
            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>action/action_load?id=<?php echo $row['ID']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Take Action
            </a></td>

          <?php
          }
          
            else{
              if($row['actionStatus']=='Final'){
                echo '<td><span class="label label-success">'.$row['action'].'</span>';
              }
              else{
                if($row['action']=='Pending'){
                  echo '<td><span class="label label-warning">'.$row['action'].'</span>';
                }
                else{


              echo '<td><span class="label label-primary">'.$row['action'].'</span>';

              if($row['forwardTo']==$_SESSION['uname'] OR $row['actionForward']=$_SESSION['uname'] ){
              ?>
              	<a class="btn btn-warning" href="<?php echo base_url(); ?>action/action_load?id=<?php echo $row['ID']; ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Edit Action
            	</a>
            	</td>
          <?php 
          } 
          }
          }
          }
           echo '<td>'.$row['actionForward'].'</td>';
          ?>
          
        </tr>  
        <?php  
        endforeach;  
        
    }
    else{
      ?>
      <div class="row" id="Members">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h3><i class="glyphicon glyphicon-envelope"></i> Recieved Letter Information
                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  
                <span style="font-size:16px">Action Colour Codes:</span>
                <span class="label label-warning" style="font-size:13px">Pending</span>
                <span class="label label-primary" style="font-size:13px">Intermediate</span>
                <span class="label label-success" style="font-size:13px">Final</span>
                </h3>

               
            </div>
            <div class="box-content">
      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="actionT">
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
        <th>Action Forward To</th>
       
    </tr>
    </thead>
    <tbody>
    </tbody>
  </table>


    <?php
      
    }
    ?>
    </tbody>
    </table>
  </div>
</div>
</div>
                <!--End of sysusers Processed-->  
            </div>
        </div>
    </div>
</div><!--/row-->
