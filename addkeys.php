<!-- addkeys.php
	
	User provides information for a new Key to be created
	
-->

<?php	
	include("dbconnect.php");
	if(!isset($_GET['addkeys'])) {
		$_SESSION['addkeys']['keyNUM']="";
		$_SESSION['addkeys']['classroom']="";
		$_SESSION['addkeys']['availability']="";
		$_SESSION['addkeys']['givenTo']="";
		$_SESSION['addkeys']['purpose']="";
		$_SESSION['addkeys']['date']="";
		$_SESSION['addkeys']['dateRequested']="";
		//variables
	}
?>

<!-- User Provides information for new Key -->
<h1>Add new keys/rooms</h1>
	<p>&nbsp</p>
	<form method="post" action="home.php?page=addkeyconfirm" autocomplete="off" >
		<p>Classroom: <input type="text" name="classroom" value="<?php echo $_SESSION['addkeys']['classroom']; ?>" required/></p>
		<p>Availability: <select name="availability" value="<?php echo $_SESSION['addkeys']['availability']; ?>" required/></p>
			<option>--availability--</option>
			<option>Available</option>
			<option>Occupied</option>
			</select>
		<p>Holder: <select name="givenTo" required>
					<option>Holder</option>
			<?php $proflist_sql="SELECT * FROM profile";
				$proflist_qry=mysqli_query($db, $proflist_sql);
				$proflist_rs=mysqli_fetch_assoc($proflist_qry);
				do { ?>
					<option value="<?php echo $proflist_rs['name']; ?> <?php echo $proflist_rs['last_Name']; ?>"
					<?php 
						if($proflist_rs['name']==$_SESSION['addkeys']['givenTo']) {
							echo "selected=selected";
						}
					?>
					><?php echo $proflist_rs['name']; ?>
					<?php echo $proflist_rs['last_Name']; ?></option>
				<?php }	while ($proflist_rs=mysqli_fetch_assoc($proflist_qry));
		?></select>
		<p>Purpose: <input type="text" name="purpose" value="<?php echo $_SESSION['addkeys']['purpose']; ?>" /></p>
		<p>Date Requested: <input type="text" name="dateRequested" value="<?php echo $_SESSION['addkeys']['dateRequested']; ?>"  placeholder="MM/DD/YYYY" required/></p>
		<p>Date Returned: <input type="text" name="date" value="<?php echo $_SESSION['addkeys']['date']; ?>" placeholder="MM/DD/YYYY" required/></p>
	
	<p>&nbsp
			<p><input type="submit" name="submit"/></p>

	</form>
	<p>&nbsp
	<p><a href="home.php">Go Back</a></p>