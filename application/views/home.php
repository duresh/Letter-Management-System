<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Department of Census and Statistics</title>
		
		<!-- favicon.ico and apple-touch-icon.png in the root directory -->
		<link rel="shortcut icon" href="http://engineerscirclegampaha.org/scripts/images/favicon.ico">
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/sweetalert2.min.css">
		<!-- normalize.css -->
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/normalize.css">
		<!-- Animate.css -->
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/animate.css">
		<!-- Bootstrap  -->
		
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/bootstrap.min.css">
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/bootstrap-dialog.min.css">
		
		<!-- Style -->
		<link rel="stylesheet" href="http://engineerscirclegampaha.org/scripts/css/style.css">
	</head>
	<body>
		
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
						<a class="navbar-brand" href="#"><span><img src="http://engineerscirclegampaha.org/scripts/images/lanka-state-logo copy1.png" alt="Lanka State Logo">Department of Census and Statistics</span></a>
					</div>
					
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!-- header section ends -->
			<!-- starting section 01 -->
			<div id="asc-home" style=" background-image:url(http://engineerscirclegampaha.org/scripts/images/close-up-pen-financial-report-with-window-background.jpg); ">
				<div class="gradient"></div>
				<div class="container-fluid">
					<div class="text-wrap">
						<div class="text-inner">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<img src="http://engineerscirclegampaha.org/scripts/images/logo (1).png" alt="Sri Lanka State Logo">
									<h1 class="to-animate">Department of Census and Statistics</h1>
									<h2>Letter Management System</h2>
									<button type="button" class="btn btn-success btn-lg button" data-toggle="modal" data-target="#login-modal">Login</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end of section 01 -->
		<!-- start of section 02 -->
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
			<div class="modal-dialog">
				<div class="loginmodal-container">
					<h1>Letter Management System</h1><br>
					<?php echo form_open('home/login_process'); ?>
					<input type="text" name="username" id="username" placeholder="Username">
					<input type="password" name="password" id="password" placeholder="Password">
					<input name="id" type="hidden"  value="set" />
					<input type="submit" name="login" id="login" class="login loginmodal-submit" value="Login">
					<?php echo form_close(); ?>
					
					<!-- <div class="login-help">
						<a href="#">Register</a> - <a href="#">Forgot Password</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- end of section 02 -->
		
		
		
		<!-- jQuery -->
		<script src="http://engineerscirclegampaha.org/scripts/js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="http://engineerscirclegampaha.org/scripts/js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="http://engineerscirclegampaha.org/scripts/js/bootstrap.min.js"></script>
		<script src="http://engineerscirclegampaha.org/scripts/js/bootstrap-dialog.min.js"></script>
		<script src="http://engineerscirclegampaha.org/scripts/js/main.js"></script>
		<script src="http://engineerscirclegampaha.org/scripts/js/sweetalert2.all.min.js"></script>
		<!-- IF SUCCESSFUL -->
		<?php if(isset($alert)){ ?>
		<?php   if ($alert == 'success'): ?>
		<script type = "text/javascript">
		Swal.fire(
			  'Good job!',
			  'You are signed in!',
			  'success'
			)
		</script>
		<?php endif; ?>
		<!-- IF FAILED -->
		<?php   if($alert == 'failed'): ?>
		<script type = "text/javascript">
		Swal.fire({
			  icon: 'error',
			  title: 'Oops...',
			  text: 'Incorrect login credentials. Please try again!',
			  // footer: 'If you want to sign in click Login'
			})
		</script>
		<?php endif; ?>
		<?php } ?>
	</body>
</html>