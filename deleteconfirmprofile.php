<!-- deleteconfirmprofile.php

	Alerts the user that the profile selected was deleted successfully

-->

<?php
	include 'dbconnect.php';
	$sql = "DELETE FROM `profile` WHERE ID='" . $_GET["ID"] . "'";
	//This sends the SQL command to the database to be able to delete a given prfile.
	
	if (mysqli_query($db, $sql)) 
		{
			echo '<script>alert("Profile deleted successfully!");</script>';
			echo '<script>window.location.assign("home.php?page=deleteprofileselect");</script>';
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
	
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Deleted Profile','',NOW())";
	
	if (mysqli_query($db, $sql)) 
		{
		} 
	else 
		{
			echo '<script>alert("Error deleting record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
?>