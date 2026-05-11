(function( $ ) {
	'use strict';

	$( document ).ready( function( ) {
		const stepOne = $('.ae-step-one');
		const stepTwo = $('.ae-step-two');

		const cancelButton = $('.ae-site-id-cancel-button');
		const editButton = $('.ae-site-id-form-edit-button');
		
		cancelButton.click(function() {
			$('.ae-site-id-form-container').addClass('hidden');
			$('.ae-site-id-form-edit-button-container').removeClass('hidden');
		});

		editButton.click(function() {
			$('.ae-site-id-form-edit-button-container').addClass('hidden');
			$('.ae-site-id-form-container').removeClass('hidden');
		});

		$( '.ae-site-id-form .site-id-field input' ).focus(function ( ) {
			$('.site-id-field-container').removeClass('has-error');
		});

		$( '.ae-site-id-form' ).submit( function( event ) {
			event.preventDefault();

			const self = this;

		  const siteId = $(self).find('.site-id-field input').val();

			if (siteId.length === 0) {
				$('.site-id-field-container').addClass('has-error');
				return false;
			}

			let ajax_form_data = $(self).serialize();

			ajax_form_data = ajax_form_data+'&ajaxrequest=true&submit=Submit+Form&nonce='+params.nonce;

			$.ajax({
				url: params.ajaxurl,
				type: 'post',
				data: ajax_form_data
			})
			.done( function( response ) {
				$('.ae-site-id-form .site-id-field input').val(siteId);

				if (!stepOne.hasClass('hidden')) {
					stepOne.addClass('hidden');
					stepTwo.removeClass('hidden');
				}

				$('.ae-site-id-form-edit-button-container').removeClass('hidden');
				$('.ae-site-id-form-container').addClass('hidden');
			})
			.fail( function() {
				$(".ae-result").html( "<h2>Something went wrong.</h2><br>" );         
			});
		});

		$( '.ae-cdn-form' ).on( 'submit', function( event ) {
			event.preventDefault();
			const self = this;
			const ajaxData = $( self ).serialize() + '&nonce=' + encodeURIComponent( params.nonce );

			$.ajax( {
				url: params.ajaxurl,
				type: 'post',
				data: ajaxData
			} )
			.done( function( response ) {
				if ( response && response.success ) {
					const checked = $( self ).find( 'input[name="use_wsv3_cdn"][type="checkbox"]' ).prop( 'checked' );
					$( '.ae-cdn-form input[name="use_wsv3_cdn"][type="checkbox"]' ).prop( 'checked', checked );
					const $saved = $( self ).find( '.ae-cdn-saved' );
					$saved.removeAttr( 'hidden' );
					setTimeout( function() {
						$saved.attr( 'hidden', 'hidden' );
					}, 3000 );
				} else {
					window.alert( ( response && response.data && response.data.message ) ? response.data.message : 'Could not save CDN preference.' );
				}
			} )
			.fail( function( jqXHR ) {
				let msg = 'Could not save CDN preference.';
				if ( jqXHR.responseJSON && jqXHR.responseJSON.data && jqXHR.responseJSON.data.message ) {
					msg = jqXHR.responseJSON.data.message;
				}
				window.alert( msg );
			} );
		} );
	});
})( jQuery );
