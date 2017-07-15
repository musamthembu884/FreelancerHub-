<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


//Bookmark Job
$app->put('/api/freelancerhome/BookMarkJob/{freelancerID}/{JobID}', function (Request $request, Response $response) {

////Preventing duplicate insertion<ValidateBookmark>
function ValidateBookmark($jobsID,$freelancerID){
   $sql = "SELECT * FROM bookedmarkedjobs WHERE JobID = '$jobsID' AND FreelancerID = '$freelancerID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $ValidateBookmark = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       if(empty($ValidateBookmark))
       {
           return true; //OK!
       }
       else
       {
           return false;//NOT OKAY:(
       }
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
}//</ValidateBookmark>
   $jobsID = $request->getAttribute('JobID'); 
   $freelancerID = $request->getAttribute('freelancerID');

   if(ValidateBookmark($jobsID,$freelancerID))
   {
    $sql = "INSERT INTO bookedmarkedjobs
            (FreelancerID,JobID)
            VALUES 
            (:FreelancerID,:JobsID)";

    try{
        $db = new db();
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':FreelancerID', $freelancerID);
        $stmt->bindParam(':JobsID',   $jobsID);

        $stmt->execute();

        echo '{"notice": {"text": "Job Successfully BookedMarked!"}';

    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
   }
   else
   {
       echo '{"notice": {"text": "Already BookedMarked!"}';
   }
  
});

//Propose Job
$app->put('/api/freelancerhome/ProposeJob/{freelancerID}/{JobID}', function (Request $request, Response $response) {

   $FreelancerID = $request->getAttribute('freelancerID'); 
   $JobID = $request->getAttribute('JobID'); 

   $Title = $request->getParam('Title'); 
   $Description = $request->getParam('Description'); 
   $TimeSpan = $request->getParam('TimeSpan'); 
   $Price = $request->getParam('Price'); 

   $sql = "INSERT INTO proposedjobs
    (Title,Description,TimeSpan,Price,JobID,FreelancerID)
    VALUES 
    (:Title,:Description,:TimeSpan,:Price,:JobID,:FreelancerID)";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':Title',        $Title);
      $stmt->bindParam(':Description',  $Description);
      $stmt->bindParam(':TimeSpan',     $TimeSpan);
      $stmt->bindParam(':Price',        $Price);
      $stmt->bindParam(':JobID',        $JobID);
      $stmt->bindParam(':FreelancerID', $FreelancerID);
  
      $stmt->execute();

      echo '{"notice": {"text": "Job Proposal Successfully Posted!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});