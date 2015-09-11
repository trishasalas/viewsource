/*
This is where we init all the js/jquery stuff
 */

jQuery(document).ready(function($) {
	$( ".description" ).lettering('words');
	$( ".speaker-name" ).lettering('words');

	$('#responsive-menu').sidr({
		source: '#mobile-navigation',
		side: 'right'
	});

	$("#page-header").sticky({topSpacing:0});
});