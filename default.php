<style>
	@import url(https://fonts.googleapis.com/css?family=Muli:400,300);
.caption {
	margin:auto;	
}
.caption img{
	margin:auto;
	height:250px;
	width:100%;
}
.caption h2{
	background-color:rgba(0,0,0,0.4);
}
.mid h2 {
  font-family: 'Muli', sans-serif;
  font-weight: 700;
  color: white;
  margin: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 4rem;
  transform: translate(-50%, -50%);
}
</style>

<div class="container-fluid">
    <div class="row">
		<div class="col-md-4 col-sm-4">
            <div class="card">
				<div class="content">
					<div class="caption mid text-center">
						<img class="img-responsive" id="greetingImage"src="./assets/img/ga.jpeg" />
						<h2 id="greeting">Hello there</h2>
					</div>
				</div>
			</div>
        </div>
		<div class="col-md-8 col-sm-8">
            <div class="card">
				<div class="content">
						<iframe id="forecast_embed" type="text/html" frameborder="0" height="245" width="100%">XYZ</iframe>
				</div>
			</div>
        </div>
    </div>
	
	<div class="row">
		<div class="col-md-12 col-xs-12">
			<div id="rssOutput"></div>			
		</div>
	</div>
</div>
<!-- Forecast.io methods-->
	<script src="assets/js/forecast.io.js"></script>
