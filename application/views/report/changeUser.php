<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
?>
<style>
    .backgr{
      padding-top:50px;
  }
</style>
<div class="container-fluid backgr">

    <!-- <div class="col-md-2"> Left -->
        <!-- <h3><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></h3>   -->

        <!-- <hr> -->
        <!-- <ul class="nav nav-pills nav-stacked"> -->
            <!-- <li class="nav-header"></li> -->
            <!-- <li ><a href="dashboard.php" title="The Bootstrap Playground">Home</a></li> -->
            <!-- <li class="active"><a href="reguser.php">Create Users</a></li> -->
            <!-- <li class="divider"></li> -->
            <!-- <li><a href="editusers.php" title="Bootstrap 3 Panel">Edit Users</a></li> -->
            <!-- <li><a href="deleteusers.php" title="Bootstrap 3 Icons">Delete Users</a></li> -->

        <!-- </ul> -->
    <!-- </div> --> 
    <div class="col-md-8 ">
        <?php echo form_open('action/letterchange_process', ['class' => 'form-horizontal', 'role' => 'form']); ?>

            <div class="form-group">
             <label for="" class="control-label col-xs-4"></label>
             <div class="col-xs-4">
                <h3 class="text-right">Letter Update</h3>
                <span class="text-right" id="Info"></span>
            </div>

        </div>

        <div class="form-group">
            <label for="UserID" class="control-label col-xs-4">Letter ID</label>
            <div class="col-xs-4 col-md-4 col-lg-4">
                <input type="text" class="form-control" id="letterID" name="letterID" placeholder="UserID" readonly required value="<?php echo $_GET['id']; ?>">
            </div>
            <!-- <span id="nameInfo"></span> -->
        </div>

       

        <div class="form-group">
            <label for="UserType" class="control-label col-xs-4">Forward User </label>
            <div class="col-xs-4 col-md-4 col-lg-4">

                <select class="form-control" id="username" name="username">
                   <?php 
                   // include('db.php');
                    // $query1=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT UserID FROM sysusers WHERE Status='Active'");//data insertion to the database
                    // while($row=mysqli_fetch_array($query1)){
                   foreach ($report as $row) {
                       # code...
                            $uid = $row->UserID;
                   // }
                    


                    ?>
            <option value="<?php echo $uid; ?>"><?php echo $uid; ?></option>
                <?php

                }
                ?>
            

        </select>

    </div>
    <span id="usertypes"></span>
</div>
<div class="form-group">
    <label for="inputPassword" class="control-label col-xs-4"></label>
    <div class="col-xs-4 col-md-4 col-lg-4">


    </div>
    <!-- <span id="pass1Info"></span> -->
</div>
<div class="form-group">
    <label for="Retype Password" class="control-label col-xs-4"></label>
    <div class="col-xs-4 col-md-4 col-lg-4">


    </div>

    <!-- <span id="pass2Info"></span> -->
</div>

<div class="form-group">
 <label for="" class="control-label col-xs-4"></label>
 <div class="col-xs-4">
    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Update Letter ID">


    <button type="reset" class="btn btn-warning">Cancel</button>
</div>
</div>

<?php echo form_close(); ?>
</div>
<!-- /span-3 -->

</div>
<?php
// if(isset($_POST['submit'])){

   // $id=$_POST['letterID'];
   // $username=$_POST['username'];





// include('db.php');//include database file
// $query=mysqli_query($GLOBALS["___mysqli_ston"], "UPDATE letterdata SET forwardTo='$username' WHERE ID='$id' ");//data insertion to the database

// echo "<h3 align=Center>UPDATED</h3>";
// echo '<meta http-equiv="Refresh" content="0; url=reorganize.php" />';






// }
?>


