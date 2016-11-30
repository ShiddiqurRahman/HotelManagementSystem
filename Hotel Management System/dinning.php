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
     
     <img src="image/b.jpg">
     
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
          <p>Enjoy a truly unique culinary experience at Hotel, Dhaka with different types of dining options prepared by our award-winning chefs. There is never a lack of choice at Hotel.</p>

    
      </div></div></div>

      
    </div>
    <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Amrit – Taste of Indian Cuisine</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/7.jpg" data-lightbox="galeria" ><img src="images/13.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>The Amrit name came from spiritual thoughts, what means a test of ecstasy. We are proud to generate such as test & hospitality with the atmosphere to enjoy delicious delicacies at Amrit Restaurant.
            </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingOne">
                                <div class="panel-body">
                                  Open for Dinner 6:00pm to 11:00pm, Everyday
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Risotto – A premium Italian Restaurant</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/8.jpg" data-lightbox="galeria" ><img src="images/14.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>Italy comes to the tropics in this intimate Italian bistro. Perched high overlooking the city business areas, Risotto specialize in Italian cuisine, fashioned by chefs who are experts with traditional ingredients and techniques & authentic Italian specialties. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   headingTwo">
                                <div class="panel-body">
                                  Open 12:00pm to 3:00pm (Lunch, Except Friday) & 6:00pm to 11:00pm (Dinner, Everyday)
                                </div>
                              </div>
         </div>   
       </div>
      </div>



      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Elite Lounge</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/9.jpg" data-lightbox="galeria" ><img src="images/15.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>This is a colonial-style French. It has that convincing atmosphere of the old Colonial days, with carpet floors and figures depicting the old Sinhalese chieftains. This ornate bar is where 's night-time action can be found. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseThree">
                                <div class="panel-body">
                                  6:00pm to 11:00pm (Happy hour, 5.30pm to 6.30pm)
                                </div>
                              </div>
         </div>   
       </div>
      </div>



      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>The Elite – Thai Cuisine</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/10.jpg" data-lightbox="galeria" ><img src="images/16.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>The Elite - Thai cuisine brings you the very best of Thai hospitality and cuisine on 17th floor of the hotel beside the lounge. With a reputation of authenticity and excellence, The Elite stays true to the culinary culture and influences of Thailand. Every delicacy we offer is exciting and prepared with the freshest ingredients from Thailand. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseFour">
                                <div class="panel-body">
                                  6:00pm to 11:00pm, Everyday
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Summerfields - A coffee Shop</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/11.jpg" data-lightbox="galeria" ><img src="images/17.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>Classic food, contemporary style where the action in the kitchen is in full view. The atmosphere is enhanced by the soothing sound of soul and chill-out music. The restaurant specialists in the best International and sub continental meal. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseFive">
                                <div class="panel-body">
                                  Open 24 Hours, Seven days in a week.
                                </div>
                              </div>
         </div>   
       </div>
      </div>


      <div class="row">
       <div class="col-md-8 col-md-offset-2 "> 
      <div class="panel panel-default">
      <div class="panel-body">
       <h4>Picasso Bar</h4>
        <div class="bottom-footer">
           
            <div class="col-md-8 col-md-offset-2">
            </div> 
          </div>
          <div class="col-md-6"><a href="img/12.jpg" data-lightbox="galeria" ><img src="images/18.jpg" ></a></div>
           <div class="col-md-6">
      
          <p>After a long day of business and meetings, Picasso is an ideal bar to unwind and let the stresses of the day slip away. </p>



                                    
                                <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Read more...
                                  </a>
                                </h4>
                              
                                
                </div>
            </div>           <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="                                                                                   collapseSix">
                                <div class="panel-body">
                                  Open 5:00pm to 11:00pm
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