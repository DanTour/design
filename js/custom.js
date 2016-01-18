(function($) {
	$(document).ready(function() {
		$('.dropdown, .dropdown-submenu').hover(function() {
			$(this).addClass('open');
		},function() {
			$(this).removeClass('open');
		});
		
		$('[data-submenu]').submenupicker();
		
	});
	
})(jQuery);