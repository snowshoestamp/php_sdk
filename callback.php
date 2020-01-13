<?php
include ("./inc/SSSApiClient.php");

$api_key="abcdefg"; // put api key here
$data=$_POST['data'];

$client= new SSSApiClient($api_key);
$JSONResponse=$client->processData($data);

//parse $JSONResponse to determine if a stamp was found. We just echo it here.
echo $JSONResponse;


?>