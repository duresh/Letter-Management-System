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
          <!-- <span style="font-size:16px">Action Colour Codes:</span>
          <span class="label label-warning" style="font-size:13px"><a href="pending.php" style="color:white;text-decoration:none;">Pending</a></span>
          <span class="label label-primary" style="font-size:13px"><a href="Intermediate.php" style="color:white;text-decoration:none;">Intermediate</a></span>
          <span class="label label-success" style="font-size:13px"><a href="Final.php" style="color:white;text-decoration:none;">Final</a></span>
          <span class="label label-default" style="font-size:13px"><a href="letterReport.php" style="color:white;text-decoration:none;">All</a></span> -->
        </h3>

        <!-- <a href="#" onclick="HTMLtoPDF()">Download PDF</a> -->


      </div>
      <div class="box-content" id="HTMLtoPDF">
        <!--New sysusers Processed-->
        <?php
        // include('db.php');
        // $query=mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM letterdata");
        ?>
        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive display" id="myTable">
          <thead>
            <tr>
              <th>ID</th>
              <th>Recieved Date</th>
              <th>Reference No</th>
              <th>Recieved By</th>

              <th>Forward To</th>
              <th>Reason</th>
              
              <th>Change User</th>

            </tr>
          </thead>
          <tbody>
            <?php
            // while($row=mysqli_fetch_array($query)){
            foreach ($report as $row) {

              echo '<tr><td>'.$row->ID.'</td>';
              echo '<td>'.$row->recieveDate.'</td>';
              echo '<td>'.$row->referenceNo.'</td>';
              echo '<td>'.$row->receivedBy.'</td>';
              
              echo '<td>'.$row->forwardTo.'</td>';
              echo '<td>'.$row->reason.'</td>';
          // echo '<td>'.$row['action'].'</td>';


              // if($row['action']=='Pending' ){
              //   echo '<td><span class="label label-warning"><font size=2>Pending</font></span></td>';
              // }

              // else{
              //   if($row['actionStatus']=="Final"){

              //     echo '<td><span class="label label-success"><font size=2>'.wordwrap($row['action'],40,'<br>').'</font></span></td>';

              //   }
              //   else{
              //     echo '<td><span class="label label-primary"><font size=2>'.wordwrap($row['action'],40,'<br>').'</font></span></td>';

              //   }


              // }
             ?>
              <td><a class="btn btn-danger" href="<?php echo site_url(); ?>action/reorganize_no?id=<?php echo $row->ID ?>">
                <i class="glyphicon glyphicon-edit icon-white"></i>
                Change User
            </a></td>
              

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
