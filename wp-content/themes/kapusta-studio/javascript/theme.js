/*
* Custom theme styles
*/
(function($) {
	$("nav a").click(function(){
		var link = $(this).attr('href');
		$('html, body').animate({scrollTop: $(link).offset().top},1000);
	});
})(jQuery);