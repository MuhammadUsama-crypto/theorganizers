
<?php

    include 'config.php';

    $id  = $_GET['id'];

    
?>


<?php


            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="editAction.php" method="post" enctype="multipart/form-data">
                      <?php 
                        $sql = "select * from `hotel` where `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($result)){
                      ?>

                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="id" value="<?php echo $id; ?>" style="display:none;">
      <label class="form-label" for="form6Example1">Hotel Name</label>
        <input type="text" name="hotelName" value="<?php echo $row['hotelName']; ?>" id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">City</label>
        <input type="text" value="<?php echo $row['city']; ?>" name="city" id="form6Example2" class="form-control" />
      </div>
    </div>
  </div>
   <div class="row mb-4">
    <div class="col">
      <h3>Feature Image</h3>
     <img src="img/userImages/<?php echo $row['featureImg']; ?>" alt="img" height="100px" width="100px">
    </div>
    <div class="col">
      <h1>All Images</h1>
      <?php
      $imagePaths = $row['images'];
      $imagePaths = explode(",",$imagePaths);
      foreach ($imagePaths as $imagePath) {
          echo '<img src="img/userImages/' . $imagePath . '" alt="Image" height="100px" width="100px" style="margin: 3px">';
      }
      ?>
    </div>
  </div>


  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Feature Image</label>
        <input type="file"  name="featureImg" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Images</label>
        <input type="file" value="<?php echo $row['images']; ?>"  name="images[]" id="form6Example2" class="form-control" Multiple/>
        
      </div>
    </div>
  </div>
  
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Price</label>
        <input type="text" value="<?php echo $row['price']; ?>" name="price" id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Map</label>
        <input type="text" value="<?php echo $row['map']; ?>" name="map" id="form6Example2" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="form-outline">
      <label class="form-label" for="form6Example2">Services</label>
        <input type="text-area" value="<?php echo $row['services']; ?>" name="services" id="form6Example2" class="form-control" />
        
      </div>
  <div class="form-outline">
      <label class="form-label" for="form6Example2">Description</label>
        <input type="text-area" value="<?php echo $row['description']; ?>" name="desc" id="form6Example2" class="form-control" />
      </div>
      <button type="submit" name="updateHotel" class="btn btn-primary my-2">Add Hotel</button>
<?php } ?>
    </form>

</div>
</div>
</div>
    <!-- form end -->


<?php 
    include 'footer.php';
?>
