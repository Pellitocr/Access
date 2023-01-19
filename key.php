<!-- key.php

	page where the user will see all the keys and information about it
	
-->

<?php
include ('dbconnect.php');

?>
<head>
</head>

<h1>Access keys to the Rooms</h1>
<p>Table of keys:</p>
<p>&nbsp

<div id="table" class="table">
	<table id="table" width "959px" >
	<tr>

		<th>Classroom</th>
		<th>Availability</th>
		<th>Holder</th>
		<th>Purpose</th>
		<th>Date Requested</th>
		<th>Date Returned</th>
	</tr>
	<?php
	$sql = "SELECT * FROM `keys`";
	$result = $db->query($sql);
	
	if ($result->num_rows>0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["classroom"] ."</td><td>". $row["availability"] ."</td><td>". $row["givenTo"] ."</td><td>".$row["purpose"] ."</td><td>".$row["dateRequested"]."</td><td>".$row["date"]."</td></tr>";
		//displays keys
		}
	} else {
		echo "Theres no keys registered";
		//display message if key is empty
	}
	$db->close();
	?>
	</table>
</div>

<p>&nbsp</p>

<p><a href="home.php?page=addkeys">Add Keys/Rooms</a> | <a href="home.php?page=deletekey">Delete Keys/Rooms</a> | <a href="home.php?page=updatekeys">Update Keys</a>
</div>