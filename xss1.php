 <html>
<body>

<form action="xss1.php" method="get">
Name: <input type="text" name="name"><br>
<input type="submit" value="SUBMIT" >

<?php 
	$name = $_GET[name];
	$name = htmlentities($name);
	echo $name; 
?>

</form>
</body>
</html> 
