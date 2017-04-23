<?php
class Notification
{
	private $title;
	private $message;
	
	//GETTERS
	public function get_title()
	{
		return $this->title;
	}
	
	public function get_message()
	{
		return $this->message;
	}
	
	//CONSTRUCTOR
	public function __construct($title,$message)
	{
		$this->title = $title;
		$this->message = $message;
	}
}
?>