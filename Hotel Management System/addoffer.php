<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");
   

	$offer= $_POST['offer'];
	$name= $_POST['name'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	

            
                  $result = mysql_query("INSERT INTO offerbooking(offername,name,address,contact) VALUES('$offer','$name','$address','$contact')");
		
		             //display success message
		              header("location:abooking.php");
		
	

?>
</body>
</html>