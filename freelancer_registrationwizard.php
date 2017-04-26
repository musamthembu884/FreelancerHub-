<!DOCTYPE html>
<html lang="en" class="coming-soon">
<head>
    <meta charset="utf-8">
    <title>FreeLancer Hub</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="author" content="KaijuThemes">

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
        
        
 <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                           
                          
                            <div class="container-fluid">
                                



	<div class="row">
	<a href="#" class="login-logo"><img src="assets/img/logo-dark.png"></a>
	    <div class="col-md-6 col-md-offset-3">

			

			<div class="panel panel-info" data-widget='{"draggable": "false"}'>
				<div style="background-color:#42a5f5" class="panel-heading">
					<h2 style="color:white">Registration Wizard</h2>
				
				</div>
				<div class="panel-body">
					<?php
					if(isset($_GET['Name']))
						{
							$FullName = $_GET['Name'];
							$Email = $_GET['Email'];
							$Cat = $_GET['Cat'];
						}
							
					?>
					<form action="freelancer_registrationwizard.php?<?php echo"Name=".$FullName."&Email=".$Email."&Cat=".$Cat ?>" method="post" id="wizard" class="form-horizontal">
						<fieldset title="Step 1">
							<legend>Personal Address</legend>
							<div class="form-group">
											<label for="form-password" class="col-sm-2 control-label">Street</label>
											<div class="col-sm-8 tabular-border">
												<input type="text" id="Street" name="Street" class="form-control" id="form-password" placeholder="Street">
											</div>
										</div>
										<div class="form-group">
											<label for="form-confirmpass" class="col-sm-2 control-label">City</label>
											<div class="col-sm-8 tabular-border">
												<input type="text" id="City" name="City" class="form-control" id="form-confirmpass" placeholder="City">
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Province</label>
											<div class="col-sm-8 tabular-border"><select name="selector1" id="selector1" class="form-control">
												
												<option value="null">Select Province</option>
												<option value="Eastern Cape">Eastern Cape</option>
												<option value="Free State">Free State</option>
												<option value="Gauteng">Gauteng</option>
												<option value="KwaZulu-Natal">KwaZulu-Natal</option>
												<option value="Limpopo">Limpopo</option>
												<option value="Mpumalanga">Mpumalanga</option>
												<option value="Northern Cape">Northern Cape</option>
												<option value="Western Cape">Western Cape</option>
												<option value="North West">North West</option>
												
								
											</select></div>
										</div>
						</fieldset>
						<fieldset title="Step 2">
							<legend>Personal Description</legend>
							<div class="form-group">
											<label class="col-sm-2 control-label">Biography</label>
											<div class="col-sm-8">
												<textarea class="form-control fullscreen" id="Biography" name="Biography"></textarea>
											</div>
										</div>
							<div class="form-group">
											<label for="form-confirmpass" class="col-sm-2 control-label">Services/Work</label>
											<div class="col-sm-8 tabular-border">
												<input type="text" class="form-control" id="Work" name="Work" placeholder="Services/Work">
											</div>
										</div>
										<div class="form-group">
											<label for="selector1" class="col-sm-2 control-label">Services Category</label>
											<div class="col-sm-8 tabular-border"><select name="Category" id="Category" class="form-control">
												
												<option value='null'>Select Category</option>
												<option value='IT'>IT</option>
												<?php
												include("classes/customerhome.php");
												
												$category = new CustomerHome();
												$cats = array();
												$cats = $category->loadCategories();
												
												
												for($k=0; $k<count($cats); $k++)
												{
													echo"<option value='$cats[$k]'>$cats[$k]</option>";
												}
												?>
												
										
											</select></div>
										</div>
										<div class="form-group">
											<label for="radio" class="col-sm-2 control-label">Gender</label>
											<div class="col-sm-8 tabular-border">
												<div class="radio"><label><input type="radio" name="gender"> Male</label></div>
												<div class="radio"><label><input type="radio" name="gender"> Female</label></div>
											</div>
										</div>
						</fieldset>
						<fieldset title="Step 3">
							<legend>Terms and Conditions</legend>
							<div class="form-group">
								<label for="" class="col-md-3 control-label">Terms and Conditions</label>
								<div class="col-md-9">
									<p>Welcome to the registration to FreeLancerHub website and its related services. You may access many areas of our website when registering your details with us. Certain areas are only open to you if you register. The terms and conditions which govern material submitted by you to us and your use of the FreeLancerHub website are governed by our general "Terms and Conditions of Reading". These Terms and Conditions of Registration are in addition to the general Terms and Conditions of Reading.</p>
								</div>
							</div>
						</fieldset>
						<input type="submit" class="finish btn-success btn" value="Submit" />
					</form>
					
					<?php
		
						
								if(isset($_POST['Street']))
								{
									if(isset($_GET['Name']))
									{
										$FullName = $_GET['Name'];
										$Email = $_GET['Email'];
										$Cat = $_GET['Cat'];
									}
									
									$Street = $_POST['Street'];
									$City = $_POST['City'];
									$Province = $_POST['selector1'];
									$Biography = $_POST['Biography'];
									$Work = $_POST['Work'];
									$Category = $_POST['Category'];
									
									echo"
									
									<script>
									
										window.location.replace('bridge/register.php?Name=$FullName&Email=$Email&Cat=$Cat&Street=$Street&City=$City&Province=$Province&Biography=$Biography&Work=$Work&Category=$Category&Gender=Male');

									</script>";
									//echo "Street: ".$Street." Name: ".$FullName;
								}
							
							
						//}
					?>
					
					
				</div>
			</div>


	    </div>
	</div>


                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2016 KaijuThemes</h6></li>
        </ul>
    </div>
</footer>

                </div>
                <div class="extrabar-underlay"></div>
            </div>
        </div>

    
    
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->
<script src="assets/plugins/form-validation/jquery.validate.min.js"></script>  					<!-- Validate Plugin -->
<script src="assets/plugins/form-stepy/jquery.stepy.js"></script>  								<!-- Stepy Plugin -->

<script src="assets/demo/demo-formwizard.js"></script>

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
<script src="assets/plugins/form-validation/jquery.validate.min.js"></script>  					<!-- Validate Plugin -->
<script src="assets/plugins/form-stepy/jquery.stepy.js"></script>  								<!-- Stepy Plugin -->

<script src="assets/demo/demo-formwizard.js"></script>
<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    
    <!-- End loading page level scripts-->
    </body>
</html>