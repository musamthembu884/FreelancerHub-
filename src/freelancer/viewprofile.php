<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//CustomerIndex API
require 'customerindex.php';

//Interesting Freelancers
$app->get('/api/freelancer/ViewProfile/{num}', function (Request $request, Response $response) {

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