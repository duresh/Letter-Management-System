<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


  <!-- /span-3 -->
  <script>
    $(document).ready(function(){
      $("#reportMgt").hide();
      $("#reportMgt1").hide();
      $("#profileMgt1").hide();
      $("#profileMgt").hide();
      $("#letterMgt").show(500);

      $("#link1").click(function(){
        $("#profileMgt1").show(500);
        $("#profileMgt").show(500);
        $("#letterMgt").hide(50);
        $("#letterMgt1").hide();
        $("#reportMgt").hide();
        $("#reportMgt1").hide();
      });
      $("#link2").click(function(){
        $("#profileMgt1").hide();
        $("#profileMgt").hide();
        $("#letterMgt").show(500);
        $("#letterMgt1").show(500);
        $("#reportMgt").hide();
        $("#reportMgt1").hide();
      });
      $("#link3").click(function(){
        $("#profileMgt1").hide();
        $("#profileMgt").hide();
        $("#letterMgt").hide();
        $("#letterMgt1").hide();
        $("#reportMgt").show(500);
        $("#reportMgt1").show(500);
      });
    });
  </script>
  <div class="col-md-10 bdm " id="bdm">

    <h3 id="profileMgt1">Basic Profile Management</h3>
    <div class="row table-bordered table-responsive tbl col-lg-12" id="profileMgt" style="padding-top:20px;">
      <div class="col-xs-4 col-md-2">
        <div class="thumbnail">
          <a href="<?php echo site_url(); ?>home/register"> <img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/add_user.png" alt="..." >
            <div class="caption">
              <h4 class="text-center">Create Users</h4></a>

            </div>
          </div>
        </div>

        <div class="col-xs-4 col-md-2">
          <div class="thumbnail">
            <a href="<?php echo site_url(); ?>home/edituser"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/edit_user.png" alt="...">
              <div class="caption">
                <h4 class="text-center">Edit Users</h4></a>

              </div>
            </div>
          </div>

          <div class="col-xs-4 col-md-2">
            <div class="thumbnail">
              <a href="<?php echo site_url(); ?>home/deleteusers"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/delete_user.png" alt="...">
                <div class="caption">
                  <h4 class="text-center">Delete Users</h4></a>

                </div>
              </div>
            </div>



            <div class="col-xs-4 col-md-2 text- center">
              <div class="thumbnail">
                <a href="<?php echo site_url(); ?>dashboard/user_report"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/diagram.png" alt="...">
                  <div class="caption">
                    <h4 class="text-center">User Reports</h4></a>

                  </div>
                </div>
              </div>
            </div>

            <!--2nd row-->
            <h3 id="letterMgt1">Letter Management</h3>
            <div class="row table-bordered tbl" id="letterMgt" style="padding-top:20px;">

              <div class="col-xs-4 col-md-2">
                <div class="thumbnail">
                  <a href="<?php echo site_url(); ?>letters"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/letter.png" alt="...">
                    <div class="caption">
                      <h4 class="text-center">Input Details</h4></a>

                    </div>
                  </div>
                </div>

                <div class="row">  
                  <div class="col-xs-4 col-md-2">
                    <div class="thumbnail">
                      <a href="<?php echo site_url(); ?>action/action_taken"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/action.png" alt="...">
                        <div class="caption">
                          <h4 class="text-center">Actions Taken</h4></a>


                        </div>
                      </div>
                    </div>




                    <div class="col-xs-4 col-md-2 col-lg-2">
                      <div class="thumbnail">
                       <a href="<?php echo site_url(); ?>action/letter_report"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/chart.png" alt="...">
                        <div class="caption">
                          <h4 class="text-center">Letter Reports</h4></a>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--3rd row-->
                <h3 id="reportMgt1">View Reports</h3>
                <div class="row table-bordered tbl" id="reportMgt" style="padding-top:20px;">
                  <div class="col-xs-4 col-md-2">
                    <div class="thumbnail">
                     <a href="<?php echo site_url(); ?>action/letter_report2"> <img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/all.png" alt="...">
                      <div class="caption">
                        <h4 class="text-center">Recieved Letters </h4></a>

                      </div>
                    </div>
                  </div>



                  <div class="col-xs-4 col-md-2">
                    <div class="thumbnail">
                      <a href="<?php echo site_url(); ?>action/action_complete"><img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/taken.png" alt="...">
                        <div class="caption">
                          <h4 class="text-center">Action Taken </h4></a>

                        </div>
                      </div>
                    </div>

                    <div class="col-xs-4 col-md-2 text- center">
                      <div class="thumbnail">
                        <a href="<?php echo site_url(); ?>action/action_pending"> <img data-src="holder.js/300x300" src="http://engineerscirclegampaha.org/scripts/images/pending.png" alt="...">
                          <div class="caption">
                            <h4 class="text-center">Action Pending</h4></a>

                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
                