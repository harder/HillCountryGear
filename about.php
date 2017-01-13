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
<!-- About Section -->




    <section class="bg-light-gray">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About Us</h2>
                <!-- <h3 class="section-subheading text-muted">We would love to help you!  Please contact us for dates and availability.</h3> -->
                <h3 class="section-subheading text-muted">Our family loves to camp and wants to share that with as many people as possible.  We decided to help others by renting out camping gear.</h3>
            </div>
        </div>
    </section>

    <section>
        <div class="container">


            <div class="row">
                <div class="col-lg-12">
                    <!-- <h3 class="section-subheading text-muted">Our family loves to camp and wants to share that with as many people as possible.  We decided to help others by renting out camping gear.</h3> -->

                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>April 2016</h4>
                                    <h4 class="subheading">Our Humble Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Sitting around with the kids talking about our hobbies, and we came up with a way to share our love of camping with others!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/2.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2016</h4>
                                    <h4 class="subheading">Website is Born</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Officially launched our website!</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
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
