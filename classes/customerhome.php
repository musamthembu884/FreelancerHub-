<?php
include("freelancer.php");
include("notification.php");
include("database/database.php");

class CustomerHome
{
	//REAL STUFF:(
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: Interesting_Freelancers Array
	public function InterestingFreelancers($num_freelancers)
	{
		$Interesting_Freelancers = array(); //Fill this array with interesting freelancers
		
		$freelancers ="select * from freelancerprofile order by RAND() limit $num_freelancers";
		$freelancer_query=mysql_query($freelancers);
		
		while($freelancer_row=mysql_fetch_array($freelancer_query))
		{
		//	$counter=0;
			$F_ID= $freelancer_row['Free_ID'];
			$F_FullName = $freelancer_row['FullName'];
			$F_Province = $freelancer_row['Province'];
			$F_email= $freelancer_row['Email'];
			$F_Password= $freelancer_row['Password'];
			$F_Street= $freelancer_row['StreetAddress'];
			$F_Town= $freelancer_row['Town'];
			$F_worktype= $freelancer_row['WorkType'];
			$F_Descrip= $freelancer_row['Description'];
			$F_ContactNo= $freelancer_row['ContactNo'];
			$F_proPic= $freelancer_row['ProfilePic'];
			$F_Status= $freelancer_row['VerifyStatus'];
			
	 	   $Interesting_Freelancers[] = new Freelancer($F_ID,$F_FullName,null,null,null,null,null,null,null,
		   null,null,$F_proPic,null);    		
 		}	
		return $Interesting_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: MostRanked_Freelancers Array
	public function MostRankedFreelancers($num_freelancers)
	{
	
	$MostRanked_Freelancers = array(); //Fill this array with Most Ranked Freelancers	
	
		$get_Free= "select freelancerprofile.Free_id,freelancerprofile.FullName,freelancerprofile.ProfilePic,
	   freelancerprofile.Province,freelancerprofile.WorkType,postwork.Free_ID from freelancerprofile,postwork where      
	   postwork.Free_ID =freelancerprofile.Free_ID order by Rand() limit $num_freelancers"; 
		$Most_Query = mysql_query($get_Free);
		while($row_Most = mysql_fetch_array($Most_Query)){
			
		$MostRanked_Freelancers[] = new Freelancer($row_Most['Free_ID'],$row_Most['FullName'],null,null,null,null,
		$row_Most['Province'],null,null,$row_Most['WorkType'],null,$row_Most['ProfilePic'],null);
	   }
		return $MostRanked_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers location
	//@return: FreelancersInLocation Array
	public function FreelancersInLocation($num_freelancers,$customerID)
	{
		$FreelancersIn_Location = array(); //Fill this array with Freelancers In my current Location
		
		$locate_Freelancer = "select freelancerprofile.Free_ID, freelancerprofile.FullName, freelancerprofile.Province ,
		  freelancerprofile.WorkType,freelancerprofile.Province, freelancerprofile.ProfilePic,customerprofile.Cust_ID,
		  customerprofile.Province from freelancerprofile,customerprofile where 
		  freelancerprofile.Province = customerprofile.Province AND '". $customerID."' = customerprofile.Cust_ID  
		  limit 0,$num_freelancers";
		 
		  $Locate_query = mysql_query($locate_Freelancer);
		  
		  while($row_Location=mysql_fetch_array($Locate_query))
		  {
               $FreelancersIn_Location[] = new Freelancer($row_Location['Free_ID'],$row_Location['FullName'],null,null,null,
			   null,$row_Location['Province'],null,null,$row_Location['WorkType'],null,$row_Location['ProfilePic'],null);			  	  }
		return $FreelancersIn_Location;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//TIP: use freelancer's date to know if he's a new freelancer
	//@return: DiscoverNewFreelancers Array
	public function DiscoverNewFreelancers($num_freelancers)
	{
		  $DiscoverNew_Freelancers = array(); //Fill this array with New Freelancers
		  $NewFreeLancer = "SELECT * FROM freelancerprofile ORDER BY freelancerprofile.Free_ID DESC limit 0,$num_freelancers";
		  $Query_newFreelancer= mysql_query($NewFreeLancer); 
		  
		  while($row_NewFreelancer = mysql_fetch_array($Query_newFreelancer))
		  {
              $DiscoverNew_Freelancers[] = new Freelancer($row_NewFreelancer['Free_ID'],$row_NewFreelancer['FullName'],null,null,              null,null,$row_NewFreelancer['Province'],null,null,$row_NewFreelancer['WorkType'],null,
		      $row_NewFreelancer['ProfilePic'],null);     			  
		  }
			
		return $DiscoverNew_Freelancers;
	}
	
	//@return: Categories array
	public function loadCategories($Cat_ID)
	{
		$Categories = array(); //Fill this array with Categories
		
		$get_category = "select freelancerprofile.FullName,freelancerprofile.Cat_ID,category.Cat_ID,category.Name from  
		freelancerprofile,category where freelancerprofile.Cat_ID = '".$Cat_ID."'  AND '".$Cat_ID."' = category.Cat_ID "  ;
		
		$run_category = mysql_query($get_category);
		
		while($row_category = mysql_fetch_array($run_category))
		{
		  /* $Categories [] = $row_category['category.Name'];
		   echo " Category: ".$row_category['category.Name'].""; */  	
		}
				
		//Code here
		
		return $Categories;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: Recommended_Freelancers Array
	public function RecommendedFreelancers($num_freelancers)
	{
		$Recommended_Freelancers = array(); //Fill this array with Recommended Freelancers
	   	
		$getRecommended = "select * from freelancerprofile,customerprofile where freelancerprofile.WorkType =              
		customerprofile.Interests ";
		
		$run_query= mysql_query($getRecommended);
	  $counter=0;	
		while($Recommended_row = mysql_fetch_array($run_query))
		{
			/*$get_int = "select customerprofile.Interests from customerprofile";
			$run_int= mysql_query($get_int);
	
			while($row_int = mysql_fetch_array($run_int))
			
	           $customer_interest[] = $row_int;
			   echo "$customer_interest[$counter]";             		
     			$counter++;
			}*/
	
	        $Recommended_Freelancers[] = new Freelancer($Recommended_row['Free_ID'],$Recommended_row['FullName'],null,null,              null,null,null,null,null,$Recommended_row['WorkType'],null,
		      $Recommended_row['ProfilePic'],null);	     
		}
		
		return $Recommended_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers notifications from DB
	//@return: Notifications Array
	public function Notifications($customerID)
	{
		$Notify = array(); //Fill this array with Customer's Notifications
		$counter = 0;
		$get_not = "select * Notifications";
		$run_not = mysql_query($get_not);
		
		while($not_row = mysql_fetch_array($run_not)){
			
		//Code here
		
		$not_ID = $not_row["Notify_ID"];
		$not_title = $not_row["Title"];
		$not_msg = $not_row["Message"];
		
		$Notify[$counter] = new Notification($not_title,$not_msg);
		$counter++;
		
		}
		return $Notify;
	}
	
	//@par 'customerID': this is the customer who's following/connecting a freelancer
	//@par 'freelancerID': this is the freelancer being followed/connected by a customer
	//@return: void
	public function ConnectWithFreelacer($customerID,$freelancerID)
	{
		
	}
}


?>