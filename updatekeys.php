<?php
	$result = mysqli_query ($db, "SELECT * FROM `keys`");
?>

<!DOCTYPE html>
<html>
<head>
		<title>Update keys</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="styles.css">
<style>

</style>
</head>

<body>

<header>

	</header>
<h1>Access keys to the Rooms</h1>
<p>Update Keys:</p>
<p>&nbsp
	
<?php	
	if (mysqli_num_rows($result) > 0) {	
?>
<div id="table" class="table">
<table id="table"> 
	<tr>

		<th>Classroom</th>
		<th>Availability</th>
		<th>Holder</th>
		<th>Purpose</th>
		<th>Date Requested</th>
		<th>Date Returned</th>
		
		<th> Update </th>
		
	</tr>

<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
?>
	<tr data-href="update.php?keyNUM=<?php echo $row["keyNUM"]; ?>">	
		<td><?php echo $row["classroom"]; ?></td>
		<td><?php echo $row["availability"]; ?></td>
		<td><?php echo $row["givenTo"]; ?></td>
		<td><?php echo $row["purpose"]; ?></td>
		<td><?php echo $row["dateRequested"]; ?></td>
		<td><?php echo $row["date"]; ?></td>



		<td><a href="update.php?keyNUM=<?php echo $row["keyNUM"]; ?>">Update</a></td>
	</tr>	
<?php
	$i++;
	}
?>
</table>
<script>
	document.addEventListener("DOMContentLoader", () => {
		const rows = document.querySelectorAll("tr[data-href]");
		
		rows.forEach(row => {
			row.addEventListener ("click", () => {
				window.location.href = row.dataset.href;
			});
		});
	});
</script>
</div>
<?php
	}
	else { 
		echo "Theres no keys registered";
	}
?>
<br/>
<p><a href="home.php">Go Back</a></p>
</body>
</html>