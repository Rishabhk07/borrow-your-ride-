<?php
session_start();
$error = $_SESSION['error'];
$field = $_SESSION['field'];

print_r($error);

?>

<!doctype html>
<html>
<body>
	<form action="accept.php" method="">
	<label>name
	<input type="text" name="name">
	</label>
	<br>
	<label>email
		<input type="email" name="email" >
	</label>
	<br>
	<label>password
		<input type="password" name="password">
	</label>
	<br>
	<label>contact
		<input type="number" name="contact">
	</label>
	<br>
	<label>address
		<input type="text" name ="address" >
	</label>
	<br>
	<br>
	<input type="submit" name ="signup" value="Signup" >
</form>
	</body>
</html>
