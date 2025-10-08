<?php
session_start();

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	die(header("Location: index.php"));
}
require_once("functions.php");

print getTop();

print getLoggedInPage();
print "<a href=\"logout.php\">Logout</a>\n";

print getEnd();
