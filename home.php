<?php
$PageTitle = "UFO Platform Home Page";
$Directory = "platform";

$host = "rubypineapple.database.windows.net";
$user = "rubyadmin";
$pwd = "kcjech6206!";
$db = "HCG";

ini_set('display_errors', 'on');


/*
$link = mssql_connect($host, $user, $pwd);

if (!$link || !mssql_select_db($db, $link)) {
    die('Unable to connect or select database!');
}
*/


try {
    $conn = new PDO( "sqlsrv:Server= $host ; Database = $db ", $user, $pwd);
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch(Exception $e){
    die(var_dump($e));
}




?>

<body>


<h1>This is the home page</h1>

<?
	$sql = "SELECT * FROM tblCategory WHERE CategoryStatus = 'active'";
	$result = $conn->query($sql);
	
	foreach($result as $row) {
		
		$CategoryName = $row['CategoryName'];
	
?>

	<p>category name: <? echo $CategoryName; ?></p>
    
    <? } 
	
	?>
    
</body>