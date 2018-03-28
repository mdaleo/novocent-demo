$("document").ready(function(){
	//default states
	$("#nav-list li").css({backgroundImage: "url(images/nav-anchor.png)"});
	$("#content-tour,#content-contact").css({display: "none"});
	
	
	/*add hover spans */
	for(i=0; i<$("#nav-list li").length; i++){
		$("#nav-list li").eq(i).append("<span id='nav-hover"+i+"'class='hover-span'></span>");
		$(".hover-span").css({display: "none"});
	}
	
	//$("#nav-list li").each().append("<span id='nav-hover"+i+"'class='hover-span'></span>").css({display: "none"});
	
	//nav hover function - check to see if being animated to avoid loops
	$("#nav-list li").hover(
		function(){
			if($("> span", this).is(":animated")){
				$("> span", this).stop().fadeTo(250,1);
			}else{
				$("> span", this).fadeTo(250,1);
			}
		},
		function(){
			if($("> span", this).is(":animated")){
				$("> span", this).stop().fadeTo(250,0);
			}else{
				$("> span", this).fadeTo(250,0);
			}
		}
		
		/*
			$('').click(function(e)
			{
				e.preventDefault();
			});
		
		*/
	
	);// end nav hover fn
	
	//set logo default transparency
	$("#logo").css({opacity: 0.5});
	$("#logo").slideDown(250,"bounce");
	
	//set logo fades
	$("#logo").hover(
			function(){
			if($(this).is(":animated")){
				$(this).stop().fadeTo(250,1);
			}else{
				$(this).fadeTo(250,1);
			}
		},
		function(){
			if($(this).is(":animated")){
				$(this).stop().fadeTo(250,.5);
			}else{
				$(this).fadeTo(250,.5);
			}
		}
	);
	
	//setup content fades============
	
	//set current div
	var curDiv = ("#"+$("#content div:first-child").attr("id"));
	$("#nav-list a").click(
		function(){
		var elem = this;
		formReset();
		if(curDiv != $(elem).attr("href")){
			$(curDiv).fadeOut(450,function(){
				curDiv = $(elem).attr("href");
				$(curDiv).fadeIn(450);
				return false;
			
			});
						
		}else{
			return false;
		}


	});
	

// Contact form validation
	//default form status
	$(".input-text").attr("value", "");
	$("#form-status").css({display:"none"});
	
	//submit
	$("#contact-form").submit(function(){
	
		var action = $(this).attr("action");
		
		//disable submit click
		$('#submit').attr('disabled','disabled');
		
		//add loader image
		$(this).before('<img src="images/loader.gif" class="loader" />');
		
		//set status message default
		$("#form-status").slideUp(750,function() {
		$("#form-status").hide();			
		
		//post is an ajax wrapper 
		//grabbing values from form inputs to pass to contacForm.php
		$.post(action, { 
			name: $('#name').val(),
			email: $('#email').val(),
			phone: $('#phone').val(),
			message: $('#message').val(),
		},  //Returns validation data from contactForm.php
			function(data){
				document.getElementById('form-status').innerHTML = data;
				$('#form-status').slideDown('slow');
				$('.loader').fadeOut('fast',function(){$(this).remove()});
				$('#contact-form #submit').attr('disabled',''); 
				if(data.match('success') != null){
					$("#form-status").removeClass("validation-error").addClass("send-success");
					$('#contact-form').slideUp('slow');					
					setTimeout("formReset()", 5000);

					
				}				
			}

		);

		});
		
		return false; 
	
	});
	
});//onready end



function formReset(){
	$(".input-text").attr("value", "");
	$('#form-status').slideUp('slow');
	$('#contact-form').slideDown('slow');
	$("#form-status").removeClass("send-success").addClass("validation-error");	

}

















