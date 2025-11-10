<?php
session_start();
require_once("functions.php");
require_once("creds.php");
require_once("WebServiceClient.php");
$_SESSION['errors'] = array();
$_SESSION['loggedIn'] = false;

if (!isset($_POST['username']) || empty($_POST['username'])) {
	$_SESSION['errors'][] = "Please enter a username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
	$_SESSION['errors'][] = "Please enter a password";
}


$url = "https://cnmt310.classconvo.com/classreg/";
$client = new WebServiceClient($url);
$data = array("username" => $_POST['username'], "password" => $_POST['password']);
$action = "authenticate";
$fields = array("apikey" => APIKEY,
             "apihash" => APIHASH,
              "data" => $data,
             "action" => $action,
             );
$client->setPostFields($fields);
$result = $client->send();
$jsonResult = json_decode($result);
if (json_last_error() !== JSON_ERROR_NONE) {
  print "Result is not JSON";
  exit;
}

if ($jsonResult->result == "Success") {
	$_SESSION['loggedIn'] = true;
  $_SESSION['data'] = $jsonResult->data;
	die(header("Location: " . PAGE_LANDING));
} else {
	$_SESSION['errors'][] = "User not found or password incorrect";
}

if (count($_SESSION['errors']) > 0) {
	die(header("Location: " . PAGE_HOME));
}
