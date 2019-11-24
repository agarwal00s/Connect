<?php
		session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Connect</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


	<!-- CSS Files -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./assets/css/material-kit.css" rel="stylesheet"/>

	<?php
	if(isset($_COOKIE["login"]))
				{
					$_SESSION["username"] = $_COOKIE["login"];

					header("Location:home.php");
				}
	?>

<style>
.navbar {
    -webkit-transition: all 0.4s ease-out;
    -moz-transition: all 0.4s ease-out;
    -o-transition: all 0.4s ease-out;
    -ms-transition: all 0.4s ease-out;
    transition: all 0.4s ease-out;
}

.navbar.scrolled {
    background: rgb(68, 68, 68); //IE
    background: rgba(0, 0, 0, 0.78); //NON-IE

}
</style>

</head>

<body class="landing-page">
    <nav class="navbar  navbar-fixed-top navbar-transparent">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="./"><strong>Connect</strong></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="#" data-toggle="modal" data-target="#signupmodal" class="btn" target="_blank">
    						Sign Up
    					</a>
    				</li>
    				<li>
    					<a href="#" data-toggle="modal" data-target="#signinmodal" target="_blank" class="btn">
    						Sign In
    					</a>
    				</li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple">
							<i class="fa fa-twitter"></i>
						</a>
		            </li>
		            <li>
		                <a href="#" target="_blank" class="btn btn-simple">
							<i class="fa fa-facebook-square"></i>
						</a>
		            </li>
					<li>
		                <a href="#" target="_blank" class="btn btn-simple">
							<i class="fa fa-instagram"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('./assets/img/banner.jpg');">
            <div class="container">
                <div class="row">
					<div class="col-md-6">
						<h1 class="title">Connect with people</h1>
	                    <h4>Connect brings likeminded people together from across the world. People can interact with each other. It's the best online platform for participating in healthy debates.</h4>
	                    <br />
	                    <a href="./" class="btn btn-danger btn-raised btn-md">
							<i class="fa fa-play"></i> Watch video
						</a>
					</div>
                </div>
            </div>
        </div>

		<div class="main main-raised" id="main-section">
			<div class="container">
		    	<div class="section text-center section-landing">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h2 class="title">Why Connect?</h2>
	                        <h5 class="description">Connecting with people having same interests has a different dimention of excitement which Connect provides people.It provides a healthy online debating platform/</h5>
	                    </div>
	                </div>

					<div class="features">
						<div class="row">
		                    <div class="col-md-4">
								<div class="feature">
									<img src="./assets/img/discuss.png" alt="" class="img-rounded img-responsive col-xs-offset-4 col-md-offset-4"/>
									<h4 class="title">Healthy Online Debates</h4>
			                        <p class="description"> Connects provides an online platform for debate lovers. People can debate with strangers having same interests.</p>
								</div>

		                    </div>
		                    <div class="col-md-4">
								<div class="feature">
									<img src="./assets/img/blog.png" alt="" class="img-rounded img-responsive col-xs-offset-4 col-md-offset-4"/>
									<h4 class="title">Blog Writing</h4>
			                        <p class="description">Connect provides an online platform for writing blog and express your feeling with people who appreciate it.</p>
								</div>

		                    </div>
		                    <div class="col-md-4">
								<div class="feature feature-danger">
									<img src="./assets/img/a2a.png" alt="" class="img-rounded img-responsive col-xs-offset-4 col-md-offset-4"/>
									<h4 class="title">Ask to Answer</h4>
			                        <p class="description">Connect helps to make an online community where one can clear all their doubts by asking specialized people in their area.</p>
								</div>

		                    </div>
		                </div>
					</div>
	            </div>

	        	<div class="section text-center">
	                <h2 class="title">Here is our team</h2>

					<div class="team">
						<div class="row">
							<div class="col-md-3">
			                    <div class="team-player">
			                        <img src="./assets/img/faces/sourav.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Sourav Agarwal <br />
										<small class="text-muted">Full Stack Developer</small>
									</h4>
			                        <p class="description">Sourav is specialised back-end developer. He studies at St Thomas' College of Engineering & Technology. Fun-loving guy . </p>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-twitter"></i></a>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-instagram"></i></a>
									<a href="#" class="btn btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
			                    </div>
			                </div>
			                <div class="col-md-3">
			                    <div class="team-player">
			                        <img src="./assets/img/faces/vivek.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Vivek Prakash<br />
										<small class="text-muted">Full Stack Developer</small>
									</h4>
			                        <p class="description">Vivek is a specialised back-end developer. He studies at St Thomas' College of Engineering & Technology. Loves to code and watch tv-shows . </p>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-twitter"></i></a>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-linkedin"></i></a>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-youtube-play"></i></a>
			                    </div>
			                </div>
							<div class="col-md-3">
			                    <div class="team-player">
			                        <img src="./assets/img/faces/amitesh.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Amitesh Kumar Upadhyay<br />
										<small class="text-muted">Full Stack Developer</small>
									</h4>
			                        <p class="description">Amitesh is a specialised front-end developer. He studies at St Thomas' College of Engineering & Technology. Loves to eat and loves cars. </p>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-youtube-play"></i></a>
									<a href="#" class="btn btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
			                    </div>
			                </div>
			                <div class="col-md-3">
			                    <div class="team-player">
			                        <img src="./assets/img/faces/harsh.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Harsh Bharvada<br />
										<small class="text-muted">Full Stack Developer</small>
									</h4>
			                        <p class="description">Harsh is a specialised front-end developer. He studies at St Thomas' College of Engineering & Technology. Loves to play sports and watch movies. </p>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-google-plus"></i></a>
									<a href="#" class="btn btn-just-icon"><i class="fa fa-youtube-play"></i></a>
									<a href="#" class="btn btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
			                    </div>
			                </div>

						</div>
					</div>

	            </div>



	        </div>

		</div>

	    <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                <ul>
	                    <li>
	                        <a href="./">
	                            Connect
	                        </a>
	                    </li>
						<li>
	                        <a href="">
	                           About Us
	                        </a>
	                    </li>
	                    <li>
	                        <a href="">
	                           Blog
	                        </a>
	                    </li>
	                    <li>
	                        <a href="">
	                            Licenses
	                        </a>
	                    </li>
	                </ul>
	            </nav>
	            <div class="copyright pull-right">
	                &copy; 2017, made with <i class="fa fa-heart heart"></i> by BCs
	            </div>
	        </div>
	    </footer>
	</div>
	<!-- End of wrapper-->
	<!-- Start of all Modal-->

	<div id="signinmodal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="card card-signup">
					<div class="header header-primary text-center" style="height:100%">
						<h4>Sign In</h4>
						<div class="social-line">
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
					<p class="text-divider">Or Be Classical</p>
					<form class="form" method="post" action="home.php" onsubmit="return login();">
						<div class="content">
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">account_circle</i>
								</span>
								<input type="text" id="signinuser" class="form-control" placeholder="Your UserId...">
								<span id="msg7" style="color:red;"></span>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">lock_outline</i>
								</span>
								<input type="password" id="signinpass" placeholder="Password..." class="form-control" />
								<span id="msg8" style="color:red;"></span>
							</div>
						</div>
						<div class="footer text-center">
							<input type="submit" id="signinbtn" value="Get Started" class="btn btn-primary btn-wd btn-lg" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div id="notverifymodal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="card">
					<div class="content text-center" style="height:100%;width:100%;">
					<span><h4><b>Please Verify your Email Id with the link which is sent to your Email Account</b.</h4></span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="signupmodal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="card card-signup">
					<div class="header header-primary text-center" style="height:100%">
						<h4>Sign Up</h4>
						<div class="social-line">
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-facebook-square"></i>
							</a>
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-twitter"></i>
							</a>
							<a href="#" class="btn btn-just-icon">
								<i class="fa fa-google-plus"></i>
							</a>
						</div>
					</div>
					<p class="text-divider">Or Be Classical</p>
					<form class="form" action="index.php" method="post" onsubmit="return doit();">
						<div class="content">
							<div class="input-group ">
								<span class="input-group-addon">
									<i class="material-icons">face</i>
								</span>
								<input type="text" id="fullname" name="fullName" class="form-control" placeholder="Full Name">
								<span id="msg1" style="color:red;"></span>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">date_range</i>
								</span>
								<input name="DOB"  id="dob" class="form-control" type="date" value="1990-01-01"/>
								<span id="msg2" style="color:red;"></span>

							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">email</i>
								</span>
								<input type="text" id="emailid" name="emailID" class="form-control" placeholder="Your Email">
								<span id="msg3" style="color:red;"></span>
							</div>
							<div class="input-group ">
								<span class="input-group-addon">
									<i class="material-icons">account_circle</i>
								</span>
								<input type="text" id="username" name="userName" class="form-control" placeholder="User Name">
								<span id="msg4" style="color:red;"></span>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">lock_outline</i>
								</span>
								<input type="password" id="pass" name="password" placeholder="Password" class="form-control" />
								<span id="msg5" style="color:red;"></span>
							</div>
							<div class="input-group">
								<span class="input-group-addon">
									<i class="material-icons">lock_outline</i>
								</span>
								<input type="password" id="cnfpass" name="confirmPassword" placeholder="Confirm Password" class="form-control" />
								<span id="msg6" style="color:red;"></span>
							</div>
							<div class="footer text-center">
								<input type="submit" id="sbtn" value="Sign up" class="btn btn-primary btn-wd btn-lg" />
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

	<!--   Core JS Files   -->
	<script src="./assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="./assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="./assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="./assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="./assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="./assets/js/material-kit.js" type="text/javascript"></script>
<script>
								$('.datepicker').datepicker().on(
	'show', function() {
	var modal = $('.datepicker').closest('.modal');
	var datePicker = $('body').find('.datepicker');
	if(!modal.length) {
	$(datePicker).css('z-index', 'auto');
	return;
	}
	var zIndexModal = $(modal).css('z-index');
	$(datePicker).css('z-index', zIndexModal + 1);
	});

								</script>
	<script>
	var a =( $(".navbar").offset().top);

$(document).scroll(function(){
    if($(this).scrollTop() > a)
    {
       $('.navbar').css({"background":"rgb(68, 68, 68)"});
    } else {
       $('.navbar').css({"background":"transparent"});
    }
});
	</script>
<script>
				function doit(){
					$("#msg1").html("");
					$("#msg2").html("");
					$("#msg3").html("");
					$("#msg4").html("");
					$("#msg5").html("");
					$("#msg6").html("");
					password=$("#pass").val();
					email=$("#emailid").val();
					var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-="

					var check = function(string)
					{
					for(i = 0; i < specialChars.length;i++)
					{
					if(string.indexOf(specialChars[i]) > -1)
					{
					return true
					}
					}
					return false;
					}
					var alliswell="true";

					if($("#fullname").val()==="")
					{
						$("#msg1").html("*Name Required");
						alliswell="false";
					}
					if($("#dob").val()==="")
					{
						$("#msg2").html("*DOB Required");
						alliswell="false";
					}
					if(password.length<6||password.search(/[a-z]/i) < 0||password.search(/[0-9]/) < 0||check($('#pass').val()) == false)
					{
						$("#msg5").html("*Password must contain at least 6 characters including(1 letter,1 digit,1 special charcter)");
						alliswell="false";
					}
					if($("#cnfpass").val()==="")
					{
						$("#msg6").html("*Retype Password");
						alliswell="false";
					}
					if($("#pass").val()!=$("#cnfpass").val())
					{
						$("#msg6").html("*Password mismatch");
						alliswell="false";
					}
					var emailRegex = '^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$';
					 if(!email.match(emailRegex))
					 {
						 $("#msg3").html("*Invalid Email ID");
						alliswell="false";
					 }
					if($("#emailid").val()==="")
					{
						$("#msg3").html("*Email ID Required");
						alliswell="false";
					}
					if($("#username").val()==="")
					{
						$("#msg4").html("*UserName Required");
						alliswell="false";
					}
					if(alliswell=="true")
					{
							$.ajaxSetup({async: false});
							$.post("signup.php",{
						fullname: $("#fullname").val(),dob: $("#dob").val(),emailid: $("#emailid").val(),username: $("#username").val(),password: $("#pass").val()
					},function(data,status){
						if(data==="12")
						{
							$("#msg3").html("*Account with this Email ID Exist");
							$("#msg4").html("*Username Already Exist");
							alliswell="false";
						}
						else if(data==="1")
						{
							$("#msg4").html("*Username Already Exist");
							alliswell="false";
						}
						if(data==="2"){
							$("#msg3").html("*Account with this Email ID Exist");
							alliswell="false";
						}
					});
					}
						if(alliswell==="true")
							return true;
						else
						return false;
				}
	</script>
	<script>
	$(document).ready(function(){
		var specialChars = "<>@!#$%^&*()_+[]{}?:;|'\"\\,./~`-="
			var check = function(string){
			for(i = 0; i < specialChars.length;i++){
			if(string.indexOf(specialChars[i]) > -1){
            return true
			}
			}
			return false;
			}
		$("#fullname").change(function(){
			$("#msg1").html("");
		});
		$("#dob").change(function(){
			$("#msg2").html("");
		});
		$("#emailid").change(function(){
			$("#msg3").html("");
		});
		$("#username").change(function(){
			$("#msg4").html("");
		});
		$("#pass").change(function(){
			password=$("#pass").val();
			if(password.length<6||password.search(/[a-z]/i) < 0||password.search(/[0-9]/) < 0||check($('#pass').val()) == false)
			$("#msg5").html("*Password must contain at least 6 characters including(1 letter,1 digit,1 special charcter)");
			else
				$("#msg5").html("");

		});
		$("#cnfpass").change(function(){
			$("#msg6").html("");
		});
	});
	</script>
	<script>
		function login()
		{
			$("#msg7").html("");
			$("#msg8").html("");

			var check="true";
			if($("#signinuser").val()=="")
			{
				$("#msg7").html("*Username cannot be empty");
				check="false";
			}
			if($("#signinpass").val()=="")
			{
				$("#msg8").html("*Password cannot be empty");
					check="false";
			}
			if(check==="true")
			{
				$.ajaxSetup({async: false});
				$.post("signin.php",{
				usname: $("#signinuser").val(),pass: $("#signinpass").val()
				},function(data,status){
					if(data==="1")
					{
						$("#msg8").html("*Invalid Username or Password");
						check="false";
					}
					else if(data==="0")
					{
						$("#signinmodal").modal("hide");
						$("#notverifymodal").modal();
						check="false";
					}
				});
			}
			if(check==="true")
				return true;
			else
				return false;
		}
	</script>
</html>
