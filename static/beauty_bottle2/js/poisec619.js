/**
 * Definition of the Poise object.
 *
 * @version 1.0
 *
 * @require jquery.js
 * @require jquery.easing.js
 * @require jquery.cycle.all.js
 * @require jquery.lazyload.min.js
 */

(function($) {

var Poise = {

	init: function() {

		// Run setup functions
		this.setLazyload();
		this.setBannerNav();
		this.setGlobalHeader();
		this.setNavSlider();

		// Run GA event tracking functions
		// this.mailingListEvents();
		// this.globalSidebarEvents();
		// this.socialEvents();
		// this.offerLinks();
		// this.productLinks();

	},

	setLazyload: function() {

		$('img.lazy').show().lazyload({
			effect: 'fadeIn'
		});

	},

	setBannerNav: function() {

		if($('.banner nav').length) {

			var bannerIcon = ( $('.banner .headline-icon').length ) ? '<div class="banner-nav-icon">' + $('.banner .headline-icon').html() + '</div>' : '',
				bannerNav = $('.banner nav').html();

			$('#global-header').append('<div id="banner-nav">' + bannerIcon + '<nav>' + bannerNav + '</nav></div>');	
			
			$('.banner nav a, #banner-nav a').on('click', function(e) {
				e.preventDefault();
				var id = $(this).attr('href').split('#'),
					offset = $('#'+id[1]).offset().top - 75;
				$('html, body').animate({scrollTop:offset}, 1000, 'easeInOutQuad');
			});

		}

	},

	setGlobalHeader: function() {

		var header = $('#global-header'),
			bannerNav = $('#global-header').find('#banner-nav'),
			headerHeight = 130;

		$(window).scroll(function() {
			if(Device.scrollTop > headerHeight && !header.hasClass('shrink')) {
				header.addClass('shrink');
				bannerNav.addClass('displayed');
			} else if(Device.scrollTop < headerHeight && header.hasClass('shrink')) {
				header.removeClass('shrink');
				bannerNav.removeClass('displayed');
			}
		});

	},

	setNavSlider: function() {

		var openbtn = $('#open-nav-slider'),
			closebtn = $('#close-nav-slider'),
			navSlider = $('#nav-slider'),
			body = $('body');

		openbtn.on('click', function() {
			if(!body.hasClass('nav-open')) {
				body.addClass('nav-open');
				openbtn.addClass('hidden');
				closebtn.removeClass('hidden');
			}
		});

		closebtn.on('click', function() {
			if(body.hasClass('nav-open')) {
				body.removeClass('nav-open');
				closebtn.addClass('hidden');
				openbtn.removeClass('hidden');
			}
		});

	},

	mailingListEvents: function() {

		$('.banner form.mailing-list-form').on('click', function() {
			ga('send', 'event', 'Mailing List', 'Location', 'Banner');
		});

		$('#sidebar form.mailing-list-form').on('click', function() {
			ga('send', 'event', 'Mailing List', 'Location', 'Sidebar');
		});

	},

	globalSidebarEvents: function() {

		$('#sidebar a.top-50-link').on('click', function() {
			var num = $(this).index() + 1;
			ga('send', 'event', 'Global Sidebar', 'Location', 'Top 50 List', num);
		});

		$('#sidebar a.offer-link').on('click', function() {
			var num = $(this).index() + 1;
			ga('send', 'event', 'Global Sidebar', 'Location', 'Offer Thumbnail', num);
		});

		$('#sidebar a.latest-link').on('click', function() {
			var num = $(this).index() + 1;
			ga('send', 'event', 'Global Sidebar', 'Location', 'Latest List', num);
		});

	},

	socialEvents: function() {

		$('#global-header nav.social-media-links a').on('click', function() {
			ga('send', 'event', 'Social', 'Location', 'Header');
		});

		$('#nav-slider nav.social-media-links a').on('click', function() {
			ga('send', 'event', 'Social', 'Location', 'Nav Slider');
		});

		$('.banner #share-counter a').on('click', function() {
			ga('send', 'event', 'Social', 'Location', 'Banner');
		});

		$('#post-meta .post-share a').on('click', function() {
			ga('send', 'event', 'Social', 'Location', 'Post Meta');
		});

		$('#share-post a').on('click', function() {
			ga('send', 'event', 'Social', 'Location', 'Post Foot');
		});

	},

	offerLinks: function() {

		$('body.single-post #main .text-offer a.offer-link').on('click', function() {
			var offer = $(this).data('offer');
			ga('send', 'event', 'Offer Link', 'Offer', offer);
			ga('send', 'event', 'Offer Link', 'Location', 'Content');
		});

		$('body.single-post #upsell a.offer-link').on('click', function() {
			var offer = $(this).data('offer');
			ga('send', 'event', 'Offer Link', 'Offer', offer);
			ga('send', 'event', 'Offer Link', 'Location', 'Upsell');
		});

		$('body.single-post #sidebar-offers a.offer-link').on('click', function() {
			var offer = $(this).data('offer');
			ga('send', 'event', 'Offer Link', 'Offer', offer);
			ga('send', 'event', 'Offer Link', 'Location', 'Sidebar');
		});

	},

	productLinks: function() {

		$('#main .product-link').on('click', function() {
			var product = $(this).data('product');
			ga('send', 'event', 'Product Link', 'Product', product);
			ga('send', 'event', 'Product Link', 'Location', 'Content Link', product);
		});

		$('#main .product-button').on('click', function() {
			var product = $(this).data('product');
			ga('send', 'event', 'Product Link', 'Product', product);
			ga('send', 'event', 'Product Link', 'Location', 'Content Button', product);
		});

		$('#sidebar .product-link').on('click', function() {
			var product = $(this).data('product');
			ga('send', 'event', 'Product Link', 'Product', product);
			ga('send', 'event', 'Product Link', 'Location', 'Sidebar Link', product);
		});

		$('#sidebar .product-button').on('click', function() {
			var product = $(this).data('product');
			ga('send', 'event', 'Product Link', 'Product', product);
			ga('send', 'event', 'Product Link', 'Location', 'Sidebar Button', product);
		});

	}

};

$(function() {
	Poise.init();
});

})(jQuery);
