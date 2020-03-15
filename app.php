<?php
if(isset($_POST['submit'])){
$db=mysqli_connect("localhost","root","","log");
$username=$_POST['username'];
$password=$_POST['password'];
$que1="INSERT INTO `log`(`id`, `username`, `password`) VALUES ([$username],[$password])";
$result=mysqli_query($db,$que1);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="app.php" method="POST">
		<fieldset>
			Username:<br>
			<input type="text" name="username">
			<br>
			Password:<br>
			<input type="password" name="password">
			<br><br>
			<input type="submit" name="submit">
		</fieldset>
	</form>
		</fieldset>
</body>
</html>