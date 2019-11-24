<?php
	session_start();
	
		$user=$_SESSION["username"];
	
	
	?>
<?php

$info = pathinfo($_FILES['userFile']['name']);
$ext = $info['extension']; // get the extension of the file
$newname = "$user.".$ext;

$target = 'Users/'.$newname;
move_uploaded_file( $_FILES['userFile']['tmp_name'], $target);

header("Location:user.php");



?>