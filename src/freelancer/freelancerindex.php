<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//FreelancerHome API
require 'freelancerhome.php';

//Post Ad
$app->put('/api/freelancerindex/PostAd/{freelancerID}', function (Request $request, Response $response) {

   $freelancerID = $request->getAttribute('freelancerID'); 

   $Title = $request->getParam('Title'); 
   $Description = $request->getParam('Description'); 
   $Category = $request->getParam('Category'); 
   $DatePosted = date("d M Y"); 

   $sql = "INSERT INTO ad
    (Title,Description,Category,FreelancerID,AdViews,DatePosted)
    VALUES 
    (:Title,:Description,:Category,:FreelancerID,0,:DatePosted)";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':Title',        $Title);
      $stmt->bindParam(':Description',  $Description);
      $stmt->bindParam(':Category',     $Category);
      $stmt->bindParam(':FreelancerID', $freelancerID);
      $stmt->bindParam(':DatePosted',   $DatePosted);
  
      $stmt->execute();

      echo '{"notice": {"text": "Ad Successfully Posted!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load My Ads
$app->get('/api/freelancerindex/LoadMyAds/{FreelancerID}', function (Request $request, Response $response) {

   $FreelancerID = $request->getAttribute('FreelancerID'); 

   $sql = "SELECT   freelancer.ID,
                    freelancer.FullName,
                    ad.Title,
                    ad.Description,
                    ad.Category,
                    ad.AdViews,
                    ad.DatePosted
           FROM freelancer, ad
           WHERE freelancer.ID = '$FreelancerID' AND ad.FreelancerID = '$FreelancerID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $Ads = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       if(empty($Ads))
       {
         echo '{"notice": {"text": "No Ads Found!"}';
       }
       else
       {
         echo json_encode($Ads);
       }
      
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Edit My Ad
$app->put('/api/freelancerindex/EditMyAds/{FreelancerID}/{AdID}', function (Request $request, Response $response) {
   $FreelancerID = $request->getAttribute('FreelancerID'); 
   $AdID = $request->getAttribute('AdID');

   $Title = $request->getParam('Title'); 
   $Description = $request->getParam('Description'); 
   $Category = $request->getParam('Category'); 
   $DatePosted = date("d M Y"); 

   $sql = "UPDATE ad SET
    Title = :Title,
    Description = :Description,
    Category = :Category
   WHERE ID = '$AdID' AND
   FreelancerID = '$FreelancerID'";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':Title', $Title);
      $stmt->bindParam(':Description',    $Description);
      $stmt->bindParam(':Category',       $Category);
      
      
      $stmt->execute();

      echo '{"notice": {"text": "Ad Successfully Updated!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Delete My Ad
$app->delete('/api/freelancerindex/DeleteMyAds/{FreelancerID}/{AdID}', function (Request $request, Response $response) {
   $FreelancerID = $request->getAttribute('FreelancerID'); 
   $AdID = $request->getAttribute('AdID');

   $sql = "DELETE FROM ad WHERE ID = '$AdID' AND FreelancerID = '$FreelancerID'";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->execute();

      echo '{"notice": {"text": "Ad Successfully Deleted!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Delete All My Ads
$app->delete('/api/freelancerindex/DeleteAllMyAds/{FreelancerID}', function (Request $request, Response $response) {
   $FreelancerID = $request->getAttribute('FreelancerID'); 

   $sql = "DELETE FROM ad WHERE FreelancerID = '$FreelancerID'";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->execute();

      echo '{"notice": {"text": "All Ads Successfully Deleted!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load Booked Marked Jobs
$app->get('/api/freelancerindex/LoadBookedMarkedJobs/{FreelancerID}', function (Request $request, Response $response) { 

   $FreelancerID = $request->getAttribute('FreelancerID');

   $sql = "SELECT job.ID,
                  job.Title,
                  job.Description,
                  job.DatePosted,
                  job.Budget,
                  job.Category,
                  job.TimeSpan,
                  job.Status,
                  job.Progress,
                  job.CustomerID 
           FROM   bookedmarkedjobs,job 
           WHERE  bookedmarkedjobs.freelancerID = '$FreelancerID'
           AND    job.ID = bookedmarkedjobs.JobID";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $BookedMarkedFreelancers = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       
       if(empty($BookedMarkedFreelancers))
       {
         echo '{"notice": {"text": "No Jobs Found!"}';
       }
       else
       {
         echo json_encode($BookedMarkedFreelancers);
       }
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Remove Booked Marked Jobs
$app->delete('/api/freelancerindex/RemoveBookedMarkedJobs/{FreelancerID}/{JobID}', function (Request $request, Response $response) { 

   $FreelancerID = $request->getAttribute('FreelancerID');
   $JobID = $request->getAttribute('JobID');

   $sql = "DELETE FROM bookedmarkedjobs WHERE FreelancerID = '$FreelancerID' AND JobID = '$JobID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->prepare($sql);
       $stmt->execute();
       $db = null;

       echo '{"notice": {"text": "Job Successfully Removed!"}';
         
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Remove All Booked Marked Jobs
$app->delete('/api/freelancerindex/RemoveAllBookedMarkedJobs/{FreelancerID}', function (Request $request, Response $response) { 

   $FreelancerID = $request->getAttribute('FreelancerID');

   $sql = "DELETE FROM bookedmarkedjobs WHERE FreelancerID = '$FreelancerID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->prepare($sql);
       $stmt->execute();
       $db = null;

       echo '{"notice": {"text": "All Jobs Successfully Removed!"}';
         
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load Proposed Jobs
$app->get('/api/freelancerindex/LoadProposedJobs/{FreelancerID}', function (Request $request, Response $response) { 

   $FreelancerID = $request->getAttribute('FreelancerID');

   $sql = "SELECT proposedjobs.ID,
                  proposedjobs.Title,
                  proposedjobs.Description,
                  proposedjobs.TimeSpan,
                  proposedjobs.Price,
                  proposedjobs.JobID,
                  job.Title AS JobTitle,
                  customer.FullName
           FROM   proposedjobs,job,customer
           WHERE  proposedjobs.FreelancerID = '$FreelancerID'
           AND    job.ID = proposedjobs.JobID
           AND    customer.ID = job.CustomerID";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $ProposedJobs = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       
       if(empty($ProposedJobs))
       {
         echo '{"notice": {"text": "No Proposed Jobs Found!"}';
       }
       else
       {
         echo json_encode($ProposedJobs);
       }
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});