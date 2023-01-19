<!-- deletekeyconfirm.php

	Alerts the user that a key has been deleted
	
 -->
 
<?php
	include 'dbconnect.php';
	$sql = "DELETE FROM `keys` WHERE keyNUM='" . $_GET["keyNUM"] . "'";
	//This sends the SQL command to the database to be able to delete a given key.
	
	if (mysqli_query($db, $sql)) 
		{
			echo '<script>alert("key deleted successfully!");</script>';
	
			echo '<script>window.location.assign("home.php?page=deletekey");</script>';
		} //Returns the user back to the deletion page 
	else 
		{
			echo '<script>alert("Error deleting record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
?>

<!-- Inserts a log activity in historyrecord.php-->
<?php
	include 'dbconnect.php';
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','Last active User','Deleted Classroom','Classroom Deleted',NOW())";
	if (mysqli_query($db, $sql)) 
		{
		} 
	else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
?>