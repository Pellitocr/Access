<!-- updateinfo.php

	updates the info in info.php

-->


<?php
	include("dbconnect.php");
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}

	include 'dbconnect.php';
	if (count($_POST) > 0) {
	mysqli_query($db,"UPDATE `information` set introduction='" . $_POST['introduction'] . "', mission='" . $_POST['mission'] . "', vision='" . $_POST['vision'] . "', content='" . $_POST['content'] . "', contact='" . $_POST['contact'] . "'");
			echo '<script>alert("Information Updated Successfully!");</script>';
	// Prompts the user_error
			echo '<script>window.location.assign("home.php?page=info");</script>';
	}
		
		
	if (count($_POST) > 0) {
	//adds a log activity in historyrecord.php
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Updating Information','Information',NOW())";
	if (mysqli_query($db, $sql)) 
		{
		} 
	else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
	}
	
	
	$result = mysqli_query($db,"SELECT * FROM `information`");
	$row=mysqli_fetch_array($result);
	?>
	
<html>
	<head>
		<title> Update Keys/Classrooms </title>
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
		<p><a href="home.php?page=info">Go Back</a></p>
	</head>
	
<body class="add_form">

<!--- Nav bar --->
<header>
</header>

	<br>
	<br>
	<!-- DIV CLASS FOR ALIGNMENT-->
	<div class="information">
		<h2 class="add_data_header">Update Information: </h2>
		<p>&nbsp
		<!--update info form -->		
	<form name="frmkeys" method="post" action="" autocomplete="off">
	
	<h3 class="form_labels">Introduction:</h3>
	<input type="hidden" name="introduction" class="txtField" value="<?php echo $row['introduction']; ?>">
		<textarea name="introduction" cols=60 rows=5><?php echo $row['introduction']; ?></textarea></p>
	
	<h3 class="form_labels">Mission:</h3>
		<textarea name="mission" cols=60 rows=5><?php echo $row['mission']; ?></textarea></p>
		
	<h3 class="form_labels">Vision:</h3>
		<textarea name="vision" cols=60 rows=5><?php echo $row['vision']; ?></textarea></p>
		
	<h3 class="form_labels">Main Content:</h3>
		<textarea name="content" cols=60 rows=5><?php echo $row['content']; ?></textarea></p>
	
	<h3 class="form_labels">Contact Information:</h3>
		<textarea name="contact" cols=60 rows=5><?php echo $row['contact']; ?></textarea></p>
		
		<br/>

	<input type="submit" name="submit" value="Submit" class="buttom">
	</form>
</div>

	
</body>
</html>