<!-- info.php

	page where general information is displayed

-->

<?php
include ('dbconnect.php');
?>
<!DOCTYPE htm1l>
<html>

<head>
<link href="styles.css" rel="stylesheet" type="text/css"/>
<p style="text-align: right; margin-right:20px;"><a href="home.php?page=updateinfo">Update information</a></p>
</head>

<body>

<img src="images/InterSG Logo.jpg" width=" 300px"  >
<div class ="information">
<?php
	$sql = "SELECT * FROM `information`";
	$result = $db->query($sql);
	
		if ($result->num_rows>0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<p>" .$row["introduction"]."</p>";
			echo "<p>&nbsp</p>";
			echo "<p>" .$row["mission"]."</p>";
			echo "<p>&nbsp</p>";
			echo "<p>" .$row["vision"]."</p>";
			echo "<p>&nbsp</p>";
			echo "<p>" .$row["content"]."</p>";
			echo "<p>&nbsp</p>";
			echo "<p>" .$row["contact"]."</p>";
			echo "<p>&nbsp</p>";
		}
	} else {
		echo "Where under mainteinance. Please come back later";
		//if info is empty, displays this message
	}
	$db->close();
?>
</div>
</body>
</html>