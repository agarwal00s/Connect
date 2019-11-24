<?php
session_start();

?>
<?php
	
	
	$fullname=$_POST["fullname"];
	$emailid=$_POST["emailid"];
	$birthdate=$_POST["birthdate"];
	
	$conn=new mysqli("localhost","root","","userdb");
	$sql="update userdetails set fullName='".$fullname."' , DOB='".$birthdate."' where emailID='".$emailid."'";
	$conn->query($sql);
	$sql="select * from userdetails where fullName='".$fullname."'";	
	
	$row=$conn->query($sql);
	$mem=mysqli_fetch_array($row);
	$_SESSION["fullname"]=$fullname;
	$_SESSION["emailid"]=$emailid;
	$conn->close();
	echo"1";


?>