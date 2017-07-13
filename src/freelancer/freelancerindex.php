<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//Post Ad
$app->put('/api/freelancerindex/PostAd/{freelancerID}', function (Request $request, Response $response) {

   $freelancerID = $request->getAttribute('freelancerID'); 

   $Title = $request->getParam('Title'); 
   $Description = $request->getParam('Description'); 
   $Category = $request->getParam('Category'); 
   $DatePosted = date("D m Y"); //NEEDS MORE WORK!!! 

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
