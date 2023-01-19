<!-- addusers.php

	User adds Credentials for a new User. These are the one that are authorize to log in into the Program
	
-->
<?php
	include("dbconnect.php");
	if(!isset($_GET['addusers'])) {
		$_SESSION['addusers']['userID']="";
		$_SESSION['addusers']['name']="";
		$_SESSION['addusers']['last_name']="";
		$_SESSION['addusers']['username']="";
		$_SESSION['addusers']['password']="";
		//variables
	}
?>

<div class="maincontent">
	
	<h1>Enter details for a new User: </h1>
	<p>&nbsp
		
	<form method="post" action="home.php?page=confirmaddusers" enctype="multipart/form-data" >
		<p>Name: <input type="text" name="name" value="<?php echo $_SESSION['addusers']['name']; ?>" /></p>
		<p>Last Name: <input type="text" name="last_name" value="<?php echo $_SESSION['addusers']['last_name']; ?>" /></p>
		<p>Username: <input type="text" name="username" value="<?php echo $_SESSION['addusers']['username']; ?>" /></p>
		<p>Password: <input type="password" type="hidden" name="password" value="<?php echo $_SESSION['addusers']['password']; ?>" /></p>
		<p>&nbsp
		<p><input type="submit" name="submit"</p>
		<p>&nbsp
		<p><a href="home.php?page=users">Go Back</a></p>
	</form>
</div>