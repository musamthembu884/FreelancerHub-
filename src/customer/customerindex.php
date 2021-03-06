<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//ViewProfile API
require '../src/freelancer/viewprofile.php';

//Post Job
$app->post('/api/customerindex/PostJob/{customerID}', function (Request $request, Response $response) {

   $customerID = $request->getAttribute('customerID'); 
   $Url = $request->getParam('Url'); 
   $Title = $request->getParam('Title'); 
   $Description = $request->getParam('Description'); 
   $DatePosted = date("d M Y"); 
   $Budget = 0; 
   $Category = $request->getParam('Category'); 
   $TimeSpan = $request->getParam('TimeSpan'); 
   $Status = "Pending";
   $Progress = 0;
   $FreelancerID = -1;

   $sql = "INSERT INTO job
    (Title,Description,DatePosted,Budget,Category,TimeSpan,Status,Progress,FreelancerID,CustomerID)
    VALUES 
    (:Title,:Description,:DatePosted,:Budget,:Category,:TimeSpan,:Status,:Progress,:FreelancerID,:CustomerID)";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':Title',        $Title);
      $stmt->bindParam(':Description',  $Description);
      $stmt->bindParam(':DatePosted',   $DatePosted);
      $stmt->bindParam(':Budget',       $Budget);
      $stmt->bindParam(':Category',     $Category);
      $stmt->bindParam(':TimeSpan',     $TimeSpan);
      $stmt->bindParam(':Status',       $Status);
      $stmt->bindParam(':Progress',     $Progress);
      $stmt->bindParam(':FreelancerID', $FreelancerID);
      $stmt->bindParam(':CustomerID',   $customerID);
      
      $stmt->execute();

      if(empty($Url))
      {
         echo '[{"notice": "Job Successfully Posted!"}]'; 
      }
      else
      {
        header("Location: ".$Url);
        $app->halt(301);
      }
      
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load Jobs(Pending or Active)
$app->get('/api/customerindex/LoadJobs/{JobStatus}/{CustomerID}', function (Request $request, Response $response) {

   $JobStatus = $request->getAttribute('JobStatus'); 
   $CustomerID = $request->getAttribute('CustomerID'); 

   $sql = "SELECT * FROM job WHERE Status = '$JobStatus' AND CustomerID = '$CustomerID' ORDER BY job.ID DESC";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $Jobs = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       if(empty($Jobs))
       {
         echo '{"notice": {"text": "No Jobs Found!"}';
       }
       else
       {
         echo json_encode($Jobs);
       }
      
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load Booked Marked Freelancers
$app->get('/api/customerindex/LoadBookMarkedFreelancers/{CustomerID}', function (Request $request, Response $response) { 

   $CustomerID = $request->getAttribute('CustomerID');

   $sql = "SELECT freelancer.ID,
                  freelancer.AccountType,
                  freelancer.FullName,
                  freelancer.Email,
                  freelancer.Password,
                  freelancer.DOB,
                  freelancer.Province,
                  freelancer.Profession,
                  freelancer.Category,
                  freelancer.Skills,
                  freelancer.AboutMe,
                  freelancer.WhyHireMe,
                  freelancer.ProfessionalOverview,
                  freelancer.ProfileViews,
                  freelancer.ProfilePicture,
                  bookedmarkedfreelancers.freelancerID 
           FROM   bookedmarkedfreelancers,freelancer 
           WHERE  customerID = '$CustomerID' 
           AND    freelancer.ID = bookedmarkedfreelancers.freelancerID";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $BookedMarkedFreelancers = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       if(empty($BookedMarkedFreelancers))
       {
         echo '{"notice": {"text": "No Book Marked Freelancers Found!"}';
       }
       else
       {
         echo json_encode($BookedMarkedFreelancers);
       }
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

$app->delete('/api/customerindex/DeleteBookMarkedFreelancers/{CustomerID}/{FreelancerID}', function (Request $request, Response $response) { 

   $CustomerID = $request->getAttribute('CustomerID');
   $FreelancerID = $request->getAttribute('FreelancerID');

   $sql = "DELETE FROM bookedmarkedfreelancers WHERE customerID='$CustomerID' AND freelancerID='$FreelancerID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->prepare($sql);
       $stmt->execute();
       $db = null;

       echo '{"notice": {"text": "Book Marked Freelancer Succesfully Deleted!"}';
    
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

$app->delete('/api/customerindex/DeleteAllBookMarkedFreelancers/{CustomerID}', function (Request $request, Response $response) { 

   $CustomerID = $request->getAttribute('CustomerID');


   $sql = "DELETE FROM bookedmarkedfreelancers WHERE customerID='$CustomerID'";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->prepare($sql);
       $stmt->execute();
       $db = null;

       echo '{"notice": {"text": "All BookMarkedFreelancers Succesfully Deleted!"}';
    
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});