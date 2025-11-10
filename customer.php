<?php
session_start();
require_once("classes/Page/Page.php");
require_once("functions.php");
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	die(header("Location: " . PAGE_HOME));
}
if (!isset($_SESSION['data']) || !is_object($_SESSION['data'])) {
	die(header("Location: " . PAGE_HOME));
}
$page = new MyNamespace\Page("Class Registration");
print $page->getTopSection();


print "<h1>Welcome " . $_SESSION['data']->name . " to the Customer Portal</h1>";

print "<a href=\"" . PAGE_ACCOUNT . "\">Your Account</a><br />\n";
print "<a href=\"" . PAGE_LOGOUT . "\">Logout</a><br />\n";
print $page->getBottomSection();
