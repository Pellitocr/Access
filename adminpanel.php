<!-- adminpannel.php -->

<?php
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
	<h1>Admin panel</h1>
			<p>&nbsp
<p><a href="home.php?page=users">Users</a></p>