<html>
<body>

<form action="xss2.php" method="post">
Message: <input type="text" name="message"><br>
<input type="submit">
</form>

<?php 
	$conn = mysqli_connect('localhost', 'root', '', 'testbed');
	$message = $_POST["message"];
	
	$sql = "INSERT INTO xss2 (message) VALUES ('$message')";
	$conn->query($sql);	
?>

<br>msg: <?php echo $_POST["message"]; ?><br>

</body>
</html> 



<?php

//$conn = new mysqli('localhost', 'root', '', 'testbed');

//$sql = "INSERT INTO xss2 (message)
//VALUES ('xxxxxxxxxx')";

//$conn->query($sql);

//$conn->close();
?>
