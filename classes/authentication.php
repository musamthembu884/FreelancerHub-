<?php
session_start();
include('../database/database.php');

class Authentication
{
	//Killa Stuff:)
	
	
	public function LogIn($email, $password)
	{
		$Type = "Null"; //FreeLancer/Customer

		
	
	//Search Through FreeLancers
		$run_freelancer = mysql_query("select * from freelancerprofile WHERE Email='$email' AND Password='$password'");
		
		$Free_counter = 0;
		
		while($row_freelancer = mysql_fetch_array($run_freelancer))
		{
			$Free_counter+=1;
			$FreeLancer_ID = $row_freelancer['Free_ID'];
		}
	//</Search Through FreeLancers>
		
		
		if($Free_counter>0)
		{
			//User Session
			$_SESSION["user"] = $FreeLancer_ID;
			$_SESSION["type"] = "FreeLancer";
			
			$Type = "FreeLancer";
		}
		else //Search Through Customers
		{
			$run_customer = mysql_query("select * from customerprofile WHERE Email='$email' AND Password='$password'");
			
			$customer_counter = 0;
			
			while($row_customer = mysql_fetch_array($run_customer))
			{
				$customer_counter+=1;
				$customer_ID = $row_customer['Cust_ID'];
			}
			
			if($customer_counter>0)
			{
				//User Session
				$_SESSION["user"] = $customer_ID;
				$_SESSION["type"] = "Customer";
				
				$Type = "Customer";
			}
		}
		
		return $Type;
	}
	
	public function Drive($User,$UserType)
	{
		//Create Folders
		
		if($UserType == "FreeLancer")
		{
			//Create Freelancer Folder
			mkdir("../classes/freelancer/".$User);
			mkdir("../classes/freelancer/".$User."/propic");
			mkdir("../classes/freelancer/".$User."/media");
			copy("default.JPG","../classes/freelancer/".$User."/propic/default.JPG");
		}
		else
		{
			//Create Customer Folder
			mkdir("../classes/customer/".$User);
			mkdir("../classes/customer/".$User."/propic");
			mkdir("../classes/customer/".$User."/media");
			copy("default.JPG","../classes/freelancer/".$User."/propic/default.JPG");
		}
	}
	
	public function UpdateRegister($Password,$Name,$Email,$Status,$ProfilePicture,$About,$About2,$About3,$Services,$Skills,$WorkHrs,$Fee,$Province)
	{
		
		$run_query = mysql_query("UPDATE freelancerprofile SET Password='$Password', Name='$Name',Status='$Status',ProfilePicture='$ProfilePicture',About='$About',About2='$About2',About3='$About3',Services='$Services',Skills='$Skills',WorkHrs='$WorkHrs',Fee='$Fee',Province='$Province' WHERE Email='$Email'") or exit(mysql_error());
		
	}
	
	public function Register($Type,$G_FullName,$G_Email,$G_Password,$G_StreetAddress,$G_Town,$G_Province,$G_ContactNo,$G_WorkType,$G_Description,$G_VerifyStatus,$G_ProfilePic,$G_Interests,$About,$About2,$About3,$Services,$Skills,$WorkHrs,$Fee)
	{
		$flag = "False"; //Boolean
		
		if($Type == "FreeLancer")
		{
			
			/*$run_query = mysql_query("insert into freelancerprofile(FullName,Email,Password,StreetAddress,Town,Province,ContactNo,WorkType,Description,VerifyStatus,ProfilePic) values ('$G_FullName','$G_Email','$G_Password','$G_StreetAddress','$G_Town','$G_Province','$G_ContactNo','$G_WorkType','$G_Description','$G_VerifyStatus','$G_ProfilePic')") or exit(mysql_error());*/
			$run_query = mysql_query("INSERT into freelancerprofile(Password,Name,Email,Status,ProfilePicture,About,About2,About3,Services,Skills,WorkHrs,Fee,Province) VALUES('$G_Password','$G_FullName','$G_Email','$G_VerifyStatus','$G_ProfilePic','$About','$About2','$About3','$Services','$Skills','$WorkHrs','$Fee','$G_Province')") or exit(mysql_error());
			
			$this->Drive($G_Email,"FreeLancer");
			$flag="True";
		}
		elseif($Type == "Customer")
		{
			
			/*$run_query = mysql_query("insert into customerprofile(FullName,Email,Password,StreetAddress,Town,Province,ContactNo,Interests,ProPicture) values ('$G_FullName','$G_Email','$G_Password','$G_StreetAddress','$G_Town','$G_Province','$G_ContactNo','$G_Interests','$G_ProfilePic'");*/
			
			$run_query = mysql_query("insert into customerprofile(FullName,Email,Password,StreetAddress,Town,Province,ContactNo,Interests,ProPicture) values ('$G_FullName','$G_Email','$G_Password','$G_StreetAddress','$G_Town','$G_Province','$G_ContactNo','$G_Interests','$G_ProfilePic')") or exit(mysql_error());
			
			$this->Drive($G_Email,"Customer");
			$flag="True";
		}
		else
		{
			$flag="False";
		}
		
		return $flag;
	}
	
	
	
}
?>