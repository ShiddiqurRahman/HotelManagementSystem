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



<!doctype html>
<html>
 <head>
     <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content ="width=device-width, initial-scale=1.0">
     <title>DREAMY NIGHT</title>
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link href="css/carousel.css" rel="stylesheet">

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
    
  
    <div class="jumbotron">
      <div id="myCarousel" class="carousel slide" data-ride="carousel" >
      <ol class="carousel-indicators">
        <li  data-target="#myCarousel" data-slide-to="0"></li>
        <li  data-target="#myCarousel" data-slide-to="1"></li>
        <li  data-target="#myCarousel" data-slide-to="2"></li>
        <li  data-target="#myCarousel" data-slide-to="3"></li>
        
      </ol>

      <div class="carousel-inner" role="listbox">

        <div class="item active">
          <img src="images/slide1.jpg" class="img-responsive">
            <div class="carousel-caption">
            <p>HOTEL DREAMY NIGHT</p>
              
            </div>
        </div>

        <div class="item">
          <img src="images/slide2.jpg" class="img-responsive">
        </div>
    
         <div class="item ">
          <img src="images/slide3.jpg" class="img-responsive">
        </div>

        <div class="item">
          <img src="images/slide4.jpg" class="img-responsive">
        </div>

      
      </div>

      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="icon-prev"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="icon-next"></span></a>

      
    </div>
  
     </div>
  
  
     

    <?php

      if(isset($_SESSION['name']) && !empty($_SESSION['name']))
     {
          
           require('user_index.php');
      }

      else
      {
          require('normal_index.php');
      }
      ?>

        
   

        


       
    </div>

 </div>



    
   <?php

     
     
          
           require('footer.php');
    


      ?>


     
      
         
 
    
  
   </body>
   
   </html>