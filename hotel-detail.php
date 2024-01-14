<?php

    include 'navheader.php';
    include 'config.php';
    $id = $_GET['id'];
?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/hotel-booking.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotel Detail</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel Detail</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends -->  

    <!-- blog starts -->
    <?php
                        
                        $sql = "SELECT * FROM `hotel` WHERE `id` = $id";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="single-content">

                   


                        <div class="description" id="description">
                            <div class="single-full-title border-b mb-2 pb-2">
                                <div class="single-title">
                                    <ul class="d-md-flex mb-2">
                                        <li class="bg-pink py-1 px-3 white mr-2">Newly renovated</li>
                                        <li class="bg-navy py-1 px-3 white">Free Wi-Fi</li>
                                    </ul>
                                    <div class="d-block d-md-flex flex-horizontal-center mb-1">
                                        <h4 class="font-weight-bold mb-0 mr-2"><?php echo $row['hotelName'];  ?></h4>
                                        <div class="rating">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                    </div>
                                    <p class="mb-0">
                                        <i class="fa fa-map-marker-alt mr-2"></i> <?php echo $row['city'];  ?>
                                        <a href="<?php echo $row['map'];  ?>"> - View on map</a>
                                    </p>
                                </div>
                            </div>

                            <div class="single-slider">
                                <div class="slider-1 slider-store">
                                <?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="detail-slider-item">
                                        <img src="dashmin-1.0.0/img/userImages/<?php echo $imagePath ?>" alt="image">
                                    </div>
                                <?php  } ?>
                                    
                                </div>
                                <div class="slider-1 slider-thumbs">
                                <?php
                                    $imagePaths = $row['images'];
                                    $imagePaths = explode(",",$imagePaths);
                                    foreach ($imagePaths as $imagePath) {
                                    ?>
                                    <div class="detail-slider-item">
                                    <img src="dashmin-1.0.0/img/userImages/<?php echo $imagePath ?>" alt="image">
                                    </div>
                                    <?php  } ?>
                                    
                                    
                                </div>
                            </div>
                            <div class="description-inner mb-2 mt-1">
                                <h4>Description</h4>
                                <p> <?php echo $row['description']; ?> </p>
                            </div>

               
                            <div class="description-inner">
                                <h4>Select Your Room</h4>
                                        
                                <?php
                                    
                                $roomSql = "select * from `room` WHERE `hotel`='$id'";
                                $roomResult = mysqli_query($conn, $roomSql);
                                while($roomRow = mysqli_fetch_assoc($roomResult)) {
                                ?>
                                

                                <div class="product-item__outer w-100 border p-4 mb-2">
                                    <div class="row d-flex align-items-center justify-content-between">
                                        <div class="col-md-4 col-lg-4">
                                            <div class="product-item__header">
                                                <img class="img-fluid w-100" src="dashmin-1.0.0/img/userImages/<?php echo $roomRow['image']; ?>" alt="Image Description">
                                            </div>
                                        </div>
                                        <div class="col-md-5 col-lg-5">
                                            <div class="rooms-content py-2">
                                                <h5 class="mb-1"><a href="#" class="font-weight-bold"><?php echo $roomRow['type']; ?></a></h5>
                                                <div class="row">
                                                <?php
                                    $services = $roomRow['services'];
                                    $services = explode(",",$services);
                                    foreach ($services as $service) {
                                    ?>
                                                    <div class="col-lg-6 col-md-6 mb-1"><i class="fa fa-wifi"></i><?php echo $service; ?></div>
                                                   <?php } ?>
                                                    <div class="col-lg-12"><a href="#" class="text-underline font-size-14">Room photos and details</a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-lg-3">
                                            <form action="">
                                                <label for="roomNumbers" class="form-label">No. of Rooms</label>
                                                <input type="number" class="" name="roomNumbers" value="1">
                                            </form>
                                            <div class="rooms-pricing text-center">
                                                <p class="mb-1">From <span class="font-weight-bold ml-1"><?php echo $roomRow['price']; ?></span>
                                                    <span> / night</span>
                                                </p>
                                                <a href="#" class="nir-btn w-100">Book Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php } ?>

                                
                            </div>
                        </div>

                        

                        <div class="single-map mb-4" id="single-map">
                            <h4>Map</h4>
                            <div class="map">
                                <div style="width: 100%">
                                <?php echo $row['map']; ?>
                                </div>
                            </div>
                        </div>

                        <div class="single-review mb-4" id="single-review">
                            <h4>Average Reviews</h4>
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-4 col-md-4">
                                    <div class="review-box bg-pink text-center pb-4 pt-4">
                                        <h2 class="mb-1 white"><span>2.2</span>/5</h2>
                                        <h4 class="white mb-1">"Feel so much worst than thinking"</h4>
                                        <p class="mb-0 white font-italic">From 40 Reviews</p>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="review-progress">
                                        <div class="progress-item">
                                            <p>Cleanliness</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Facilities</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                                                    <span class="sr-only">30% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Value for money</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Service</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="progress-item">
                                            <p>Location</p>
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width:45%">
                                                    <span class="sr-only">45% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- blog comment list -->
                        <div class="single-comments single-box mb-4" id="single-comments">
                            <h5 class="border-b pb-2 mb-2">Showing 16 verified guest comments</h5>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/1.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">The worst hotel ever"</span>
                                    </div>    
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-image">
                                    <img src="images/reviewer/2.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h5 class="mb-1">Helena</h5>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">Was too noisy and not suitable for business meetings"</span>
                                    </div> 
                                    
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                        <div class="like-btn pull-right">
                                            <a href="#" class="like"><i class="fa fa-thumbs-up"></i> Like</a>
                                            <a href="#" class="disike"><i class="fa fa-thumbs-down"></i> Dislike</a>
                                            <a href="#" class="love"><i class="flaticon-like"></i> Love</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- blog review -->
                        <div class="single-add-review" id="single-add-review">
                            <h4>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="list-sidebar">
                            <div class="sidebar-item d-flex align-items-center">
                                <span class="border py-1 px-2 mr-2"><a href="#"><i class="flaticon-like"></i></a></span>
                                <span class="border py-1 px-2 mr-2"><a href="#"><i class="fa fa-share-alt"></i></a></span>
                                <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                <span class="ml-2"><strong class="pink">Excellent</strong> (38 Reviews)</span>
                            </div>
                        </div>
                        <div class="sidebar-item mb-4">
                            <form class="form-content">
                                <h4 class="title white font-weight-normal">From <span class="font-weight-bold">£350.00</span> / night</h4>
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check In</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range0" type="text" placeholder="yyyy-mmm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Check Out</label>
                                            <div class="input-box">
                                                <i class="flaticon-calendar"></i>
                                                <input id="date-range1" type="text" placeholder="yyyy-mm-dd">
                                            </div>                            
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Adult</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="white">Children</label>
                                            <div class="input-box">
                                                <i class="flaticon-add-user"></i>
                                                <select class="niceSelect">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>                             
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-0">
                                            <a href="#" class="nir-btn w-100"><i class="fa fa-search"></i> Check Availability</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h3>Popular Rooms</h3>
                                <div class="about-slider">
                                    <div class="trend-item mb-0">
                                        <div class="trend-image">
                                            <img src="images/rooms/list1.jpg" alt="image">
                                            <div class="deal-item bg-pink py-1 px-2">
                                                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> Greater London, United Kingdom</p>
                                            </div>
                                        </div>
                                        <div class="trend-content-main shadow-none">
                                            <div class="trend-content pb-0">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4 class="bordernone pt-1"><a href="#">Empire Prestige Causeway Bay</a></h4>
                                                <p class="mb-2">
                                                    From: <span class="font-weight-bold pink">£350.00 </span>/ Night
                                                </p>
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trend-item mb-0">
                                        <div class="trend-image">
                                            <img src="images/rooms/list2.jpg" alt="image">
                                            <div class="deal-item bg-pink py-1 px-2">
                                                <p class="mb-0 white"><i class="fa fa-map-marker mr-2"></i> Lyuishen Tokya, Japan</p>
                                            </div>
                                        </div>
                                        <div class="trend-content-main shadow-none">
                                            <div class="trend-content pb-0">
                                                <div class="rating-main d-flex align-items-center pb-1">
                                                    <span class="rating bg-navy px-2 white py-1">4.5/5</span>
                                                    <span class="ml-2">38 Reviews</span>
                                                </div>
                                                <h4 class="bordernone pt-1"><a href="#">Park Avenue Baker Street</a></h4>
                                                <p class="mb-2">
                                                    From: <span class="font-weight-bold pink">£450.00 </span>/ Night
                                                </p>
                                                <p class="mb-0 trend-para">A wonderful little cottage right on the seashore - perfect for exploring.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-item">
                                <h3>Why Book With Us?</h3>
                                <div class="services-list">
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-tag pink mr-2"></i>
                                        <span>No-hassle best price guarantee</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-phone-alt pink mr-2"></i>
                                        <span>Customer care available 24/7</span>
                                    </div>
                                    <div class="d-flex align-items-center mb-2 pb-2 border-b">
                                        <i class="fa fa-star pink mr-2"></i>
                                        <span>Hand-picked Tours & Activities</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <i class="fa fa-plane pink mr-2"></i>
                                        <span>Free Travel Insureance</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php } ?>
    <!-- blog Ends -->  

    <?php
    include 'footer.php';
    ?>