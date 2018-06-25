(function ($, root, undefined) {
	$(function () {
		'use strict';

		if( $('.available-dogs').length ) {
			var matchHeightOptions = {
					byRow: true,
					property: 'min-height',
					target: null,
					remove: false
				};

			$('.available-dogs > li .img-wrap').matchHeight(matchHeightOptions);
		}
	});
})(jQuery, this);
