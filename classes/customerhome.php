<?php
include("freelancer.php");
include("notification.php");

class CustomerHome
{
	//REAL STUFF:)
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: Interesting_Freelancers Array
	public function InterestingFreelancers($num_freelancers)
	{
		$Interesting_Freelancers = array(); //Fill this array with interesting freelancers
		
		//Code here
		
		
		return $Interesting_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: MostRanked_Freelancers Array
	public function MostRankedFreelancers($num_freelancers)
	{
		$MostRanked_Freelancers = array(); //Fill this array with Most Ranked Freelancers
		
		//Code here
		
		
		return $MostRanked_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers location
	//@return: FreelancersInLocation Array
	public function FreelancersInLocation($num_freelancers,$customerID)
	{
		$FreelancersIn_Location = array(); //Fill this array with Freelancers In my current Location
		
		//Code here
		
		
		return $FreelancersIn_Location;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//TIP: use freelancer's date to know if he's a new freelancer
	//@return: DiscoverNewFreelancers Array
	public function DiscoverNewFreelancers($num_freelancers)
	{
		$DiscoverNew_Freelancers = array(); //Fill this array with New Freelancers
		
		//Code here
		
		
		return $Discover_NewFreelancers;
	}
	
	//@return: Categories array
	public function loadCategories()
	{
		$Categories = array(); //Fill this array with Categories
		
		//Code here
		
		return $Categories;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@return: Recommended_Freelancers Array
	public function RecommendedFreelancers($num_freelancers)
	{
		$Recommended_Freelancers = array(); //Fill this array with Recommended Freelancers
		
		//Code here
		
		
		return $Recommended_Freelancers;
	}
	
	//@par 'num_freelancers': Number of freelancers retrieved from DB
	//@par 'customerID': Use this ID to get customers notifications from DB
	//@return: Notifications Array
	public function Notifications($customerID)
	{
		$Notify = array(); //Fill this array with Customer's Notifications
		
		//Code here
		
		
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