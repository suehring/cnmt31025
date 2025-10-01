<?php
session_start();
require_once("functions.php");
$_SESSION['errors'] = array();

if (!isset($_POST['username']) || empty($_POST['username'])) {
	$_SESSION['errors'][] = "Please enter a username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
	$_SESSION['errors'][] = "Please enter a password";
}

if ($_POST['username'] == "steve") {
	die(header("Location: account.php"));
} else {
	$_SESSION['errors'][] = "User not found or password incorrect";
}

if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
	die(header("Location: index.php"));
}