<?php 
include 'db.php';
include 'common.php';
$name =  $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$address = $_POST['address'];


$query = 'insert into users values('.$name.','.$email.','.$password.','.$contact.','.$address')'
 $link  = dbconnect("users");
if(!mysqli_query($link,$query)){
	error("database error");
}


?>
