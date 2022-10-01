<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
else{
    if($_SESSION['utype'] != 'Administrator'){
    ?>
    <script type = "text/javascript">
        Swal.fire({
          title: 'Permission Denied!!',
          text: "You have no Permission to access this page!",
          icon: 'error',
          showCancelButton: false,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          allowOutsideClick: false,
          confirmButtonText: 'OK!'
        }).then((result) => {
          if (result.isConfirmed) {
            window.location.href = "<?php echo site_url(); ?>dashboard";

          }
        })
        </script>
    <?php
        
    }
}
?>
<div class="col-md-8">
    <?php echo form_open('home/delete_process', ['class' => 'form-horizontal', 'role' => 'form']); ?>
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <h3 class="text-right">Delete User Data</h3>
        </div>
    </div>
    
     <div class="form-group">
        <label for="UserID" class="control-label col-xs-4">User Type</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <select class="form-control" id="UserType" name="UserType">
                <option value="Administrator">Administrator</option>
                <option value="Director">Director</option>
                <option value="User">User</option>
                <option value="OES">OES</option>
                
                
                
            </select>
        </div>
    </div>
    
<div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <input type="submit" id="submit" name="submit1" class="btn btn-primary" value="Search User">
        
         </div>
    </div>
    
        
<?php echo form_close(); ?>
    
    
<?php

if(isset($passval)){
  foreach ( $passval as $row ):

   $usertype = $row['usertype'];

  endforeach;
?>
	<div class="form-group">
     <label for="" class="control-label col-xs-4"></label>
     <div id="users" name="users" class="col-xs-4 alert alert-info">
<table border="0" width="100%" cellpadding="3" cellspacing="1" id="delTable" name="delTable">
<tr>
<td colspan="5" bgcolor="#FFFFFF" class="h5"><strong>Delete User data in <?php echo $usertype; ?>'s</strong><br><br> </td>
</tr>

<?php

// while($rows=mysqli_fetch_array($result)){
 
?>
<?php foreach ( $passval as $row ): ?>

<tr>
<td bgcolor="#FFFFFF" align="left"><?php echo $row['uid']; ?><br><br></td>

<td bgcolor="#FFFFFF" ><a href="<?php echo base_url();?>home/delete?id=<?php echo $row['uid']; ?>" class="btn btn-danger "><i class="glyphicon glyphicon-trash icon-white"></i>
                Delete</a></td></tr>

<?php
// close loop
?>
<?php endforeach; ?>

</table>

<?php
// close connection; 
// ((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
}
?>
     </div>   
    </div>
    
</div>



<!-- /span-3 -->



</div>