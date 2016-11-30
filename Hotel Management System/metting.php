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
     
     <img src="image/meet.jpg">
     
 </div> 
 <!-- End of jumbotron-->
 
<!--start of websites main content-->

 <div class="container">
    
      <div class="row">

      <div class="col-md-8 col-md-offset-2 ">
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Rooms & Suites</h4>
        <div class="bottom-footer">
           
            
          </div> 
          <p>With fully equipped meeting rooms, innovative break activities, chill out space, exclusive business center, banqueting space and a dedicated Event & IT manager, Sarina seamlessly blends your requirements for flawless execution making it an ideal venue for your meetings, events and seminars.</p>

    
      </div></div></div>

      
    </div>
   <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Baithak</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="imag/7.jpg" data-lightbox="galeria" ><img src="images/7.jpg" ></a></div>
           <div class="col-md-6">
      
          <table style="width:100%">
            <tr>
            <td>Total Space</td><td>:</td> <td>3,000 Sft.</td>
            </tr>
            <tr>
            <td>Theater Style</td><td>:</td> <td> 250 px</td>
            </tr>
            <tr>
            <td>Class Room</td><td>:</td> <td>75 px</td>
            </tr>
            <tr>
            <td>U-Shape/H Squaree</td><td>:</td> <td>60 px</td>
            </tr>
            <tr>
            <td>Banquet/Dinner</td><td>:</td> <td>160 px</td>
            </tr>
            <tr>
            <td>Total Space</td><td>:</td> <td>200 px</td>
            </tr>
           
            
              
            
          </table><br>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingOne">
                                <div class="panel-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
         </div>   
       </div>
      </div>

      
      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Jalsha</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="imag/8.jpg" data-lightbox="galeria" ><img src="images/8.jpg" ></a></div>
           <div class="col-md-6">
      
           <table style="width:100%">
            <tr>
            <td>Total Space</td><td>:</td> <td>3,000 Sft.</td>
            </tr>
            <tr>
            <td>Theater Style</td><td>:</td> <td> 250 px</td>
            </tr>
            <tr>
            <td>Class Room</td><td>:</td> <td>75 px</td>
            </tr>
            <tr>
            <td>U-Shape/H Squaree</td><td>:</td> <td>60 px</td>
            </tr>
            <tr>
            <td>Banquet/Dinner</td><td>:</td> <td>160 px</td>
            </tr>
            <tr>
            <td>Total Space</td><td>:</td> <td>200 px</td>
            </tr>
           
            
              
            
          </table><br>




                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseTwo">
                                <div class="panel-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Utshav</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="imag/9.jpg" data-lightbox="galeria" ><img src="images/9.jpg" ></a></div>
           <div class="col-md-6">
      
        <table style="width:100%">
            <tr>
            <td>Total Space</td><td>:</td> <td>3,000 Sft.</td>
            </tr>
            <tr>
            <td>Theater Style</td><td>:</td> <td> 250 px</td>
            </tr>
            <tr>
            <td>Class Room</td><td>:</td> <td>75 px</td>
            </tr>
            <tr>
            <td>U-Shape/H Squaree</td><td>:</td> <td>60 px</td>
            </tr>
            <tr>
            <td>Banquet/Dinner</td><td>:</td> <td>160 px</td>
            </tr>
            <tr>
            <td>Total Space</td><td>:</td> <td>200 px</td>
            </tr>
           
            
              
            
          </table><br>
 



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseThree">
                                <div class="panel-body">
                                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


     
      
    
 </div>

<!-- strat of the Footer-->
<?php

     
     
          
           require('footer.php');
    


      ?>

<script src="js/lightbox.js"></script>



  
</body>
</html>