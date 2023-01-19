<!-- enterprofile.php

	displays thata profile has been entered 

-->

<?php

	$enter_sql="INSERT INTO profile (profileID, name, last_Name, employee_Number, birtdate, address, sex, email, phone, alt_phone, photo, comments, records) VALUES ('".mysqli_real_escape_string($db, $_SESSION['addprofiles']['profileID'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['name'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['last_Name'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['employee_Number'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['birtdate'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['address'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['sex'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['email'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['phone'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['alt_phone'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['photo'])."','".mysqli_real_escape_string($db, $_SESSION['addprofiles']['comments'])."', '".mysqli_real_escape_string($db, $_SESSION['addprofiles']['records'])."')";
	
	$enter_query=mysqli_query($db, $enter_sql);
	
	unset($_SESSION['addprofiles']);
?>

<p>New profile has been entered</p>
<p><a href="home.php?=page=adminpanel">Back to admin</a></p>