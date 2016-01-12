//dropdown on hover
(function($) {
	$(document).ready(function() {
		$('.dropdown').hover(function(){
			$(this).addClass('open');
		},function() {
			$(this).removeClass('open');
		});
	});	
})(jQuery);
