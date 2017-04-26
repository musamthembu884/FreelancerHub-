<?php
include("comment.php");
include("post.php");
include("database/database.php");

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
		$posts = array();
		$data="select * from postwork,freelancerprofile where
		      postwork.Free_ID=freelancerprofile.Free_ID AND postwork.Free_ID=$user 
		      limit 0,$num_posts";
        $query=mysql_query($data) or die(mysql_error());
		$count=0;
		
         while($read=mysql_fetch_array($query))
		 {
			$this->loadcomments($read["Post_ID"]);
            $posts[]= new Post( $read["ProfilePic"],$read["FullName"],
			                    $read["date"],$read["Post_Text"],
			                    $read["Post_File"],$read["likes"],$this->comments);
		 
		 }
		return $posts;
	}
	
	//@par 'title': Post caption
	//@par 'mediaURL': Media(Picture, Video or Audio) or just pass null if the user decides to not upload media
	//@return: void
	public function uploadpost($typeofFile,$title, $mediaURL,$userID)
	{
		$likes="15";
		$date;
		$status;
		if(substr($typeofFile,0,5)=="image"){
			$status="yes image";
			move_uploaded_file($_FILES["img"]["tmp_name"],
			                   "./images/" .$_FILES["img"]["name"]);
		$InsertQuery="INSERT INTO postwork (Post_Text,Post_File,likes,date,Free_ID)
		                values('$title','$mediaURL','$likes',Now(),'$userID')";
						      
		    $ExecuteQuery=mysql_query($InsertQuery);
		}
		elseif(substr($typeofFile,0,5)=="video"){
			$status="video";
			move_uploaded_file($_FILES["img"]["tmp_name"],
			                   "./videos/" .$_FILES["img"]["name"]);
		$InsertQuery="INSERT INTO postwork (Post_Text,Post_File,likes,date,Free_ID)
		                values('$title','$mediaURL','$likes',Now(),'$userID')";
						      
		    $ExecuteQuery=mysql_query($InsertQuery);
		}
		elseif(substr($typeofFile,0,5)=="audio"){
			$status="audio";
			move_uploaded_file($_FILES["img"]["tmp_name"],
			                   "./audio/" .$_FILES["img"]["name"]);
		$InsertQuery="INSERT INTO postwork (Post_Text,Post_File,likes,date,Free_ID)
		                values('$title','$mediaURL','$likes',Now(),'$userID')";
						      
		    $ExecuteQuery=mysql_query($InsertQuery);
		}
		else{
			$status="no sum else";
		}
	   
      return $status;
			
			
		 
	}
	
	//@par 'postID': Use this Post ID to edit the post from DB
	//@par 'title': Post caption
	//@par 'mediaURL': Media(Picture, Video or Audio) or just pass null if the user decides to not upload media
	//$return: void
	public function editpost($postID, $title, $mediaURL)
	{
		$Update="UPDATE postwork SET Post_Text='$title', Post_File='$mediaURL'
		        WHERE Post_ID='$postID'";
		 $ExecuteQuery=mysql_query($Update); 
		
 
		        
	}
	
	//@par 'postID': Use this Post ID to delete the post from DB
	//@return: void
	public function deletepost($postID)
	{
		$Delete="DELETE FROM postwork WHERE Post_ID='$postID'";
		$ExecuteQuery=mysql_query($Delete); 
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