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
            <h3>WEB DESIGN</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, mollitia.</p>
              
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


    <div class="container">
      <div class="row">
          <div class="col-md-5">
              <div class="panel panel-default">
                 <div class="panel-heading">
                <h4><a href="signup.php">Register Now!!! @</a></h4>
                 </div>
              <div class="panel-body">
                 
                <address>
                    <strong>Become Registered Customer</strong><br>
                     To Get Exiciting Offers...<br>
                    <strong>DreamyNight@</strong><br>
                     Dhaka.
                 </address>
           </div>
           </div>
           </div>


        <div class="col-md-7">
          <div class="panel panel-default">
           <div class="panel-heading">
                 <h4 class="panel-title"><strong>Login Here!!!!</strong></h4>
            </div>

           <div class="panel-body">
            <form method="post" action="config.php">

               <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" name="name" id="username" placeholder="Enter Name">
              </div>

              <div class="form-group">
                 <label for="userpass">Password</label>
                 <input type="password" class="form-control" name="password" id="userpass" placeholder="Enter Password">
              </div>

              <button type="submit" class="btn btn-default" name="btn-login" name="btn-login">Submit</button>
             
              </form>
               
           </div>
           </div>
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