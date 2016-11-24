<?php //db.php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";

function dbconnect($db=""){
	global $dbhost,$dbuser,$dbpass;

	echo $db;

	$link = mysqli_connect($dbhost,$dbuser,$dbpass)
	or die ("the site datavase appears to be down.");

	if(!mysqli_set_charset($link,'utf8')){
	
	$output = "unable to set databse connection encoding";
	echo $output;
	
}

if(!mysqli_select_db($link,$db)){
	$output = "unable to locate the databse jokes";
	echo $output;
	
}

	return $link;
}

?>
