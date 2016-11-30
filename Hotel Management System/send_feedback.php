<?php
 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "hotel";
 
// Create connection
	$conn = new mysqli($servername, $username, $password, $database);
 
	if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
	} 
 
 
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];


		
 
	$sql = "INSERT INTO feedback (name, email,message)
			VALUES ('".$name."', '".$email."','".$message."')";
 
	if ($conn->query($sql) === TRUE)
	{
		echo "Thanks For Your Feedback";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
 
?>