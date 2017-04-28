<?php
include('../classes/timeline.php');
include("../database/database.php");

if(isset($_GET['PostID']))
{
	$Timeline = new Timeline();
	$ID = $_GET['PostID'];
	
	$Timeline->deletepost($ID);
	
	echo"
	<script>
	
		window.location.replace('../myfreelancerprofile.php');

	</script>";
	
	
}


?>