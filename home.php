<!doctype html>
<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<html>
<head>
<title>Key Master</title>

<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<div class="container">
<?php
	include("header.php");
if(!isset($_GET['page'])) {
	?>
<!--<div class="banner"><img src="images/animebanner.jpg" alt="Weeb store" width="999"/></div>-->
	<?php
}

?>

<div class="background" >
<?php
	if(!isset($_GET['page'])) {
		include("key.php");
	} else {
		$page=$_GET['page'];
		include("$page.php");
	}
?>
 </div>

<div class="footer"></div>
</div>
</body>
</html>
