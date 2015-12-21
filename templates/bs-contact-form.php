<form method="post" id="contact-form">

	<div class="form-group">
		<label for="contact-name"><?php _e( 'Name', TEXT_DOMAIN ) ?></label>
		<input type="text" class="form-control" name="contact-name" id="contact-name">
	</div>

	<div class="form-group">
		<label for="contact-email"><?php _e( 'Email', TEXT_DOMAIN ) ?></label>
		<input type="email" class="form-control" name="contact-email" id="contact-email">
	</div>

	<div class="form-group">
		<label for="contact-comments"><?php _e( 'Comments', TEXT_DOMAIN ) ?></label>
		<input type="text" class="form-control" name="contact-comments" id="contact-comments">
	</div>

	<?php wp_nonce_field( 'send_contact_form' ) // requerido ?>
	<input type="hidden" name="action" value="send_contact_form">

	<button type="submit" class="form-control" class="btn btn-default" id="send"><?php _e( 'Submit', TEXT_DOMAIN ) ?></button>

</form>

<script>

  jQuery(function () {

      jQuery('#contact-form').ajaxForm({
          url: admin_url,
          dataType: 'json',
          beforeSubmit: function (formData, jqForm, options) {
              // optionally process data before submitting the form via AJAX
              jQuery('#send').attr('disabled', '').text('<?php _e( 'Sending...', TEXT_DOMAIN ) ?>');
          },
          success: function (response, statusText, xhr, $form) {
              // code that's executed when the request is processed successfully
              jQuery('#send').removeAttr('disabled');
              if (response.success) {
                  jQuery('#send').text('<?php _e( 'Sent!', TEXT_DOMAIN ) ?>');
              } else {
                  jQuery('#send').text('<?php _e( 'Error!', TEXT_DOMAIN ) ?>');
              }
          }
      });

      jQuery('#contact-form input, #contact-form textarea').focus(function () {
          var buttonText = jQuery('#send').text();
          if (buttonText === '<?php _e( 'Error!', TEXT_DOMAIN ) ?>') {
              jQuery('#send').text('<?php _e( 'Submit', TEXT_DOMAIN ) ?>');
          }
      });

  });

</script>