<?php session_start();
 	$index=simplexml_load_file('./blog/index.xml');
	foreach ($index->name as $value) {
		$xml=simplexml_load_file('./blog/'.$value.'.xml');
		$topic=$xml->topic;
		$author=$xml->author;
	 	foreach($xml->tags->tag as $tags){
	    	$tag=$tags;
		}
		$content=$xml->content;
		echo '
		<div id="viewBlog'.$topic.'" class="modal fade" role="dialog">
			<div class="modal-dialog modal-lg">
				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title text-center">'.$topic.'</h4>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12 motion2 text-center col-xs-6">
								<h5>'.$author.'</h5>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="text-center col-md-12 col-xs-12">
								<h5>'.$content.'<h5>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-md-1 col-xs-1">
								<img class="img-responsive img-circle" src="users/'.$author.'/'.$author.'.jpg" alt="..."/>
							</div>
							<div class="col-md-10 col-xs-10">
								 <input type="text" class="comment" onkeypress="this.style.width = ((this.value.length + 1) * 16)" + "px;" id="commentbox"/>
							</div>
							<div class="col-md-1 col-xs-1">
								<btn class="btn btn-md btn-info btn-icon btn-fill" id="sendbutton" onclick="send()"><i class="fa fa-paper-plane"></i></btn>
							</div>
						</div><!--end of second row-->
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-wd" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div> ';
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card" data-toggle="modal" data-target="#igniteBlog">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-info text-center">
								<i class="ti-rocket"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Ignite
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-success text-center">
								<i class="ti-stats-up"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Trending
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-danger text-center">
								<i class="ti-bookmark"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Bookmarks
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-warning text-center">
								<i class="ti-eye"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								Suggestion
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br/>
	<?php require_once('fetchBlogs.php')?>
</div>
<script>
function viewBlogModal(data){
	var id = ('#viewBlog'+data);
	$(id).appendTo("body");
}
function saveBlogModal(data)
{
   $("#saveBlog .modal-title").html(data);
}


</script>
