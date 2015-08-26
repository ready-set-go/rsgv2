$(document).ready(function(){
	var width = $('.container').width();

	$( ".selector" ).slider({
		max: width,
		slide: function(event, ui){

			var slideVal 	= $(this).slider('values', 0);
			$('.bubbles li').each(function(i){
				if($(this).position().left-150 <= slideVal){
					$(this).children('div').addClass('pop');
				} else {
					$(this).children('div').removeClass('pop');
				}
			});

			var slideVal 	= $(this).slider('values', 0);
			$('.bubbles li').each(function(i){
				if($(this).position().left-50 <= slideVal){
					$(this).children('div').removeClass('pop');
				} else {
				}
			});
		}
	});
});