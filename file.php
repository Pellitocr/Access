<!-- file.php

	display the information of a profile
	
-->

<?php
	if(!isset($_GET['ID'])) {
		header("Location: home.php");
	}
	$file_sql="SELECT * FROM profile WHERE ID=".$_GET['ID'];
	?>
	<div class="profiledisplay">
	<p><a href="javascript:history.back()">Go back</a></p>
	<?php
	if($file_query=mysqli_query($db, $file_sql)) {
		$file_rs=mysqli_fetch_assoc($file_query);
		?>
		<h1><?php echo $file_rs['name']; ?>  <?php echo $file_rs['last_Name']; ?></h1>
		<br />
		<p><strong><?php echo $file_rs['employee_Number']; ?></strong></p>
		<p>Birthdate: <?php echo $file_rs['birtdate']; ?></p>
		<p>Address: <?php echo $file_rs['address']; ?></p>
		<p>Sex: <?php echo $file_rs['sex']; ?></p>
		<p>Email: <?php echo $file_rs['email']; ?></p>
		<p>Phone: <?php echo $file_rs['phone']; ?></p>
		<p>Phone 2: <?php echo $file_rs['alt_phone']; ?></p>
		<p>Commets: <?php echo utf8_encode($file_rs['comments']); ?></p>
		<p>Records: <?php echo utf8_encode($file_rs['records']); ?></p>
		</div>
		<?php
	}
?>	