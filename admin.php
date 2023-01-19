<!-- admin.php

	Important php file to log in and creates a session_start() if the information provided is correct

-->
<?php
	include("dbconnect.php");
	session_start();
	if(isset($_GET['logout'])) {
		unset($_SESSION['admin']);
	}
	//checks if the data provided is true
	if(isset($_POST['login'])) {
		$password_hash = hash('sha512', $_POST['password']);
		//converts the password to hash
		$login_sql="SELECT * FROM users WHERE username='".$_POST['username']."' AND password='$password_hash'";
		$login_query=mysqli_query($db, $login_sql);
		if(mysqli_num_rows($login_query)==1) {
			$login_rs=mysqli_fetch_assoc($login_query);
			$_SESSION['ID'] = $login_rs['userID'];
			$_SESSION['admin']=$login_rs['username'];
		$login_sql="UPDATE users SET loginDate = NOW()";
		$login_sql .="WHERE userID={$_SESSION['ID']} LIMIT 1";
		$login_query=mysqli_query($db, $login_sql);
		
		} else {
			//if login info is false
			header("Location:index.php?page=admin&error=login");
		}
	}
?>
<?php 
		if(!isset($_SESSION['admin'])) {
		//if data is true
		include("index.php");
		} else {
			
		echo "<script>location.href='home.php'</script>";
		}

	
?>