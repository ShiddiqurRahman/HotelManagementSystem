<?php
//including the database connection file
include_once("config.php");

session_start();

//fetching data in descending order (lastest entry first)
$result = mysql_query("SELECT * FROM booking ORDER BY id DESC");
?>

<html>
<head>	
	<title>Guest List</title>
	
	<meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content ="width=device-width, initial-scale=1.0">
     <title>Devil is back</title>
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link href="css/carousel.css" rel="stylesheet -->"
     <link href="css/style.css" rel="stylesheet">

</head>

<body>
       
 


    <?php
      if(isset($_SESSION['name']) && !empty($_SESSION['name']))
     {
          
           require('admin_ul.php');
      }

      else
      {
          // echo "Restricted Page....only Admin can access it";
          header("Location:index.php");
      }
      ?>

         




    
  <div>
   


  <h3> <b><ul>Customer Details</ul></b></h3>
	<table align="center" width='100%' border=1>
     
	<tr>
		<th>Name</th>
		<th>Checkin Date</th>
		<th>Checkout Date</th>
		<th>Room type</th>
		<th>Room number</th>
		<th>Person</th>
		<th>Address</th>
		<th>Contact no:</th>
	   
	</tr>
	<?php 
	while($res = mysql_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['name']."</td>";
		echo "<td>".$res['checkin']."</td>";
		echo "<td>".$res['checkout']."</td>";
        echo "<td>".$res['roomtypes']."</td>";	
        echo "<td>".$res['roomnum']."</td>";	
        echo "<td>".$res['adult']."</td>";	
        echo "<td>".$res['address']."</td>";	
        echo "<td>".$res['contact']."</td>";		
		
		
				
	}
	?>
	</table>


  </div>




	 <footer class="site-footer">
        <div class="container">
            <div class="row">
            <div class="col-md-5">
                <h4>Reach Us @</h4>
                <address>
                     Road 19,House 41<br>
                     Nikunjo-2<br>
                     Dhaka.
                  </address>
                </div>  
            </div>
            
            <div class="bottom-footer">
                 <div class="col-md-5">Copyright devilwolf-It</div>
                 <div class="col-md-7">
                     <ul class="footer-nav">
                          <li ><a href="adminhome.php">Admin Home</a></li>
                          <li ><a href="showguest.php">See Booking List</a></li>
                         <li ><a href="showfeedback.php">See Feedback</a></li>
                         
                     
                 </div>
            </div>
            </div>

           
      </footer>


         <script src="js/jquery.js"></script>
         <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
         <script src="js/bootstrap.js"type="text/javascript"></script>
          <script>
                        $('.dropdown').hover(function(){ 
                       $('.dropdown-toggle', this).trigger('click'); 
                      });
          </script>

                    
</body>
</html>
