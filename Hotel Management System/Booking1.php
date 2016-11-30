<?php
    
   include_once("config.php");

     session_start();


  

     
      // $fname = $_SESSION['name'] ; 
     // / if(isset($_SESSION['name']) && !empty($_SESSION['name']))
     //  {
     //       $fname = $_SESSION['name'] ;
     //  }
    // else
    // {
    //     die("Please Login");
    // }
         // echo $_SESSION['title'];
       
                
   
    



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
     
                            <div class="jumbotron ">
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



<form method="post" name="frm" onsubmit="return validation()" id="contactform" action="add.php" role="form">
  <div class="form-group">
    <label for="checkin">Check In Date</label>
    <input type="date" class="form-control" name="date1" id="check-in" value="<?php echo($_POST['date1']) ?>">
  </div>
  <div class="form-group">
    <label for="checkout">Check Out Date</label>
    <input type="date" class="form-control" name="date2" id="check-out" value="<?php echo($_POST['date']) ?>">
  </div>

<div class="form-group">
    <label for="Room Types">Room Types</label>

  <div class="row">
  <div class="col-xs-6">
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="Delax King">
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
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="Super Delax">
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
    <input type="radio" name="optionsRadios" id="optionsRadios3" value="Premium King">
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
    <input type="radio" name="optionsRadios" id="optionsRadios4" value="Premium Twin">
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
    <input type="radio" name="optionsRadios" id="optionsRadios5" value="Crown Suite">

    
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
    <input type="radio" name="optionsRadios" id="optionsRadios6" value="Imperial suite">
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
    <label for="checkout">Num. of Rooms</label>
    <input type="text" class="form-control" name="numroom" id="numroom" value="<?php echo($_POST['numroom']) ?>">
  </div>














<div class="form-group">
    <label for="checkout">No. of Persons</label>
    <input type="text" class="form-control" name="adult" id="adult" value="<?php echo($_POST['adult']) ?>">
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







       <footer class="site-footer">
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
                     
                 
                 
             </footer>
            
            
             <script src="js/bootstrap.min.js"></script>
            <script>
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
                     
                     $("#submit").click(function()
                     
                     {
                       if(!validateText("check-in"))
                         {
                             return false;
                             
                         }
                         if(!validateText("check-out"))
                         {
                             return false;
                             
                         }
						 if(!validateText("numroom"))
                         {
                             return false;
                             
                         }
						 if(!validateText("adult"))
                         {
                             return false;
                             
                         }
						 
                         
                      
                         $("form#contactform").submit();
                        
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                     });
                     
                     
                     
                     
                     
                     
                 }
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
                 
             );
             
             
             
             
             
             
             
             
             </script>
			 
			 <script type="text/javascript">
function val(){
if(frm.contact.value=="")
{
	alert("Please enter the phone number");
	frm.contact.focus(); 
	return false;
}
if(isNaN(frm.contact.value))
{
	alert("Invalid phone number");
	frm.contact.focus(); 
	return false;
}
if((frm.contact.value).length <= 0)
{
	alert("Phone number should be minimum a digit");
	frm.contact.focus(); 
	return false;
}

return true;
}
</script>

<script type="text/javascript">
function validation()
{
var a = document.frm.name.value;
if(a=="")
{
alert("Please Enter Your Name");
document.frm.name.focus();
return false;
}
if(!isNaN(a))
{
alert("In Name Please Enter Only Characters");
document.frm.name.select();
return false;
}
if ((a.length < 1) || (a.length > 100))
{
alert("In name Your Character must be 1 to 100 Character");
document.frm.name.select();
return false;
}

}
</script>

	 <SCRIPT LANGUAGE="JAVASCRIPT">
function RadioValidator()
{
    var ShowAlert = '';
    var AllFormElements = window.document.getElementById("contactform").elements;
    for (i = 0; i < AllFormElements.length; i++) 
    {
        if (AllFormElements[i].type == 'radio') 
        {
            var ThisRadio = AllFormElements[i].name;
            var ThisChecked = 'No';
            var AllRadioOptions = document.getElementsByName(ThisRadio);
            for (x = 0; x < AllRadioOptions.length; x++)
            {
                 if (AllRadioOptions[x].checked && ThisChecked == 'No')
                 {
                     ThisChecked = 'Yes';
                     break;
                 } 
            }   
            var AlreadySearched = ShowAlert.indexOf(ThisRadio);
            if (ThisChecked == 'No' && AlreadySearched == -1)
            {
            ShowAlert = ShowAlert + ThisRadio + ' Room must be Selected\n';
            }     
        }
    }
    if (ShowAlert != '')
    {
    alert(ShowAlert);
    return false;
    }
    else
    {
    return true;
    }
}
</SCRIPT>

<script type="text/javascript">
function p(){
if(frm.numroom.value=="")
{
	alert("Please enter the room number");
	frm.numroom.focus(); 
	return false;
}
if(isNaN(frm.numroom.value))
{
	alert("Invalid room number");
	frm.numroom.focus(); 
	return false;
}
if((frm.numroom.value).length >= 2)
{
	alert("Room number should be a digit");
	frm.numroom.focus(); 
	return false;
}

return true;
}
</script>



			 
			 
			 
			 
         
             
             </body>
             </html>