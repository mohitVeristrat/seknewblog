(function($) 
{ 
	$(document).ready(function() 
	{

		$('a.wpvq-menu-anchor').click(function(e) {
			e.preventDefault();
			var anchor = $(this).attr('data-anchor');
			$('html, body').animate( { scrollTop: $('a[name='+anchor+']').offset().top - 40}, 750 );	
		});

		var editor = new Behave({
		    textarea: document.getElementById('wpvq_textarea_custom_css')
		});

		/**
		 * Disable Facebook API input if :
		 * 	- "Please no api" is checked 
		 * 		or/and 
		 * 	- "Already use API" is checked
		 */

		$('#wpvq_checkbox_facebook_no_api').click(function() {
			if ($(this).attr('checked')) {
				$('#wpvq_text_field_facebook_appid').prop('disabled', true);
				php_vars.wpvq_noNeedApi = true;
			} else {
				if (!php_vars.wpvq_apiAlreadyLoaded) {
					$('#wpvq_text_field_facebook_appid').prop('disabled', false);
				}
				php_vars.wpvq_noNeedApi = false;
			}
		});

		$('#wpvq_checkbox_facebook_already_api').click(function() {
			if ($(this).attr('checked')) {
				$('#wpvq_text_field_facebook_appid').prop('disabled', true);
				php_vars.wpvq_apiAlreadyLoaded = true;
			} else {
				if (!php_vars.wpvq_noNeedApi) {
					$('#wpvq_text_field_facebook_appid').prop('disabled', false);
				}
				php_vars.wpvq_apiAlreadyLoaded = false;
			}
		});

		$('#wpvq_input_progressbar_color').wpColorPicker();

	});

	/**
	 * IMPORT A QUIZ PACK
	 */
	
	var import_custom_uploader;
	$(document).on('click', '.wpvq-import-pack' ,function(e) 
	{
		e.preventDefault();

        // Extend the wp.media object
        // See more : http://stackoverflow.com/questions/21540951/custom-wp-media-with-arguments-support
        import_custom_uploader = wp.media.frames.file_frame = wp.media({
            title: 'Select one (or several) quiz pack',
            button: { text: 'Import pack(s)' },
            multiple: true
        });
 
        // When a file is selected
        import_custom_uploader.on('select', function() 
        {
        	$('.wpvq-import-field .wpvq-import-loader').show();
        	$('button.wpvq-import-pack').text('Loading, please wait...').attr('disabled', 'disabled');

        	var urls = [];
        	var selection = import_custom_uploader.state().get('selection');
            selection.map( function( attachment ) {
	            urls.push(attachment.attributes.url);
            });

            // Ajax data
            var data = {
				'action': 'wpvq_import_quiz',
				'urls': urls
			};

            // Send URL to the import controller
			$.ajax({
			  type: "POST",
			  url: ajaxurl,
			  data: data,
			}).done(function(data) {
				if (data == 201) {
					window.location = php_vars.wpvq_import_quiz_url;
				} else {
					alert('Internal error : please contact the support (code : ' + data + ')');
				}
			});
        });
 
        //Open the uploader dialog
        import_custom_uploader.open();
	});

	
})(jQuery);