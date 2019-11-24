$(document).ready(function()
				{
					
					var x;
					$(".motion1").click(function(){
						x = $(this).css("backgroundColor");
						$("#commentbox").css("borderColor",x);
					});
					$(".motion2").click(function(){
						x = $(this).css("background-color");
						$("#commentbox").css("borderColor",x);
					});
					$("#sendbutton").click(function(){
						$("#commentbox").css("backgroundColor",x);
						$("#commentbox").css("color","#000000");
						$("#sendbutton").css("opacity",0);
						$("#commentbox").attr("disabled", "disabled");
					});

					$(".ignite").mousedown(function(event) {
					switch (event.which) {
					case 1:
					$("#ignitemodal").modal("show");
					break;
        
					}
					
					
					return false;
				});
				$("#submit").click(function()
				{
					
					
					flag=1;
					color1=$("#color1 option:selected").text();
					color2=$("#color2 option:selected").text();
					
					topic=$("#debatetopicbox").val();
					side1=$("#side1box").val();
					side2=$("#side2box").val();
					
					//start of topic validation
					if(topic!="")
					{
						
						$("#topiccheckicon").removeClass("fa-times-circle");
						$("#topiccheckicon").addClass("fa-check-circle");
						$("#topiccheckbtn").removeClass("btn-danger");
						$("#topiccheckbtn").addClass("btn-success");
						$("#topiccheckbtn").css("opacity","1");
					}
					else
					{	
						flag=0;
						$("#debatetopicbox").attr("placeholder", "Topic Required").val("").focus().blur();
						$("#topiccheckicon").removeClass("fa-check-circle");
						$("#topiccheckicon").addClass("fa-times-circle");
						$("#topiccheckbtn").removeClass("btn-default");
						$("#topiccheckbtn").addClass("btn-danger");
						$("#topiccheckbtn").css("opacity","1");
					}
					//end of topic validation
					
					//start of side validation
					if((side1=="")||(side2==""))
					{
						flag=0;
						if((side1=="")||(side2==""))
							{
							$("#side1box").attr("placeholder", "Side Name Required").val("").focus().blur();
							$("#side2box").attr("placeholder", "Side Name Required").val("").focus().blur();
							}
							else
						if(side1=="")
						$("#side1box").attr("placeholder", "Side Name Required").val("").focus().blur();
						else
						$("#side2box").attr("placeholder", "Side Name Required").val("").focus().blur();
						
						$("#sidecheckicon").removeClass("fa-check-circle");
						$("#sidecheckicon").addClass("fa-times-circle");
						$("#sidecheckbtn").removeClass("btn-default");
						$("#sidecheckbtn").addClass("btn-danger");
						$("#sidecheckbtn").css("opacity","1");
					}
					else{
						$("#sidecheckicon").removeClass("fa-times-circle");
						$("#sidecheckicon").addClass("fa-check-circle");
						$("#sidecheckbtn").removeClass("btn-danger");
						$("#sidecheckbtn").addClass("btn-success");
						$("#sidecheckbtn").css("opacity","1");
						
					}
					//end of side validation	
						
						
					//start of color validation	
					if(color1!=color2)
					{
						
						$("#colorcheckicon").removeClass("fa-times-circle");
						$("#colorcheckicon").addClass("fa-check-circle");
						$("#colorcheckbtn").removeClass("btn-danger");
						$("#colorcheckbtn").addClass("btn-success");
						$("#colorcheckbtn").css("opacity","1");
						switch(color1)
						{
						case("Blue"):$("#side1box").css("border-color","#0277BD");
									$("#side1box").css("background","#E0F7FA");
									$("#side1box").css("color","#0277BD");break;
									
						case("Red"):$("#side1box").css("border-color","#B71C1C");
									$("#side1box").css("background","#FFEBEE");
									$("#side1box").css("color","#B71C1C");break;

						case("Green"):$("#side1box").css("border-color","#1B5E20");
									$("#side1box").css("background","#E8F5E9");
									$("#side1box").css("color","#1B5E20");break;
						
						case("Yellow"):$("#side1box").css("border-color","#F57F17");
									$("#side1box").css("background","#FFF9C4");
									$("#side1box").css("color","#F57F17");break;
						
						
						}
						switch(color2)
						{
						case("Blue"):$("#side2box").css("border-color","#0277BD");
									$("#side2box").css("background","#E0F7FA");
									$("#side2box").css("color","#0277BD");break;
									
						case("Red"):$("#side2box").css("border-color","#B71C1C");
									$("#side2box").css("background","#FFEBEE");
									$("#side2box").css("color","#B71C1C");break;

						case("Green"):$("#side2box").css("border-color","#1B5E20");
									$("#side2box").css("background","#E8F5E9");
									$("#side2box").css("color","#1B5E20");break;
						
						case("Yellow"):$("#side2box").css("border-color","#F57F17");
									$("#side2box").css("background","#FFF9C4");
									$("#side2box").css("color","#F57F17");break;
						}
					}
					else
					{	
						$("#colorcheckicon").removeClass("fa-check-circle");
						$("#colorcheckicon").addClass("fa-times-circle");
						$("#colorcheckbtn").removeClass("btn-default");
						$("#colorcheckbtn").addClass("btn-danger");
						$("#colorcheckbtn").css("opacity","1");
					}
					//end of color validation
				});
			});
$(document).ready(function(){
$('#submitBlog').click(function(){
					var blogTopicBox = $('#blogTopicBox').val();
					var blogTags = $('#blogTags').val();
					var blogTextBox = $('#blogTextBox').val();
					$.post("blogwrite.php",
						{
							debatetopicbox:blogTopicBox,
							tags: blogTags,
							text:blogTextBox
						},
						function(data, status){
							$.notify({
							// options
								icon: "ti-check",
								message: 'Successfully written'
							},{
								// settings
								type: 'danger',
								placement: {
								from: "top",
								align: "center"
							}		
							});
							$('#igniteBlog').modal('toggle');
						});
								
					});
	
});

<!-- Start of script for modal-->
	$(document).ready(function()
	{
		var x;
		$(".motion1").click(function(){
			x = $(this).css("backgroundColor");
			$("#commentbox").css("borderColor",x);
		});
		$(".motion2").click(function(){
			x = $(this).css("background-color");
			$("#commentbox").css("borderColor",x);
		});
		$("#sendbutton").click(function(){
			$("#commentbox").css("backgroundColor",x);
			$("#commentbox").css("color","#000000");
			$("#sendbutton").css("opacity",0);
			$("#commentbox").attr("disabled", "disabled");
		});
		$(".ignite").mousedown(function(event) {
			switch (event.which) {
				case 1:
					$("#ignitemodal").modal("show");
					break;
    		}
			return false;
		});
		$("#debatetopicdone").click(function(){
			$("#debatetopicbox").attr("disabled", "disabled"); 
			$("#debatetopicbox").css("background-color","#eeedec");
			$("#debatetopicdone").removeClass("btn-default");
			$("#debatetopicdone").addClass("btn-success");		
		});
		$("#submit").click(function(){
			color1=$("#color1 option:selected").text();
			color2=$("#color2 option:selected").text();
			if(color1!=color2){
				$("#colorcheck").addClass("btn-success");
				$("#colorcheck").css("opacity","1");
			}
			else{
				$("#colorcheck").addClass("btn-danger");
				$("#colorcheck").css("opacity","1");
			}
		});
				
	});



/*
				* start of modal customisation 
				*/
					var x;
					$(".motion1").click(function(){
						x = $(this).css('backgroundColor');
						$("#commentbox").css('borderColor',x);
					});
					$(".motion2").click(function(){
						x = $(this).css('background-color');
						$("#commentbox").css('borderColor',x);
					});
					$("#sendbutton").click(function(){
						$("#commentbox").css('backgroundColor',x);
						$("#commentbox").css('color','#000000');
						$("#sendbutton").css('opacity',0);
						$("#commentbox").attr("disabled", "disabled");
					});
					$(".a2am").click(function(){
						$('#a2aModal').modal('show');
					});
					$(".ignite").mousedown(function(event) {
						switch (event.which) {
							case 1:
									$('#ignitemodal').modal('show');
									break;
						}
						return false;
					});
				/*
				* end of modal customisation
				*/
			
				/*
				* start of validation
				*/
				$("#submit").click(function()
				{
					flag=1;
					color1=$('#color1 option:selected').text();
					color2=$('#color2 option:selected').text();
					
					topic=$("#debatetopicbox").val();
					side1=$("#side1box").val();
					side2=$("#side2box").val();
					
					//start of topic validation
					if(topic!="")
					{
						
						$("#topiccheckicon").removeClass("fa-times-circle");
						$("#topiccheckicon").addClass("fa-check-circle");
						$("#topiccheckbtn").removeClass("btn-danger");
						$("#topiccheckbtn").addClass("btn-success");
						$("#topiccheckbtn").css("opacity","1");
					}
					else
					{	
						flag=0;
						$("#debatetopicbox").attr("placeholder", "Topic Required").val("").focus().blur();
						$("#topiccheckicon").removeClass("fa-check-circle");
						$("#topiccheckicon").addClass("fa-times-circle");
						$("#topiccheckbtn").removeClass("btn-default");
						$("#topiccheckbtn").addClass("btn-danger");
						$("#topiccheckbtn").css("opacity","1");
					}
					//end of topic validation
					
					//start of side validation
					if((side1=="")||(side2==""))
					{
						flag=0;
						if((side1=="")||(side2==""))
							{
							$("#side1box").attr("placeholder", "Side Name Required").val("").focus().blur();
							$("#side2box").attr("placeholder", "Side Name Required").val("").focus().blur();
							}
							else
						if(side1=="")
						$("#side1box").attr("placeholder", "Side Name Required").val("").focus().blur();
						else
						$("#side2box").attr("placeholder", "Side Name Required").val("").focus().blur();
						
						$("#sidecheckicon").removeClass("fa-check-circle");
						$("#sidecheckicon").addClass("fa-times-circle");
						$("#sidecheckbtn").removeClass("btn-default");
						$("#sidecheckbtn").addClass("btn-danger");
						$("#sidecheckbtn").css("opacity","1");
					}
					else{
						$("#sidecheckicon").removeClass("fa-times-circle");
						$("#sidecheckicon").addClass("fa-check-circle");
						$("#sidecheckbtn").removeClass("btn-danger");
						$("#sidecheckbtn").addClass("btn-success");
						$("#sidecheckbtn").css("opacity","1");
						
					}
					//end of side validation	
						
						
					//start of color validation	
					if(color1!=color2)
					{
						
						$("#colorcheckicon").removeClass("fa-times-circle");
						$("#colorcheckicon").addClass("fa-check-circle");
						$("#colorcheckbtn").removeClass("btn-danger");
						$("#colorcheckbtn").addClass("btn-success");
						$("#colorcheckbtn").css("opacity","1");
						switch(color1)
						{
						case("Blue"):$("#side1box").css("border-color","#0277BD");
									$("#side1box").css("background","#E0F7FA");
									$("#side1box").css("color","#0277BD");break;
									
						case("Red"):$("#side1box").css("border-color","#B71C1C");
									$("#side1box").css("background","#FFEBEE");
									$("#side1box").css("color","#B71C1C");break;

						case("Green"):$("#side1box").css("border-color","#1B5E20");
									$("#side1box").css("background","#E8F5E9");
									$("#side1box").css("color","#1B5E20");break;
						
						case("Yellow"):$("#side1box").css("border-color","#F57F17");
									$("#side1box").css("background","#FFF9C4");
									$("#side1box").css("color","#F57F17");break;
						
						
						}
						switch(color2)
						{
						case("Blue"):$("#side2box").css("border-color","#0277BD");
									$("#side2box").css("background","#E0F7FA");
									$("#side2box").css("color","#0277BD");break;
									
						case("Red"):$("#side2box").css("border-color","#B71C1C");
									$("#side2box").css("background","#FFEBEE");
									$("#side2box").css("color","#B71C1C");break;

						case("Green"):$("#side2box").css("border-color","#1B5E20");
									$("#side2box").css("background","#E8F5E9");
									$("#side2box").css("color","#1B5E20");break;
						
						case("Yellow"):$("#side2box").css("border-color","#F57F17");
									$("#side2box").css("background","#FFF9C4");
									$("#side2box").css("color","#F57F17");break;
						}
				}
					else
					{	
						$("#colorcheckicon").removeClass("fa-check-circle");
						$("#colorcheckicon").addClass("fa-times-circle");
						$("#colorcheckbtn").removeClass("btn-default");
						$("#colorcheckbtn").addClass("btn-danger");
						$("#colorcheckbtn").css("opacity","1");
					}
				
					//end of color validation
				});
				/*
				* end of validation
				*/