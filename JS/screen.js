var showIntro = function(){
	$("#intro").appendTo("#screen");
	$( "#intro" ).fadeIn(1500);
}
var screen1Hide = function(){
	$( " #screen_1 " ).animate(
		{right: "100%",left: "-100%"},
		500
	);
}
var screen1Show = function(){
	$( " #screen_1 " ).animate(
		{right: "0%",left: "0%"},
		500
	);
}
var screen2Show = function(){
	$( " #screen_2 " ).animate(
		{left: "0%",right: "0%"},
		500
	);
}
var screen2Hide = function(){
	$( " #screen_2 " ).animate(
		{left: "100%",right: "-100%"},
		500
	);
}
	

$(document).ready(function run(){
	$("body").append("<div id='screen_1' class='screen'></div>");
	$("body").append("<div id='screen_2' class='screen'></div>");
	
	$("#screen_1").append("<div id='bg_small'></div>");
	$("#screen_1").append($("#content"));
	
	$("#content").append($("#button_1"));
	
	$("#screen_2").append($("#screen2Nav"));
	$("#screen_2").append("<div id=\"screen_form\"></div>");
	$("#contact_form").appendTo("#screen_form");
	
	$("#button_1").click(function(){
		screen1Hide();
		screen2Show();
	});
	$("#button_2").click(function(){
		screen2Hide();
		screen1Show();
	});
	showIntro();
	$("#ID_card").appendTo("#screen");
	
	$('#contact_form').submit(
		function(e){
			e.preventDefault();
			
			var $form = $(this).parents('form');
			
			$.ajax(
				{
					url: "http://localhost/index.php/form/validate_form_contact",
					async: false,
					type: "POST",
					data: $('#contact_form').serialize(),
					dataType: "html",
					
					success: function(data){
						
						$("#loader").html(data);
					}
				}
			);
			
		}
	);
});

