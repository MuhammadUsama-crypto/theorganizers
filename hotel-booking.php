<?php

    include 'navheader.php';
?>

    <!-- BreadCrumb Starts -->  
    <section class="breadcrumb-main" style="background-image: url(images/bg/booking-hotel.jpg);">
        <div class="breadcrumb-outer pt-10">
            <div class="container">
                <div class="breadcrumb-content d-md-flex align-items-center pt-10">
                    <h2 class="mb-0">Hotel Booking</h2>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Hotel Booking</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="dot-overlay"></div>
    </section>
    <!-- BreadCrumb Ends --> 

    <!-- blog starts -->
    <section class="blog trending destination-b pb-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-xs-12 mb-4">
                    <div class="payment-book">  

                        <div class="description flight-book mb-4">
                            <div class="detail-title"><h3>YOUR PERSONAL INFORMATION</h3></div>
                            <div class="description-content">
                                <form>
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" id="fName" placeholder="Enter full name">
                                    </div>
                                    <div class="form-group">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" id="email1" placeholder="abc@xyz.com">
                                    </div>
                                    <div class="form-group col-left-padding">
                                        <label>Phone Number:</label>
                                        <input type="text" class="form-control" id="phnumber1" placeholder="XXXX-XXXXXX">
                                    </div>
                                    <div class="form-group">
                                        <label>Arrival Date:</label>
                                        <input type="text" class="form-control" id="arrival-date">
                                    </div>
                                    <div class="form-group col-left-padding">
                                        <label>Departure Date:</label>
                                        <input type="text" class="form-control" id="departure-date">
                                    </div>
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" id="date1" placeholder="Select Date">
                                    </div>
                                    <div class="form-group col-left-padding">
                                        <label>No of Tickets:</label>
                                        <input type="number" class="form-control" id="ticketno" placeholder="Select a number">
                                    </div>
                                    <div class="form-group">
                                        <label>Gender:</label>
                                        <select class="niceSelect">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-left-padding">
                                        <label>Nationality:</label>
                                        <select class="niceSelect">
                                            <option value="american">American</option>
                                            <option value="opel">Malaysian</option>
                                            <option value="audi">German</option>
                                        </select>   
                                    </div>
                                    <div class="form-group textarea col-xs-12">
                                        <label>Message:</label>
                                        <textarea placeholder="Enter a message"></textarea>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="pretty p-default p-thick p-pulse mb-2 mr-0 d-flex align-items-center">
                                            <input type="checkbox" />
                                            <div class="state p-warning-o">
                                                <label> I want to receive <a href="#">Let’s Travel</a> promotional offers in the future terms and conditions.</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <div class="description flight-book mb-4">
                            <div class="detail-title"><h3>YOUR CARD INFORMATION</h3></div>
                            <div class="description-content">
                                <form>
                                    <div class="form-group">
                                        <label>Name:</label>
                                        <input type="text" class="form-control" id="Name" placeholder="Enter fname in card">
                                    </div>
                                    <div class="form-group">
                                        <label>Card Number:</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter Card Number">
                                    </div>
                                    <div class="form-group">
                                        <label>Booking ID:</label>
                                        <input type="text" class="form-control" id="phnumber" placeholder="XXXXX">
                                    </div>
                                    <div class="form-group">
                                        <label>Expiry Date:</label>
                                        <input type="text" class="form-control" id="expiredate">
                                    </div>
                                    <div class="form-group">
                                        <label>Card Type:</label>
                                        <select>
                                            <option value="male">MasterCard</option>
                                            <option value="female">Paypal</option>
                                            <option value="other">Visa</option>
                                            <option value="other">Discover</option>
                                        </select>
                                    </div>
                                    <div class="pretty p-default p-thick p-pulse mb-2 d-flex align-items-center mr-0">
                                        <input type="checkbox"/>
                                        <div class="state p-warning-o">
                                            <label> I agree to the <a href="#">terms and conditions.</a></label>
                                        </div>
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <div class="description detail-box car-book mb-4">
                            <div class="detail-title"><h3>Where should we send your confirmation?</h3></div>
                            <p>Please enter the email address where you would like to receive your confirmation.</p>
                            <div class="description-content">
                                <form>
                                    <div class="form-group mb-0">
                                        <label>Email:</label>
                                        <input type="text" class="form-control" id="email-add" placeholder="abc@xyz.com">
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <div class="description detail-box car-book mb-4">
                            <div class="detail-title">
                                <h3>Review and book your trip</h3>
                            </div>
                            <div class="alert alert-info p-3">
                                Attention! Please read important flight information!<br>
                                <p class="font-italic">• Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor dolor quis sapien rhoncus, a mollis felis hendrerit. Nam dapibus vitae justo in faucibus.</p>
                            </div>  
                            <form>
                                <div class="checkbox-outer">
                                    <input type="checkbox" name="vehicle2" value="Car"> By selecting to complete this booking I acknowledge that I have read and accept the <a href="#">rules & restrictions</a> <a href="#">terms & conditions</a> , and <a href="#">privacy policy.</a>
                                </div>
                            </form>          
                        </div>
                        <div class="comment-btn mb-4">
                            <a href="#" class="nir-btn">Confirm Booking</a>
                        </div>

                        <div class="description detail-box mb-4">
                            <div class="booking-box">
                                <div class="booking-box-title d-md-flex align-items-center bg-pink p-4 mb-4">
                                    <i class="fa fa-check"></i>
                                    <div class="title-content ml-3">
                                        <h3 class="mb-0 white">Thank You. Your booking order is confirmed now.</h3>
                                        <p class="mb-0 white">A confirmation email has been sent to your provided email address.</p>
                                    </div>
                                </div>
                                <div class="travellers-info mb-2">
                                    <h4>Traveler Information</h4>
                                    <table>
                                        <tr>
                                            <td>Booking Number</td>
                                            <td>5784-BD245</td>
                                        </tr>
                                        <tr>
                                            <td>First Name</td>
                                            <td>Jessica</td>
                                        </tr>
                                        <tr>
                                            <td>Last Name</td>
                                            <td>Brown</td>
                                        </tr>
                                        <tr>
                                            <td>Email Address</td>
                                            <td>info#jessica.com</td>
                                        </tr>
                                        <tr>
                                            <td>Street Address and number</td>
                                            <td>353 Third floor Avenue</td>
                                        </tr>
                                        <tr>
                                            <td>Town/City</td>
                                            <td>Paris</td>
                                        </tr>
                                        <tr>
                                            <td>ZIP Code</td>
                                            <td>75800-875</td>
                                        </tr>
                                        <tr>
                                            <td>Country</td>
                                            <td>France</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="booking-border mb-2 bg-lgrey p-4">
                                    <h4 class="border-b pb-2 mb-2">Payment</h4>
                                    <p>This is the third time I've used Travelo Website and telling you the truth their services are always reliable and it ony takes few minutes to plan and finalize.</p>
                                    <a href="#">Payment is made by Credit Card via Paypal</a>
                                </div>
                                <div class="booking-border mb-2 bg-lgrey p-4">
                                    <h4 class="border-b pb-2 mb-2">View Booking Details</h4>
                                    <p>This is the third time I've used Travelo Website and telling you the truth their services are always reliable and it ony takes few minutes to plan and finalize.</p>
                                    <a href="#">https://www.travel.com/booking-details</a>
                                </div>
                                <div class="booking-border d-flex">
                                    <a href="#" class="nir-btn mr-4"><i class="fa fa-print"></i> Print</a>
                                    <a href="#" class="nir-btn-black"><i class="fa fa-envelope-open-text"></i> Send To</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-xs-12 mb-4">
                    <div class="sidebar-sticky">
                        <div class="sidebar-item mb-4">
                            <div class="trend-item mb-0">
                                <div class="trend-image">
                                    <img src="images/rooms/list1.jpg" alt="image">
                                    <div class="trend-tags">
                                        <a href="#"><i class="flaticon-like"></i></a>
                                    </div>
                                </div>
                                <div class="trend-content-main">
                                    <div class="trend-content">
                                        <h4 class="mb-1 p-0 bordernone"><a href="#" class="" tabindex="0">Park Avenue Baker Street</a></h4>
                                        <p class="mb-0"><i class="fa fa-map-marker mr-2 grey"></i> Lyuishen Tokya, Japan</p>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-sidebar">
                            <div class="sidebar-item">
                                <h3>Booking Detail</h3>
                                <ul class="list-unstyled font-size-1 mb-0 font-size-16">
                                    <li class="d-flex justify-content-between py-1 border-b">
                                        <span class="font-weight-medium">Date <br> 22/09/2019, 00:00 AM <br> 23/09/2019, 00:00 AM</span>
                                        <span class="text-secondary"><a href="#" class="text-underline">Edit</a></span>
                                    </li>

                                    <li class="d-flex justify-content-between py-1 border-b">
                                        <span class="font-weight-medium">Car type</span>
                                        <span class="text-secondary">Hatchbacks</span>
                                    </li>

                                    <li class="d-flex justify-content-between py-1 border-b">
                                        <span class="font-weight-medium">Pick Up From</span>
                                        <span class="text-secondary">Los Angeles</span>
                                    </li>

                                    <li class="d-flex justify-content-between py-1 border-b">
                                        <span class="font-weight-medium">Drop Off To</span>
                                        <span class="text-secondary">California</span>
                                    </li>

                                    <li class="d-flex justify-content-between py-1">
                                        <span class="font-weight-medium">Est. Distance</span>
                                        <span class="text-secondary">50 kilometer</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="sidebar-item">
                                <h3>Payment</h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td> Price</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Number of Travellers</td>
                                            <td class="pink">1</td>
                                        </tr>
                                        <tr>
                                            <td>Infant Price</td>
                                            <td class="pink">$0.00</td>
                                        </tr>
                                        <tr>
                                            <td>Subtotal</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Total</td>
                                            <td class="pink">$580.00</td>
                                        </tr>
                                        <tr>
                                            <td>Tax &amp; fee</td>
                                            <td class="pink">0</td>
                                        </tr>
                                    </tbody>
                                    <tfoot class="bg-pink">
                                        <tr>
                                            <th class="font-weight-bold white">Amount</th>
                                            <th class="font-weight-bold white">$580.00</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog Ends -->  

    <?php
    include 'footer.php';
    ?>