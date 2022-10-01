<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!$_SESSION['uname']){
  redirect('home','refresh');
}
?>
<!doctype html>
<html lang="en">
<head>

  <title>Letter Management Dashboard</title> 

  <!-- favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assests/images/favicon.ico">
  <!-- normalize.css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/normalize.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/animate.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/bootstrap.min.css">
  <!-- Jquery UI  -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/jquery-ui-1.12.0/jquery-ui.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/style1.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/dataTable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assests/css/sweetalert2.min.css">

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assests/js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url(); ?>assests/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assests/jquery-ui-1.12.0/jquery-ui.min.js"></script>
  <script src="<?php echo base_url(); ?>assests/js/dataTable.js"></script>
  <script src="<?php echo base_url(); ?>assests/js/sweetalert2.all.min.js"></script>



</head>
<style>
  #bdm{
    padding-top:50px;
  }
</style>
<body class="backgr" >
 <!-- header section starts -->
 <header role="banner" id="asc-header">
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span><img src="<?php echo base_url(); ?>assests/images/lanka-state-logo copy1.png" alt="Lanka State Logo">Department of Census and Statistics</span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a href="<?php echo site_url(); ?>dashboard">Home <span class="sr-only">(current)</span></a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $user=$_SESSION["uname"]; ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">

              <li><a href="<?php echo base_url(); ?>/home/logout">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</header>
<!-- header section ends -->

<div class="container-fluid backgr">

  <div class="col-md-2">
    <!-- Left -->
    <h3><strong><i class="glyphicon glyphicon-wrench"></i> Tools</strong></h3>  

    <hr>
    <ul class="nav nav-pills nav-stacked">
      <li class="nav-header"></li>
      <li class="active"><a href="<?php echo site_url(); ?>dashboard" title="The Bootstrap Playground">Home</a></li>
      <li><a href="<?php echo site_url(); ?>dashboard#" id="link1">Profile Management</a></li>
      <li class="divider"></li>
      <li><a href="#" title="Bootstrap 3 Panel" id="link2">Letter Management</a></li>
      <li><a href="#" title="Bootstrap 3 Icons" id="link3">Reports</a></li>
      <li><a href="<?php echo site_url(); ?>action/reorganize" title="Bootstrap 3 Icons" id="link3">Reorganize Letter Numbers</a></li>
      <!-- <li><a href="<?php echo base_url(); ?>/home/logout">Logout</a></li> -->
    </ul>
  </div>