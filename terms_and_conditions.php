<?php
 // has database username and password, so don't need to put it in the page.
require "include/dbinfo.php";

// connect to the database
include_once 'include/db_connect.php';

//URL for the site so we don't have to retype it
require "include/url.php";

//bring in the header information
require "include/head/head.php";

?>
<html>
<body id="page-top" class="index">

<?
//bring in the top nav bar
require "include/topnavigation/topnavigation.php";
?>


<!-- The body of your page goes here -->
 <!-- Privacy Section -->
    <a name="privacy"></a>
    <a name="terms"></a>
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Privacy Policy</h2>

                    <p class="text-left">
                        This is easy - we never share any of your information - period. The highest level of security available is used to process all credit card transactions. We take your privacy seriously and will not jeopardize it in anyway.
                    </p>
                </div>
            </div>

            <br />


            <!-- Terms and Conditions section  -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Rental Terms and Conditions</h2>

                    <div class="text-left">

                        <p> Rentals through Hill Country Gear are subject to the following terms and conditions. If you have any questions or concerns, please contact us.</p>

                        <h3>Short Version</h3>
                        <p>

                            Have fun, don’t destroy our stuff, return it clean and on time, and we will charge you what we agreed.</p>
                        <br />

                        <a name="long_version_top"></a>
                        <h3>Long Version</h3>
                        <br />

                        <div class="text-center">
                            <a href="#start_date">Start Date</a> | <a href="#">Return Date</a> | <a href="#">Delivery and Shipping</a> | <a href="#">Days of Use</a> | <a href="#">Damages and Cleaning</a> | <a href="#">Cleanliness</a> | <a href="#">Deposits and Payments</a>                            | <a href="#">Late Charges</a> | <a href="#">Reservations/Cancellations</a> | <a href="#">Gear Availability</a> | <a href="#">Loss/Theft/Not Returned</a> | <a href="#">Sales Tax</a> | <a href="#">Liability</a>
                        </div>

                        <br />
                        <a name="start_date"></a>
                        <h4>Start Date</h4>
                        <p>
                            Your start date is the day you need your gear. For example, if you are leaving Friday afternoon, your start date is Friday. We will deliver your gear the day prior, unless we all agree on other arrangements.</p>
                        <p>
                            We do not deliver on Saturdays and Sundays, so take this into account when selecting your start date. Therefore, you cannot have your start date be Sunday or Monday. If you prefer to pickup your equipment, contact us to schedule an appointment.</p>
                        <div class="text-right"><a href="#long_version_top"><i class="fa fa-chevron-up"></i> Back to Top </a></div>

                        <a name="return_date"></a>
                        <h4>Return Date</h4>
                        <p>This is the date you must drop your gear off. We give you a one-day grace period to return your gear, since showering is probably higher on your to-do list when returning from the backwoods. If you can’t make the return date, you
                            will be charged late fees according to our policy.</p>
                        <p>For an additional fee, we can pick up the gear from you. The fee for picking up gear is $2/driving mile from our location in SW Austin.</p>
                        <div class="text-right"><a href="#terms"><i class="fa fa-chevron-up"></i> Back to Top </a></div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    
<?
//bring in the footer
require "include/footers/footer.php";
?>

</body>
</html>