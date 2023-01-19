<!-- addkeyconfirm.php
	
	alerts the user of a new added key
	
-->

<?php	
	include("dbconnect.php");
	if(isset($_POST["submit"])){
		$_SESSION['keyNUM']="0";
		$_SESSION['classroom']=$_POST['classroom'];
		$_SESSION['availability']=$_POST['availability'];
		$_SESSION['givenTo']=$_POST['givenTo'];
		$_SESSION['purpose']=$_POST['purpose'];
		$_SESSION['dateRequested']=$_POST['dateRequested'];
		$_SESSION['date']=$_POST['date'];	
		//variables
	}
	
	$newcat_sql="INSERT INTO `keys` (`keyNUM`, `classroom`, `availability`, `givenTo`, `purpose`, `date`,`dateRequested`) VALUES ('".$_SESSION['keyNUM']."','".$_SESSION['classroom']."','".$_SESSION['availability']."','".$_SESSION['givenTo']."', '".$_SESSION['purpose']."', '".$_SESSION['date']."', '".$_SESSION['dateRequested']."')";
	//inserts data into table
	$newcat_query=mysqli_query($db, $newcat_sql);
	unset($_SESSION['addkeys']);
	echo
	"
	<script> alert('New Key Created') </script>
	"
?>

<!-- Displays the information provided -->
<h1>Add new Classroom</h1>
	<p>You entered: 
	<div id="table" class="table">
		<table id="table"> 
			<tr>
				<th>Classroom</th>
				<th>Availability</th>
				<th>Holder</th>
				<th>Purpose</th>
				<th>Date Requested</th>
				<th>Date Returned</th>	
			</tr>
	
		<tr>
				<td><?php echo $_SESSION['classroom']; ?></td>
				<td><?php echo $_SESSION['availability']; ?></td>
				<td><?php echo $_SESSION['givenTo']; ?></td>
				<td><?php echo $_SESSION['purpose']; ?></td>
				<td><?php echo $_SESSION['dateRequested']; ?></td>
				<td><?php echo $_SESSION['date']; ?></td>
		</tr>
	
		</table>
	</div>
	
	<p><a href="home.php">Go Home</a></p>
	
	
	
<!-- 
	adds a new log activity in historyrecord.php
-->
	
<?php
	if(isset($_POST["submit"])){
		$_SESSION['classroom']=$_POST['classroom'];
		$_SESSION['date']=$_POST['date'];
		}
		$sql = "INSERT INTO `log`(`ID`, `username`, `purpose`, `classroom`, `loginDate`) VALUES ('0','".$_SESSION['admin']."','Added Classroom','".$_SESSION['classroom']."',NOW())";

	if (mysqli_query($db, $sql)) 
		{

		} 
	else 
		{
			echo '<script>alert("Error record: " . mysqli_error($db)!");</script>';
		}
	mysqli_close($db);
?>