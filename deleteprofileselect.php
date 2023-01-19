<?php	
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
	if(!isset($_GET['profileID'])) {
		header("Loation:home.php");
	}
	$profile_sql="SELECT profile.ID, profile.last_Name, profile.name, profile.comments, profile.sex, profile.employee_Number FROM profile";
	if($profile_query=mysqli_query($db,$profile_sql)) {
		$profile_rs=mysqli_fetch_assoc($profile_query);
	}
	
	if(mysqli_num_rows($profile_query)==0) {
		echo "Sorry, we re currently under mainteinance, come back soon.";
	} else {
		?>
		<h1>Personnel who are authorized for the use of keys:</h1>
		<p>Delete a Personnel Profile:</p>
		<p>&nbsp
<p><a href="home.php?page=profiles">Go Back</a></p>
		<?php do {
			?>
		<div id="table" class="table">
		<table id="table" border="2">
			<tr>
				<th>Name</th>
				<th>Last Name</th>
				<th>Employe Number</th>
				<th>Sex</th>
				<th>Level</th>
				
				<th>Delete</th>
			</tr>
			
			<div class="profile">
			<tr>
				<td><p><a href="home.php?page=file&ID=<?php echo $profile_rs['ID']; ?>"><?php echo $profile_rs['name']; ?></a></p></td>

				<td><p><?php echo $profile_rs['last_Name']; ?></p></td>
				<td><p><?php echo $profile_rs['employee_Number']; ?></p>
				<td><p><?php echo $profile_rs['sex']; ?></p></td>
				<td><p><?php echo $profile_rs['comments']; ?></p></td>
				<?php echo '<td><a href="#" onclick="myFunction('.$profile_rs['ID'].')">Delete</a> </td>';?>
				<p></p>
			</tr>
			<br />
			</div>
		</table>
		</div>
		<script>
	function myFunction(ID)
	{
	var r=confirm("Are you sure you want to delete this profile?");
	if (r==true) //Ensures the user does not delete an item by mistake
		{
			window.location.assign("deleteconfirmprofile.php?ID=" + ID);
		}
	}
</script>
		<?php
		} while ($profile_rs=mysqli_fetch_assoc($profile_query));
		?>
	<?php
	}
	?>		