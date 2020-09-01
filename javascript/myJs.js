$(document).ready(function () {
	$('#divId img').on({
		mouseover: function () {
			$(this).css({
				'cursor' : 'hand',
				'border-Color' : 'red'
			});
		},
		mouseout: function () {
			$(this).css({
				'cursor' : 'default',
				'border-Color' : 'grey'
			});
		},
		click: function () {
			var imageUrl = $(this).attr('src');
			$('#mainImage').fadeOut(500, function () {
				$(this).attr('src', imageUrl);
			}).fadeIn(500);
		}
	});
});