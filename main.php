<?php

require '/./libs/Slim/Slim.php';
require '/./libs/rb.php';
include "routes/login.php";
include "routes/register.php";
include "routes/petitions.php";
 
\Slim\Slim::registerAutoloader();

// set up database connection
R::setup('mysql:host=localhost;dbname=doctornowv1','root','');

//R::freeze(true);
$app = new \Slim\Slim();
$app->contentType('application/json');


$app->post('/', function() use ($app) {
session_start(); // Starting Session

$result = $app->request->post('username');
echo $result;




});


$app->run();

?>