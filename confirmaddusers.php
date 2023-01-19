<!-- confirmaddusers.php

	alerts the user that a new User has been created

-->
<?php
	include("dbconnect.php");;
	if(isset($_POST["submit"])){
		$_SESSION['userID']="0";
		$_SESSION['name']=$_POST['name'];
		$_SESSION['last_name']=$_POST['last_name'];
		$_SESSION['username']=$_POST['username'];
		$_SESSION['password']=$_POST['password'];
		//variables
	} 
	else {
			header("Location:home.php");
		}
?>

	<div class="maincontent">
	
		<h1>User Confirmed</h1>
		<p>Name: <?php echo $_SESSION['name']; ?></p>
		<p>Last Name: <?php echo $_SESSION['last_name']; ?></p>
				<p>Username: <?php echo $_SESSION['username']; ?></p>	
				<p>Password: <?php echo $_SESSION['password']; ?></p>
				
			</div>

<!-- Inserts the new data into the users table and in the historyrecord.php while also hashes the password for security reasons -->
<?php	
	$hashed = hash('sha512', $_SESSION['password']);
	$newcat_sql="INSERT INTO `users` (`userID`, `name`, `last_name`, `username`, `password`) VALUES ('".$_SESSION['userID']."','".$_SESSION['name']."','".$_SESSION['last_name']."','".$_SESSION['username']."','".$hashed."')";
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Created User','New User',NOW())";
	$newcat_query=mysqli_query($db, $newcat_sql);
	if (mysqli_query($db, $sql)) 
		{
		} 
	else 
		{
			echo '<script>alert("Error : " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);

	unset($_SESSION['addusers']);
	echo
	"
	<script> alert('New User Added!') </script>
	"
	
?>

<p><a href="home.php?page=users">Go Back</a>