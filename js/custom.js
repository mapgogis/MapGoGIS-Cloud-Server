

jQuery(document).ready(function() {

/* uniform
	---------------------------------------------------------------------------------------------------------- */
	
/* uniform
	---------------------------------------------------------------------------------------------------------- */
	$("input[type=text], input[type=password], textarea, checkbox").uniform();
	$("select").not(".skip_these").uniform();
	$("select[class!=skip_these]").uniform();
	
/* message boxes
	---------------------------------------------------------------------------------------------------------- */
	$('.msg').click(function() {
		$(this).fadeTo('slow', 0);
		$(this).slideUp(341);
	});
	

	var loginWrapPosition = "-" + $('#loginWrap').height() * 0.5 + "px";
	
	$('#loginWrap').css("margin-top", loginWrapPosition);
	
	
	var modalPosition = "-" + $('.modal').height() * 0.5 + "px";
	
	$('.modal').css("margin-top", modalPosition);
	
	
	$('.tools').hide();

	
	 $('.projectsList > ul > li').hover (
        function () {
            $(this).children('.tools').slideDown(200);
        },
        function () {
            $(this).children('.tools').slideUp(200);       
     });
	
	

/* accordion
	---------------------------------------------------------------------------------------------------------- */
	$('.accordion > h3:first-child').addClass('active');
	$('.accordion > div').hide();
	$('.accordion > h3:first-child').next().show();
	$('.accordion > h3').click(function() {
		if ($(this).hasClass('active')) {
			return false;
		}
		$(this).parent().children('h3').removeClass('active');
		$(this).addClass('active');
		$(this).parent().children('div').slideUp(200);
		$(this).next().slideDown(200);
	});
	

	
	   
});