<?php
class Freelancer2
{
	private $ID;
	private $fullname;
	private $email;
	private $password;
	private $street;
	private $town;
	private $province;
	private $contact;
	private $description;
	private $worktype;
	private $verifystatus;
	private $propic;
	private $num_connections;
	//
	private $about;
	private $about2;
	private $about3;
	private $services;
	private $skills;
	private $workhrs;
	private $fee;
	private $views;
	
	public function __construct($ID,$password,$fullname,$email,$verifystatus,$propic,$about,$about2,$about3,$services,$skills,$workhrs,$fee,$province,$views)
	{
		$this->ID = $ID;
		$this->fullname = $fullname;
		$this->email = $email;
		$this->password = $password;
		$this->province = $province;
		$this->verifystatus = $verifystatus;
		$this->propic = $propic;
		
		$this->about = $about;
		$this->about2 = $about2;
		$this->about3 = $about3;
		$this->services = $services;
		$this->skills = $skills;
		$this->workhrs = $workhrs;
		$this->fee = $fee;
		$this->views = $views;
		
	}

	
	//GETTERS
	public function get_views()
	{
		return $this->views;
	}
	
	public function get_about()
	{
		return $this->about;
	}
	
	public function get_about2()
	{
		return $this->about2;
	}
	
	public function get_about3()
	{
		return $this->about3;
	}
	
	public function get_service()
	{
		return $this->services;
	}
	
	public function get_skills()
	{
		return $this->skills;
	}
	
	public function get_workhrs()
	{
		return $this->workhrs;
	}
	
	public function get_fee()
	{
		return $this->fee;
	}
	
	
	public function get_ID()
	{
		return $this->ID;
	}
	
	public function get_fullname()
	{
		return $this->fullname;
	}
	
	public function get_email()
	{
		return $this->email;
	}
	
	public function get_password()
	{
		return $this->password;
	}
	
	public function get_street()
	{
		return $this->street;
	}
	
	public function get_town()
	{
		return $this->town;
	}
	
	public function get_province()
	{
		return $this->province;
	}
	
	public function get_contact()
	{
		return $this->contact;
	}
	
	public function get_description()
	{
		return $this->description;
	}
	
	public function get_worktype()
	{
		return $this->worktype;
	}
	
	public function get_verifystatus()
	{
		return $this->verifystatus;
	}
	
	public function get_propic()
	{
		return $this->propic;
	}
	
	public function get_num_connections()
	{
		return $this->num_connections;
	}
	
	public function get_work()
	{
		return $this->work;
	}
	
	public function num_connections()
	{
		return $this->location;
	}
	
}

?>