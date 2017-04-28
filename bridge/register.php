<?php

include("../classes/authentication.php");
//echo"R: ".$_SESSION["Password"];
if(isset($_GET['Name']))
{
	$FullName = $_GET['Name'];
	$Email = $_GET['Email'];
	//$Password = $_SESSION['Password'];
	$Cat = $_GET['Cat'];
	$Street = $_GET['Street'];
	$City = $_GET['City'];
	$Province = $_GET['Province'];
	$Biography = $_GET['Biography'];
	$Work = $_GET['Work'];
	$Category = $_GET['Category'];
	$ContactNO = $_GET['ContactNO'];
	$Specialty = $_GET['Specialty'];
	
	
	
	$auth = new Authentication();
	
	if($auth->Register($Cat,$FullName,$Email,$_SESSION['Password'],$Street,$City,$Province,$ContactNO,$Work,$Biography,"False","default.jpg",$Specialty) == "True")
	{
	
		echo"
		<script>
		
			window.location.replace('../login.php');

		</script>";
	
	}
	
	
	
}

	



?>