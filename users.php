<?php
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
		$profile_sql="SELECT * FROM users";
	if($profile_query=mysqli_query($db,$profile_sql)) {
		$profile_rs=mysqli_fetch_assoc($profile_query);
	}
	
	if(mysqli_num_rows($profile_query)==0) {
		echo "Sorry, we re currently under mainteinance, come back soon.";
	} else {
		?>
		<h1>Personnel who are authorized for the use of the program:</h1>
		<p>List of Admins:</p>
		<p>&nbsp
<p><a href="home.php?page=addusers">Add Users</a> | <a href="home.php?page=deleteusersselect">Delete Users</a></p>
		<?php do {
			?>
		<div id="table" class="table">
		<table id="table" border="2">
			<tr>
				<th>Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Login Date</th>
			</tr>
			
			<div class="profile">
			<tr>
				<td><p><?php echo $profile_rs['name']; ?></p></td>
				<td><p><?php echo $profile_rs['last_name']; ?></p></td>
				<td><p><?php echo $profile_rs['username']; ?></p>
				<td><p><?php echo $profile_rs['loginDate']; ?></p></td>
				<p></p>
			</tr>
			<br />
			</div>
		</table>
		</div>
		<?php
		} while ($profile_rs=mysqli_fetch_assoc($profile_query));
		?>
	<?php
	}
	?>		
		<p>&nbsp
	<!--<p><a href="home.php?page=adminpanel">Go Back</a></p>