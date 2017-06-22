<?php
include("../classes/authentication.php");

$username = $_POST['username'];
$password = $_POST['password'];	

$auth = new Authentication();
if($auth->login($username,$password) == "FreeLancer")
{
	$_SESSION["Email"] = $username;
	echo"
	<script>
	
		window.location.replace('../fhome.php');

	</script>";
}
elseif($auth->login($username,$password) == "Customer")
{
	$_SESSION["Email"] = $username;
	echo"
	<script>
		
		window.location.replace('../customerhome.php');

	</script>";
}
else
{
	echo"
	<script>
	
		window.location.replace('../login.php?CredError');

	</script>";
}


?>