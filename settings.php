<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Connect</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link href="assets/css/new.css" rel="stylesheet" />
    
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="./assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

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

            <ul class="nav">
                <li class="active">
                    <a href="settings.php">
                        <i class="ti-ink-pen"></i>
                        <p>Account</p>
                    </a>
                </li>
                <li>
                    <a href="privacy.php">
                        <i class="ti-lock"></i>
                        <p>Privacy Setting</p>
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
                    <a class="navbar-brand" href="#">Settings</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
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
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

		
		
	  <div class="content">
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-10 col-md-8">
                        <div class="card card-user">
                            
                              <div class="content">
							
                                <div class ="edit account info"><h3><small>Edit Account Settings</small></h3>
								<hr>
								<div class="porp">
								<div class="first">
									
										
										<div class="basic">
										<div class="col-xs-6 col-sm-8 col-lg-10">
                                          
                                                <a href="#" data-toggled="tooltip" title="edit"><label>Basic Account Setting</label></a>
										</div>
											<div class="col-xs-6 col-sm-4 col-lg-2">
											 <a href="#" data-toggled="tooltip" title="edit"><i class="ti-pencil"></i></a>
											</div>
											</div>
											
											
										
											
											
											<div class="password">
												<div class="col-xs-6 col-sm-8 col-lg-10">
                                          
													<a href="#"data-toggled="tooltip" title="edit"><label>Change Password</label></a>
												</div>
												<div class="col-xs-6 col-sm-4 col-lg-2">
													<a href="#" data-toggled="tooltip" title="edit"><i class="ti-pencil"></i></a>
												</div>

											</div>
											
											
											
											<div class="Visiblity">
												<div class="col-xs-6 col-sm-8 col-lg-10">
                                          
													<a href="#"data-toggled="tooltip" title="To Whome this account will visible"><label>Visiblity</label></a>
												</div>
												<div class="col-xs-6 col-sm-4 col-lg-2">
													<a href="#" data-toggled="tooltip" title="To Whome this account will visible"><i class="ti-pencil"></i></a>
												</div>

											</div>
											
                                </div>
                            </div>
                          
                           
                        </div>
				
                        
                    </div>


                </div>
            </div>
        </div>

    </div>
</div>


		
		
		
</div><!--end of main panel-->
	
	
	
</div><!--end of wrapper-->




</body>

	


    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

  <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>   

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>
	



</html>

	

		
	