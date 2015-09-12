/*
 This is where we init all the js/jquery stuff
 */

jQuery(document).ready(function($) {

	$('#responsive-menu').sidr({
		source: '#mobile-navigation',
		side: 'right'
	});

	$("#page-header").sticky({topSpacing:0});
});