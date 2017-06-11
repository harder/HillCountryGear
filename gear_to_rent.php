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

//bring in the category variable
$CategoryID = $_GET['catID'];

?>

<!-- Retrieve the category name -->

<?
	$sql = "SELECT * FROM tblCategory WHERE CategoryID = '$CategoryID'";
	$result = $conn->query($sql);
	
	foreach($result as $row) {
		
		$CategoryName = $row['CategoryName'];
	}
?>


<!-- The body of your page goes here -->


 <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><a href="gear_categories.php">Gear to Rent</a>
                  <small><? echo $CategoryName; ?></small>
              </h1>
            </div>
        </div>
        <!-- /.row -->
        
    
    
<!-- Now list all the products for this category -->


<?
	$sql2 = "SELECT * FROM tblProduct WHERE ProductCategoryID = '$CategoryID' AND ProductStatus = 'active' ORDER BY ProductSortOrder ASC";
	$result2 = $conn->query($sql2);
	
	foreach($result2 as $row2) {
		
		$ProductName = $row2['ProductName'];
		$ProductHeading = $row2['ProductHeading'];
		$ProductDescription = $row2['ProductDescription'];
		$ProductPriceThreeDay = $row2['ProductPriceThreeDay'];
		$ProductPriceFiveDay = $row2['ProductPriceFiveDay'];
		$ProductPriceSevenDay = $row2['ProductPriceSevenDay'];
		$ProductPriceFourteenDay = $row2['ProductPriceFourteenDay'];
		$ProductImageFilePath = $row2['ProductImageFilePath'];
		$ProductImageAltTag = $row2['ProductImageAltTag'];
		$ProductImageTitle = $row2['ProductImageTitle'];
	
?>
        <div class="row">
            <div class="col-md-4">
                
                <img class="img-responsive" src="img/rental_gear/<? echo $ProductImageFilePath; ?>" alt="<? echo $ProductImageAltTag; ?>" title="<? echo $ProductImageTitle; ?>">
                
            </div>
            <div class="col-md-8">
                <h3><? echo $ProductName; ?></h3>
                <h4><? echo $ProductHeading; ?></h4>
                <p><? echo $ProductDescription; ?></p>

                <table class="table table-bordered">
                    <tr class="table_header">
                        <th>
                            # of Days
                        </th>
                        <th>
                            Pricing
                        </th>
                    </tr>

                    <tr>
                        <td>
                            3-Day Rental
                        </td>
                        <td>
                            $ <? echo $ProductPriceThreeDay; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            5-Day Rental
                        </td>
                        <td>
                            $ <? echo $ProductPriceFiveDay; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            7-Day Rental
                        </td>
                        <td>
                            $ <? echo $ProductPriceSevenDay; ?>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            14-Day Rental
                        </td>
                        <td>
                            $ <? echo $ProductPriceFourteenDay; ?>
                        </td>
                    </tr>
                </table>

            </div>
           
            
            
        </div>   
        <!-- /.row -->
 <hr> 
         
<? } ?>

        

</div> <!-- end of container div -->
    
<?
//bring in the footer
require "include/footers/footer.php";
?>

</body>
</html>