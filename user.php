<?php
	session_start();
	$user=$_SESSION["username"];
	$xml=simplexml_load_file("./users/".$user."/profile.xml") or die("Error: Cannot create object");
	$fullname=$xml->fullname;
	$emailid=$xml->email;
	$birthdate=$xml->dob;
	$aboutme=$xml->aboutme;
	$points=$xml->points->upvotes->debate+$xml->points->upvotes->blog+$xml->points->upvotes->a2a;
	$points+=$xml->points->views->debate+$xml->points->views->blog+$xml->points->views->a2a;
	$following=$xml->following;
	$followers=$xml->followers;
?>
<div class="container-fluid">
<div class="row">
	<div class="col-lg-5 col-md-6">
		<div class="card card-user">
			<div class="image">
				<img src="assets/img/background.jpg" alt="..."/>
			</div>
			<div class="content">
				<div class="author">
						<div data-toggle="modal" data-target="#uploadimg">
							<img class="avatar border-white" src="./users/<?php echo $user."/".$user ?>.jpg" alt=":)"/>
						</div>
				  <h4 class="title"><?php echo $fullname; ?><br />
					 <a href="#"><small>@<?php echo $user; ?></small></a>
				  </h4>
				</div>
				<p class="description text-center">
					<?php echo $aboutme ?>
				</p>
			</div>
			<hr>
			<div class="text-center">
				<div class="row">
					<div class="col-md-3 col-md-offset-1">
						<h5><?php echo $points; ?><br /><small>Points</small></h5>
					</div>
					<div class="col-md-4">
						<h5><?php echo $following ?><br /><small>Following</small></h5>
					</div>
					<div class="col-md-3">
						<h5><?php echo $followers ?><br /><small>Followers</small></h5>
					</div>
				</div>
			</div>
		</div>

	</div>
	<div class="col-lg-7 col-md-6">
		<div class="card">
			<div class="header">
				<h4 class="title">Edit Profile</h4>
			</div>
			<div class="content">
				<form method="post" onsubmit="return false" >
					<div class="row">
						<div class="col-md-5">
							<div class="form-group">
								<label>Username</label>
								<input type="text" class="form-control border-input" disabled placeholder="Username" id="username" value="<?php echo $user; ?>">
							</div>
						</div>
						<div class="col-md-7">
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" class="form-control border-input" id="fullname" placeholder="Full Name" value="<?php echo $fullname; ?>">
							</div>
						</div>

					</div>

					<div class="row">
						<div class="col-md-7">
							<div class="form-group">
								<label for="exampleInputEmail1">Email address</label>
								<input type="email" class="form-control border-input" disabled placeholder="Email address" id="emailid" placeholder="Email" value="<?php echo $emailid; ?>">
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label>Wish you on</label>
								<input type="text" class="form-control border-input" placeholder="Birthday" id="birthdate" value="<?php echo $birthdate; ?>">
							</div>
						</div>
					</div>


					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>About Me</label>
								<textarea rows="4" class="form-control border-input" placeholder="Here can be your description" value="Mike"><?php echo $aboutme ?></textarea>
							</div>
						</div>
					</div>
					<div class="text-center">
						<button id="btn" class="btn btn-info btn-fill btn-wd">Update Profile</button>
					</div>
					<div class="clearfix"></div>
				</form>
			</div>
		</div>
	</div>

</div>
</div>

<!--upload image modal-->
<div id="uploadimg" class="modal fade" role="dialog" data-backdrop="false">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center">Change Profile Picture</h4>
				</div>
				<div class="modal-body">

					<div class="row">
						<form enctype="multipart/form-data" action="uploadimg.php" method="POST" id="myForm">
							<div class="row">
									<div class="col-md-4 col-offset-sm-2">

										<img src="Users/<?php echo $user ?>.jpg" class="img-thumbnail" id="dp" alt="Profile Pic">

									</div>
									<div class=" col-md-2">
										<input type="hidden" name="MAX_FILE_SIZE" value="512000" />

										<input name="userFile" type="file" onchange="readURL(this);" />
									</div>
							</div>
					</div>

					</div>
				<div class="modal-footer">
					<button class="btn btn-wd btn-success"  id="submit">Submit</button>
					</form>

					<button type="button" class="btn btn-wd btn-danger" data-dismiss="modal">Close</button>
				</div>

				</div>

			</div>
		</div>
	<!--end of upload modal-->
	<script>
		$("#btn").click(function()
				{

							$.post("update.php",{
						fullname: $("#fullname").val(),birthdate: $("#birthdate").val(),emailid: $("#emailid").val(),username: $("#username").val()
						},function(data,status){


							$.notify({
										icon: 'ti-check-box',
										message: "Updated <b>Successfully<b>!"

									},{
									type: 'success',
									timer: 4000
									});
					});
				});

				$("#submit").click(function()
				{
							var ext = $('#userFile').val().split('.').pop().toLowerCase();
								if($.inArray(ext, ['png','jpg','jpeg']) == -1) {
									alert('invalid extension!');
}								else
								$('form #myForm').submit();
				});

				function readURL(input) {
					if (input.files && input.files[0]) {
						var reader = new FileReader();

						reader.onload = function (e) {
						$('#dp')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(150);
					};

                reader.readAsDataURL(input.files[0]);
				}
        }
	</script>
