(function($) {
$(function() {

	$('ul.tabs__caption').on('click', 'li:not(.active)', function() {
		$(this)
			.addClass('active').siblings().removeClass('active')
			.closest('div.tabs').find('div.tabs__content').removeClass('active').eq($(this).index()).addClass('active');
	});

});
})(jQuery);
(function($) {
	$(function() {

		$('ul.tabs__caption_members').on('click', 'li:not(.active)', function() {
			$(this)
				.addClass('active').siblings().removeClass('active')
				.closest('div.tabs_members').find('div.tabs__content_members').removeClass('active').eq($(this).index()).addClass('active');
		});

	});
})(jQuery);