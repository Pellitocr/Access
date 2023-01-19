<!-- addprofiles.php

	User adds information for new Profile

-->

<?php
	include("dbconnect.php");
	if(!isset($_GET['addprofiles'])) {
		$_SESSION['addprofiles']['ID']="";
		$_SESSION['addprofiles']['name']="";
		$_SESSION['addprofiles']['last_Name']="";
		$_SESSION['addprofiles']['employee_Number']="";
		$_SESSION['addprofiles']['birtdate']="";
		$_SESSION['addprofiles']['address']="";
		$_SESSION['addprofiles']['sex']="";
		$_SESSION['addprofiles']['email']="";
		$_SESSION['addprofiles']['phone']="";
		$_SESSION['addprofiles']['alt_phone']="";
		$_SESSION['addprofiles']['comments']="";
		$_SESSION['addprofiles']['records']="";
		//variables
	}
?>

<div class="maincontent">
	
<!-- User Provides Credentials for a New Profile -->

	<h1>Enter details for a new Profile</h1>
	
	<form method="post" action="home.php?page=confirmaddprofiles" enctype="multipart/form-data" >
		<p>Name: <input type="text" name="name" value="<?php echo $_SESSION['addprofiles']['name']; ?>" /></p>
		<p>Last Name: <input type="text" name="last_Name" value="<?php echo $_SESSION['addprofiles']['last_Name']; ?>" /></p>
		<p>Employee Number: <input type="text" name="employee_Number" value="<?php echo $_SESSION['addprofiles']['employee_Number']; ?>" /></p>
		<p>Birth Date: <input type="text" name="birtdate" value="<?php echo $_SESSION['addprofiles']['birtdate']; ?>" /></p>
		<p>Address: <input type="text" name="address" value="<?php echo $_SESSION['addprofiles']['address']; ?>" /></p>
		<p>Sex: <select name="sex" value="<?php echo $_SESSION['addprofiles']['sex']; ?>" /></p>
			<option>--Sex--</option>
			<option>M</option>
			<option>F</option>
			</select>
		<p>Email: <input type="text" name="email" value="<?php echo $_SESSION['addprofiles']['email']; ?>" /></p>
		<p>Phone: <input type="text" name="phone" value="<?php echo $_SESSION['addprofiles']['phone']; ?>" /></p>
		<p>Alternative Phone (optional): <input type="text" name="alt_phone" value="<?php echo $_SESSION['addprofiles']['alt_phone']; ?>" /></p>
		<p>Comments: <input type="text" name="comments" value="<?php echo $_SESSION['addprofiles']['comments']; ?>" /></p>
		<p>Records: <textarea name="records" cols=60 rows=5><?php echo $_SESSION['addprofiles']['records']; ?></textarea></p>
		<p>&nbsp
		<p><input type="submit" name="submit"</p>
		<p>&nbsp
		<p><a href="home.php?page=profiles">Go Back</a></p>
	</form>
	
</div>