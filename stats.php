<script type="text/javascript" src="./assets/js/jquery.easypiechart.js"></script>
<style>
	.circle {
  margin: auto;
  padding: 16px;
  text-align: center;
  width: 180px;
  height: 180px;
  border-radius: 50%;
}

.circle::before,
.circle::after {
  position: absolute;
  z-index: -1;
  display: block;
  content: '';
}
.circle,
.circle::before,
.circle::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all .5s;
  transition: all .5s;
}

.circle {
  position: relative;
  z-index: 2;
  background-color: #fff;
  border: 3px solid  rgba(66, 66, 66,0.4);
  color: rgba(66, 66, 66,0.8);
  line-height: 25px;
  overflow: hidden;
}

.circle:hover {
  color: rgba(66, 66, 66,1);
}
.circle::after {
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  -webkit-transform: scale(.5);
  transform: scale(.5);
}
.circle:hover::after {
  background: #ff8533;
  border-radius: 50%;
  -webkit-transform: scale(.9);
  transform: scale(.9);
}

.circle {
  opacity: 0.7;
}
.circle h2 {
  font-size: 48px;
}

.circle p {
  font-size: 32px;
  line-height: 0px;
}
.chart {
  width: 110px;
  height: 110px;
  margin-top: 50px;
  margin-bottom: 50px;
  color: rgba(66, 66, 66,0.8);
  text-align: center;
  }
.chart canvas {
  position: absolute;
  top: 0;
  left: 0;
}
.chart h2 {
  position:absolute;
  top: 30px;
  left: 65px;
  font-size: 32px;
}

.chart p {
  position:absolute;
  top: 100px;
  left: 55px;
  font-size: 24px;
}
.ti-arrow-circle-left {
    width: 40px !important;
    height: 40px !important;
}
#detailsTotal,#detailsUpvotes,#detailsViews{
	display:none;
}
</style>
<div class="container-fluid">	
	<div class="row" id="overview">
		<div class="col-md-4 col-xs-12">
			<div class="circle" id="total">
				<h2>888</h2><p>Total</p>
			</div>
		</div>
		<div class="col-md-4 col-xs-12">
			<div class="circle" id="upvotes">
				<h2>231</h2><p>Upvotes</p>
			</div>
		</div>	
		<div class="col-md-4 col-xs-12">
			<div class="circle" id="views">
				<h2>657</h2><p>Views</p>
			</div>
		</div>
	</div>
	<div class="row" id="heading">
		<div class="col-md-4 col-xs-5">
			<button type="button" class="btn btn-sm btn-default">
				<span class="ti-arrow-circle-left " style="font-size:24px;"></span>
			</button>
		</div>	
	</div>
	
	<div class="row" id="detailsTotal">
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="56">
				<h2>500</h2><p>Debate</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="27">
				<h2>244</h2><p>Blog</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="17">
				<h2>144</h2><p>A-2-A</p>
			</div>
		</div>
		<div class="col-md-1 col-xs-12">
		</div>
	</div>
	
	<div class="row" id="detailsUpvotes">
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="43">
				<h2>100</h2><p>Debate</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="22">
				<h2>51</h2><p>Blog</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="35">
				<h2>80</h2><p>A-2-A</p>
			</div>
		</div>
		<div class="col-md-1 col-xs-12">
		</div>
	</div>
	
	<div class="row" id="detailsViews">
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="30">
				<h2>200</h2><p>Debate</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="16">
				<h2>107</h2><p>Blog</p>
			</div>
		</div>
		<div class="col-md-1 col-sm-4 col-xs-3">
		</div>
		<div class="col-md-3 col-sm-8 col-xs-9">
			<div class="chart" data-percent="54">
				<h2>350</h2><p>A-2-A</p>
			</div>
		</div>
		<div class="col-md-1 col-xs-12">
		</div>
	</div>
</div>
<script type="text/javascript">
var i=5;
var origContent;
$(function() {
    $('.chart').easyPieChart({
        size:180,
		barColor:'rgba(255, 133, 51,0.7)',
		lineWidth:10
    });
});
$(document).ready(function(){
	$("#heading").css("display", "none");
	
	$("#overview").on('click','.circle',function(){
		origContent=$("#overview").html();
		var opt=$(this).attr('id');
		switch(opt)
		{
			case 'total': opt="#detailsTotal";
				break ;
			case 'upvotes': opt="#detailsUpvotes";
				break;
			case 'views': opt="#detailsViews";
				break;	
		}
		$("#overview").html($(opt).html());
		
		$('.chart').easyPieChart({
			size:180,
			barColor:'rgba(255, 133, 51,0.7)',
			lineWidth:10
		});
		$("#heading").css("display", "block");	
	});	
	$("#overview").on('click','.chart',function(){
		$("#overview").html(origContent);
		$("#heading").css("display", "none");
	});
	$("#heading").click(function(){
		$("#overview").html(origContent);
		$("#heading").css("display", "none");
	});		
});
</script>		