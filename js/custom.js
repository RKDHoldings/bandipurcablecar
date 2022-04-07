$(window).on('load',function() {
	$('.skill_value').each(function(index, el) {
		thisVal = $(this).text();
		$(this).parent('.skill_view').animate({width: thisVal},2000)
	});
});