<!DOCTYPE html>
<html lang="en">
	<head>
	<?php
		$inf="";
		$emailId=$_GET['email'];
		$hashstr=$_GET['hash'];
		$conn=new mysqli("localhost","root","","userdb");
		$sql="select verify from userdetails where BINARY emailID='".$emailId."' and BINARY hash='".$hashstr."'";
		$row=$conn->query($sql);
		$us=mysqli_fetch_array($row);
		$count=mysqli_num_rows($row);
		if($count==0)
			$inf="No record found";
		else if($us[0]==true)
			$inf="Your account is already been verified";
		else
		{
			$sql="update userdetails set verify=true where emailID='".$emailId."' and hash='".$hashstr."'";
			$conn->query($sql);
			$inf="Your Email Id has been verified";
		}
		$conn->close();
	?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="jumbotron text-center">
			<h1>Connect</h1>
		</div>
		<div class="container">
			<h2 style="color:gray"><?php echo $inf; ?></h2>
			<a href="index.php"><button type="button" class="btn btn-primary btn-lg">Go to Home and Sign in</button></a>
		</div>
	</body>
</html>
