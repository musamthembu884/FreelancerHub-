<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//CustomerIndex API
require 'customerindex.php';

//Interesting Freelancers
$app->get('/api/customerhome/InterestingFreelancers/{num}', function (Request $request, Response $response) {

   $Count = $request->getAttribute('num'); 

   $sql = "SELECT * FROM freelancer order by RAND() LIMIT $Count";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Most Ranked Freelancers
$app->get('/api/customerhome/MostRankedFreelancers/{num}', function (Request $request, Response $response) {

   $Count = $request->getAttribute('num'); 

   $sql = "SELECT * FROM freelancer order by ProfileViews DESC limit 0,$Count";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Freelancers in Location
$app->get('/api/customerhome/FreelancersInLocation/{CustomerProvince}/{num}', function (Request $request, Response $response) {

   $CustomerProvince = $request->getAttribute('CustomerProvince'); 
   $Count = $request->getAttribute('num'); 

   $sql = "SELECT * FROM freelancer WHERE Province = '$CustomerProvince' limit 0,$Count";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Discover New Freelancers
$app->get('/api/customerhome/DiscoverNewFreelancers/{num}', function (Request $request, Response $response) {

   $Count = $request->getAttribute('num'); 

   $sql = "SELECT * FROM freelancer ORDER BY freelancer.ID DESC limit 0,$Count";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});


//Recommended Freelancers
$app->get('/api/customerhome/RecommendedFreelancers/{num}', function (Request $request, Response $response) {

   $Count = $request->getAttribute('num'); 

   $sql = "SELECT * FROM freelancer order by RAND() LIMIT $Count";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Load Categories
$app->get('/api/customerhome/Categories', function (Request $request, Response $response) { 

   $sql = "SELECT * FROM categories";
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($categories);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Bookmark Freelancer
$app->put('/api/customerhome/BookMarkFreelancer/{customerID}/{freelancerID}', function (Request $request, Response $response) {

////Preventing duplicate insertion<ValidateBookmark>
function ValidateBookmark($customerID,$freelancerID){
   $sql = "SELECT * FROM bookedmarkedfreelancers WHERE customerID = '$customerID' AND freelancerID = '$freelancerID'";
  
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
   $customerID = $request->getAttribute('customerID'); 
   $freelancerID = $request->getAttribute('freelancerID');

   if(ValidateBookmark($customerID,$freelancerID))
   {
    $sql = "INSERT INTO bookedmarkedfreelancers
            (customerID,freelancerID)
            VALUES 
            (:customerID,:freelancerID)";

    try{
        $db = new db();
        $db = $db->connect();

        $stmt = $db->prepare($sql);

        $stmt->bindParam(':freelancerID', $freelancerID);
        $stmt->bindParam(':customerID',   $customerID);

        $stmt->execute();

        echo '{"notice": {"text": "Freelancer Successfully BookedMarked!"}';

    }catch(PDOException $e){
        echo '{"error": {"text": '.$e->getMessage().'}';
    }
   }
   else
   {
       echo '{"notice": {"text": "Already BookedMarked!"}';
   }
  
});

//View More Freelancers in Category
$app->get('/api/customerhome/ViewMoreFreelancers/{Category}/{num}/{CustomerProvince}', function (Request $request, Response $response) {

   $Category = $request->getAttribute('Category'); 
   $Count = $request->getAttribute('num'); 
   $CustomerProvince = $request->getAttribute('CustomerProvince'); 

   switch($Category)
   {
       case "MostRankedFreelancers":
       {
        $sql = "SELECT * FROM freelancer order by ProfileViews DESC limit 0,$Count";
       }
       break;

       case "FreelancersInLocation":
       {
        $sql = "SELECT * FROM freelancer WHERE Province = '$CustomerProvince' limit 0,$Count";
       }
       break;

       case "DiscoverNewFreelancers":
       {
        $sql = "SELECT * FROM freelancer ORDER BY freelancer.ID DESC limit 0,$Count";
       }
       break;

       default:
       {
         $sql = "SELECT * FROM freelancer WHERE Category = '$Category' LIMIT $Count";
       }
       break;

   }
  
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($user);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});