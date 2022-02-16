$('.vm-bf-dots a').click(function(e) {
	e.preventDefault();
	var $li = $(this).parent();
	if ($li.hasClass('on')) return;
	$li.addClass('on').siblings().removeClass('on');
	$li.parent('.vm-bf-dots').toggleClass('wb', $li.hasClass('wb'));
	if ($li.hasClass('wb')) {
		$('#topbanner-bf').fadeOut();
		$('#topbanner-wb').fadeIn();
	} else {
		$('#topbanner-wb').fadeOut();
		$('#topbanner-bf').fadeIn();
	}
});
