
<?php

    include 'config.php';

    
?>


<?php


            include 'sidebar.php';
            include 'navbar.php';
        ?>


    <!-- form -->
    <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <form action="insertAction.php" method="post" enctype="multipart/form-data">
                    <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Hotel Name</label>
        <input type="text" name="hotelName" id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">City</label>
        <input type="text" name="city" id="form6Example2" class="form-control" />
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Feature Image</label>
        <input type="file" name="featureImg" multiple id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Images</label>
        <input type="file"  name="images[]" id="form6Example2" class="form-control" Multiple/>
        
      </div>
    </div>
  </div>
  
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example1">Price</label>
        <input type="text" name="price" id="form6Example1" class="form-control" />
        
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label" for="form6Example2">Map</label>
        <input type="text" name="map" id="form6Example2" class="form-control" />
        
      </div>
    </div>
  </div>
  <div class="form-outline">
      <label class="form-label" for="form6Example2">Services</label>
        <input type="text-area" name="services" id="form6Example2" class="form-control" />
        
      </div>
  <div class="form-outline">
      <label class="form-label" for="form6Example2">Description</label>
        <input type="text-area" name="desc" id="form6Example2" class="form-control" />
      </div>
      <button type="submit" name="enterHotel" class="btn btn-primary my-2">Add Hotel</button>
</form>

</div>
</div>
</div>
    <!-- form end -->

    <!-- datatable -->

    <div class="container-fluid pt-4 px-4 dataTable">
                <div class="row">
                    <div class="col-12 col-md-12">
                    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Hotel Name</th>
                <th>city</th>
                <th>image</th>
                <th>price</th>
                <th>map</th>
                <th>Description</th>
                <th>Actions</th>

            </tr>
        </thead>
        <tbody>
        <?php
    // Display the images from the database in the sequence of their IDs
    $sql = "SELECT * FROM `hotel`";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      
        
    
?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['hotelName']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td>
                  <img src="img/userImages/<?php echo $row['featureImg']; ?>" alt="" height="100px" width="100px">
                </td>
                <td><?php echo $row['price']; ?></td>
                <td>
                <?php 
                   if (strlen($row['map']) > 50){
                     echo $str = substr($row['map'], 0, 7) . '...';
                  } else {
                    echo $row['map'];
                  }
                ?>
                </td>

                
                <td><?php 
                   if (strlen($row['description']) > 50){
                     echo $str = substr($row['description'], 0, 7) . '...';
                  } else {
                    echo $row['description'];
                  }
                ?></td>
                <td>
                <a href="editHotel.php?id=<?php echo $row['id']?>" type="button" class="btn btn-warning">Edit</a> /
                <a href="Action.php?hotel_id=<?php echo $row['id']?>" type="button" class="btn btn-danger">Delete</a>  
              </td>
                
                
              
            </tr>
           <?php } ?>
            </tbody>
                    </table>
                    </div>
                </div>
            </div>
            

    <!-- datatable end -->



<?php 
    include 'footer.php';
?>
