<?php
session_start();
require_once("functions.php");
require_once("classes/Page/Page.php");

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	die(header("Location: " . PAGE_HOME));
}

$page = new MyNamespace\Page("Class Registration Account Area");
print $page->getTopSection();

print "<h1>Your Account</h1>\n";
print "<a href=\"" . PAGE_LANDING . "\">Home</a><br />\n";
print "<a href=\"" . PAGE_LOGOUT . "\">Logout</a><br />\n";

print $page->getBottomSection();
