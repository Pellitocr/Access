<!-- editprofile.php

	User edits profile he wishes

-->

<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}

	include 'dbconnect.php';
		//updates the selected profile
		if (count($_POST) > 0) {
		mysqli_query($db,"UPDATE `profile` set ID='" . $_POST['ID'] . "', name='" . $_POST['name'] . "', last_Name='" . $_POST['last_Name'] . "', employee_Number='" . $_POST['employee_Number'] . "', birtdate='" . $_POST['birtdate'] . "', address='" . $_POST['address'] . "', sex='" . $_POST['sex'] . "', email='" . $_POST['email'] . "', phone='" . $_POST['phone'] . "', alt_phone='" . $_POST['alt_phone'] . "', comments='" . $_POST['comments'] . "', records='" . $_POST['records'] . "' WHERE ID='" . $_POST['ID'] . "'");	
	
		echo '<script>alert("Profile Updated Successfully!");</script>';
		// Prompts the user_error
		echo '<script>window.location.assign("home.php?page=profiles");</script>';
	}
	
		if (count($_POST) > 0) {
		//adds an activity log in historyrecord.php
		$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Editing Profile','".$_POST['employee_Number']."',NOW())";
		if (mysqli_query($db, $sql)) 
		{
		}	 
		else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
		mysqli_close($db);
		}
	$result = mysqli_query($db,"SELECT * FROM `profile` WHERE ID='" . $_GET['ID'] . "'");
	$row=mysqli_fetch_array($result);
	
?>
	
<html>
	<head>
		<title> Edit Personnel Profiles </title>
		<meta charset="utf-8">						
		<link rel="stylesheet" href="styles.css">	
		
		<style>
			tr:hover {
				background-color: #1a1a1a;
				color: white;
				text-shadow: 2px 2px 4px #000000;
				border: 1px solid white;
			}
		</style>
		<p><a href="home.php?page=editprofilesselect">Go Back</a></p>
	</head>
	
<body class="add_form">

<!--- Nav bar --->
<header>
</header>

	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="editprofile">
		<h2 class="add_data_header">Edit Profiles Data:</h2>
		<p>&nbsp
		<!-- edit/update form -->		
	<form name="frmkeys" method="post" action="" autocomplete="off">
	
	<h3 class="form_labels">Profile Number:</h3>
		<input type="hidden" name="ID" class="txtField" value="<?php echo $row['ID']; ?>">
		<input type="text" name="ID" value="<?php echo $row['ID']; ?>" readonly> <br/><br/>
	
	<h3 class="form_labels">Name:</h3>
		<input type="text" name="name" class="txtField" value="<?php echo $row['name']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Last Name:</h3>
		<input type="text" name="last_Name" class="txtField" value="<?php echo $row['last_Name']; ?>"> <br/><br/>
		
	<h3 class="form_labels">Employee Number:</h3>
		<input type="text" name="employee_Number" class="txtField" value="<?php echo $row['employee_Number']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Birthdate:</h3>
		<input type="text" name="birtdate" class="txtField" value="<?php echo $row['birtdate']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Address:</h3>
		<input type="text" name="address" class="txtField" value="<?php echo $row['address']; ?>"> <br/><br/>
		
	<h3 class="form_labels">Sex:</h3>
		<input type="text" name="sex" class="txtField" value="<?php echo $row['sex']; ?>"> <br/><br/>

	<h3 class="form_labels">Email:</h3>
		<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Phone:</h3>
		<input type="text" name="phone" class="txtField" value="<?php echo $row['phone']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Alternative Phone:</h3>
		<input type="text" name="alt_phone" class="txtField" value="<?php echo $row['alt_phone']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Level:</h3>
		<input type="text" name="comments" class="txtField" value="<?php echo $row['comments']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Records:</h3>
		<input type="text" name="records" class="txtField" value="<?php echo $row['records']; ?>"> <br/><br/>

		
		<br/>

	<input type="submit" name="submit" value="Submit" class="buttom">
	</form>
</div>

	
</body>
</html>