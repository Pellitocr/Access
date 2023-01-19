<!-- index.php

	its called index but this is actually the log in screen, the user has to provide a real 
	username and password to be able to log in.

 -->

<!DOCTYPE html>
<html>
<head>
<link href="styles.css" rel="stylesheet" type="text/css"/>
	<title>Log in</title>
	
	
	</head>
<body>
	<div class="login-box">
	<h1 style="text-align:center; padding: 0 0 20px">Login Here</h1>
		<form action="admin.php" method="post">
			<p>Username :</p>
			<div class="form_input" >
				<input name="username" placeholder="Enter username"  autocomplete="off" />
			</div>
			<p style="padding: 20px 0 0">Password :</p>
			<div class="form_input"style="padding: 0 0 20px">
				<input type="password" name="password" placeholder="Enter password"  autocomplete="off"/>
			</div>
				<?php
	if(isset($_GET['error'])) {
		echo "Incorrect username or password";
		//if info is incorrect, displays this message
	}
	?>
			<div class="submit" style="text-align:center">
			<input type="submit" name="login" />
			</div>
		</form>
	</div>
</body>
</html>