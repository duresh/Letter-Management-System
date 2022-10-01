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
  <script>
          $(document).ready(function() {
              		// alert("ok");
  				$("#RecievedDate").datepicker();
  				$("#calendar").click(function() {
   				 // alert('clcikec');
   				 $("#RecievedDate").focus();
 				 });

  				$("#letterDate").datepicker();
  				$("#calendar2").click(function() {
   				 // alert('clcikec');
   				 $("#letterDate").focus();
 				 });

				});

    </script>    
<!-- form body -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<style>
		#login-overlay{
  		padding-top:50px;
		}
	</style>
  
  <script type="text/javascript" >
    
    $(function(){
        $("#collectedBy").autocomplete({
        source: "letters/searchoes" // path to the get_users 
      
        });

        $("#forwardto").autocomplete({
        source: "letters/searchoffice" // path to the get_users 
      
        });
    });
    </script>

    <div id="login-overlay" class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title" id="lettertitle"><strong>Recieved Letter details</strong></h4>
              <p>Please insert each and every <b>Letter details</b> here.
               </p>
            </div>
          
            <div class="modal-body">
              
            
            <!-- <form id="registerForm" method="post" name="letterinfo" id="letterinfo" action=""> -->
           	<?php echo form_open('letters/register_process', ['role' => 'form','id' => "letterinfo" , 'name' => "letterinfo" ,'id'=> "registerForm"]); ?>
         	<div class="form-group">
		    <div class="col-xs-6">
                        <label for="RecievedDate">Letter Recieved Date</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="RecievedDate" id="RecievedDate" placeholder="Letter Recieved Date" required>
                        <span class="input-group-addon" style="cursor:pointer;" id="calendar"><span class="glyphicon glyphicon-calendar"></span></span>
                        </div>
                        <br>
                        <label for="recievedby">Received By</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="recievedby" id="recievedby" placeholder="Department name or Institute" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
                    </div>
 <hr>
                </div>
                </div>
                    <div class="form-group">
                    <div class="col-xs-6">

                        <label for="refNo">Reffered Number</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="refNo" id="refNo" placeholder="Letter Refference Number" >
                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                        </div>
                    
                        <br>
                        <label for="collectedBy">Collected By</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="collectedBy" id="collectedBy" placeholder="DCS Person" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                    </div>
 <hr>
                </div>       
                </div> 
                    <div class="form-group"> 
                        <div class="col-xs-6">
                        <label for="letterDate">Date of the Letter</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="letterDate" id="letterDate" placeholder="Date of the Letter" required>
                        <span class="input-group-addon" style="cursor:pointer;" id="calendar2"><span class="glyphicon glyphicon-calendar"></span></span>
                    </div>
 <br>
                     </div>
                 </div>

                        <div class="form-group">
                        <div class="col-xs-6">
                        <label for="forwardto">Forward To</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="forwardto" id="forwardto" placeholder="Forwarded DCS Person Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-share-alt"></span></span> 
                    	</div>
 <br> 
                    </div>                     
                </div>
             
                        <div class="form-group">
                        <div class="col-xs-12">
                        <label for="reason">Reason</label>
                        <div class="input-group">
                        <input type="text" class="form-control" name="reason" id="reason" placeholder="Reason Included" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
                    </div>
 <br> 
                    </div>
                    </div>

                       

               
                  <div class="form-group">
                  <div class="input-group-addon">
                  <input type="reset" name="reset" id="reset" value="Clear All" class="btn btn-warning pull-right">
                  
                  </div>
                  <div class="input-group-addon">
                  <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success pull-right">
                  
                  </div>
                </div>
                <!-- </form> -->
                <?php echo form_close(); ?>
              </div>
          </div>
       </div>