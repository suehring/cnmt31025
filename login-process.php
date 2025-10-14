<?php
session_start();
require_once("functions.php");
$_SESSION['errors'] = array();
$_SESSION['loggedIn'] = false;

if (!isset($_POST['username']) || empty($_POST['username'])) {
	$_SESSION['errors'][] = "Please enter a username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
	$_SESSION['errors'][] = "Please enter a password";
}

if ($_POST['username'] == "steve") {
	$_SESSION['loggedIn'] = true;
	die(header("Location: " . PAGE_LANDING));
} else {
	$_SESSION['errors'][] = "User not found or password incorrect";
}

if (count($_SESSION['errors']) > 0) {
	die(header("Location: " . PAGE_HOME));
}
