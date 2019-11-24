<div class="container-fluid">		
	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card" id="technology">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-info text-center">
								<i class="ti-rocket"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
									<span>Technology</span>
								<p>100+</p>
							</div>
						</div>
					</div>
					<div class="footer">
						<hr />
						<div class="stats">
							<i class="ti-reload"></i> Updated now
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card"  id="sports">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-warning text-center">
								<i class="ti-basketball"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								
									<span>Sports</span>
								<p>100+</p>
							</div>
						</div>
					</div>
					<div class="footer">
						<hr />
						<div class="stats">
							<i class="ti-reload"></i> Updated now
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card" id="world">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-success text-center">
								<i class="ti-world"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
								<span>World</span>
								<p>10+</p>
								
							</div>
						</div>
					</div>
					<div class="footer">
						<hr />
						<div class="stats">
							<i class="ti-calendar"></i> Last day
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="card" id="movies">
				<div class="content">
					<div class="row">
						<div class="col-xs-3">
							<div class="icon-big icon-danger text-center">
								<i class="ti-music-alt"></i>
							</div>
						</div>
						<div class="col-xs-9">
							<div class="numbers">
									<span>Movies</span>
								<p>165+</p>
							</div>
						</div>
					</div>
					<div class="footer">
						<hr />
						<div class="stats">
							<i class="ti-timer"></i>Last hour
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12 col-xs-12 text-center">
			<div id="rssOutput"></div>			
		</div>
	</div>
</div>


<script>
	$(document).ready(function(){
		
		$('#technology').click(function(){
			myLoader.showPleaseWait();
			fetch_data("fetchnews.php?key=1");
		});
		
		$('#sports').click(function(){
			myLoader.showPleaseWait();
			fetch_data("fetchnews.php?key=2");
		});
		
		$('#world').click(function(){
			myLoader.showPleaseWait();
			fetch_data("fetchnews.php?key=3");
		});
		
		$('#movies').click(function(){
			myLoader.showPleaseWait();
			fetch_data("fetchnews.php?key=4");
		});
		
});

function fetch_data(fetch_option)
{
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
			xmlhttp.open("GET",fetch_option,true);
			xmlhttp.send();
}
	
</script>

