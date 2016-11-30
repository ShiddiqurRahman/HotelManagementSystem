<div class="form-group">
    <label for="personal details">Personal details</label>
</div>



   <?php

        if(isset($_SESSION['name']) && !empty($_SESSION['name']))
          {
                        $query = mysql_query("SELECT * FROM  `userinfo` WHERE  `name` LIKE  '$fname'");

             while($row = mysql_fetch_array($query))
           {
                $title = $row['title'];
                $name =$row['name'];
                $address=$row['address'];
                $contact=$row['contact'];                        
           } 
                           
                    

          }

                    
   ?>


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
    <label for="Name">Name</label>
    <!-- <input type="text" class="form-control" name="name" id="name" placeholder="name"> -->
    <?php

    echo "<input type='text' id='name' name='name' value='$name' />"

    ?>
  </div>


   <div class="form-group">
    <label for="mailing address">Mailing Address</label>
   <!--  <textarea class="form-control" name="address" id="mailing address" rows="6"></textarea>  -->
    
    <?php

    echo "<input type='text' id='name' name='address' value='$address' />"

    ?>
  
    </div>

   <div class="form-group">
    <label for="contact_number">Contact Number</label>
   <!--  <input type="text" class="form-control bfh-number" data-zeros="true"" data-max="11" name="contact" id="contact_number" placeholder="contact number"> -->

    <?php

    echo "<input type='text' id='contact' name='contact' value='$contact' />"

    ?>
  </div>







 
  <input type="submit" value="Submit" id="submit" />
</form>   
                                  
                                     
                                     
                                     
                                     </div>
                                     </div>
                         
                         
                         
                         
                         
                         
                     </div>
                     
                     </div>
                     </div>
                  