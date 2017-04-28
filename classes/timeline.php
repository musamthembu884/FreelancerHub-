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
		$posts = array();
		$data="select * from postwork,freelancerprofile where
		      postwork.Free_ID=freelancerprofile.Free_ID AND postwork.Free_ID=$user 
		      order by postwork.Post_ID DESC limit 0,$num_posts";
        $query=mysql_query($data) or die(mysql_error());
		$count=0;
		
         while($read=mysql_fetch_array($query))
		 {
			$this->loadcomments($read["Post_ID"]);
            $posts[]= new Post( $read["ProfilePic"],$read["FullName"],
			                    $read["date"],$read["Post_Text"],
			                    $read["Post_File"],$read["likes"],$this->comments,$read["Post_ID"]);
		 
		 }
		return $posts;
	}
	
	//@par 'title': Post caption
	//@par 'mediaURL': Media(Picture, Video or Audio) or just pass null if the user decides to not upload media
	//@return: void
	public function uploadpost($typeofFile,$title, $mediaURL,$userID)
	{
		$likes="0";
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
		elseif($typeofFile==null){
			$InsertQuery="INSERT INTO postwork (Post_Text,Post_File,likes,date,Free_ID)
		                values('$title','$mediaURL','$likes',Now(),'$userID')";
						      
		    $ExecuteQuery=mysql_query($InsertQuery);
		}
	   
      
			
			
		 
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
		$ExecuteQuery=mysql_query($Delete) or die(mysql_error()); 
	}
	
	//@par 'from': This is the User currently commenting
	//@par 'postID': The the current post being commented on
	//@par 'comment_text': The actual comment text
	//@return: void
	//@return: void
	public function comment($from, $postID, $comment_text)
	{		
	    if((!$comment_text=null) && (strlen($comment_text)<=300)){
		  
		   $comment_query = "insert into comment (Text,Cust_ID,Post_ID) values ('$comment_text','$from','$postID')";
		   $run_comment = mysql_query($comment_query) or die(mysql_error());
	      
		 
     	  }
	
	}
	
	//@par 'postID': Use this post ID to retrieve comments from DB
	//@return: Comments array
	
	public function loadcommentz($postID)
	{
		$commentz = array();
		
		$commentor_id =  array();
		$comment_text = array();
		  
		$propicURL = array();
		$comment_author = array();
		$comment_date = array();
		
		$c1=0;
		$c2=0;
		
		$get_comment ="select * from comment where Post_ID=$postID";
		
		$run_get_comment = mysql_query($get_comment)or die(mysql_error());
		    while($row_comment = mysql_fetch_array($run_get_comment))
			{	
			    $comment_text[$c1] = $row_comment['Text'];
				$commentor_id[$c1] =$row_comment['Cust_ID'];
				
				$c1++;
				

				//$commentz[] = new Comment(null,null,null,$comment_text); 
			}
			
			
				$customer_profile = "select * from customerprofile where Cust_ID = $commentor_id";
				$run_customerProfile =mysql_query($customer_profile)or die(mysql_error());
				 
				 while($row_customerProfile = mysql_fetch_array($run_customerProfile))
      			 {
			      
				    $propicURL[$c2] = $row_customerProfile['ProPicture'];
					$comment_author[$c2] =$row_customerProfile['FullName'];
					$comment_date[$c2] = date('m-d-y');
					
					$c2++;
				 }
				 
				 for($k=0;$k<$c1;$k++)
				 {
					 $commentz[$k] = new Comment($propicURL[$k],$comment_author[$k],$comment_date[$k],$comment_text[$k]); 
				 }
		
		return $commentz;
	}
	
	
	public function loadcomments($postID)
	{
		$comments = array();
		
		$counter=0;
	   $get_comment ="select * from comment where Post_ID=$postID";
	  
		$run_get_comment = mysql_query($get_comment)or die(mysql_error());
		    while($row_comment = mysql_fetch_array($run_get_comment))
			{	
			    $comment_text = $row_comment['Text'];
				$commentor_id =$row_comment['Cust_ID'];
				
				$customer_profile = "select * from customerprofile where Cust_ID = $commentor_id";
				$run_customerProfile =mysql_query($customer_profile)or die(mysql_error());
				 
				 while($row_customerProfile = mysql_fetch_array($run_customerProfile))
      			 {
			      
				    $propicURL = $row_customerProfile['ProPicture'];
					$comment_author =$row_customerProfile['FullName'];
					$comment_date = date('m-d-y');
					
				  $comments[] = new Comment($propicURL,$comment_author,$comment_date,$comment_text);
				  
				 //echo "Profile Picture: ";
				// echo "Profile Picture: ". $this->comments[$counter]->;
				 
				 }
								
				$counter++;				  
			}
			
			//echo "<br > Number of comments ". $counter;
			
			
		    
			return $comments;
	}
	
	
	
	
}

?>