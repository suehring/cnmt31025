<?php

define("PAGE_ACCOUNT","account.php");
define("PAGE_HOME","index.php");
define("PAGE_LANDING","customer.php");
define("PAGE_LOGOUT","logout.php");

function getLoggedInPage() {
	$return = "";
	$return .= "<h1>Hello, you are logged in</h1>";
	return $return;
}

function getEnd() {
	$return = "";
	$return .= "</body>\n";
	$return .= "</html>\n";
	return $return;
}

function getTop($title="My Page") {
	$return = "";
	$return .= "<!DOCTYPE html>\n";
	$return .= "<html lang=\"en\">\n";
	$return .= "<head>\n";
	$return .= "<link rel=\"stylesheet\" href=\"style.css\">\n";
	$return .= "<script src=\"script.js\"></script>\n";
	$return .= "<title>" . $title . "</title>\n";
	$return .= "</head>\n";	
	$return .= "<body>\n";
	return $return;
}
