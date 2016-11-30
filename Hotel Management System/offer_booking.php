<?php
    
   include_once("config.php");
    session_start();
    $first=$_GET['first'];
                
   
    



?>

<!doctype html>
<html>
 <head>
     <meta charset="utf-8">
     <meta name="view" content="width=device-width, initial-scale=1.0">
     <title>tting Started</title>
     <link href="css/bootstrap.min.css" rel="stylesheet">
   
     <link href="css/style.css" rel="stylesheet">
     
       <link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
    <script src="js/ui.js"></script>
     

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



<form method="post"   id="contactform" action="addoffer.php" role="form">
  <div class="form-group">
    <label for="checkin">Check In Date</label>
    <input type="date" class="form-control" name="date1" id="check-in" disabled value="<?php echo($_POST['date1']) ?>">
  </div>
  <div class="form-group">
    <label for="checkout">Check Out Date</label>
    <input type="date" class="form-control" name="date2" id="check-out" disabled  value="<?php echo($_POST['date']) ?>">
  </div>



   <div name="divq" class="form-group">
    <label for="checkout">Offer</label>
    <input type="text" class="form-control" name="offer" id="offer"  value="<?php if(!empty ($_GET['first'])) 

           {
        
              echo ($_GET['first']);


           } 

            else {

                 echo "Not Appicable";

            }

             ?>">
            



  </div>

<div class="form-group">
    <label for="Room Types">Room Types</label>

  <div class="row">
  <div class="col-xs-6">
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" disabled  value="option1">
Delax King
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$265++</p>

</div>
</div>  



 <div class="row">
  <div class="col-xs-6">
  <div class="radio">

  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" disabled  value="option2">
 Super  Delax 
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$289++</p>

</div>
</div>  

 <div class="row">
  <div class="col-xs-6">
  <div class="radio">

  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios3" disabled  value="option3">
 Premium King
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$340++</p>

</div>
</div>  


 <div class="row">
  <div class="col-xs-6">
  <div class="radio">

  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios4" disabled value="option4">
 Premium Twin
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$360++</p>

</div>
</div>  


<div class="row">
  <div class="col-xs-6">
  <div class="radio">

  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios5" disabled  value="option5">

    
 Crown Suite
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$480++</p>

</div>
</div>  


<div class="row">
  <div class="col-xs-6">
  <div class="radio">

  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios6" disabled  value="option6">
 Imperial Suite
  </label>
</div>  
</div>

<div class="col-xs-3">
<p>$360++</p>

</div>
</div>  
</div>



<div class="form-group">
<label for="no_of_rooms">No. Of Rooms</label>
<select class="form-control" name="numroom" id="no_of_rooms" disabled>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>
</div>




<div class="form-group" >
<label for="no_of_nights">No Of Night</label>
<select class="form-control" name="numnight" id="no_of_nights" disabled>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
</select>

 
</div>



<div class="form-group">
    <label for="no_of_persons" >No. of persons</label>

    
   
<div class="row">
  <div class="col-xs-3">
    <input type="text" class="form-control" name="adult" disabled placeholder="Adult">
  </div>
  <div class="col-xs-3">
    <input type="text" class="form-control" name="child" disabled  placeholder="Child">
  </div>
</div>
</div>
<br>


 <?php

      if(isset($_SESSION['name']) && !empty($_SESSION['name']))
       {
        
      
              
               require('booking_personal1.php');

        }
        

          




      else
        {
          require('booking_personal2.php');
        }
 ?>


<?php


    require('footer.php');


?>










  <script type="text/javascript">   
 $(function() {
      $( "#check-in" ).datepicker({
        minDate: 0,
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        numberOfMonths: 2,
        changeYear: true,
        onClose: function( selectedDate, inst ) {
             var minDate = new Date(Date.parse(selectedDate));
             minDate.setDate(maxDate.getDate() + 1);
            $( "#check-out" ).datepicker( "option", "minDate", minDate);
        }
    });

    $( "#check-out" ).datepicker({
        minDate: "+1D",
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        numberOfMonths: 2,
        changeYear: true,
        onClose: function( selectedDate, inst ) {
             var maxDate = new Date(Date.parse(selectedDate));
             maxDate.setDate(maxDate.getDate() - 1);            
            $( "#check-in" ).datepicker( "option", "maxDate", maxDate);
        }
    });
  });
  </script>
    
             <script>
             function validateText(id)
             {
                 if($("#"+id).val()==null || $("#"+id).val()=="")
                 {
                     var div =$("#"+id).closest("div");
                     div.removeClass("has-success");
                      $("#glypcn"+id).remove();
                     div.addClass("has-error has-feedback");
                                          div.append('<span id="glypcn'+id+'" class="glyphicon glyphicon-remove form-control-feedback"></span>');
                    
                     return false;
                 }
                 else
                 {
                      var div =$("#"+id).closest("div");
                      
                     div.removeClass("has-error");
                    div.addClass("has-success has-feedback");
                    $("#glypcn"+id).remove();
                     div.append('<span id="glypcn'+id+'"class="glyphicon glyphicon-ok form-control-feedback"></span>');
                     return true;
                 }
                 
             }
             $(document).ready(
                 
                 function()
                 {
                     
                     $("#contactbtn").click(function()
                     
                     {
                       if(!validateText("check-in"))
                         {
                             return false;
                             
                         }
                         if(!validateText("check-out"))
                         {
                             return false;
                             
                         }
                         if(!validateText("name"))
                         {
                             return false;
                             
                         }
                        
                         $("form#contactform").submit();
                        
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                     });
                     
                     
                     
                     
                     
                     
                 }
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
             );
             
             
             
             
             
             
             
             
             </script>
             
             </body>
             </html>