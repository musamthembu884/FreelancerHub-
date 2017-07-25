<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;


//Search for job api
$app->get('/api/freelancersearch/Search', function (Request $request, Response $response) {


   $SearchQuery = $request->getParam('Query');
  
    $sql = "SELECT * FROM job,customer, freelancer WHERE  job.Category=freelancer.Category and
customer.Province=freelancer.Province  and  (freelancer.Skills LIKE  '%$SearchQuery%' or freelancer.Province Like '%$SearchQuery%')";
   
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
