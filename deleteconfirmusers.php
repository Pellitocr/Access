<!-- deleteconfirmusers.php
		
	Alerts the user that the selected user has been deleted	
		
-->
<?php
	include 'dbconnect.php';
	$sql = "DELETE FROM `users` WHERE userID='" . $_GET["userID"] . "'";
	//This sends the SQL command to the database to be able to delete a given user.
	
	if (mysqli_query($db, $sql)) 
		{
			echo '<script>alert("User deleted successfully!");</script>';
	
			echo '<script>window.location.assign("home.php?page=deleteusersselect");</script>';
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
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','Last active user','Deleted User','User Deleted',NOW())";
	
	if (mysqli_query($db, $sql)) 
		{

		} 
	else 
		{
			echo '<script>alert("Error deleting record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
?>