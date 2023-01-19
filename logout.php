<!-- logout.php 

	Destroys the session_start(). Making it unable to get back in the page.
	Frocing the user to log in again.

-->

<?php
session_start();

session_unset();
session_destroy();

header("location: index.php");
?>