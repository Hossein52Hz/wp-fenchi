<?php
/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of 'fenchi_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category YourThemeOrPlugin
 * @package  Demo_CMB2
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if ( file_exists( dirname( __FILE__ ) . '/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/init.php';
} elseif ( file_exists( dirname( __FILE__ ) . '/init.php' ) ) {
	require_once dirname( __FILE__ ) . '/init.php';
}

/**
 * Conditionally displays a metabox when used as a callback in the 'show_on_cb' cmb2_box parameter
 *
 * @param  CMB2 $cmb CMB2 object.
 *
 * @return bool      True if metabox should show
 */
function fenchi_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

/**
 * Conditionally displays a field when used as a callback in the 'show_on_cb' field parameter
 *
 * @param  CMB2_Field $field Field object.
 *
 * @return bool              True if metabox should show
 */
function fenchi_hide_if_no_cats( $field ) {
	// Don't show this field if not in the cats category.
	if ( ! has_tag( 'cats', $field->object_id ) ) {
		return false;
	}
	return true;
}

/**
 * Manually render a field.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function fenchi_render_row_cb( $field_args, $field ) {
	$classes     = $field->row_classes();
	$id          = $field->args( 'id' );
	$label       = $field->args( 'name' );
	$name        = $field->args( '_name' );
	$value       = $field->escaped_value();
	$description = $field->args( 'description' );
	?>
	<div class="custom-field-row <?php echo esc_attr( $classes ); ?>">
		<p><label for="<?php echo esc_attr( $id ); ?>"><?php echo esc_html( $label ); ?></label></p>
		<p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo $value; ?>"/></p>
		<p class="description"><?php echo esc_html( $description ); ?></p>
	</div>
	<?php
}

/**
 * Manually render a field column display.
 *
 * @param  array      $field_args Array of field arguments.
 * @param  CMB2_Field $field      The field object.
 */
function fenchi_display_text_small_column( $field_args, $field ) {
	?>
	<div class="custom-column-display <?php echo esc_attr( $field->row_classes() ); ?>">
		<p><?php echo $field->escaped_value(); ?></p>
		<p class="description"><?php echo esc_html( $field->args( 'description' ) ); ?></p>
	</div>
	<?php
}

/**
 * Conditionally displays a message if the $post_id is 2
 *
 * @param  array      $field_args Array of field parameters.
 * @param  CMB2_Field $field      Field object.
 */
function fenchi_before_row_if_2( $field_args, $field ) {
	if ( 2 == $field->object_id ) {
		echo '<p>Testing <b>"before_row"</b> parameter (on $post_id 2)</p>';
	} else {
		echo '<p>Testing <b>"before_row"</b> parameter (<b>NOT</b> on $post_id 2)</p>';
	}
}

add_action( 'cmb2_init', 'fenchi_register_demo_metabox' );
/**
 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
 */
function fenchi_register_demo_metabox() {
	$prefix = 'fenchi_metabox_';

	/**
	 * Sample metabox to demonstrate each field type included
	 */
	$cmb_demo = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => esc_html__( 'Post Settings', 'fenchi' ),
		'object_types'  => array( 'post' ), // Post type
		// 'show_on_cb' => 'fenchi_show_if_front_page', // function should return a bool value
		// 'context'    => 'normal',
		// 'priority'   => 'high',
		// 'show_names' => true, // Show field names on the left
		// 'cmb_styles' => false, // false to disable the CMB stylesheet
		// 'closed'     => true, // true to keep the metabox closed by default
		// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
		// 'classes_cb' => 'fenchi_add_some_classes', // Add classes through a callback.
	) );

	$cmb_demo->add_field( array(
		'name'       => esc_html__( 'Test Text', 'fenchi' ),
		'desc'       => esc_html__( 'field description (optional)', 'fenchi' ),
		'id'         => $prefix . 'text',
		'type'       => 'text',
		'show_on_cb' => 'fenchi_hide_if_no_cats', // function should return a bool value
		// 'sanitization_cb' => 'my_custom_sanitization', // custom sanitization callback parameter
		// 'escape_cb'       => 'my_custom_escaping',  // custom escaping callback parameter
		// 'on_front'        => false, // Optionally designate a field to wp-admin only
		// 'repeatable'      => true,
		// 'column'          => true, // Display field value in the admin post-listing columns
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Quote Author', 'fenchi' ),
		'desc' => esc_html__( 'Add author name', 'fenchi' ),
		'id'   => $prefix . 'quoteauthor',
		'type' => 'text_small',
		// 'repeatable' => true,
		// 'column' => array(
		// 	'name'     => esc_html__( 'Column Title', 'fenchi' ), // Set the admin column title
		// 	'position' => 2, // Set as the second column.
		// );
		// 'display_cb' => 'fenchi_display_text_small_column', // Output the display of the column values through a callback.
	) );



	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Quote Text', 'fenchi' ),
		'desc' => esc_html__( 'add quote content', 'fenchi' ),
		'id'   => $prefix . 'quotetext',
		'type' => 'textarea_small',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Link', 'fenchi' ),
		'desc' => esc_html__( 'add your link', 'fenchi' ),
		'id'   => $prefix . 'url',
		'type' => 'text_url',
		// 'protocols' => array('http', 'https', 'ftp', 'ftps', 'mailto', 'news', 'irc', 'gopher', 'nntp', 'feed', 'telnet'), // Array of allowed protocols
		// 'repeatable' => true,
	) );


	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Image', 'fenchi' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );
	$cmb_demo->add_field( array(
		'name' => esc_html__( 'Audio', 'fenchi' ),
		'desc' => esc_html__( 'Upload an audio or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'audio',
		'type' => 'file',
	) );

	$cmb_demo->add_field( array(
		'name' => esc_html__( 'video', 'fenchi' ),
		'desc' => esc_html__( 'Upload an video or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'video',
		'type' => 'file',
	) );


	$cmb_demo->add_field( array(
		'name'         => esc_html__( 'Gallery images', 'fenchi' ),
		'desc'         => esc_html__( 'Upload or add multiple images.', 'fenchi' ),
		'id'           => $prefix . 'gallery_list',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

}

