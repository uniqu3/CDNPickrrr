jQuery(function($) {
	$('.cb-enable').click(function() {
		var parent = $(this).parents('.switch');
		$('.cb-disable', parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox', parent).attr('checked', true);
		var val = $(':checkbox:checked').map(function() {
			return $(this).next().html();
		}).get();
		$('#source').html('<pre id="code">' + val.join('<br />') + '</pre>');
	});
	$('.cb-disable').click(function() {
		var parent = $(this).parents('.switch');
		$('.cb-enable', parent).removeClass('selected');
		$(this).addClass('selected');
		$('.checkbox', parent).attr('checked', false);
		var val = $(':checkbox:checked').map(function() {
			return $(this).next().html();
		}).get();
		$('#source').html('<pre id="code">' + val.join('<br />') + '</pre>');
		$('#code:empty').remove();
	});
});
