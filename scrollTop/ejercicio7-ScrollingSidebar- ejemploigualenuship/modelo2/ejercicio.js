var topYloc = null;

$(window).scroll(function () {
	var scrollTop = $(document).scrollTop();
	scrollTop = parseInt(scrollTop);

	var offset = topYloc+scrollTop+"px";
	$("#toplink").animate({top:offset},{duration:500,queue:false});
});




  topYloc = parseInt($("#toplink").css("top").substring(0,$("#toplink").css("top").indexOf("px")));
