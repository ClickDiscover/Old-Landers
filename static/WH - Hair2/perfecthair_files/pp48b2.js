/**
 * Tracking functions
 */

$(function() {

	var footerNav = $('#global-footer #menu-secondary-nav-1'),
		oldNav = footerNav.html(),
		newNav = $('#fixed-nav').html();

	if(Device.width < 767) {
		footerNav.empty().append(newNav).addClass('modified');
	}

	$(window).resize(function() {
		if(Device.width < 767) {
			if(!footerNav.hasClass('modified')) {
				footerNav.empty().append(newNav).addClass('modified');
			}
		} else {
			if(footerNav.hasClass('modified')) {
				footerNav.empty().append(oldNav).removeClass('modified');
			}
		}
	});


});




function trackLink(url, click, location) {
	var testName = $('body').data('name'),
		pageType = $('body').data('pagetype'),
		variation = $('body').data('variation'),
		offerName = $('body').data('offer');
	ga('send', 'event', click[0] + ' - Click', click[1], click[2]);
	ga('send', 'event', location[0] + ' - Location', location[1], location[2], {'hitCallback':
		function() {
			document.location = url;
		}
	});
}





// function scrollTracking() {

// 	var breaks = 10,
// 		size = jQuery(document).height() / breaks,
// 		browser = jQuery(window).height(),
// 		test = jQuery('body').data('name'),
// 		variation = jQuery('body').data('variation'),
// 		complete = [];

// 	// Send initial events based on browser size
// 	for(var k = 1; k <= (browser / size); k++) {
// 		complete.push('b' + k);
// 		ga('send', 'event', test + ': Scroll Depth', variation + ' - ' + k + '0%', (size * k));
// 	}

// 	// Send events for additional content on scroll
// 	jQuery(window).scroll(function() {
// 		for(var i = 1; i <= breaks; i++) {
// 			if((jQuery(window).scrollTop() + browser) > (size * i) && (jQuery.inArray('b' + i, complete) === -1)) {
// 				complete.push('b' + i);
// 				ga('send', 'event', test + ': Scroll Depth', variation + ' - ' + complete.length + '0%', (size * complete.length));
// 			}
// 		}
// 	});

// }
//scrollTracking();




function suggestion() {

	if($('#main').hasClass('single')) {

		var sugg = $('#suggestions'),
			dismiss = $('#suggestion-dismiss'),
			main = $('#main'),
			upsell = $('#upsell');

		sugg.find('li:eq(' + Math.floor(Math.random() * 3) + ')').show();

		var h = sugg.height(),
			triggerPoint = upsell.offset().top - ($(window).height() * 1.7),
			dismissed = false;

		// Set initial position of suggestion
		sugg.css('bottom', '-' + h + 'px');

		if($(window).width() <= 767) {
			if(!sugg.hasClass('active')) {
				sugg.addClass('active').show();
			}
		}

		$(window).resize(function() {
			h = sugg.height();
			triggerPoint = upsell.offset().top - ($(window).height() * 1.7);
			if($(window).width() <= 767) {
				if(!sugg.hasClass('active')) {
					sugg.addClass('active').show();
				}
			} else {
				if(sugg.hasClass('active')) {
					sugg.removeClass('active').hide();
				}
			}
		});

		$(window).scroll(function() {
			if($(window).scrollTop() >= triggerPoint && sugg.hasClass('active') && !sugg.hasClass('displayed') && !dismissed) {
				sugg.addClass('displayed').animate({'bottom':'0px'}, 1200, 'easeInOutQuart');
			}
		});

		dismiss.on('click', function() {
			dismissed = true;
			sugg.animate({'opacity':'0'}, 400, 'easeOutExpo', function() {
				$(this).css({'bottom':'-' + h + 'px', 'opacity':'1'}).removeClass('displayed');
			});
		});
		
	}
}
if($('body').data('pagetype') === 'Pop') {
	suggestion();
}





function urgency() {

	var variation = $('body').data('variation'),
		urgency = $('#urgency-message'),
		timeIn = 10000,
		timeOut = 3800;

	if(variation !== 'A' && variation !== 'C') {
		if($(window).width() <= 767) {
			setTimeout(function() {
				urgency.fadeIn();
				setTimeout(function() {
					urgency.fadeOut();
					setTimeout(function() {
						urgency.fadeIn();
						setTimeout(function() {
							urgency.fadeOut();
						}, timeOut);
					}, timeIn);
				}, timeOut);
			}, timeIn);
		}
	}

}
if($('body').data('pagetype') === 'Presell') {
	urgency();
}





function confirmation() {

	var confirm = $('#interest-confirmation'),
		height = confirm.height() + 100,
		triggerPoint = ( $(document).height() * 0.82) - $(window).height(),
		variation = $('body').data('variation');

	if(variation !== 'A' && variation !== 'B') {
		if($(window).width() <= 767) {
			confirm.show().css('bottom', '-' + height + 'px');
			$(window).scroll(function() {
				if($(window).scrollTop() >= triggerPoint && !confirm.hasClass('displayed')) {
					confirm.addClass('displayed').animate({'bottom':'0'}, 1400, 'easeInOutExpo', function() {
						$('#interest-dismiss, #interest-confirmation .no span').on('click', function() {
							confirm.animate({'bottom':'-'+height+'px'}, 600, 'easeOutQuint', function() {
								confirm.hide();
							});
						});
					});
				}
			});
		}	
	}

}
if($('body').data('pagetype') === 'Presell') {
	confirmation();
}



