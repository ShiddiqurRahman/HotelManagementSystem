  
    <nav class="navbar navbar-inverse navbar-static-top no-margin" role="navigation">
       <div class="container-fluid">
           <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-Options-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
             </button>
           <a class="navbar-brand" href="#"><img src="images/Devilwolf.png" class="img-responsive"</a>
       
          </div>
           
          <div class="collapse navbar-collapse navbar-right" id="bs-Options-navbar-collapse-1" >
             <ul class="nav navbar-nav">
                <li background:color="white"> 


                  <?php

                    if(isset($_SESSION['name']) && !empty($_SESSION['name']))
                    {
                           $fname = $_SESSION['name'] ;
                           echo "$fname";
                           
                    }

                    
                   ?>

                   </li>


                

              
                
                <li ><a href="adminhome.php">Admin Home</a></li>
                <li ><a href="showguest.php">See Booking List</a></li>
                <li ><a href="showfeedback.php">See Feedback</a></li>
                 <li ><a href="offeredcustomer.php">See offered customer</a></li>
                <li class="dropdown">
                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">More <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  
                   <li><a href="logout.php">Sign out</a></li>
                   <li><a href="#">Subscribe us</a></li>
                   
                </ul>


               </li>
            

            
         </ul>
       </div>
     <div>  
   </nav>
    
  
