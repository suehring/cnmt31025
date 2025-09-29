<?php

require_once("functions.php");

$userError = "";
$passError = "";
if (!isset($_POST['username']) || empty($_POST['username'])) {
	$userError = "Please fill in the username";
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
	$passError = "Please fill in the password";
}
print getTop();

print "<h1>Login Process</h1>\n";
print "<form action='login-process.php' method='POST'>\n";
print "User: <input type='text' name='username'>" . $userError . "<br>\n";
print "Pass: <input type='password' name='password'>" . $passError . "<br>\n";
print "<input type='submit' name='submit_form'>\n";
print "</form>\n";

print getEnd();


	