<!-- confirmaddprofiles.php

	alerts the user that a new profile has been added
	
-->

<?php
	include("dbconnect.php");;
	if(isset($_POST["submit"])){
		$_SESSION['ID']="0";
		$_SESSION['name']=$_POST['name'];
		$_SESSION['last_Name']=$_POST['last_Name'];
		$_SESSION['employee_Number']=$_POST['employee_Number'];
		$_SESSION['birtdate']=$_POST['birtdate'];
		$_SESSION['address']=$_POST['address'];
		$_SESSION['sex']=$_POST['sex'];
		$_SESSION['email']=$_POST['email'];
		$_SESSION['phone']=$_POST['phone'];
		$_SESSION['alt_phone']=$_POST['alt_phone'];
		$_SESSION['comments']=$_POST['comments'];
		$_SESSION['records']=$_POST['records'];
		//variables
	} 
	
	else {
		header("Location:home.php");
	}
?>

	<div class="maincontent">
	<!-- displays profile info -->
		<h1>Profile Confirmed</h1>
		<p>Name: <?php echo $_SESSION['name']; ?></p>
		<p>Last Name: <?php echo $_SESSION['last_Name']; ?></p>

				<p>Employee Number: <?php echo $_SESSION['employee_Number']; ?></p>	
				<p>Birthdate: <?php echo $_SESSION['birtdate']; ?></p>
				<p>Address: <?php echo $_SESSION['address']; ?></p>
				<p>Sex: <?php echo $_SESSION['sex']; ?></p>	
				<p>Email: <?php echo $_SESSION['email']; ?></p>
				<p>Primary Phone: <?php echo $_SESSION['phone']; ?></p>
				<p>Alt. Phone: <?php echo $_SESSION['alt_phone']; ?></p>	
				<p>Comments: <?php echo $_SESSION['comments']; ?></p>
				<p>Records: <?php echo $_SESSION['records']; ?></p>
			</div>


<!-- Inserts the data in the profile table while at the same time inserts a log activity in the historyrecord.php-->
<?php	
	$newcat_sql="INSERT INTO `profile` (`ID`, `name`, `last_Name`, `employee_Number`, `birtdate`, `address`, `sex`, `email`, `phone`, `alt_phone`, `comments`, `records`) VALUES ('".$_SESSION['ID']."','".$_SESSION['name']."','".$_SESSION['last_Name']."','".$_SESSION['employee_Number']."','".$_SESSION['birtdate']."','".$_SESSION['address']."','".$_SESSION['sex']."','".$_SESSION['email']."','".$_SESSION['phone']."','".$_SESSION['alt_phone']."','".$_SESSION['comments']."','".$_SESSION['records']."')";
	
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Added Profile','".$_SESSION['employee_Number']."',NOW())";
	$newcat_query=mysqli_query($db, $newcat_sql);
	
		if (mysqli_query($db, $sql)) 
			{
			} 
		else 
			{
				echo '<script>alert("Error : " . mysqli_error($db)!");</script>';
			}
		mysqli_close($db);

		unset($_SESSION['addprofiles']);
			echo
				"
				<script> alert('New Profile Added!') </script>
				"
?>


<p><a href="home.php?page=profiles">Go Back</a>