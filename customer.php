<?php
session_start();
require_once("functions.php");
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	die(header("Location: " . PAGE_HOME));
}

print getTop();

print "<h1>Welcome to the Customer Portal</h1>";

print "<a href=\"" . PAGE_ACCOUNT . "\">Your Account</a><br />\n";
print "<a href=\"" . PAGE_LOGOUT . "\">Logout</a><br />\n";

print getEnd();
