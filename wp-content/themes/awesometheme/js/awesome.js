//javascript functions
//$.noConflict(); //jquery $ sign doesn't conflict with other javascript functions
jQuery(document).ready(function($) {
	$(document).on('click', '.open-search a', function(e){
		e.preventDefault();
		//console.log('CLICKED ON THE OPEN SEARCH');

		$('.search-form-container').slideToggle(300);



	});



});

$('.carousel').carousel()