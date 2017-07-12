<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

//CustomerHome API
require '../src/customer/customerhome.php';

//User LogIn
$app->get('/api/authentication/{username}/{password}', function (Request $request, Response $response) {

   $username = $request->getAttribute('username'); 
   $password = $request->getAttribute('password'); 

   $sqlC = "SELECT * FROM Customer WHERE Email = '$username'";
   $sqlF = "SELECT * FROM freelancer WHERE Email = '$username'";

   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sqlC);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;
       
       //Search through Freelancer Table
       if(empty($user))
       {
            $db = new db();
            $db = $db->connect();

            $stmt = $db->query($sqlF);
            $user = $stmt->fetchAll(PDO::FETCH_OBJ);
            $db = null;
       }

        if(empty($user))
        {
             echo '{"notice": {"text": "Incorrect Username/Password"}';
        }
        else
        {
            //UnHash
            if(password_verify($password,$user[0]->Password))
            {
                 echo json_encode($user);
            }
            else
            {
                 echo '{"notice": {"text": "Incorrect Username/Password"}';
            }
        }

       
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }


   
});

//----------------MOCK&&&&----------------
$app->get('/api/authentication/getusers', function (Request $request, Response $response) {

   $sqlF = "SELECT * FROM freelancer";

   try{
       $db = new db();
       $db = $db->connect();

       $stmt = $db->query($sqlF);
       $user = $stmt->fetchAll(PDO::FETCH_OBJ);
       $db = null;
      
            echo json_encode($user);

   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});//----------------MOCK&&&&----------------

//Freelancer Registration
$app->post('/api/authentication/Freelancer/add', function (Request $request, Response $response) {

   $AccountType = $request->getParam('AccountType'); 
   $FullName = $request->getParam('FullName'); 
   $Email = $request->getParam('Email'); 

   //Password Hashing
   $UserPassword = $request->getParam('Password'); 
   $Password = password_hash($UserPassword,PASSWORD_DEFAULT);

   $DOB = $request->getParam('DOB'); 
   $Province = $request->getParam('Province'); 
   $Profession = $request->getParam('Profession'); 
   $Category = $request->getParam('Category'); 
   $Skills = $request->getParam('Skills'); 
   $AboutMe = $request->getParam('AboutMe'); 
   $WhyHireMe = $request->getParam('WhyHireMe'); 
   $ProfessionalOverview = $request->getParam('ProfessionalOverview'); 
   $ProfileViews = $request->getParam('ProfileViews'); 
   $ProfilePicture = $request->getParam('ProfilePicture'); 

  $sql = "INSERT INTO freelancer(AccountType,FullName,Email,Password,DOB,Province,Profession,Category,Skills,AboutMe,WhyHireMe,ProfessionalOverview,ProfileViews,ProfilePicture) VALUES (:AccountType,:FullName,:Email,:Password,:DOB,:Province,:Profession,:Category,:Skills,:AboutMe,:WhyHireMe,:ProfessionalOverview,:ProfileViews,:ProfilePicture)";

   try{
       $db = new db();
       $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':AccountType', $AccountType);
      $stmt->bindParam(':FullName',    $FullName);
      $stmt->bindParam(':Email',       $Email);
      $stmt->bindParam(':Password',    $Password);
      $stmt->bindParam(':DOB',         $DOB);
      $stmt->bindParam(':Province',    $Province);
      $stmt->bindParam(':Profession',  $Profession);
      $stmt->bindParam(':Category',    $Category);
      $stmt->bindParam(':Skills',      $Skills);
      $stmt->bindParam(':AboutMe',     $AboutMe);
      $stmt->bindParam(':WhyHireMe',   $WhyHireMe);
      $stmt->bindParam(':ProfessionalOverview',    $ProfessionalOverview);
      $stmt->bindParam(':ProfileViews',            $ProfileViews);
      $stmt->bindParam(':ProfilePicture',          $ProfilePicture);
      
      $stmt->execute();

      echo '{"notice": {"text": "Freelancer Successfully Added!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Update Freelancer
$app->put('/api/authentication/Freelancer/update/{id}', function (Request $request, Response $response) {
   $ID = $request->getAttribute('id'); 

   $AccountType = $request->getParam('AccountType'); 
   $FullName = $request->getParam('FullName'); 
   $Email = $request->getParam('Email'); 
   $Password = $request->getParam('Password'); 
   $DOB = $request->getParam('DOB'); 
   $Province = $request->getParam('Province'); 
   $Profession = $request->getParam('Profession'); 
   $Category = $request->getParam('Category'); 
   $Skills = $request->getParam('Skills'); 
   $AboutMe = $request->getParam('AboutMe'); 
   $WhyHireMe = $request->getParam('WhyHireMe'); 
   $ProfessionalOverview = $request->getParam('ProfessionalOverview'); 
   $ProfileViews = $request->getParam('ProfileViews'); 
   $ProfilePicture = $request->getParam('ProfilePicture'); 

   $sql = "UPDATE freelancer SET
    AccountType = :AccountType,
    FullName = :FullName,
    Email = :Email,
    Password = :Password,
    DOB = :DOB,
    Province = :Province,
    Profession = :Profession,
    Category = :Category,
    Skills = :Skills,
    AboutMe = :AboutMe,
    WhyHireMe = :WhyHireMe,
    ProfessionalOverview = :ProfessionalOverview,
    ProfileViews = :ProfileViews,
    ProfilePicture = :ProfilePicture
   WHERE ID = $ID";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':AccountType', $AccountType);
      $stmt->bindParam(':FullName',    $FullName);
      $stmt->bindParam(':Email',       $Email);
      $stmt->bindParam(':Password',    $Password);
      $stmt->bindParam(':DOB',         $DOB);
      $stmt->bindParam(':Province',    $Province);
      $stmt->bindParam(':Profession',  $Profession);
      $stmt->bindParam(':Category',    $Category);
      $stmt->bindParam(':Skills',      $Skills);
      $stmt->bindParam(':AboutMe',     $AboutMe);
      $stmt->bindParam(':WhyHireMe',   $WhyHireMe);
      $stmt->bindParam(':ProfessionalOverview',    $ProfessionalOverview);
      $stmt->bindParam(':ProfileViews',            $ProfileViews);
      $stmt->bindParam(':ProfilePicture',          $ProfilePicture);
      
      $stmt->execute();

      echo '{"notice": {"text": "Freelancer Successfully Updated!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Customer Registration
$app->post('/api/authentication/Customer/add', function (Request $request, Response $response) {

   $AccountType = $request->getParam('AccountType'); 
   $FullName = $request->getParam('FullName'); 
   $Email = $request->getParam('Email'); 

   //Password Hashing
   $UserPassword = $request->getParam('Password'); 
   $Password = password_hash($UserPassword,PASSWORD_DEFAULT);

   $DOB = $request->getParam('DOB'); 
   $Province = $request->getParam('Province'); 
   $ProfilePicture = $request->getParam('ProfilePicture'); 

    $sql = "INSERT INTO customer(AccountType,FullName,Email,Password,DOB,Province,ProfilePicture) VALUES (:AccountType,:FullName,:Email,:Password,:DOB,:Province,:ProfilePicture)";

   try{
       $db = new db();
       $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':AccountType', $AccountType);
      $stmt->bindParam(':FullName',    $FullName);
      $stmt->bindParam(':Email',       $Email);
      $stmt->bindParam(':Password',    $Password);
      $stmt->bindParam(':DOB',         $DOB);
      $stmt->bindParam(':Province',    $Province);
      $stmt->bindParam(':ProfilePicture',$ProfilePicture);
      
      $stmt->execute();

      echo '{"notice": {"text": "Customer Successfully Added!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});

//Update Customer
$app->put('/api/authentication/Customer/update/{id}', function (Request $request, Response $response) {
   $ID = $request->getAttribute('id'); 

   $AccountType = $request->getParam('AccountType'); 
   $FullName = $request->getParam('FullName'); 
   $Email = $request->getParam('Email'); 
   $Password = $request->getParam('Password'); 
   $DOB = $request->getParam('DOB'); 
   $Province = $request->getParam('Province'); 
   $ProfilePicture = $request->getParam('ProfilePicture'); 

   $sql = "UPDATE customer SET
    AccountType = :AccountType,
    FullName = :FullName,
    Email = :Email,
    Password = :Password,
    DOB = :DOB,
    Province = :Province,
    ProfilePicture = :ProfilePicture
   WHERE ID = '$ID'";
  
   try{
      $db = new db();
      $db = $db->connect();

      $stmt = $db->prepare($sql);

      $stmt->bindParam(':AccountType', $AccountType);
      $stmt->bindParam(':FullName',    $FullName);
      $stmt->bindParam(':Email',       $Email);
      $stmt->bindParam(':Password',    $Password);
      $stmt->bindParam(':DOB',         $DOB);
      $stmt->bindParam(':Province',    $Province);
      $stmt->bindParam(':ProfilePicture',$ProfilePicture);
      
      $stmt->execute();

      echo '{"notice": {"text": "Customer Successfully Updated!"}';
       
   }catch(PDOException $e){
       echo '{"error": {"text": '.$e->getMessage().'}';
   }
});




