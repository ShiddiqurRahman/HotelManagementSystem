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
 
 
		$title = $_POST['title'];
		$details = $_POST['details'];
		
 
	$sql = "INSERT INTO offer (title, details)
			VALUES ('".$title."', '".$details."')";
 
	if ($conn->query($sql) === TRUE)
	{
		echo "New Offer created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
 
?>