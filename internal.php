<?php
$db=mysqli_connect("localhost","root","","inter");
if(isset($_GET['insert']))
{
	$source=$_GET['source'];
	$destin=$_GET['destin'];
	mysqli_query($db,"INSERT INTO users(source,destin) VALUES('$source','$destin')");
}
?>
<!DOCTYPE html>
<html>
<body>
	<div style="border: 1 px soild black;width: 200px;margin: auto;">
		<form>
			<input type="text" name="source"><br>
			<input type="text" name="destin"><br>
			<input type="submit" name="insert" value="insert">
		</form>
	</div>

</body>
</html>