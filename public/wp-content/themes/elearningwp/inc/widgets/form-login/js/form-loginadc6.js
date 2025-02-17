(function ($) {
	"use strict";
	/* Social login popup */
	var popupWrapper = '#thim-popup-login-wrapper';

	var login_popup_ajax = function () {
		$('#thim-popup-login-form').submit(function (event) {
			var form = $(this),
				elem = $('.thim-popup-login-container-inner');

			event.preventDefault();
			elem.addClass('loading');

			var data = {
				action: 'thim_login_ajax',
				data  : form.serialize()
			};

			$.post(ajaxurl, data, function (response) {
				try {
					response = JSON.parse(response);
					form.find('.popup-message').html(response.message);
					if (response.code == '1') {
						if (response.redirect) {
							window.location.href = response.redirect;
						} else {
							location.reload();
						}
					}

				} catch (e) {
					return false;
				}
				elem.removeClass('loading');
			});

			return false;
		});
	};

	var thimLoginSocialPopup = function () {
		var windowH = $(window).height();
		// $('#thim-popup-login-wrapper').css('height', windowH);
		// $('.thim-popup-login-bg').css('height', windowH);
		jQuery('.thim-link-login a').click(function (event) {
			var popupWrapper = '#thim-popup-login-wrapper';
			$(popupWrapper).show();
			event.preventDefault();
		});
		jQuery('.thim-popup-login-close', popupWrapper).click(function () {
			$(popupWrapper).hide();
		});
		jQuery(document).mouseup(function (e) {
			var container = jQuery(".thim-popup-login-container-inner");

			if (!container.is(e.target) // if the target of the click isn't the container...
				&& container.has(e.target).length === 0) // ... nor a descendant of the container
			{
				//jQuery("#thim-popup-login-wrapper").remove();
				jQuery(popupWrapper).hide();
			}
		});

		jQuery(document).keyup(function (e) {
			if (e.keyCode == 27) {
				//jQuery("#thim-popup-login-wrapper").remove();
				jQuery(popupWrapper).hide();
			}
		});

		jQuery('#thim-popup-login-form').submit(function (event) {
			var $login_popup = jQuery('#thim-popup-login-form');
			var input_data = $login_popup.serialize();

			jQuery.ajax({
				type   : 'POST',
				data   : input_data,
				url    : thim_ob_ajax_url,
				success: function (html) {
					var response_data = jQuery.parseJSON(html);
					jQuery('.login-message', '#thim-popup-login-form').html(response_data.message);

					if (response_data.code == '1') {
						window.location.href = $login_popup.find("input[name=redirect_to]").val();
						$('.login-message').removeClass('error');
					} else {
						$('.login-message').addClass('error');
					}
				},
				error  : function (html) {
				}
			});
			event.preventDefault();
			return false;
		});
	};

	/* thim Login Widget*/
	var thimLoginWidget = function () {
		jQuery('.thim-login-widget-form').each(function () {
			jQuery(this).submit(function (event) {
				if (this.checkValidity()) {
					var $form = jQuery(this);
					var input_data = jQuery($form).serialize();
					jQuery.ajax({
						type   : 'POST',
						data   : input_data,
						url    : thim_ob_ajax_url,
						success: function (html) {
							var response_data = jQuery.parseJSON(html);
							jQuery('.thim-login-widget-message', $form).html(response_data.message);
						},
						error  : function (html) {
						}
					});
				}
				event.preventDefault();
				return false;
			});
		});
	};

	// DOMReady event
	$(function () {
		thimLoginSocialPopup();
		thimLoginWidget();
		login_popup_ajax();
	});
})(jQuery);

