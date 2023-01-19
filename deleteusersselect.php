<!-- deleteuserselect.php

	User selects a user to delete

-->

<?php	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['UserID'])) {
		header("Loation:home.php");
	}
	$users_sql="SELECT users.userID, users.name, users.last_name, users.username, users.password FROM users";
	if($users_query=mysqli_query($db,$users_sql)) {
		$users_rs=mysqli_fetch_assoc($users_query);
	}
	
	if(mysqli_num_rows($users_query)==0) {
		echo "Sorry, we re currently under mainteinance, come back soon.";
	} else {
		?>
		<h1>Users who are authorized for the use of This Program:</h1>
		<p>Delete a User:</p>
		<p>&nbsp
<p><a href="home.php?page=users">Go Back</a></p>
		<?php do {
			?>
		<div id="table" class="table">
		<table id="table" border="2">
			<tr>
				<th>Name</th>
				<th>Last Name</th>
				<th>Username</th>

				
				<th>Delete</th>
			</tr>
			
			<div class="users">
			<tr>
				<td><p><?php echo $users_rs['name']; ?></a></p></td>
				<td><p><?php echo $users_rs['last_name']; ?></p></td>
				<td><p><?php echo $users_rs['username']; ?></p>
				<?php echo '<td><a href="#" onclick="myFunction('.$users_rs['userID'].')">Delete</a> </td>';?>
				<p></p>
			</tr>
			<br />
			</div>
		</table>
		</div>
		<script>
	function myFunction(userID)
	{
	var r=confirm("Are you sure you want to delete this users?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deleteconfirmusers.php?userID=" + userID);
		}
	}
</script>
		<?php
		} while ($users_rs=mysqli_fetch_assoc($users_query));
		?>
	<?php
	}
	?>		