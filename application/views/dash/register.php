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
<div class="col-md-8 ">
    <?php echo form_open('home/register_process', ['class' => 'form-horizontal', 'role' => 'form']); ?>
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <h3 class="text-right">Register</h3>
            <span class="text-right" id="Info"></span>
        </div>
         
    </div>
    
     <div class="form-group">
        <label for="UserID" class="control-label col-xs-4">UserID</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" id="UserID" name="UserID" placeholder="UserID" required>
        </div>
        <span id="nameInfo"></span>
    </div>

   <div class="form-group">
        <label for="FName" class="control-label col-xs-4">First Name</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" id="FName" name="FName" placeholder="First Name" required>
            </div>
            <span id="nameInfo"></span>
    </div>
    <div class="form-group">
        <label for="LName" class="control-label col-xs-4">Last Name</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" id="LName" name="LName" placeholder="Last Name">
        </div>
        <span id="lnameInfo"></span>
    </div>

     <div class="form-group">
        <label for="UserType" class="control-label col-xs-4">User Type</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <select class="form-control" id="UserType" name="UserType">
                <option>Administrator</option>
                <option>Director</option>
                <option>User</option>
                <option>OES</option>
                
                
            </select>
            
        </div>
        <span id="usertypes"></span>
    </div>

    <div class="form-group">
        <label for="UserType" class="control-label col-xs-4">User Group</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <select class="form-control" id="UserGroup" name="UserGroup">
                <option>Administrator</option>
                <option>ADM</option>
                <option>APD</option>
                <option>OES</option>
                <option>ACC</option>
                <option>IT</option>
                
            </select>
            
        </div>
        <span id="usertypes"></span>
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
            <input type="submit" name="create" id="create" class="btn btn-primary" value="Create Account">
        
         
             <button type="reset" class="btn btn-warning">Cancel</button>
        </div>
    </div>
        
<?php echo form_close(); ?>
</div>
<!-- /span-3 -->

</div>