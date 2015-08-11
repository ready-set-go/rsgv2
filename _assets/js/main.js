// JavaScript Document


// show hide left menu
function showMenu(){
	$('a#showMenu').click(function(){
		if ($('header.main nav.main-nav ul').hasClass('expand')) {
			menuOut();
		} else {
			menuIn();
		}
		return false;
	});
}
function menuOut() {
	$('header.main nav.main-nav ul').removeClass('expand');
}
function menuIn() {
	$('header.main nav.main-nav ul').addClass('expand');
}

// this function fixes placeholders in browsers that don't support it
function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}

function firstLoad() {
	initVars();
	initPlaceholders();
	showMenu();
	menuOut();
	menuIn();
}

$(function() {
	firstLoad();
});

