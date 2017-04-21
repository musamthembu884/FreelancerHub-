<?php
include("comment.php");
include("post.php");

class Timeline
{
	private $posts = array();
	private $comments = array();
	
	//<GETTERS AND SETTERS>
	
	//Posts
	public function set_posts($value)
	{
		$this->posts = $value;
	}
	
	public function get_post()
	{
		return $this->posts;
	}
	
	//Comments
	public function set_comments($value)
	{
		$this->comments = $value;
	}
	
	public function get_comments()
	{
		return $this->comments;
	}
	
	//Let The Games Begin:)
	
	//@par 'num_posts': Number of Posts in the timeline; TIP: use LIMIT in SQL
	//@par 'user': The user who's gonna be viewing the timeline
	//@return: array of posts
	public function loadposts($num_posts, $user)
	{
		
		
		return $this->posts;
	}
	
	//@par 'title': Post caption
	//@par 'mediaURL': Media(Picture, Video or Audio) or just pass null if the user decides to not upload media
	//@return: void
	public function uploadpost($title, $mediaURL)
	{
		
	}
	
	//@par 'postID': Use this Post ID to edit the post from DB
	//@par 'title': Post caption
	//@par 'mediaURL': Media(Picture, Video or Audio) or just pass null if the user decides to not upload media
	//$return: void
	public function editpost($postID, $title, $mediaURL)
	{
		
	}
	
	//@par 'postID': Use this Post ID to delete the post from DB
	//@return: void
	public function deletepost($postID)
	{
		
	}
	
	//@par 'from': This is the User currently commenting
	//@par 'postID': The the current post being commented on
	//@par 'comment_text': The actual comment text
	//@return: void
	public function comment($from, $postID, $comment_text)
	{
		
	}
	
	//@par 'postID': Use this post ID to retrieve comments from DB
	//@return: Comments array
	public function loadcomments($postID)
	{
		
		
		
		return $this->comments;
	}
	
	
	
	
	
}

?>