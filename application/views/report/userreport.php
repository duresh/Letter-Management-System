<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
?>
	<style>
		#Members{
  		padding-top:50px;
  		width:75%;
  		margin:0 Auto;
		}

	</style>
	<script>
		$(document).ready(function(){
    		$('#myTable').DataTable();
		});
	</script>
  <?php if(isset($passval)){  ?>
    <div class="row" id="Members">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h3><i class="glyphicon glyphicon-user"></i> System Users</h3>

               
            </div>
            <div class="box-content">
    <!--New sysusers Processed-->
    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="myTable">
    <thead>
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>User Type</th>
        <th>User Group</th>
        <th>user Created</th>
        <th>Status</th>
        <th>Permission Given By</th>
       
    </tr>
    </thead>
    <tbody>
    <?php
    
    
    foreach ( $passval as $row ):

   // while($row=mysqli_fetch_array($query)){
        
          echo '<tr><td>'.$row['uid'].'</td>';
          echo '<td>'.$row['fname'].'</td>';
          echo '<td>'.$row['utype'].'</td>';
          echo '<td>'.$row['ugroup'].'</td>';
          echo '<td>'.$row['userCreated'].'</td>';
          
          
          if($row['Status']=='Active' ){
            echo '<td><span class="label-success label label-default">Active</span></td>';
          }
          
            else{
              echo '<td><span class="label-danger label label-default">Inactive</span></td>';
            
            
          }
           echo '<td>'.$row['userCreatedBy'].'</td>';
          ?>
          
        </tr>  
        <?php
        endforeach;  
        }

    ?>
    </tbody>
    </table>
                <!--End of sysusers Processed-->  
            </div>
        </div>
    </div>
</div><!--/row-->



