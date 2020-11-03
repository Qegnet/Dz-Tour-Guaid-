(function($, document, window){
	
	$(document).ready(function(){
		
		$(".menu-toggle").click(function(){
			$(".mobile-navigation").slideToggle();
		});
		$(".mobile-navigation").append($(".main-navigation .menu").clone());

		$(".accordion-toggle").click(function(){
			var current = $(this).parent();
			if( !current.hasClass("expanded") ){
				current.siblings(".accordion").removeClass("expanded").find(".accordion-content").slideUp();
				current.addClass("expanded").find(".accordion-content").slideDown();
			} else {
				current.removeClass("expanded");
				current.find(".accordion-content").slideUp();
			}
		});

	});

	

	$(window).load(function(){

	});

})(jQuery, document, window);