<!doctype html>
<html>
 <head>
     <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content ="width=device-width, initial-scale=1.0">
     <title>Devil is back</title>
	 <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/bootstrap.css" rel="stylesheet">
     <link href="css/style.css" rel="stylesheet">
     <link href="css/carousel.css" rel="stylesheet">
 <link rel="stylesheet" href="js/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>
    <script src="js/ui.js"></script>
  </head>
  
  
     <body>
      
  
    <?php

       require('navbar2.php');


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
                 <h4 class="panel-title">Register Now!!! @</h4>
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
                 <h4 class="panel-title">User Details@</h4>
            </div>

           <div class="panel-body">
            <form method="post" name="frm"onsubmit="return validation()" id="contactform" action="adduser.php">
               <div class="form-group">
                <label for="Title">Title</label>
                <div class="row">
               <div class="col-xs-3">
                 <select class="form-control" name="title" id="options">
            <option>Mr.</option>
             <option>Ms.</option>
  
               </select>
           </div>
           </div>
           </div>

             <div class="form-group">
                <label for="contactname">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
              </div>

              <div class="form-group">
                 <label for="contactemail">Email</label>
                 <input type="text" class="form-control" name="email" id="email" placeholder="Enter Email">
              </div>

              <div class="form-group">
                 <label for="contactemail">Password</label>
                 <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter Password">
              </div>
                
              <div class="form-group">
                  <label for="mailing address">Mailing Address</label>
                 <textarea class="form-control" name="address" id="address" rows="6"></textarea>
           </div>


           <div class="form-group">
             <label for="contact_number">Contact Number</label>
           <input type="text" class="form-control" name="con" id="contact_Number" placeholder="Enter Contact">
          </div>
               
               
              
<input type="submit" value="Submit" id="submit" onclick="return val();" />
         </form>
              
               
      </div>
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
                         <li><a href="index.html">Home</a></li>
                         <li><a href="blog.html">Blog</a></li>
                         <li><a href="content.html">Content</a></li>
                         <li><a href="link.html ">Link</a></li>
                         
                     
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
                       
                         if(!validateText("email"))
                         {
                             return false;
                             
                         }
						 if(!validateText("pass"))
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
if(frm.con.value=="")
{
	alert("Please enter the phone number");
	frm.con.focus(); 
	return false;
}
if(isNaN(frm.con.value))
{
	alert("Invalid phone number");
	frm.con.focus(); 
	return false;
}
if((frm.con.value).length <= 0)
{
	alert("Phone number should be minimum a digit");
	frm.con.focus(); 
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
if ((a.length < 1) || (a.length > 15))
{
alert("In name Your Character must be 1 to 15 Character");
document.frm.name.select();
return false;
}

}
</script>
      
         
 
    
  
   </body>
   
   </html>