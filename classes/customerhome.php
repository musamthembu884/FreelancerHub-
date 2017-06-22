<?php
include("freelancer.php");
include("freelancer2.php");
include("notification.php");


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
			$F_FullName = $freelancer_row['Name'];
			$F_Province = $freelancer_row['Province'];
			$F_email= $freelancer_row['Email'];
			$F_Password= $freelancer_row['Password'];
	
			$F_worktype= $freelancer_row['Services'];
	
			$F_proPic= $freelancer_row['ProfilePicture'];
		
			
	 	   $Interesting_Freelancers[] = new Freelancer($F_ID,$F_FullName,$F_email,null,null,null,null,null,null,
		   null,null,$F_proPic,null,$freelancer_row['Views']);    		
 		}	
		return $Interesting_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: MostRanked_Freelancers Array
	public function MostRankedFreelancers($num_freelancers)
	{
	
	$MostRanked_Freelancers = array(); //Fill this array with Most Ranked Freelancers	
	
		$get_Free= "select * FROM freelancerprofile order by Views DESC limit 0,$num_freelancers";
		$Most_Query = mysql_query($get_Free) or die(mysql_error());
		while($row_Most = mysql_fetch_array($Most_Query)){
			
		$MostRanked_Freelancers[] = new Freelancer($row_Most['Free_ID'],$row_Most['Name'],$row_Most['Email'],null,null,null,
		$row_Most['Province'],null,null,$row_Most['Services'],null,$row_Most['ProfilePicture'],null,$row_Most['Views']);
	   }
		return $MostRanked_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers location
	//@return: FreelancersInLocation Array
	public function FreelancersInLocation($num_freelancers,$customerID)
	{
		$FreelancersIn_Location = array(); //Fill this array with Freelancers In my current Location
		
		$locate_Freelancer = "select freelancerprofile.Free_ID, freelancerprofile.Name, freelancerprofile.Province ,
		  freelancerprofile.Services,freelancerprofile.Province, freelancerprofile.ProfilePicture,freelancerprofile.Views,freelancerprofile.Email,customerprofile.Cust_ID,
		  customerprofile.Province from freelancerprofile,customerprofile where 
		  freelancerprofile.Province = customerprofile.Province AND '". $customerID."' = customerprofile.Cust_ID  
		  limit 0,$num_freelancers";
		 
		  $Locate_query = mysql_query($locate_Freelancer);
		  
		  while($row_Location=mysql_fetch_array($Locate_query))
		  {
               $FreelancersIn_Location[] = new Freelancer($row_Location['Free_ID'],$row_Location['Name'],$row_Location['Email'],null,null,
			   null,$row_Location['Province'],null,null,$row_Location['Services'],null,$row_Location['ProfilePicture'],null,$row_Location['Views']);  
			   }
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
              $DiscoverNew_Freelancers[] = new Freelancer($row_NewFreelancer['Free_ID'],$row_NewFreelancer['Name'],$row_NewFreelancer['Email'],null,null,null,$row_NewFreelancer['Province'],null,null,$row_NewFreelancer['Services'],null,
		      $row_NewFreelancer['ProfilePicture'],null,$row_NewFreelancer['Views']);     			  
		  }
			
		return $DiscoverNew_Freelancers;
	}
	
	//@return: Categories array
	public function loadCategories()
	{
		$Categories = array(); //Fill this array with Categories
		
		 $Query_category= mysql_query("select * from category"); 
		  
		  while($row_category = mysql_fetch_array($Query_category))
		  {
			  $Categories[] = $row_category["Name"];
		  }
		
		
		
		//Code here
		
		return $Categories;
	}
	
	//@return: Categories array
	public function loadServices()
	{
		$Services = array(); //Fill this array with Categories
		
		 $run_query= mysql_query("select * from Services"); 
		  
		  while($row_services = mysql_fetch_array($run_query))
		  {
			  $Services[] = $row_services["Service"];
		  }
		
		
		
		//Code here
		
		return $Services;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: Recommended_Freelancers Array
	public function RecommendedFreelancers($num_freelancers)
	{
		$Recommended_Freelancers = array(); //Fill this array with Recommended Freelancers
		
		$getRecommended = "select * from freelancerprofile order by RAND() limit $num_freelancers";
		
		$run_query= mysql_query($getRecommended);
		
		while($Recommended_row = mysql_fetch_array($run_query))
		{
			
	        $Recommended_Freelancers[] = new Freelancer($Recommended_row['Free_ID'],$Recommended_row['Name'],$Recommended_row['Email'],null,              null,null,null,null,null,$Recommended_row['Services'],null,
		      $Recommended_row['ProfilePicture'],null,$Recommended_row['Views']);	     
		}
		
		return $Recommended_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers notifications from DB
	//@return: Notifications Array
	public function Notifications($customerID)
	{
		$Notify = array(); //Fill this array with Customer's Notifications
		
		//Code here
		
		$NotifyQuery="SELECT * FROM requestmessage WHERE Cust_ID=$customerID";
		
		$query=mysql_query($NotifyQuery) or die(mysql_error());
		
         while($read=mysql_fetch_assoc($query))
		 {
			 $Notify=new Notification();
		 }
		return $Notify;
	}
	
	
	
	//@par 'customerID': this is the customer who's following/connecting a freelancer
	//@par 'freelancerID': this is the freelancer being followed/connected by a customer
	//@return: void
	public function loadCustomerConnect($user)
	{
		$num_result = mysql_query("SELECT count(*) as total_count from connect 
	    WHERE $user=Cust_ID") or exit(mysql_error());
        $row = mysql_fetch_object($num_result);
        return  $row->total_count;
	}
	
	public function loadFreelancerConnect($user)
	{
		$num_result = mysql_query("SELECT count(*) as total_count from connect 
	    WHERE $user=Free_ID") or exit(mysql_error());
        $row = mysql_fetch_object($num_result);
        return  $row->total_count;
	}
	
	public function doConnections($cust,$free)
	{
		 $status= $this->doCheck($cust,$free);
		 
		 if($status==false){
		  $InsertQuery="INSERT INTO connect (Cust_ID,Free_ID)                           values('$cust','$free')";				
		$ExecuteQuery=mysql_query($InsertQuery)or exit(mysql_error());
		 }
		 else{
			return "Already Connected"; 
		 }
	}
	
	private function doCheck($cust,$free)
	{
	  $check="SELECT * FROM connect";
	  $query= mysql_query($check);
	  $status=false;
	  	
			
		  while($read=mysql_fetch_assoc($query))
		 {
			 
			if(($read["Free_ID"]==$free && $read["Cust_ID"]==$cust))
			{
			 $status = true;
			 break;
			 	
			}
		}
		return $status;
	}
	
	public function FProfile($Email)
	{
		$myF = null;
		$getF = "select * from freelancerprofile WHERE Email='$Email'";
		
		$run_query= mysql_query($getF);
		
		while($F_row = mysql_fetch_array($run_query))
		{
		
		$myF = new Freelancer2($F_row['Free_ID'],$F_row['Password'],$F_row['Name'],$F_row['Email'],$F_row['Status'],$F_row['ProfilePicture'],$F_row['About'],$F_row['About2'],$F_row['About3'],$F_row['Services'],$F_row['Skills'],$F_row['WorkHrs'],$F_row['Fee'],$F_row['Province'],$F_row['Views']);
		
		}
		
		return $myF;
	}
	
	public function FreeProfile($ID)
	{
		$myF = null;
		$getF = "select * from freelancerprofile WHERE Free_ID='$ID'";
		
		$run_query= mysql_query($getF);
		
		while($F_row = mysql_fetch_array($run_query))
		{
		
		$myF = new Freelancer2($F_row['Free_ID'],$F_row['Password'],$F_row['Name'],$F_row['Email'],$F_row['Status'],$F_row['ProfilePicture'],$F_row['About'],$F_row['About2'],$F_row['About3'],$F_row['Services'],$F_row['Skills'],$F_row['WorkHrs'],$F_row['Fee'],$F_row['Province'],$F_row['Views']);
		
		}
		
		return $myF;
	}
	
	
	public function CProfile($Email)
	{
		$myC = array();
		$getC = "select * from customerprofile WHERE Email='$Email'";
		
		$run_query= mysql_query($getC);
		
		while($F_row = mysql_fetch_array($run_query))
		{
		
		$myC[0] = $F_row['FullName'];
		$myC[1] = $F_row['Email'];
		$myC[2] = $F_row['ProPicture'];
		
		}
		
		return $myC;
	}
	
	public function UpdateViews($ID)
	{
		
		$run_query = mysql_query("UPDATE freelancerprofile SET Views=Views+1 WHERE Free_ID='$ID'") or exit(mysql_error());
		
	}
	
	//=========JOBS=======
	//@param 'CustomerID': The customer who's currently logged in
	//@param 'JobName': Job title
	//@param 'JobDescription': Job description
	//@param 'Category': Job category
	//@param 'TimeSpan': project time span
	//@return: void
	public function PostJob($CustomerID,$JobName, $JobDescription, $Category, $TimeSpan)
	{
		//Code HERE!
	}
	
	//@param 'CustomerID': The customer who's currently logged in
	//@return: An array of PendingJobs
	public function ViewPendingJobs($CustomerID)
	{
		$PendingJobs = array();
		
		//Code HERE!
		
		return $PendingJobs;
	}
	//====================
	
	//=========Bookmark freelancer======
	//@param 'CustomerID': The customer who's currently logged in
	//@param 'FreelancerID': The freelancer who's been bookedmarked
	//@return: void
	public function BookmarkFreelancer($CustomerID,$FreelancerID)
	{
		//Code HERE!
	}
	
	//@param 'CustomerID': The customer who's currently logged in
	//@return: An Array of BookmarkedFreelancers
	public function ViewBookmarkedFreelancers($CustomerID)
	{
		$BookmarkedFreelancers = array();
		
		//Code HERE!
		
		return $BookmarkedFreelancers;
	}
	
	//@param 'CustomerID': The customer who's currently logged in
	//@param 'FreelancerID': The freelancer who's been removed from bookedmarked list
	//@return: void
	public function RemoveBookmarkedFreelancer($CustomerID,$FreelancerID)
	{
		//Code HERE!
	}
	
	//@param 'CustomerID': The customer who's currently logged in
	//@return: void
	public function RemoveAllBookmarkedFreelancer($CustomerID)
	{
		//Code HERE!
	}
	//===================================
	
}


?>