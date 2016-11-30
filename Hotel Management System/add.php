<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php

include_once("config.php");
   
if (isset($_POST['optionsRadios']))


{



	$checkin = $_POST['date1'];
	$checkout = $_POST['date2'];
	$roomtypes = $_POST['optionsRadios'];
	$roomnum = $_POST['numroom'];
	
	$adult = $_POST['adult'];
	$title= $_POST['title'];
	$name= $_POST['name'];
	$address= $_POST['address'];
	$contact= $_POST['contact'];
	
	
		
	
	if(empty($checkin) || empty($checkout) || empty($name) || !isset($_POST['optionsRadios']) ) {
				
		if(empty($checkin)) {
			echo "<font color='red'>checkin field is empty.</font><br/>";
		}
		
		if(empty($checkout)) {
			echo "<font color='red'>checkout field is empty.</font><br/>";
		}
		
		if(empty($name)) {
			echo "<font color='red'>name field is empty.</font><br/>";
		}
			if(!isset($_POST['optionsRadios'])) {
			echo "<font color='red'>Room field empty</font><br/>";
			
		}
		
		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		
		$result = mysql_query("INSERT INTO booking(checkin,checkout,roomtypes,roomnum,adult,title,name,address,contact) VALUES('$checkin','$checkout','$roomtypes','$roomnum','$adult','$title','$name','$address','$contact')");
				
		
		
		
		header("Location:abooking.php");
		
	}







}



else


{
   echo "Please Choose A Room Type";
   echo"<br>";
     echo "<a href='"."booking.php"."''>Go Back</a>";


}
	

?>
</body>
</html>
