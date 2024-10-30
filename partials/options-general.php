<h1><?php echo esc_html(get_admin_page_title()); ?></h1>
<form name="form1" method="post" action="">
<?php wp_nonce_field( self::return_plugin_namespace()."-backend_nonce", self::return_plugin_namespace()."-backend_nonce", false ); ?>

<input type="hidden" name="<?php echo self::return_favicon_attachment_id(); ?>"  id="<?php echo self::return_favicon_attachment_id(); ?>" value="<?php echo get_option(self::return_favicon_attachment_id()); ?>" size="10" />

<table class="form-table">
<tr valign="top">
<th scope="row"><label for="<?php echo self::return_attachment_url(); ?>"><?php _e("Favicon url:", self::return_plugin_namespace()); ?></label></label></th>

<td><input type="url" name="<?php echo self::return_attachment_url(); ?>" id="<?php echo self::return_attachment_url(); ?>" value="<?php echo get_option(self::return_attachment_url()); ?>" size="50" />
<input type="button" class="button" name="<?php echo self::return_attachment_url(); ?>-upload_button" id="<?php echo self::return_attachment_url(); ?>-upload_button" value="Upload/Select Image" />
</td>
</tr>
</table>
<?php submit_button( 'Save Changes' ); ?>

</form>