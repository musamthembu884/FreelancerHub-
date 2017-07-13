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
$app->delete('/api/freelancerindex/EditMyAds/{FreelancerID}/{AdID}', function (Request $request, Response $response) {
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