var showIntro = function(){
	$("#intro").appendTo("#screen");
	$( "#intro" ).fadeIn(1500);
}

$(document).ready(function run(){
	$("body").append("<div id='screen'></div>");
	$("#screen").append("<div id='bg_small'></div>");
	showIntro();
	$("#ID_card").appendTo("#screen");
});

