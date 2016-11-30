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
    <title>DREAMY NIGHT</title>
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
 <!-- end of navigation Bar-->
 <div class="jumbotron ">
     
     <img src="image/feedback.jpg">
     
 </div> 



   <div class="container">
      <div class="row">
          <div class="col-md-5">
              <div class="panel panel-default">
                 <div class="panel-heading">
                 <h4 class="panel-title">Reach Us @</h4>
                 </div>
              <div class="panel-body">
                 
                <address>
                    <strong>Devilwolf</strong><br>
                     Road 19,House 41<br>
                     Nikunjo-2<br>
                     Dhaka.
                 </address>
           </div>
           </div>
           </div>
      <div class="col-md-7">
          <div class="panel panel-default">
           <div class="panel-heading">
                 <h5>We would be delighted to hear from you. Please send us a message and we will get back to
you as soon as possible.</h5>
         <hr >
                 <h5 class="panel-title">Contact Us@</h5>
                 </div>
          <div class="panel-body">
          <form id="myFOrm">
             <div class="form-group">
                <label for="contactname">Name</label>
                <input type="text" class="form-control" name="name" id="contactname" placeholder="Enter Name">
            </div>
              <div class="form-group">
                 <label for="contactemail">Email</label>
                 <input type="text" class="form-control" name="email" id="contactemail" placeholder="Enter Email">
              </div>
                
               <div class="form-group">
                   <label for="contactMessage">Message</label>
                    <textarea class="form-control" name="message" id="contactMessage" rows="6" placeholder="Enter Message"></textarea>
               </div>
               
               
               
              
                    <input type="button" onclick = "sendData()" name="submit" value="submit">
         </form>
              
               
      </div>
      </div>        
      </div>
  </div>
  </div>




  <script>
  function sendData()
  {
    var data = new FormData($('#myFOrm')[0]);//this will select all the form data in variable.
    document.getElementById("contactname").value="";
    document.getElementById("contactemail").value="";
    document.getElementById("contactMessage").value="";


 
    $.ajax({
      type:"POST",
      url:"send_feedback.php",
      data:data,
      contentType: false,
            cache: false,
            processData: false,
      success:function(dta)
      {
        alert(dta);
      }


    });
  }
 
  </script>
   


<!-- strat of the Footer-->
<?php

     
     
          
           require('footer.php');
    


      ?>

<script src="js/lightbox.js"></script>



  
</body>
</html>