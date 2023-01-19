<!-- update.php

	updates a key that the user selects

-->

<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}

include 'dbconnect.php';

	if (count($_POST) > 0) {	
	mysqli_query($db,"UPDATE `keys` set keyNUM='" . $_POST['keyNUM'] . "', classroom='" . $_POST['classroom'] . "', availability='" . $_POST['availability'] . "', givenTo='" . $_POST['givenTo'] . "', purpose='" . $_POST['purpose'] . "', date='" . $_POST['date'] . "', dateRequested='" . $_POST['dateRequested'] . "' WHERE keyNUM='" . $_POST['keyNUM'] . "'");	
			echo '<script>alert("Key Updated Successfully!");</script>';
			// Prompts the user_error
			echo '<script>window.location.assign("home.php?page=updatekeys");</script>';
	}
		
	//adds a log activity in historyrecord.php
	if (count($_POST) > 0) {
	$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Updated Classroom','".$_POST['classroom']."',NOW())";
	if (mysqli_query($db, $sql)) 
		{
		} 
	else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
		}
	
	$result = mysqli_query($db,"SELECT * FROM `keys` WHERE keyNUM='" . $_GET['keyNUM'] . "'");
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
		<p><a href="home.php?page=updatekeys">Go Back</a></p>
	</head>
	
<body class="add_form">

<!--- Nav bar --->
<header>
</header>

	<br>
	<br>
	<div class="formupdate">
		<h2 class="add_data_header">Update Data:</h2>
		<p>&nbsp
		<!-- update form -->		
	<form name="frmkeys" method="post" action="" autocomplete="off">
	
	<h3 class="form_labels">Key Number:</h3>
		<input type="hidden" name="keyNUM" class="txtField" value="<?php echo $row['keyNUM']; ?>">
		<input type="text" name="keyNUM" value="<?php echo $row['keyNUM']; ?>" readonly> <br/><br/>
	
	<h3 class="form_labels">Classroom:</h3>
		<input type="text" name="classroom" class="txtField" value="<?php echo $row['classroom']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Availability:</h3>
		<input type="text" name="availability" class="txtField" value="<?php echo $row['availability']; ?>"> <br/><br/>
	
	<h3 class="form_labels">Holder:</h3>
		 <select name="givenTo" required class="txtField" value="<?php echo $row['givenTo']; ?>">
		 <option><?php echo $row['givenTo']; ?></option>
			<?php $proflist_sql="SELECT * FROM profile";
				$proflist_qry=mysqli_query($db, $proflist_sql);
				$proflist_rs=mysqli_fetch_assoc($proflist_qry);
				do { ?>
					<option value="<?php echo $proflist_rs['name']; ?> <?php echo $proflist_rs['last_Name']; ?>"
					<?php 
						if($proflist_rs['name']==['givenTo']) {
							echo "selected=selected";
						}
					?>
					><?php echo $proflist_rs['name']; ?>
					<?php echo $proflist_rs['last_Name']; ?></option>
				<?php }	while ($proflist_rs=mysqli_fetch_assoc($proflist_qry));
		?></select><br/><br/>
	
	<h3 class="form_labels">Purpose:</h3>
		<input type="text" name="purpose" class="txtField" value="<?php echo $row['purpose']; ?>"> <br/><br/>
		
		<h3 class="form_labels">Date Requested:</h3>
		<input type="text" name="dateRequested" class="txtField" placeholder="MM/DD/YYYY" value="<?php echo $row['dateRequested']; ?>"> <br/><br/>
		
	<h3 class="form_labels">Date Returned:</h3>
		<input type="text" name="date" class="txtField" placeholder="MM/DD/YYYY" value="<?php echo $row['date']; ?>"> <br/><br/>

		<br/>

	<input type="submit" name="submit" value="Submit" class="buttom">
	</form>
</div>

	
</body>
</html>