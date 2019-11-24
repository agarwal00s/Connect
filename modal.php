<!--Start of viewDebate modal-->
<div id="viewDebate" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">Who is a better ODI player?</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-6 motion1 text-center col-xs-6" >
						<h5>Rohit Sharma</h5>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								111 <i class="fa fa-thumbs-up"></i>
							</div>
							<div class="col-md-4 col-xs-4">
								20 <i class="fa fa-comment"></i>
							</div>
							<div class="col-md-4 col-xs-4">
								5 <i class="fa fa-share-alt"></i>
							</div>
						</div>
						<br/>
					</div>
					<div class="col-md-6 motion2 text-center col-xs-6" >
						<h5>Virat Kohli</h5>
						<div class="row">
							<div class="col-md-4 col-xs-4">
								111 <i class="fa fa-thumbs-up"></i>
							</div>
							<div class="col-md-4 col-xs-4">
								20 <i class="fa fa-comment"></i>
							</div>
							<div class="col-md-4 col-xs-4">
								5 <i class="fa fa-share-alt"></i>
							</div>
						</div>
						<br/>
					</div>
				</div>
				<br/>
				<div class="row"><!--second row-->
					<div class="col-xs-1 ">
						<img class="img-responsive img-circle" src="assets/img/faces/harsh.jpg" alt="..."/>
					</div>
					<div class="col-md-10  col-xs-10">
						<input type="text" class="comment" onkeypress="this.style.width = ((this.value.length + 1) * 10) + 'px';" id="commentbox"/>
					</div>
					<div class="col-md-1  col-xs-1">
						<btn class="btn btn-md btn-info btn-icon btn-fill" id="sendbutton"><i class="fa fa-paper-plane"></i></btn>
					</div>
				</div><!--end of second row-->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-wd" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
</div>
<!--end of viewDebate modal-->

<!--Start of igniteDebate modal-->
<div id="igniteDebate" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">Ignite new debate</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class=" text-center col-md-1 col-xs-1 text-center">
						<h5>Topic:</h5>
					</div>
					<div class=" col-md-10 col-xs-10">
						<input type="text" class="debatetopic"  id="debatetopicbox"/>
					</div>
					<div class="col-md-1  col-xs-1">
						<btn class="btn btn-md btn-default btn-icon btn-fill" id="topiccheckbtn" style="opacity:0" ><i id="topiccheckicon" class="fa fa-check-circle"></i></btn>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-1 text-center">
						<h5>Tags:</h5>
					</div>
					<div class="col-md-5 col-xs-5 ">
						<select class="drop" id="tags">
							<option value="">Interests</option>
							<option value="">cricket</option>
							<option value="">football</option>
							<option value="">Hockey</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-1 text-center">
						<h5>Sides:</h5>
					</div>
					<div class=" col-md-5 col-xs-5">
						<input type="text" class="debatetopic"   id="side1box" />
					</div>
					<div class=" col-md-5 col-xs-5">
						<input type="text" class="debatetopic"   id="side2box" />
					</div>
					<div class="col-md-1 col-xs-1">
						<btn class="btn btn-md btn-default btn-icon btn-fill" id="sidecheckbtn" style="opacity:0" ><i id="sidecheckicon" class="fa fa-check-circle"></i></btn>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-1 text-center">
						<h5>Color:</h5>
					</div>
					<div class=" col-md-5 col-xs-5">
						<select class="drop" id="color1">
							<option value="blue">Blue</option>
							<option value="red">Red</option>
							<option value="green">Green</option>
							<option value="yellow">Yellow</option>
						</select>
					</div>
					<div class=" col-md-5 col-xs-5">
						<select class="drop" id="color2">
							<option>Blue</option>
							<option>Red</option>
							<option>Green</option>
							<option>Yellow</option>
						</select>
					</div>
					<div class="col-md-1 col-xs-1">
						<btn class="btn btn-md btn-default btn-icon btn-fill" id="colorcheckbtn" style="opacity:0" ><i id="colorcheckicon" class="fa fa-check-circle"></i></btn>
					</div>
				</div>
				<div class="row">
					<div id="error" class=" col-md-4 text center col-md-offset-4 col-xs-4 col-xs-offset-4">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<btn class="btn btn-wd btn-success" id="submit">Sumbit</btn>
				<button type="button" class="btn btn-wd btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--end of igniteDebate modal-->

<!--Start of Create new blog modal-->

<div id="igniteBlog" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">Create New Blog</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class=" text-center col-md-1 col-xs-1 text-center">
						<h5>Topic:</h5>
					</div>
					<div class=" col-md-10 col-xs-10">
						<input type="text" class="debatetopic"  id="blogTopicBox"/>
					</div>
					<div class="col-md-1  col-xs-1">
						<btn class="btn btn-md btn-default btn-icon btn-fill" id="debatetopicdone" ><i class="fa fa-check-circle"></i></btn>
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-xs-1 text-center">
						<h5>Tags:</h5>
					</div>
					<div class="col-md-5 col-xs-5 ">
						<select class="drop" id="blogTags">
							<option value="N.A">Interests</option>
							<option value="Sports">Sports</option>
							<option value="Movies">Movies</option>
							<option value="Computer Science">Computer Science</option>
							<option value="Leisure">Leisure</option>
						</select>
					</div>
				</div>
				<div class="row">
					<form method="get">
						<textarea name="text" id="blogTextBox"></textarea>
					</form>
					<script>
						$("textarea").jqte();
					</script>
				</div>
				<div class="row">
					<div id="error" class=" col-md-4 text center col-md-offset-4 col-xs-4 col-xs-offset-4">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<btn class="btn btn-wd btn-success" id="submitBlog">Submit</btn>
				<button type="button" class="btn btn-wd btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
</div>
<!--End of Create new blog modal-->

<!--Start of Saved modal-->
<div id="saveBlog" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">Blog : : Blog</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12 motion2 text-center col-xs-6" >
						<h5>Save karo khus rho</h5>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-wd" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!--End of Saved modal-->
<!--Start of A2A modal-->
<div id="a2aModal" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center">ASK To ANSWER</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class=" text-center col-md-1 col-xs-1 text-center">
						<h5>Ques:</h5>
					</div>
					<div class=" col-md-10 col-xs-10">
						<input type="text" class="debatetopic"  id="debatetopicbox"/>
					</div>
					<div class="col-md-1  col-xs-1">
						<btn class="btn btn-md btn-default btn-icon btn-fill" id="topiccheckbtn" style="opacity:0" ><i id="topiccheckicon" class="fa fa-check-circle"></i></btn>
					</div>
				</div>

				<div class="row">
					<div class="col-md-1 col-xs-1 text-center">
						<h5>Tags:</h5>
					</div>
					<div class="col-md-5 col-xs-5 ">
						<select class="drop" id="tags">
							<option value="">Interests</option>
							<option value="">cricket</option>
							<option value="">football</option>
							<option value="">Hockey</option>
						</select>
					</div>
				</div>
				<div class="row">
					</br>
					<div class=" text-center col-md-2 col-xs-1 text-center">
						<h5>Top Writers:</h5>
					</div>
					<table class="table">
						<tr>
							<td><img src="./assets/img/harsh07.jpg" class="img-circle" alt="Harsh" width="50" height="50"> &nbsp Harsh &nbsp <btn class="btn btn-success">ASK</btn></td>
							<td><img src="./assets/img/sourav.jpg" class="img-circle" alt="Sourav" width="50" height="50"> &nbsp Sourav &nbsp <btn class="btn btn-success">ASK</btn></td>
							<td><img src="./assets/img/vivek15.jpg" class="img-circle" alt="Vivek" width="50" height="50"> &nbsp Vivek &nbsp <btn class="btn btn-success">ASK</btn></td>
							<td><img src="./assets/img/amitesh.jpg" class="img-circle" alt="Amitesh" width="50" height="50"> &nbsp Amitesh &nbsp <btn class="btn btn-success">ASK</btn></td>
						</tr>
					</table>
				</div>
				<div class="row">
					<div id="error" class=" col-md-4 text center col-md-offset-4 col-xs-4 col-xs-offset-4">

					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-wd btn-success" id="submit">Submit</button>
				<button type="button" class="btn btn-wd btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
    </div>
</div>

<!--End of A2A modal-->
<script src="assets/js/myModal.js" type="text/javascript"></script>
