/*
This is where we init all the js/jquery stuff
 */

jQuery(document).ready(function($) {
	$( ".description" ).lettering('words');
	$( ".speaker-name" ).lettering('words');

	$('#responsive-menu').sidr({
		name: 'site-navigation',
		source: '#mobile-navigation',
		side: 'right'
	});

	$(window).touchwipe({
		wipeLeft: function() {
			// Close
			$.sidr('close', 'site-navigation');
		},
		wipeRight: function() {
			// Open
			$.sidr('open', 'site-navigation');
		},
		preventDefaultEvents: false
	});
});