<!-- deletekey.php

	deletes a key selected by the user
	
-->

<?php
	include 'dbconnect.php';
	$result = mysqli_query($db,"SELECT * FROM `keys`");
?>

<!DOCTYPE html>
<html>
	<head>
	<title>Delete Key</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">

	</head>	
	
	<h1>Access keys to the Rooms</h1>
<p>Delete a key:</p>
<p>&nbsp</p>
<body>

<div id="table" class="table">
<table id="table" border="2">
	<tr>

		<th>Classroom</th>
		<th>Availability</th>
		<th>Holder</th>
		<th>Purpose</th>
		<th>Date Requested</th>
		<th>Date Returned</th>
		
		<th>Delete</th>
	</tr>
	
<?php
//user selects a key
	$i=0;
	while($row = mysqli_fetch_array($result)) {
?>
	<tr> 

		<td><?php echo $row["classroom"]; ?></td>
		<td><?php echo $row["availability"]; ?></td>
		<td><?php echo $row["givenTo"]; ?></td>
		<td><?php echo $row["purpose"]; ?></td>
		<td><?php echo $row["dateRequested"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
		<?php echo '<td><a href="#" onclick="myFunction('.$row['keyNUM'].')">Delete</a> </td>';?>
	</tr> 
	
<?php
	$i++;
	}
?>

</table>
</div>
<script>
	function myFunction(keyNUM)
	{
	var r=confirm("Are you sure you want to delete this key?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deletekeyconfirm.php?keyNUM=" + keyNUM);
		}
	}
</script>
<br/>
<p><a href="home.php">Go Back</a></p>
</body>

</html>