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
     
     <img src="image/c.jpg">
     
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
          <p>Enjoy your stay in style with 6 different types of rooms to choose from Deluxe king to Imperial Suite - with bird's eye view of the city from each room. Each room is elegantly designed with luxury and comfort in mind. For your personal safety and privacy, each floor is accessible only with an electronic card key and an in-room electronic safe to safeguard your valuables.</p>

    
      </div></div></div>

      
    </div>
    <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Delux king</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/1.jpg" data-lightbox="galeria" ><img src="images/1.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>All Deluxe King rooms have a large king size bed. Other room amenities include 21'' Flat TV, International channels, complimentary Wi-Fi connections, safe in room, local/international direct dial and work desk.  </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingOne">
                                <div class="panel-body">
                                  These rooms are also available at non-smoking floor if requested. Extra bed is also available upon request.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Super Delux</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/2.jpg" data-lightbox="galeria" ><img src="images/2.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>Our Super Deluxe Rooms feature contemporary furnishings and are enhanced with warm colors to provide a relaxing experience for guests.</p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingTwo">
                                <div class="panel-body">
                                  All Super deluxe rooms have large King Size Bed. Other amenities includes Master Controller, LED TV, International channels, complimentary Wi-Fi connections, safe in room, local/international direct dial and work desk. These rooms are also available at non-smoking floor if requested. Extra bed is also available upon request.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Premium king</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/3.jpg" data-lightbox="galeria" ><img src="images/3.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>The Premium Room is a cozy one having elegant furnishing, promising you heavenly rest from your busy day of business, office and sightseeing. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingThree">
                                <div class="panel-body">
                                 All Premium King rooms have a large king size bed. Other room amenities include Master Controller, LED TV, International channels, complimentary Wi-Fi connections, safe in room, local/international direct dial and work desk. These rooms are also available at non-smoking floor if requested. Extra bed is also available upon request.Premium Room guests at this hotel also enjoy complimentary evening snacks in our club lounge at 17th floor during 6.30pm to 7.30pm.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Premium Twin</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/4.jpg" data-lightbox="galeria" ><img src="images/4.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>All Premium twin rooms have two king size bed. Other amenities Include LED TV, International channels, complimentary Wi-Fi connections, safe in room, local/international direct dials and work desk. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingFour">
                                <div class="panel-body">
                                  These rooms are also available at non-smoking floor if requested.Premium Twin Room guests at this hotel also enjoy complimentary evening snacks in our club lounge at 17th floor during 6.30pm to 7.30pm.
                                </div>
                              </div>
         </div>   
       </div>
      </div>




      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Crown Suite</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/5.jpg" data-lightbox="galeria" ><img src="images/5.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>Indulge in the fine elegance of our spacious Crown Suite, decked in opulent tones and featuring a large living area and spacious bedroom. For your added privacy, the living and dining area is ideal for business discussions over a cup of coffee. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingFive">
                                <div class="panel-body">
                                 The bedroom also features a spacious work area with hi-speed Wi-Fi connections.Other room amenities include Master Controller, LED TV, International channels, complimentary Wi-Fi connections, safe in room, local/international direct dial and work desk. These rooms are also available at non-smoking floor if requested.Crown Suite Room guests at this hotel also receive complimentary evening snacks in our club lounge at 17th floor during 6.30pm to 7.30pm.
                                </div>
                              </div>
         </div>   
       </div>
      </div>




      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Imperial Suite</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="image/6.jpg" data-lightbox="galeria" ><img src="images/6.jpg" ></a>


        
          </div>
           <div class="col-md-6">
      
          <p>Be captivated by the grandeur of the Imperial Suite with its lavish, opulent furnishings. Showcasing an extravagance in design as well as classic sophistication, the Imperial Suite boasts an unparalleled class of comfort. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingSix">
                                <div class="panel-body">
                                  Luxuriate in the lifestyle-oriented designed suite as you unwind after a long day in the living room, with a giant plasma television equipped with surround-sound and an embedded stereo system.Imperial Suite consists of one master bedroom with one extra bed room with king size bed. Other room amenities include two LED TV sets (one in master bed and other one in extra bed room) International channels, complimentary Wi-Fi connections, safe in room, local/international direct dial and work desk.Imperial Suite Room guests at this hotel also receive complimentary evening snacks in our club lounge at 17th floor during 6.30pm to 7.30pm.Whether it is for business or leisure, our dedicated butler will be on call to ensure that your every need is properly attended with due care.
                                  » N.B. Extra Person/Bed US$ 25. Rates are subject to 10% service charge and 15% VAT.
 
                                </div>
                              </div>
         </div>   
       </div>
      </div>






      
    
 </div>

<?php

     
     
          
           require('footer.php');
    


      ?>

<script src="js/lightbox.js"></script>




  
</body>
</html>