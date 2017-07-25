<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


//Search for job api
$app->get('/api/freelancersearch/Search/{freelancerID}', function (Request $request, Response $response) {

  // $SearchQuery = $request->getAttribute('Query'); 
   $FreelancerID = $request->getAttribute('freelancerID');
   $sql = "SELECT * FROM job,customer, freelancer WHERE freelancer.id=$FreelancerID and job.Category=freelancer.Category and
           customer.Province=freelancer.Province";
 
   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sql);
       $filter = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;

       echo json_encode($filter);
        
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }

});
