<?php
session_start();
require_once("functions.php");
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	die(header("Location: " . PAGE_HOME));
}

print getTop();

print getLoggedInPage();
print "<a href=\"logout.php\">Logout</a>\n";

print getEnd();
