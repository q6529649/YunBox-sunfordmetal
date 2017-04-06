jQuery(document).ready(function($) {
	if( jQuery(window).width() > 767) {
	   jQuery('.nav li.dropdown').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	   jQuery('.nav li.dropdown-submenu').hover(function() {
		   jQuery(this).addClass('open');
	   }, function() {
		   jQuery(this).removeClass('open');
	   });
	}

	jQuery('li.dropdown').find('.fa-angle-down').each(function(){
		jQuery(this).on('click', function(){
			if( jQuery(window).width() < 767) {
				jQuery(this).parent().next().slideToggle();
			}
			return false;
		});
	});
	
	if($(document).width()<=768){
			$("#google_translate_element").removeClass("top-menu")
		}
	$(window).resize(function(){
		if($(document).width()<=768){
			$("#google_translate_element").removeClass("top-menu")
		}else if(!$("#google_translate_element").hasClass("top-menu")){
			$("#google_translate_element").addClass("top-menu")
		}
		console.log(0)
	})
});
