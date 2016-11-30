<?php
include_once("config.php");

   $query = mysql_query("SELECT * FROM feedback ") or die(mysql_error());
  
   
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
          
           require('admin_ul.php');
      }

      else
      {
         header("Location:index.php");
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
            <div class="accommodation" id="fbpagetop">
          </div>
            <h3>Feed back list of the customers</h3>
          </div>
          </div>


          <div>
               <div class="panel panel-default">
                <div class="panel-body divcolor">
           
           
             
              <?php 
             while($row = mysql_fetch_assoc($query))

             {?>
            
              <!--  
                   $title=$row['title'];
                   $details=$row['details']; -->
                  

               <h3> <?php echo nl2br ($row["name"])?></h3>
                  

               <?php echo nl2br ($row['message'])?>
                <?php echo"<br>";?>

               <?php
               
                      }?>  

                   <!-- echo "$title";
                   echo"'<br>'";
                   echo "$details"; -->

                      
              

          </div>
            </div>
            </div>

           
          
           
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