<?php

include("../classes/authentication.php");
//echo"R: ".$_SESSION["Password"];
if(isset($_GET['Name']))
{
	$FullName = $_GET['Name'];
	$Email = $_GET['Email'];
	//$Password = $_SESSION['Password'];
	$Cat = $_GET['Cat'];
	
	
	
	
	
	$auth = new Authentication();
	
	$_SESSION['Email'] = $Email;
	
	if($auth->Register($Cat,$FullName,$Email,$_SESSION["Password"],"","","","","","","Not Active","default.jpg","","","","","","","","") == "True")
	{
	
		echo"
		<script>
		
			window.location.replace('../fsettings.php?CompleteR');

		</script>";
	
	}
	
	
	
}

	



?>