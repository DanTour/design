(function($) {
	$(document).ready(function() {
		$('[data-submenu]').submenupicker();
		
		$('.dropdown, .dropdown-submenu').hover(function() {
			$(this).addClass('open');
		},function() {
			$(this).removeClass('open');
		});
		
		$("[class^='tab-']").click(function(e) {
			e.preventDefault();
			
			if (!$(this).hasClass('active')) {
				$('.category-faq .active').removeClass('active');
				$('.info-' + $(this).attr('class')).addClass('active');
				$(this).addClass('active');
			}
		});
	});
})(jQuery);