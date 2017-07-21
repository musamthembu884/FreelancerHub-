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
<link href="assets/plugins/form-daterangepicker/daterangepicker-bs3.css" type="text/css" rel="stylesheet">    <!-- DateRangePicker -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries. Placeholdr.js enables the placeholder attribute -->
    <!--[if lt IE 9]>
        <link href="assets/css/ie8.css" type="text/css" rel="stylesheet">
        <script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- The following CSS are included as plugins and can be removed if unused-->
    
    </head>

    <body class="focused-form animated-content">
        <?php
		
		
			echo
			"
				<div class='alert alert-dismissable alert-info' style='visibility: visible; opacity: 1; display: block; transform: translateY(0px);'>
						<i class='fa fa-info'></i>&nbsp; <strong>Almost Ready!</strong> Welcome back to FreelancerHub! Please complete your registration.
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
					</div>
			
			";
		
		
		ini_set("allow_url_fopen", 1);
        $json = file_get_contents('http://localhost/freelancer_hub2.0/freelancerhub/public/index.php/api/customerhome/Categories');
        $JSONArray = json_decode($json,true);
	    ?>

	
	
        
<div class="container" id="registration-form">
	<a href="#" class="login-logo"><img src="assets/img/logo-dark.png"></a>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div style="background-color:#42a5f5" class="panel-heading">
					<h2 style="color:white" >Registration Form</h2>
				</div>
				<div class="panel-body">

				

					<form action="http://localhost/freelancer_hub2.0/freelancerhub/public/index.php/api/authentication/Freelancer/update/<?php echo $_SESSION["User"]["ID"]?>" method="post" class="form-horizontal">
						
						
						<div class="form-group is-empty">
							<label for="form-password" class="col-sm-2 control-label">Profession</label>
							<div class="col-sm-8 tabular-border">
								<input required type="text" name="Profession" id="Profession" placeholder="EXAMPLE: Front-End Web Design" class="form-control tooltips" data-trigger="hover" >
								
							</div>
							<div class="col-sm-2"><p class="help-block">Your day to day occupation</p></div>
						<span class="material-input"></span></div>

						<div class="form-group">
						<label for="form-password" class="col-sm-2 control-label">Category</label>
											 <div class="col-sm-8 tabular-border">
											<select required name="Category" id="Category" class="form-control"  required>
												
												<option value="">Choose Category</option>
						

												<?php
													for($k=0; $k<count($JSONArray); $k++)
													{
														echo"
														<option value='".$JSONArray[$k]['Name']."'>".$JSONArray[$k]['Name']."</option>
														";
													}
													
												?>
												
											</select></div>
											<div class="col-sm-2"><p class="help-block">Choose a category that best fits your Profession</p></div>
										<span class="material-input"></span></div>
						
						<div class="form-group is-empty">
							<label for="form-password" class="col-sm-2 control-label">Skills</label>
							<div class="col-sm-8 tabular-border">
								<input required type="text" name="Skills" id="Skills" placeholder="EXAMPLE: Photoshop, Illustrator, Paint, Sketch" class="form-control tooltips" data-trigger="hover">
								
							</div>
							<div class="col-sm-2"><p class="help-block">Separate your skills with commas</p></div>
						<span class="material-input"></span></div>
                       
						<div class="form-group">
					<label class="col-sm-2 control-label">About Me</label>
					<div class="col-sm-8">
						<textarea required name="AboutMe" id="AboutMe" class="form-control autosize" style=" word-wrap: break-word; height: 106px;"  placeholder="Award winning front-end developer with more than 8+ years experience building pixel perfect websites. Recent contributor to Smashing Magazine. Nominated for a Webby and AGDA design award with portfolio featured on Awwwards as Site of the Day." class="form-control tooltips" data-trigger="hover" data-original-title="Seperate your skills with commas"></textarea>
					</div>
					<div class="col-sm-2"><p class="help-block">Tell your clients about yourself</p></div>
				<span class="material-input"></span></div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Why Hire Me</label>
					<div class="col-sm-8">
						<textarea required name="WhyHireMe" id="WhyHireMe" class="form-control autosize" style=" word-wrap: break-word; height: 106px;"  placeholder="Flexible in working environments having positioned for startups, digital agencies, and fortune 500 companies. Focused on helping agile teams with UI development for large scale CMS websites or client-side web apps." ></textarea>
					</div>
					<div class="col-sm-2"><p class="help-block">Tell your clients why you are the best choice for their services</p></div>
				<span class="material-input"></span></div>

				<div class="form-group">
					<label class="col-sm-2 control-label">Professional Overview</label>
					<div class="col-sm-8">
						<textarea required name="ProfessionalOverview" id="ProfessinalOverview" class="form-control autosize" style=" word-wrap: break-word; height: 106px;"  placeholder="At Dariel, I Worked with digital agencies, startups, and companies on projects ranging from web design, Wordpress theme development, front-end maintenance, SEO, and more"></textarea>
					</div>
					<div class="col-sm-2"><p class="help-block">Provide a brief professinal overview</p></div>
				<span class="material-input"></span></div>

				<div class="form-group">
				<label for="form-password" class="col-sm-2 control-label">Availability</label>
				<div class="col-sm-8 tabular-border">
				<select required name="Availability" id="Availability" class="form-control"  required>

				<option value="">Choose Availability</option>

				

				<?php
				$JSONArray = array("Less than 30 Hours/week","More than 30 Hours/week","All the time");
				for($k=0; $k<count($JSONArray); $k++)
				{
				echo"
				<option value='".$JSONArray[$k]."'>".$JSONArray[$k]."</option>
				";
				}

				?>

				</select></div>
				<div class="col-sm-2"><p class="help-block">How many hours do you have available for work each week</p></div>
				<span class="material-input"></span></div>

				<div class="form-group is-empty">
					<label for="form-password" class="col-sm-2 control-label">Fee</label>
					<div class="col-sm-2 tabular-border">
					
					<input required type="text" name="Fee" id="Fee" placeholder="85" class="form-control tooltips" data-trigger="hover" >
						
					</div>
					<div class="col-sm-2"><p class="help-block">Set your hourly rate in ZAR currency</p></div>
				<span class="material-input"></span></div>

				<div class="form-group is-empty">
					<label for="form-password" class="col-sm-2 control-label">Languages</label>
					<div class="col-sm-8 tabular-border">
					
					<input required type="text" name="Languages" id="Languages" placeholder="EXAMPLE: English, Afrikaans, Zulu" class="form-control tooltips" data-trigger="hover" >
						
					</div>
					<div class="col-sm-2"><p class="help-block">Separate your languages with commas</p></div>
				<span class="material-input"></span></div>
				
					
					<input type="hidden" name="AccountType"	 value="<?php echo $_SESSION["User"]["AccountType"]?>">
					<input type="hidden" name="FullName" 	 value="<?php echo $_SESSION["User"]["FullName"]?>">
					<input type="hidden" name="Email" 		 value="<?php echo $_SESSION["User"]["Email"]?>">
					<input type="hidden" name="Password" 	 value="<?php echo $_SESSION["User"]["Password"]?>">
					<input type="hidden" name="DOB" 		 value="<?php echo $_SESSION["User"]["DOB"]?>">
					<input type="hidden" name="Province" 	 value="<?php echo $_SESSION["User"]["Province"]?>">
					<input type="hidden" name="ProfileViews" value="0">
					<input type="hidden" name="ProfilePicture" value="default.png">
					<input type="hidden" name="Status" 		 value="Active">
					
                        <input type="hidden" name="Url" value="/freelancer_hub2.0/freelancerhub/UI/login.php?RegComplete">
						<div class="form-group mb-n">
							<div class="col-xs-offset-2 col-xs-8">
								<!--<div class="g-recaptcha" data-sitekey="6Lc1jykUAAAAAExN5ORwKGLLoxArVoqAV2Wt4PFr" data-callback="enableBtn"></div>-->
				
							</div>
						</div>
						<div class="panel-footer">
                         
					<div class="clearfix">
						<a href="login.php" class="btn btn-default pull-left">Cancel</a>
						<button id="submit" name="submit" class="btn-raised btn-primary btn pull-right">Done</button>
					</div>
                   
				</div>
                
                	</form>


					
                    <script>
                    function enableBtn(){
                        document.getElementById("submit").disabled = false;
                    }
                    </script>
					
					<?php
					
					if(isset($_POST['FullName']))
					{
						$FullName = $_POST['FullName'];	
						$Email = $_POST['Email'];
						$Password = $_POST['Password'];
                        $DOB = date("d M Y"); 
						$Province = $_POST['selectorProvince'];
						$cat = $_POST['selectorType'];	
						
						//Validation
						
							if($cat == "FreeLancer")
							{
								ini_set("allow_url_fopen", 1);
                                $json = file_get_contents('http://localhost/freelancer_hub2.0/freelancerhub/public/index.php/api/authentication/Freelancer/add?AccountType=Freelancer&FullName='.$FullName.'&Email='.$Email.'&Password='.$Password.'&DOB='.$DOB.'&
                                Province='.$Province.'&
                                Profession=null&
                                Category=null&
                                Skills=null&
                                AboutMe=null&
                                WhyHireMe=null&
                                ProfessionalOverview=null&
                                ProfileViews=0&
                                ProfilePicture=default.png');
                                $JSONArray = json_decode($json,true);
							}
							elseif($cat == "Customer")
							{
								ini_set("allow_url_fopen", 1);
                                $json = file_get_contents('http://localhost/freelancer_hub2.0/freelancerhub/public/index.php/api/authentication/Customer/add?AccountType=Customer&FullName='.$FullName.'&Email='.$Email.'&Password='.$Password.'&DOB='.$DOB.'&Province='.$Province.'&ProfilePicture=default.png');
                                $JSONArray = json_decode($json,true);

                               echo $JSONArray[0]['notice'];
							}
							else
							{
								echo"
								<script>
								
									window.location.replace('registration.php?FieldError');

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
<script src="assets/plugins/form-daterangepicker/moment.min.js"></script>              			<!-- Moment.js for Date Range Picker -->

<script src="assets/plugins/form-colorpicker/js/bootstrap-colorpicker.min.js"></script> 			<!-- Color Picker -->

<script src="assets/plugins/form-daterangepicker/daterangepicker.js"></script>     				<!-- Date Range Picker -->
<script src="assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>      			<!-- Datepicker -->
<script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.js"></script>      			<!-- Timepicker -->
<script src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script> <!-- DateTime Picker -->

<script src="assets/js/application.js"></script>
<script src="assets/demo/demo.js"></script>
<script src="assets/demo/demo-switcher.js"></script>

<script src="assets/demo/demo-pickers.js"></script>

<!-- End loading site level scripts -->
    <!-- Load page level scripts-->
    
    <!-- End loading page level scripts-->
    </body>
</html>