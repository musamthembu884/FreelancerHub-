<?php
class Freelancer
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
	
	public function __construct($ID,$fullname,$email,$password,$street,$town,$province,$contact,$description,$worktype,$verifystatus,$propic,$num_connections)
	{
		$this->ID = $ID;
		$this->fullname = $fullname;
		$this->email = $email;
		$this->password = $password;
		$this->street = $street;
		$this->town = $town;
		$this->province = $province;
		$this->contact = $contact;
		$this->description = $description;
		$this->worktype = $worktype;
		$this->verifystatus = $verifystatus;
		$this->propic = $propic;
		$this->num_connections = $num_connections;
	}

	
	//GETTERS
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