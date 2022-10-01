<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}

// else{
//     if($_SESSION['utype'] != 'Administrator'){
  ?>
<!-- //     <script type = "text/javascript">
//         Swal.fire({
//           title: 'Permission Denied!!',
//           text: "You have no Permission to access this page!",
//           icon: 'error',
//           showCancelButton: false,
//           confirmButtonColor: '#3085d6',
//           cancelButtonColor: '#d33',
//           allowOutsideClick: false,
//           confirmButtonText: 'OK!'
//         }).then((result) => {
//           if (result.isConfirmed) {
//             window.location.href = "<?php echo site_url(); ?>dashboard";

//           }
//         })
//         </script> -->
   <?php
        
//     }
// }
?>
<div class="col-md-8">
    <form id="editusers" name="editusers" class="form-horizontal" method="post" action="">
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <h3 class="text-right">Edit User Data</h3>
            <span id="Info"></span>
        </div>
    </div>
            
     <div class="form-group">
         <label for="UserID" class="control-label col-xs-4">Username</label>
        <div class="col-xs-4 col-md-4 col-lg-4 " id="test">
            <input type="text" class="form-control" id="User" name="User" placeholder="Username" required value="<?php echo $_SESSION['uname'] ?>" readonly>
        </div>
        <span id="nameInfo"></span>
    </div>
     
    <div class="form-group">
        <label for="inputPassword" class="control-label col-xs-4">Password</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="password" class="form-control" id="inputPassword" name="inputPassword" placeholder="Password" required>
        </div>
        <span id="pass1Info"></span>
    </div>
    <div class="form-group">
        <label for="Retype Password" class="control-label col-xs-4">Retype Password</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="password" class="form-control" id="RetypePassword" name="RetypePassword" placeholder="Retype Password" required>
        </div>
        <span id="pass2Info"></span>
    </div>
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Apply Changes</button>
        
         
             <button type="reset" class="btn btn-warning">Cancel</button>
        </div>
    </div>
        
</form>
</div>
<!-- /span-3 -->

<script type="text/javascript" >
    
    $(function(){
        $("#User").autocomplete({
        source: "searchusers" // path to the get_users 
			
        });
    });
        
  
    
   
</script>

</div>
