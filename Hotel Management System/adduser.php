<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");
   

	$title= $_POST['title'];
	$name= $_POST['name'];
	$email= $_POST['email'];
	$pass= $_POST['pass'];
	$add= $_POST['address'];
    $con= $_POST['con'];

	
	   $sql_check = mysql_query("select email from userinfo where email='".$email."'")
                 or die(mysql_error());

              if(mysql_num_rows($sql_check)) {
              echo '<font color="red">The email <strong>'.$email.'</strong>'.
                   ' is already in use.</font>';
                }
                else {
                  $result = mysql_query("INSERT INTO userinfo(title,name,email,password,address,contact) VALUES('$title','$name','$email','$pass','address','con')");
		
		             //display success message
		              echo "<font color='green'>User Registered Successfully";
		               echo "<br/><a href='login.php'>Login</a>";
                   }
		
	

?>
</body>
</html>