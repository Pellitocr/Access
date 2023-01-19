<!-- search.php

	a search hub where the user can search both profiles and keys

-->
<?php
	include("dbconnect.php");
	session_start();
	if(!isset($_SESSION['admin'])) {
		header("Location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Search Hub</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
<?php
	include("header.php");
?>
<div class="background" >
<div class ="profilesearch"> 
<form action = "search.php" method="GET">
<label>Search</label>
<input type="text" name="search" placeholder="Profile/Key" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" ></input>
<button type="submit" >Search</button>
<p>&nbsp
</form>

<div id="table" class="table">
	<table id="table" width "959px" >
	<tr>

		<th>Name</th>
		<th>Last Name</th>
		<th>Employee Number</th>
		<th>Email</th>

	</tr>
	<?php
	
	$con = mysqli_connect("localhost","root","","access");
	//connects to the database
	
	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		//filters the search variable
		$query = "SELECT * FROM profile WHERE CONCAT (name, last_Name, employee_Number, email) LIKE '%$filtervalues%' ";
		//searches for that variable in the table
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
			//returns with data
			{
				?>
				<tr>
				
					<td><?= $items['name']; ?></td>
					<td><?= $items['last_Name']; ?></td>
					<td><?= $items['employee_Number']; ?></td>
					<td><?= $items['email']; ?></td>
				
				</tr>
				<?php
			}
		}
		else
		{
			?>
				<tr>
				
					<td colspan="4" >No Record Found.</td>
				
				</tr>
			<?php
			
		}
	}
	
	
	?>
	
	
	</table>
	<p>&nbsp
	<table id="table" width "959px" >
	<tr>

		<th>Classroom</th>
		<th>Availability</th>
		<th>Holder</th>
		<th>Purpose</th>

	</tr>
	<?php
	
	$con = mysqli_connect("localhost","root","","access");
	//connects with databse
	if(isset($_GET['search']))
	{
		$filtervalues = $_GET['search'];
		$query = "SELECT * FROM `keys` WHERE CONCAT (classroom, availability, givenTo, purpose) LIKE '%$filtervalues%' ";
		//searches the table for that variable
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
			//returns with data
			{
				?>
				<tr>
				
					<td><?= $items['classroom']; ?></td>
					<td><?= $items['availability']; ?></td>
					<td><?= $items['givenTo']; ?></td>
					<td><?= $items['purpose']; ?></td>
				
				</tr>
				<?php
			}
		}
		else
		{
			?>
				<tr>
				
					<td colspan="4" >No Record Found.</td>
				
				</tr>
			<?php
			
		}
	}
	
	
	?>
	
	
	</table>
</div>
 </div>

</div>


</body>
</html>

