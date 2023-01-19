<!-- dbconnect.php 

	Connects to the database

-->

<?php
$db = mysqli_connect("localhost","root","","access");

if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
?>