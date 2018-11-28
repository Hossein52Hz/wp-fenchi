<?php 
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
		<p><input id="<?php echo esc_attr( $id ); ?>" type="text" name="<?php echo esc_attr( $name ); ?>" value="<?php echo esc_html($value); ?>"/></p>
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
		<p><?php echo esc_html($field->escaped_value()); ?></p>
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
	// metabox for Quote post format
	$cmb_quote = new_cmb2_box( array(
		'id'           => 'metabox-post-quote',
		'title'        => __( 'Quote post setting', 'fenchi' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$cmb_quote->add_field( array(
		'name' => esc_html__( 'Quote Author', 'fenchi' ),
		'desc' => esc_html__( 'Add author name', 'fenchi' ),
		'id'   => $prefix . 'quoteauthor',
		'type' => 'text_small',
	) );
	$cmb_quote->add_field( array(
		'name' => esc_html__( 'Quote Text', 'fenchi' ),
		'desc' => esc_html__( 'add quote content', 'fenchi' ),
		'id'   => $prefix . 'quotetext',
		'type' => 'textarea_small',
	) );
	// metabox for Image post format
	$cmb_image = new_cmb2_box( array(
		'id'           => 'metabox-post-image',
		'title'        => __( 'Image post setting', 'fenchi' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$cmb_image->add_field( array(
		'name' => esc_html__( 'Image', 'fenchi' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'image',
		'type' => 'file',
	) );
	// metabox for Audio post format
	$cmb_audio = new_cmb2_box( array(
		'id'           => 'metabox-post-audio',
		'title'        => __( 'Audio post setting', 'fenchi' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );
	$cmb_audio->add_field( array(
		'name' => esc_html__( 'Audio', 'fenchi' ),
		'desc' => esc_html__( 'Upload an audio or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'audio',
		'type' => 'file',
	) );
	$cmb_audio->add_field( array(
		'name' => esc_html__( 'Audio background', 'fenchi' ),
		'desc' => esc_html__( 'Upload an image or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'audiobackground',
		'type' => 'file',
	) );

	// metabox for Video post format
	$cmb_video = new_cmb2_box( array(
		'id'           => 'metabox-post-video',
		'title'        => __( 'Video post setting', 'fenchi' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb_video->add_field( array(
		'name' => esc_html__( 'video', 'fenchi' ),
		'desc' => esc_html__( 'Upload an video or enter a URL.', 'fenchi' ),
		'id'   => $prefix . 'video',
		'type' => 'file',
	) );


	// $cmb_demo->add_field( array(
	// 	'name'         => esc_html__( 'Gallery images', 'fenchi' ),
	// 	'desc'         => esc_html__( 'Upload or add multiple images.', 'fenchi' ),
	// 	'id'           => $prefix . 'gallery_list',
	// 	'type'         => 'file_list',
	// 	'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	// ) );

	// metabox for gallery post format
	$cmb_gallery = new_cmb2_box( array(
		'id'           => 'metabox-post-gallery',
		'title'        => __( 'Gallery post setting', 'fenchi' ),
		'object_types' => array( 'post' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb_gallery->add_field( array(
		'name'         => esc_html__( 'Gallery images', 'fenchi' ),
		'desc'         => esc_html__( 'Upload or add multiple images.', 'fenchi' ),
		'id'           => $prefix . 'gallery_list',
		'type'         => 'file_list',
		'preview_size' => array( 100, 100 ), // Default: array( 50, 50 )
	) );

}
