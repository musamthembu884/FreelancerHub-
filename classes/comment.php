<?php
class Comment
{
	private $comment_propicURL;
	private $comment_author;
	private $comment_date;
	private $comment_text;
	
	//<GETTERS AND SETTERS>
	
	//PropicURL
	public function set_propicURL($value)
	{
		$this->comment_propicURL = $value;
	}
	
	public function get_propicURL()
	{
		return $this->comment_propicURL;
	}
	
	//Author
	public function set_author($value)
	{
		$this->comment_author = $value;
	}
	
	public function get_author()
	{
		return $this->comment_author;
	}
	
	//Date
	public function set_date($value)
	{
		$this->comment_date = $value;
	}
	
	public function get_date()
	{
		return $this->comment_date;
	}
	
	//Text
	public function set_text($value)
	{
		$this->comment_text = $value;
	}
	
	public function get_text()
	{
		return $this->comment_text;
	}
	
	public function __construct($propicURL, $author, $date, $text)
	{
		$this->comment_propicURL = $propicURL;
		$this->comment_author = $author;
		$this->comment_date = $date;
		$this->comment_text = $text;
	}
}

?>