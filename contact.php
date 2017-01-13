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
<section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We would love to help you!  Please contact us for dates and availability.</h3>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-left">Hill Country Gear</h4>
                    <p>
                        Email: info@hillcountrygear.com
                    </p>
                    <p>
                        Phone: (512) 790-4327
                    </p>
                </div>
            </div>

            <br />
            <br />


            <div class="row">
                <!-- Contact Section -->
                <div class="col-lg-12 text-center">
                    <h4 class="text-left">Send us a message!</h4>

                    <form action="https://docs.google.com/forms/d/e/1FAIpQLSf4MqHbEd4rKftn6Lrna0yYPkOgNkMWEZQN8HrVwerjw--vcw/formResponse" method="POST" target="_self" onsubmit="">

                        <div class="form-group">
                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>

                            <input type="text" name="entry.958808505" value="" dir="auto" aria-label="Name  " aria-required="true" required title="" class="form-control" placeholder="Your Name *" data-validation-required-message="Please enter your name.">

                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">

                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>


                            <input type="email" name="entry.539550656" value="" dir="auto" aria-label="Email  Must be a valid email address" aria-required="true" class="form-control" required title="Must be a valid email address" placeholder="Your Email *" id="email" data-validation-required-message="Please enter your email address.">

                        </div>
                        <div class="form-group">
                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                            <input type="text" name="entry.1558497487" value="" dir="auto" aria-label="Phone  " aria-required="true" class="form-control" required title="" placeholder="Your Phone *" id="phone" data-validation-required-message="Please enter your phone number.">
                        </div>
                        <div class="form-group">
                            <label for="itemView.getDomIdToLabel()" aria-label="(Required field)"></label>
                            <textarea name="entry.396240198" rows="8" cols="0" dir="auto" aria-label="Message  Must be fewer than 400 characters." class="form-control" aria-required="true" required placeholder="Your Message *" id="message" data-validation-required-message="Please enter a message."></textarea>

                        </div>
                        <input type="hidden" name="draftResponse" value="[,,&quot;2265353907192815050&quot;]
                    " class="form-group">
                        <input type="hidden" name="pageHistory" value="0">
                        <input type="hidden" name="fbzx" value="2046263110474711253">
                        <input type="submit" name="submit" value="Send Message" class="btn btn-xl">
                        <p class="help-block text-danger"></p>
                        <div id="success"></div>
                    </form>

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
