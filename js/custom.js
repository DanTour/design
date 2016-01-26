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
		 $('#datetimepicker1').datepicker({
					dateFormat:'DD MM dd, yy',
					//changeMonth : true,
					//changeYear : true,
					showOtherMonths : true,
			 });
			$('#form-request').validate({
				rules : {
					destinations : {
						required : true,
					},
					datetimepicker1 : {
						required : true,
					},
					nigtsNumber  : {
						required : true,
					},
					adultsNumber : {
						required : true,
					},
					budget : {
						required : true,
					},
					intFlights : {
						required : true,
					},
					textArea : {
						required : true,
					},
					firstName : {
						required : true,
					},
					secondName : {
						required : true,
					},
					phone : {
						required : true,
					}
				},
				messages : {
					destinations : {
						required : "Please select country",
					},
					datetimepicker1 : {
						required : "Please select date of departation",
					},
					nigtsNumber : {
						required : "This field is required",
					},
					adultsNumber : {
						required : "This field is required",
					},
					budget : {
						required : "This field is required",
					},
					intFlights : {
						required : "This field is required",
					},
					textArea : {
						required : "This field is required",
					},
					firstName : {
						required : "This field is required",
					},
					secondName : {
						required : "This field is required",
					},
					phone : {
						required : "This field is required",
					}
				}
			});
	});
})(jQuery);