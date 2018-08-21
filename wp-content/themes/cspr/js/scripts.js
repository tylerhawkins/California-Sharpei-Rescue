(function ($, root, undefined) {
	$(function () {
		'use strict';

		$('header.header .mobile-ctl').click(function(e){
			$(this).parent().parent().toggleClass('active');
		});

		if( $('.available-dogs').length ) {
			var matchHeightOptions = {
					byRow: true,
					property: 'min-height',
					target: null,
					remove: false
				};

			$('.available-dogs > li .img-wrap').matchHeight(matchHeightOptions);
		}

		if( $('.adoption-form-container').length ) {
			$('.terms-conditions input[type="checkbox"]').change(function() {
				if( $(this).prop('checked') ) {
					$('.adoption-page.intro .btn-continue').addClass('active');
				} else {
					$('.adoption-page.intro .btn-continue').removeClass('active');
				}
			});

			$('.adoption-page.intro .btn-continue').click(function(e){
				e.preventDefault();

				if( $('.terms-conditions input[type="checkbox"]').prop('checked') ) {
					$('.adoption-page.intro').removeClass('active');
					$('.adoption-page.info').addClass('active');
					$("html, body").animate({ scrollTop: 0 }, 300);
				}
			});

			console.log($('.dog-preference #dog-preference-options option:selected').val());
		}
	});
})(jQuery, this);
