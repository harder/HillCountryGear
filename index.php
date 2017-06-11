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

 <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Want to go camping?</div>
                <div class="intro-heading">Rent from us!</div>
                <a href="gear_categories.php" class="page-scroll btn btn-xl">Go Camping</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section class="bg-light-gray" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Why Rent?</h2>
                    <h3 class="section-subheading text-muted">There are several reasons why renting is better than buying.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-money fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Save Money</h4>
                    <p class="text-muted">Purchasing equipment that you will only use once or at minimum a few times does not make financial sense. Renting saves you money by allowing you to try out equipment. Saves you storage space too!</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-hotel fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Rest Easy</h4>
                    <p class="text-muted">Buying can be stressful - which brand? how much? is this going to last? Renting solves those issues. You don't have to wonder. We do the research for you, and all you need to do is show up.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Focus on the Fun</h4>
                    <p class="text-muted">Call us up and tell us what you need. We deliver, and you go camping. Couldn't be easier, and it leaves you with the fun part - planning your hikes, swims, and other fun activities.</p>
                </div>

                <a href="gear_categories.php" class="page-scroll btn btn-xl">Go Camping</a>

            </div>
        </div>
    </section>
    
<?
//bring in the footer
require "include/footers/footer.php";
?>

</body>
</html>