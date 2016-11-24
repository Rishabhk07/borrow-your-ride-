<?php
session_start();
$error = [];
if(isset($_POST['name'],$_POST['email'],$_POST['password']))
{
	$fields=[
		'name'=>$_POST['name'],
		'email'=>$_POST['email'],
		'password'=>$_POST['password']
	];


	foreach ($fields as $field => $data) {
		# code...

		if(empty($data)){
			$error[] = 'The ' .$field. ' is required';
		}
	}
		
}else{
	$error[] = "Something went wrong";
}

$_SESSION['error'] = $error;
$_SESSION['field'] = $fields;

header('Location: signup.php');


?>