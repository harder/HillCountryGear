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
                    <h2 class="section-heading">Gear to Rent</h2>
                    <h3 class="section-subheading text-muted">Hill Country Gear provides a variety of gear that you might need when camping.</h3>
                </div>
            </div>








<!-- Create the squares and repeat for the active categories -->


<?
	$sql = "SELECT * FROM tblCategory WHERE CategoryStatus = 'active' ORDER BY CategorySortOrder ASC";
	$result = $conn->query($sql);
	
	foreach($result as $row) {
		
		$CategoryID = $row['CategoryID'];
		$CategoryName = $row['CategoryName'];
		$CategoryDescription = $row['CategoryDescription'];
		$CategoryImageFilePath = $row['CategoryImageFilePath'];
		$CategoryImageAltTag = $row['CategoryImageAltTag'];
		$CategoryImageTitle = $row['CategoryImageTitle'];
		$CategoryDirectsTo = $row['CategoryDirectsTo'];
	
?>



            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="gear_to_rent.php?catID=<? echo $CategoryID; ?>" class="portfolio-link">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">                            
                            Click to View
                        </div>
                    </div>
                    <img src="img/rental_gear/<? echo $CategoryImageFilePath; ?>" class="img-responsive" alt="<? echo $CategoryImageAltTag; ?>" title="<? echo $CategoryImageTitle; ?>">
                </a>
                <div class="portfolio-caption">
                    <h4><? echo $CategoryName; ?></h4>
                    <p class="text-muted"><? echo $CategoryDescription; ?></p>
                </div>
            </div>

<?
	}
?>
<!-- end of repeating squares -->
  

        </div>
    </section>


    
<?
//bring in the footer
require "include/footers/footer.php";
?>

</body>
</html>