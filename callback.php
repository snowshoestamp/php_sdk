<?php
include ("./inc/SSSApiClient.php");

$app_key="abcdefg"; // put app key here
$app_secret="abcdefg"; // put app secret here
$data=$_POST['data'];

$client= new SSSApiClient($app_key, $app_secret);
$JSONResponse=$client->processData($data);

//parse $JSONResponse to determine if a stamp was found. We just echo it here.
echo $JSONResponse;


?>