<?php
	session_start();
		$user=$_SESSION["username"];
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Connect</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link href="./assets/css/new.css" rel="stylesheet" />

    <!-- Bootstrap core CSS     -->
    <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="./assets/css/animate.min.css" rel="stylesheet"/>
	<!-- JQuery Text Editor CSS     -->
	<link type="text/css" rel="stylesheet" href="assets/css/jquery-te-Style.css" charset="utf-8" />
    <!--  Paper Dashboard core CSS    -->
    <link href="./assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="./assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>
	<div class="wrapper">
		<div class="sidebar" data-background-color="black" data-active-color="danger"  >
		<!--
			Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
			Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
		-->
			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="./" class="simple-text">
						Connect
					</a>
				</div>

				<ul class="nav" id="menu">
					<li class="active">
						<a href="#home" class="menu">
							<i class="ti-home"></i>
							<span id="home">Home</span>
						</a>
					</li>
					<li>
						<a href="#profile" class="menu">
							<i class="ti-user"></i>
							<span id="profile">Profile</span>
						</a>
					</li>
					<li>
						<a href="#news" class="menu">
							<i class="ti-announcement"></i>
							<span id="news">News</span>
						</a>
					</li>
					<li>
						<a href="#debate" class="menu">
							<i class="ti-comments"></i>
							<span id="debate">Debate</span>
						</a>
					</li>
					<li>
						<a href="#ask-to-answer" class="menu">
							<i class="ti-help"></i>
							<span id="ask-to-answer">Ask to Answer</span>
						</a>
					</li>
					<li>
						<a href="#blog" class="menu">
							<i class="ti-pencil-alt2"></i>
							<span id="blog">Blog</span>
						</a>
					</li>
					<li>
						<a href="#stats" class="menu">
							<i class="ti-panel"></i>
							<span id="stats">Stats</span>
						</a>
					</li>
				</ul>
			</div>
		</div>

		 <div class="main-panel">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar bar1"></span>
							<span class="icon-bar bar2"></span>
							<span class="icon-bar bar3"></span>
						</button>
						<div class="navbar-brand"><span>Home</span></div>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">

							<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="ti-bell"></i>
										<p class="notification">5</p>
										<p>Notifications</p>
										<b class="caret"></b>
								  </a>
								  <ul class="dropdown-menu">
									<li><a href="#">Notification 1</a></li>
									<li><a href="#">Notification 2</a></li>
									<li><a href="#">Notification 3</a></li>
									<li><a href="#">Notification 4</a></li>
									<li><a href="#">Another notification</a></li>
								  </ul>
							</li>

							  <!-- alert notification end-->
							<!-- user login dropdown start-->
							<li class="dropdown">
								<a data-toggle="dropdown" class="dropdown-toggle" href="#">
									<span class="profile-ava">
										<img id="dp" alt="" src="users/<?php echo $user; ?>/<?php echo $user; ?>.jpg"/>
									</span>
									<span class="username"  ><?php echo $user; ?></span>
									<b class="caret"></b>
								</a>

								<ul class="dropdown-menu">
									<li>
										<a href="settings.php">
											<i class="ti-settings"></i>
											<span>Settings</span>
										</a>
									</li>
									<li>
										<a href="signout.php">
											<i class="ti-shift-right"></i>
											<span>Logout</span>
										</a>
									</li>
								</ul>
							</li>
							<!-- user login dropdown end -->
						</ul>
					</div>
				</div>
			</nav>
			<!--Content starts here-->
			<div class="content">

			</div>
			<!--Content ends here-->
		</div>
	</div>
</body>
<!--div to load all the modals-->
<div id="myModals">

</div>

	<!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

	<!--  Loader Plugin    -->
    <script src="assets/js/loader.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<!-- For textarea -->
	<script src="assets/js/jquery-te-1.0.5.min.js"></script>

<script>
	var prevWidth = 0;
			$(document).ready(function(){
				prevWidth = $(window).width();
				$(window).resize(function(){
						if($(window).width() <= 991 && prevWidth > 991){
							window.location.reload();
							}
						if($(window).width() > 991 && prevWidth <= 991){
							window.location.reload();
							}
					});

				$.get("modal.php", function(data, status){
							$('#myModals').html('');
							$('#myModals').html(data);
						});

				setTimeout(function() {
					$('a').find('#home').trigger('click');
				},10);
				/*
				* start of content for active page
				*/
					$('a').click(function(){
						if($(this).find('span').attr('id') !== undefined)
						{
						$('body').find('.active').removeClass("active");
						$(this).parent().addClass("active");
						var fileName = "default.php";
						var choice=$(this).find('span').attr('id');
						switch(choice){
							case("home"):fileName = "default.php";
										rssFeed="q.php";
										$('.navbar-brand').text('Home');

										break;
							case("profile"):fileName = "user.php";
											$('.navbar-brand').text('Profile');

										break;

							case("news"):fileName = "news.php";
										rssFeed="fetchnews.php?key=0";
										$('.navbar-brand').text('News');
										myLoader.showPleaseWait();
										break;

							case("debate"):fileName = "debate.php";
											$('.navbar-brand').text('Debate');
											break;

							case("ask-to-answer"):fileName = "a2a.php";
												$('.navbar-brand').text('Ask to answer');
												break;

							case("blog"):fileName = "blog.php";
										$('.navbar-brand').text('Blog');
										break;

							case("stats"):fileName = "stats.php";
										$('.navbar-brand').text('Stats');
										break;

							default : alert('Link Broken');
										return false;
						}
						$.get(fileName, function(data, status){
							$('.content').html('');
							$('.content').html(data);
							var now = new Date();
							var hrs = now.getHours();
							var msg = "Hello There";
							var imageName = "./assets/img/hello.jpeg";

							if (hrs >=  0) {msg = "Shh!!! Dreamers at work"; imageName = "./assets/img/late.jpeg";}//   0-4
							if (hrs >  4)  {msg = "Good morning"; imageName = "./assets/img/gm.jpeg";}      //  5-12
							if (hrs > 11)  {msg = "Good afternoon"; imageName = "./assets/img/ga.jpeg";}   //  12 -4
							if (hrs > 16)  {msg = "Good evening"; imageName = "./assets/img/ge.jpeg";}     // 5- 8
							if (hrs > 20)  {msg = "Let's burn the midnight oil";  imageName = "./assets/img/gn.jpeg";}      //9- 0
							$("#greeting").html(msg);
							$("#greetingImage").attr('src',imageName);
						});

						/*
						* start of news fetching
						*/
							if (window.XMLHttpRequest) {
							// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp=new XMLHttpRequest();
							}
							else {  // code for IE6, IE5
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.onreadystatechange=function() {
								if (xmlhttp.readyState==4 && xmlhttp.status==200) {
									myLoader.hidePleaseWait();
									$("#rssOutput").html(xmlhttp.responseText);

								}
							}
							$("#rssOutput").html(''); // Set blank before sending request
							xmlhttp.open("GET",rssFeed,true);
							xmlhttp.send();
						/*
						* end of news fetching
						*/
						}
					});
				/*
				* end of content for active page
				*/
			});
			/*
			* end of document ready
			*/
</script>
</html>
