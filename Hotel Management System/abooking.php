<?php
    
   include_once("config.php");
   
     session_start();
      
     // if(isset($_SESSION['name']) && !empty($_SESSION['name']))
     // {
     //      $fname = $_SESSION['name'] ;
     //  }
    // else
    // {
    //     die("Please Login");
    // }
             
   
    



?>










<!-- strat of navigation Bar-->
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="view" content="width=device-width, initial-scale=1.0">
    <title>Hotel Management</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

     <link href="css/lightbox.css" rel="stylesheet">


   
   


</head>


     <body>
      
  
      <?php

      if(isset($_SESSION['name']) && !empty($_SESSION['name']))
     {
          
           require('navbar1.php');
      }

      else
      {
          require('navbar2.php');
      }
      ?> 
    



         <!-- Start of navigation bar -->
     
              <div class="jumbotron">
                 <!-- <div class="container"> -->
                 
                 <img src="image/4(1).jpg" >

                 <!-- </div> -->
                 </div>
             
             
             
             <div class="container" >
                 <div class="row">
                     <div class="span7 offset5">
                     
                         <div class ="panel panel-default"style ='background-color: #E6E6E6'>
                             <div class="panel-heading">
                                <h4 class="panel-title">Booking Information</h4>  
                                 
                                 </div>
                                 <div class="panel-body">
<strong>Thank you for your booking with us. We will contact you soon. </strong>
<br>
<br>

</div>
</div>
</div>
 
  </div>
  </div>


<br>


 




     <?php

     
     
          
           require('footer.php');
    


      ?>

       <!-- <footer class="site-footer">
             <div class="container">
             <div class="row"> 
                 <div class ="col-md-5" >
                 <h4>Contact address:</h4>
                 <address>
                   Flat no:a3,Green tower<br>
                   pahartoli,chittagong<br>
                   Bangladesh.  
                     
                     </address>
                 
                 
                   
             </div>
             </div>
             <div class="bottom-footer">
                 <div class="col-md-5">@Copyright hasan 2016.</div>
                 <div class="col-md-7">
                     <ul class="footer-nav">
                         <li><a href="index.html">Home</a></li>
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="contact.html">contacts</a></li>
                         <li><a href="Link.html">Link</a></li>
                     </ul>
                     </div>
                     </div>
                     </div>
                     
                 
                 
             </footer> -->
			 

             
             </body>
             </html>