<!-- reports.php 

	page where the user will generate a report via a pdf document.

-->
<?php	
	include ('dbconnect.php');
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
		}
	if(!isset($_GET['profileID'])) {
		header("Loation:home.php");
		}
	
		if(!isset($_GET['reports'])) {
		$_SESSION['reports']['profile']="";
		$_SESSION['reports']['classroom']="";
		$_SESSION['reports']['date']="";
		$_SESSION['reports']['topic']="";
		//the variables
	}
?>
<head>
</head>

<h1>Create a Report:</h1>
<p>Report Form:</p>
<p>&nbsp

<form method="post" action="reportsconfirm.php" target= "_blank" autocomplete="off" >
<p>Profile: <select name="profile" >
					<option>Holder</option>
			<?php $sql="SELECT * FROM `profile`";
			//makes a list of all the profiles
				$query=mysqli_query($db, $sql);
				$row=mysqli_fetch_assoc($query);
				do { ?>
					<option value="<?php echo $row['name']; ?> <?php echo $row['last_Name']; ?>"
					<?php 
						if($row['name']==$_SESSION['reports']['profile']) {
							echo "selected=selected";
						}
					?>
					><?php echo $row['name']; ?>
					<?php echo $row['last_Name']; ?></option>
				<?php }	while ($row=mysqli_fetch_assoc($query));
		?></select>
		
<p>Classroom: <select name="classroom" required>
					<option>Classroom</option>
			<?php $sql="SELECT * FROM `keys`";
			//makes a list of all the keys
				$query=mysqli_query($db, $sql);
				$row=mysqli_fetch_assoc($query);
				do { ?>
					<option value="<?php echo $row['classroom']; ?>"
					<?php 
						if($row['classroom']==$_SESSION['reports']['classroom']) {
							echo "selected=selected";
						}
					?>
					><?php echo $row['classroom']; ?></option>
				<?php }	while ($row=mysqli_fetch_assoc($query));
		?></select>
<p>Date: <input type="text" name="date" placeholder="MM/DD/YYYY" value="<?php echo $_SESSION['reports']['date']; //submits a date ?>" required/></p>
<p>Topic: <input type="text" name="topic" value="<?php echo $_SESSION['reports']['topic']; //submits a topic regarding the profile and the key ?>" required/></p>
	<p>&nbsp
		<p><input type="submit" name="submit"/></p>
</form>
	<p>&nbsp
	<p><a href="home.php">Go Back</a></p>
	
<?php
if(!empty($_POST['submit']));
//creates a log activity for historyrecord.php
{
$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Created Report','Report',NOW())";
	if (mysqli_query($db, $sql)) 
		{
		} 
		else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
		mysqli_close($db);
		}
?>