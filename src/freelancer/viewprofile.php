<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//Get Freelancer Profile
$app->get('/api/freelancer/ViewProfile/{FreelancerID}', function (Request $request, Response $response) {

   $FreelancerID = $request->getAttribute('FreelancerID'); 

   $sql = "SELECT * FROM freelancer WHERE ID = '$FreelancerID'";
  
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