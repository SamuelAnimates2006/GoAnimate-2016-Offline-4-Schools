$(function() {
	$('.vm-tutorial-trigger').click(function(e) {
		e.preventDefault();

		var $tutorial = $('.vm-tutorial');

		if ($tutorial.hasClass('expand')) {
			$('.tutorial-video').hide();
			wistiaEmbed && wistiaEmbed.pause();
		} else {
			setTimeout(function() {
				$('.tutorial-video').show();
				wistiaEmbed && wistiaEmbed.play();
			}, 400);
		}

		$tutorial.toggleClass('expand');
	});

	$('.theme-cell').each(function() {
		var $button = $('.apps > .btn:first-child', this);
		var launch, url;

		$('.theme-cover', this).click(function(e) {
			e.preventDefault();

			if ($button.attr('href') != undefined) {
				window.location.href = $button.attr('href');
			} else {
				$button.trigger('click');
			}
		}).addClass('launch');
	});

	$('.vm-bf-content .btn-flat, .themes .apps > .btn').tooltip();
});

var tagNames = {"lipsync":"Lip-sync","ext_lib":"Extensive Library","starters":"Scene Starters","qvm":"Template","char_creator":"Character Creator"};
