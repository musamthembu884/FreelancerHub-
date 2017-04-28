<?php


class Post
{
 private $post_ID;
 private $post_thumbnailURL;
 private $post_author;
 private $post_date;
 private $post_title;
 private $post_mediaURL;
 private $post_likes;
 private $post_comments = array();
 
 //<GETTERS AND SETTERS>
 
 
 public function get_ID()
  {
	  return $this->post_ID;
  }
 
 //ThumbnailURL
  public function set_thumbnailURL($value)
 {
	 $this->post_thumbnailURL = $value;
 }
 
 public function get_thumbnailURL()
  {
	  return $this->post_thumbnailURL;
  }
  
 //Author
 public function set_author($value)
 {
	 $this->post_author = $value;
 }
 
 public function get_author()
 {
    return $this->post_author;
 }
 
 //Date
  public function set_date($value)
 {
	 $this->post_date = $value;
 }
 
 public function get_date()
  {
	  return $this->post_date;
  }
 
 
 
 //Title
  public function set_title($value)
 {
	 $this->post_title = $value;
 }
 
 public function get_title()
  {
	  return $this->post_title;
  }
  
  //MediaURL
  public function set_MediaURL($value)
 {
	 $this->post_mediaURL = $value;
 }
 
 public function get_MediaURL()
  {
	  return $this->post_mediaURL;
  }
 
 //Likes
  public function set_likes($value)
 {
	 $this->post_likes = $value;
 }
 
 public function get_likes()
  {
	  return $this->post_likes;
  }
  
  //Comments
  public function get_comments()
  {
	  return $this->post_comments;
  }
 
  //</GETTERS AND SETTERS>
 
  public function __construct($thumbnailURL,$author,$date,$title,$mediaURL,$likes,$comments,$post_ID)
  {
	  $this->post_thumbnailURL = $thumbnailURL;
	  $this->post_author = $author;
	  $this->post_date = $date;
	  $this->post_title = $title;
	  $this->post_mediaURL = $mediaURL;
	  $this->post_likes = $likes;
	  $this->post_comments = $comments;
	  $this->post_ID = $post_ID;
  }
	
	
}
?>