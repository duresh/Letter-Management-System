<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
?>
     <style>
    .backgr{
      padding-top:10px;
    }
  </style>

  <script type="text/Javascript">
        $(document).ready(function() {
        $("#forwardto").autocomplete({
        source: "../letters/searchoffice" // path to the get_users 
        });

                $("#adate").datepicker();
                $("#calendar").click(function() {
                 // alert('clcikec');
                 $("#adate").focus();
                 });
        });
  </script>

  <?php
    // include('db.php');
    // $id=$_GET['id'];
    // $select=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM letterdata WHERE id='$id'");
    // while($rows=mysqli_fetch_array($select)){
    //    $rea=$rows['reason'];
    //    $recB=$rows['receivedBy'];
    //    $recd=$rows['recieveDate'];
       
    //  }
    ?>
<div class="col-md-12 backgr">
    <?php echo form_open('action/action_submit', ['class' => 'form-horizontal', 'role' => 'form']); ?>
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <h3 class="text-right">Take Actions For Recieved Letters</h3>
            <span class="text-right" id="Info"></span>
        </div>
    </div>
     
    <div class="form-group">
        <label for="FName" class="control-label col-xs-4">Letter ID</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" id="id" name="id" placeholder="Letter ID" required value="<?php echo $action['ID']; ?>" readonly>
            </div>
            <span id="IDInfo"></span>
    </div>  
     
     <div class="form-group">
        <label for="FName" class="control-label col-xs-4">Information or Reason</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <textarea rows="3" type="text" class="form-control" id="reason" name="reason" placeholder="Information or Reason" required><?php echo $action['reason']; ?></textarea>
            </div>
            <span id="nameInfo"></span>
    </div>
    
    <div class="form-group">
        <label for="Tel" class="control-label col-xs-4">Recieved By</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="tel" class="form-control" id="recBy" name="recBy" placeholder="Recieved By" value="<?php echo $action['receivedBy']; ?>" required>
        </div>
        <span id="telInfo"></span>
    </div>

    <div class="form-group">
        <label for="Tel" class="control-label col-xs-4">Recieved Date</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="tel" class="form-control" id="recdate" name="recdate" placeholder="Recieved Date" value="<?php echo $action['recieveDate']; ?>" required>
        </div>
        <span id="telInfo"></span>
    </div>

    <div class="form-group">
        <label for="Addr" class="control-label col-xs-4">Action Taken</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <textarea rows="3" type="" class="form-control" id="action" name="action" placeholder="Brief Description of Action Taken"  required></textarea>
        </div>
    </div>

     <div class="form-group">
        <label for="fno" class="control-label col-xs-4">File Number</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="fno" class="form-control" id="fno" name="fno" placeholder="File Number" required>
        </div>
        <span id="telInfo"></span>
    </div>
    
    <div class="form-group">
        <label for="Addr" class="control-label col-xs-4">Action Status</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
           <span class="col-md-4"><input type="radio" name="ac" id="ac" value="Intermediate" checked="checked" >Intermediate</span>
           <span class="col-md-4"><input type="radio" name="ac" id="ac" value="Final">Final</span>
        </div>
    </div>

     <div class="form-group">
        <label for="Addr" class="control-label col-xs-4">Action Forward To</label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="forwardto" id="forwardto" placeholder="Forwarded DCS Person Name" required>
                        
        </div>
    </div>

    <div class="form-group">
        <label for="Addr" class="control-label col-xs-4">Action Taken Date</label>
        <div class="col-xs-4 col-md-4 col-lg-4 input-group">
            <input type="text" class="form-control" name="adate" id="adate" placeholder="Action Taken Date" required>
            <span class="input-group-addon" style="cursor:pointer;" id="calendar"><span class="glyphicon glyphicon-calendar"></span></span>            
        </div>
    </div>
            

     <div class="form-group">
        <label for="Addr" class="control-label col-xs-4"></label>
        <div class="col-xs-4 col-md-4 col-lg-4">
            
        </div>
    </div>
    
    
    <div class="form-group">
         <label for="" class="control-label col-xs-4"></label>
        <div class="col-xs-4">
            <input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit Action">
        
         
             <button type="reset" class="btn btn-warning">Cancel</button>
        </div>
    </div>
        
<?php echo form_close(); ?>
</div>
<?php 
// if(isset($_POST['submit'])){
// 	$reason=$_POST['reason'];
// 	$recBy=$_POST['recBy'];
// 	$recdate=$_POST['recdate'];
//     $action=$_POST['action'];
// 	$fileno=$_POST['fno'];
//     $ac=$_POST['ac'];
//     $acFo=$_POST['forwardto'];
//     $adate=$_POST['adate'];
//     $atd=date('Y-m-d',strtotime($adate));
// 	include('db.php');
// 	$sql="UPDATE letterdata set action='$action',actionStatus='$ac',actionForward='$acFo',atDate='$atd',FileNo='$fileno' WHERE ID='$id'";
// 	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
// 	if(!$result){
// 		die("data update failed").mysqli_error($GLOBALS["___mysqli_ston"]);
// 	}
//     else{
//         echo '<META HTTP-EQUIV="Refresh" Content="0; URL=actionTaken.php">'; 

//     }
// }
 ?>


