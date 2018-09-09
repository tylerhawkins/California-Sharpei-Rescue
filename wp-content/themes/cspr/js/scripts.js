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

			if( getUrlParameter('dog') != null ){
				$('.dog-preference #dog-preference-options option[value="' + getUrlParameter('dog') + '"]').prop('selected', true);
			}
		}

		function getUrlParameter(sParam) {
			var sPageURL = decodeURIComponent(window.location.search.substring(1)),
				sURLVariables = sPageURL.split('&'),
				sParameterName,
				i;

			for (i = 0; i < sURLVariables.length; i++) {
				sParameterName = sURLVariables[i].split('=');

				if (sParameterName[0] === sParam) {
					return sParameterName[1] === undefined ? true : sParameterName[1];
				}
			}
		};
	});
})(jQuery, this);
