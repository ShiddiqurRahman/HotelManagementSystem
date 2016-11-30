<?php
include_once("config.php");

   $query = mysql_query("SELECT * FROM offer ") or die(mysql_error());
   $query1 = mysql_query("SELECT title FROM offer ") or die(mysql_error());
   
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
     <title>Devil is back</title>
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
            <h3>DREAMY NIGHT</h3>
            
              
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


      <div class="container containercolor">

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="accommodation" id="fbpagetop"><strong>Summer Package: Start 1st April &amp; Valid Till 30th June, 2016</strong><span></span>
          </div>
            <h3>(Packages are not applicable during weekends and government holidays)</h3>
          </div>
          </div>


          <div class="col-md-5">
            <div class="panel panel-default">
              <div class="panel-body sidebar">

              
                  <ul>
              
             
              <?php echo '<h4>' ."Click On The Offer Name To Book It" . '</h4>'; ?>
              

             <?php 
               while($row = mysql_fetch_assoc($query1))

             { ?>

           <?php
// Start the session
                 $title=$row["title"];
                    
                    
                  ?>
     <?php echo "<a href='"."offer_booking.php? first=$title"."' >$title</a>";

                   
                ?>
              
                <?php
                    echo"<br>";  }?>



                </ul>



             </div>
            </div>
         </div>
           
           
             <div class="col-md-7 ">
               <div class="panel panel-default">
                <div class="panel-body divcolor">
              <?php 
             while($row = mysql_fetch_assoc($query))

             { ?>
            
              <!--  
                   $title=$row['title'];
                   $details=$row['details']; -->
                  

               <?php echo nl2br($row["title"])?>
                  <?php echo"<br>";?>

               <?php echo nl2br ($row['details'])?>
               <?php echo"<br>";?>
               <?php echo"<br>";?>
               <?php echo"<br>";?>
               <?php echo "<hr />"; ?>
               <?php
                      }?>    
                   <!-- echo "$title";
                   echo"'<br>'";
                   echo "$details"; -->

                      
              



           
               </div>

               
              



                </div>
              </div>
            </div>
            </div>
            </div>
              

    <?php

     
     
          
           require('footer.php');
    


      ?>

    
      
        </body>

        </html>