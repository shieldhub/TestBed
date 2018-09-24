<html>
<body>

<form action="xss2.php" method="post">
Message: <input type="text" name="message"><br>
<input type="submit">
</form>

<?php
	$conn = mysqli_connect('localhost', 'root', '', 'testbed');
	$message = $_POST["message"];
	//$message = htmlentities($message);

	$sql = "INSERT INTO xss2 (message) VALUES ('$message')";
	$conn->query($sql);

	$sql = "select message from xss2";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
    		while($row = $result->fetch_assoc()) {
        		echo "Message: " . $row["message"]. "<br>";
   		}
	}else 	{
    		echo "0 results";
		}
?>

</body>
</html>
