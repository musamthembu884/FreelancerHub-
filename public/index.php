<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

//Database Class
require '../src/Authentication/db.php';

$app = new \Slim\App;

//Authentication API
require '../src/Authentication/auth.php';

//CustomerHome API
//require '../src/customer/customerhome.php';

//CustomerIndex API
//require '../src/customer/customerindex.php';

//FreelancerViewProfile API
//require '../src/freelancer/viewprofile.php';

//FreelancerIndex API
//require '../src/freelancer/freelancerindex.php';



$app->run();