<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="site.php" method="get">
<center>Name: <input type="text" name="name"></center>
<br>
<center><input type="submit"></center>
<br>
<center><?php echo $_GET["name"]?></center>	
</form>
</body>
</html>