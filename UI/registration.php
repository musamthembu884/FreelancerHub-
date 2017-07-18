<?php
session_start();
?>
<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8">
    <title>FreeLancer Hub</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">
<script src='https://www.google.com/recaptcha/api.js'></script>
    <link type='text/css' href='http://fonts.googleapis.com/css?family=Roboto:300,400,400italic,500' rel='stylesheet'>
    <link type='text/css'  href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet"> 
    <link href="assets/plugins/progress-skylo/skylo.css" type="text/css" rel="stylesheet">                   <!-- Skylo -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="assets/fonts/font-awesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="assets/css/styles.css" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
    </head>

    <body class="focused-form animated-content">
        <?php
		
		if(isset($_GET['FieldError']))
		{
			echo
			"
				<div class='alert alert-dismissable alert-danger' style='visibility: visible; opacity: 1; display: block; transform: translateY(0px);'>
						<i class='fa fa-close'></i>&nbsp; <strong>Oh snap!</strong> Please Select Type of User!
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
					</div>
			
			";
		}
		
		if(isset($_GET['PasswordNotMatch']))
		{
			echo
			"
				<div class='alert alert-dismissable alert-danger' style='visibility: visible; opacity: 1; display: block; transform: translateY(0px);'>
						<i class='fa fa-close'></i>&nbsp; <strong>Oh snap!</strong> Password not matching!
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
					</div>
			
			";
		}
		
	?>
        
<div class="container" id="registration-form">
	<a href="#" class="login-logo"><img src="assets/img/logo-dark.png"></a>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div style="background-color:#42a5f5" class="panel-heading">
					<h2 style="color:white" >Registration Form</h2>
				</div>
				<div class="panel-body">
					<form action="registration.php" method="post" class="form-horizontal">
						<div class="form-group mb-md">
	                        <div class="col-xs-8 col-xs-offset-2">
	                        	<input type="text" class="form-control" name="FullName" id="FullName" placeholder="Full Name" required>
	                        </div>
	                       
						</div>
						
						<div class="form-group mb-md">
	                        <div class="col-xs-8 col-xs-offset-2">
	                        	<input type="text" class="form-control" name="Email" id="Email" placeholder="Email" required>
	                        </div>
						</div>
						<div class="form-group mb-md">
	                        <div class="col-xs-8 col-xs-offset-2">
	                        	<input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
	                        </div>
						</div>
						<div class="form-group mb-md">
	                        <div class="col-xs-8 col-xs-offset-2">
	                        	<input type="password" class="form-control" name="ConfirmPassword" id="ConfirmPassword" placeholder="Confirm Password" required>
	                        </div>
						</div>
						<div class="form-group">
											 <div class="col-xs-8 col-xs-offset-2">
											<select name="selector1" id="selector1" class="form-control">
												
												<option value="null">Register As:</option>
												<option value="FreeLancer">Freelancer</option>
												<option value="Customer">Customer</option>
												
											</select></div>
										<span class="material-input"></span></div>
						<div class="form-group mb-n">
							<div class="col-xs-offset-2 col-xs-8">
								<div class="g-recaptcha" data-sitekey="6Lc1jykUAAAAAExN5ORwKGLLoxArVoqAV2Wt4PFr"></div>
				
							</div>
						</div>
						<div class="panel-footer">
                         
					<div class="clearfix">
						<a href="login.php" class="btn btn-default pull-left">Already Registered? Login</a>
						<button disabled id="submit" name="submit" class="btn-raised btn-primary btn pull-right">Register</button>
					</div>
                   
				</div>
                	</form>
					
					
					<?php
					
					if(isset($_POST['FullName']))
					{
						$FullName = $_POST['FullName'];	
						$Email = $_POST['Email'];
						$Password = $_POST['Password'];
						$ConfirmPassword = $_POST['ConfirmPassword'];
						$cat = $_POST['selector1'];	
						
						//Validation
						if($Password == $ConfirmPassword)
						{
							if($cat == "FreeLancer")
							{
								$_SESSION["Password"] = $Password;
								
								echo"
								
								<script>
								
									window.location.replace('bridge/register.php?Name=$FullName&Email=$Email&Cat=$cat');

								</script>";
							}
							elseif($cat == "Customer")
							{
								$_SESSION["Password"] = $Password;
								echo"
								<script>
								
									window.location.replace('customer_registrationwizard.php?Name=$FullName&Email=$Email&Cat=$cat');

								</script>";
							}
							else
							{
								echo"
								<script>
								
									window.location.replace('registration.php?FieldError');

								</script>";
							}
						}
						else
						{
							echo"
								<script>
								
									window.location.replace('registration.php?PasswordNotMatch');

								</script>";
						}
					}
					
					?>
					
				</div>
				
			</div>
		</div>
	</div>
</div>

    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script src="assets/plugins/progress-skylo/skylo.js"></script> 		<!-- Skylo -->

<script src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->

<script src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script src="assets/plugins/dropdown.js/jquery.dropdown.js"></script> <!-- Fancy Dropdowns -->
<script src="assets/plugins/bootstrap-material-design/js/material.min.js"></script> <!-- Bootstrap Material -->
<script src="assets/plugins/bootstrap-material-design/js/ripples.min.js"></script> <!-- Bootstrap Material -->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    
    <!-- End loading page level scripts-->
    </body>
</html>