
<?php
session_start();
?>
<?php
include('../classes/customerhome.php');
include("../database/database.php");

if(isset($_GET['FreeID']))
{
	$FreeID = $_GET['FreeID'];
	$customerhome = new CustomerHome();
	$customerhome->doConnections($_SESSION['user'],$FreeID);
	
	echo"
	<script>
	
		window.location.replace('../customerhome.php');

	</script>";
}

?>