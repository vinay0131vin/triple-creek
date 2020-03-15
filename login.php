<?php

session_start();

if (isset($_POST['signin']))
{
   $db=mysqli_connect("localhost","root","","triplecreek");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $qry1 = "SELECT * FROM `login` WHERE (username = '$username' and password ='$password')";

   $result=mysqli_query($db,$qry1);
   $row = mysqli_fetch_assoc($result);
   $rowcount=mysqli_num_rows($result);
   if($rowcount==1) 
   	{
		$_SESSION['book'] ="true";
		$_SESSION['username'] = $username;
		$_SESSION['email'] = $row['email'];
		$_SESSION['name'] = $row['name'];
		$_SESSION['userid'] = $row['ID'];
		header("Location:index.php");
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>assignment</title>
	<link rel="stylesheet" type="text/css" href="index.css">
	<style type="text/css">
		body
		{
			background-image: linear-gradient( 109.2deg,  rgba(254,3,104,1) 9.3%, rgba(103,3,255,1) 89.5% );
		}
	</style>
</head>
<body>
	<div class="login">
		<p class="welcome">Hey!,Good to see you again!</p>
		<form method="post">
			  
			<div class="input"><input  type="text" name="username" placeholder="username"><br></div>
			<div class="input"><input  type="password" name="password" placeholder="password"></div>
			<div class="signin"><input type="submit" name="signin" value="Login"></div>
		</form>
	</div>
</body>
</html>