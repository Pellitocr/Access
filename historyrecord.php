<!-- historyrecord.php
	
	an activity log that tracks all the activity that the user does
	by extracting it from a table named `log`.
	Also uses a search bar (that works)

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
<title>Logs Hub</title>
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>

<body>

<div class="container">
<?php
	include("header.php");
?>
<div class="background" >
<h1>Table of Recorded Activities</h1>
<p>Table of Logs:</p>
<p>&nbsp
<div class ="profilesearch"> 
<form action = "historyrecord.php" method="GET">
<label>Search</label>
<input type="text" name="search" placeholder="" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" ></input>
<button type="submit" >Search</button>
<p>&nbsp
</form>

<div id="table" class="table">
	<table id="table" width "959px" >
	<tr>

		<th>User</th>
		<th>Purpose</th>
		<th>Topic</th>
		<th>Date</th>

	</tr>
	<?php
	
	$con = mysqli_connect("localhost","root","","access");
	//connects to the databse
	
	if(isset($_GET['search']))
	//the search variable
	{
		$filtervalues = $_GET['search'];
		$query = "SELECT * FROM log WHERE CONCAT (username, purpose, classroom, loginDate) LIKE '%$filtervalues%' ";
		//filters the search variable and compares it with any word/character similar to a table data
		$query_run = mysqli_query($con,$query);
		
		if(mysqli_num_rows($query_run) > 0 )
		{
			foreach($query_run as $items)
			{
				?>
				<tr>
				
					<td><?= $items['username']; ?></td>
					<td><?= $items['purpose']; ?></td>
					<td><?= $items['classroom']; ?></td>
					<td><?= $items['loginDate']; ?></td>
				
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
	<p>&nbsp

























<div id="table" class="table">
	<table id="table" width "959px" >
	<tr>

		<th>User</th>
		<th>Purpose</th>
		<th>Topic</th>
		<th>Date</th>
	</tr>
	<?php
	//the activity log itself
	
	$sql = "SELECT * FROM `log` ORDER BY loginDate Desc ";
	
	$result = $db->query($sql);
	
	if ($result->num_rows>0) {
		while ($row = $result -> fetch_assoc()) {
			echo "<tr><td>". $row["username"] ."</td><td>". $row["purpose"] ."</td><td>".$row["classroom"] ."</td><td>".$row["loginDate"]."</td></tr>";
			
		
		}
	} else {
		echo "Theres no keys registered";
		//if theres no information (unlikely) it displays theis message
	}
	$db->close();
	?>
	</table>
	<p>&nbsp
	<p><a href="historyrecord.php">To Top</a></p>
</div>

<p>&nbsp

</div>