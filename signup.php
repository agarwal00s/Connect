<?php
	session_start();
	$alliswell=true;
	$fullname=$_POST['fullname'];
	$DOB=$_POST['dob'];
	$email=$_POST['emailid'];
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$DOB = str_replace('/', '-', $DOB);
	$DOB=date("Y-m-d", strtotime($DOB) );
	$conn=new mysqli("localhost","root","","userdb");
	$sql="select userName from userdetails where userName='".$user."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	if($us[0]==$user){
		echo "1";
		$alliswell=false;
	}
	$sql="select emailID from userdetails where emailID='".$email."'";
	$row=$conn->query($sql);
	$us=mysqli_fetch_array($row);
	if($us[0]==$email){
		echo "2";
		$alliswell=false;
	}
	if($alliswell==true){
		$hash = md5(rand(0,1000));
		require 'PHPMailer/PHPMailerAutoload.php';
		$mail = new PHPMailer;

		$mail->isSMTP();                            // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                     // Enable SMTP authentication
		$mail->Username = 'allconnectu@gmail.com';          // SMTP username
		$mail->Password = 'connect@123'; // SMTP password
		$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                          // TCP port to connect to

		$mail->setFrom('info@connect.com', 'Connect');
		$mail->addReplyTo('allconnectu@gmail.com', 'Connect');
		$mail->addAddress($email);   // Add a recipient

		$mail->isHTML(true);  // Set email format to HTML

		$bodyContent = '<html>
		<body style="background-color:#CCCCCC;">
		<div style="padding-bottom:10px;margin-left:30px;margin-right:30px;margin-top:10px;margin-bottom:25px;background-color:white;">

				<h1 style="font-size:220%;letter-spacing:2px;font-style:muri;text-align:center;padding-top:15px;padding-bottom:15px;background-color:rgb(68,68,68);color:white;">Connect<br/></h1>

			<p style="padding-left:10px;line-height:1.5;letter-spacing:1px;word-spacing:5px;padding-right:10px;font-size:120%;text-align:center;color:black;font-style:muri;">
			<br/>
			Connect brings likeminded people together from across the world. People can interact with each other. It\'s the best online platform for participating in healthy debates.
			<br/>
			<br/>
			Thank you for Joining with us..
			<br/>
			<br/>
			Click on the button below to verify your account:
			<br/><br/>
			<a href="http://localhost/Connect/verify_account.php?email='.$email.'&hash='.$hash.'"><button type="button" style="
			margin:auto;
		padding: 10px 25px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 13px;
		margin: 2px 1px;
		background-color: #F44336;
		color:#FFFFFF;
		border: 2px solid #F44336;"
		>VERIFY</button></a>

			</p>
		</div>
		</body>
		</html>';
		$mail->Subject = 'Email Verification';
		$mail->Body    = $bodyContent;

		$mail->send();
			$sql="insert into userdetails values('".$user."','".$fullname."','".$email."','".$pass."','".$hash."',false)";
			$conn->query($sql);
			$conn->close();

			$str="./users/".$user;
			mkdir($str);
			copy("./users/default-avatar.jpg",$str."/".$user.".jpg");
			require_once('./createProfile.php');
			require_once('./createSettings.php');
	}
?>
