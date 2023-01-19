<!-- editprofilesselect.php
	
	user selects a profile he whishes to edit

-->

<?php
	$result = mysqli_query ($db, "SELECT * FROM `profile`");
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
<h1>Personnel who are authorized for the use of keys</h1>
<p>Update Personnel:</p>
<p>&nbsp
	
<?php	
	if (mysqli_num_rows($result) > 0) {	
?>
<div id="table" class="table">
<table id="table"> 
	<tr>

		<th>Name</th>
		<th>Last Name</th>
		<th>Employee Number</th>
		<th>Sex</th>
		<th>Level</th>
		
		<th> Update </th>
		
	</tr>

<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)) {
?>
	<tr data-href="editprofile.php?ID=<?php echo $row["ID"]; ?>">	
		<td><?php echo $row["name"]; ?></td>
		<td><?php echo $row["last_Name"]; ?></td>
		<td><?php echo $row["employee_Number"]; ?></td>
		<td><?php echo $row["sex"]; ?></td>
		<td><?php echo $row["comments"]; ?></td>



		<td><a href="editprofile.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>
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
<p><a href="home.php?page=profiles">Go Back</a></p>
</body>
</html>	