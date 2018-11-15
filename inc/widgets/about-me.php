<?php
/**
* Adds fenchi about me widget
*/
class fenchi_about_me_Widget extends WP_Widget {

	/**
	* Register widget with WordPress
	*/
	function __construct() {
		parent::__construct(
			'fenchi_about_me_widget', // Base ID
			esc_html__( 'fenchi about me', 'fenchi' ), // Name
			array( 'description' => esc_html__( 'special widget', 'fenchi' ), ) // Args
		);
		add_action( 'admin_footer', array( $this, 'fenchi_media_fields' ) );
		add_action( 'customize_controls_print_footer_scripts', array( $this, 'fenchi_media_fields' ) );
	}

	/**
	* Widget Fields
	*/
	private $widget_fields = array(
		array(
			'label' => 'user profile',
			'id' => 'user-profile',
			'default' => '',
			'type' => 'media',
		),
		array(
			'label' => 'full name',
			'id' => 'full-name',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'your career',
			'id' => 'career',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'your text',
			'id' => 'describe',
			'default' => '',
			'type' => 'textarea',
		),
		array(
			'label' => 'Twitter',
			'id' => 'twitter',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Facebook',
			'id' => 'facebook',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Linkedin',
			'id' => 'linkedin',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Instagram',
			'id' => 'instagram',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Pinterest',
			'id' => 'pinterest',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Github',
			'id' => 'github',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Gitlab',
			'id' => 'gitlab',
			'default' => '',
			'type' => 'text',
		),
		
		array(
			'label' => 'Email',
			'id' => 'email',
			'default' => '',
			'type' => 'text',
		),
		array(
			'label' => 'Gplus',
			'id' => 'gplus',
			'default' => '',
			'type' => 'text',
		),
	);

	/**
	* Front-end display of widget
	*/
	public function widget( $args, $instance ) {
		echo wp_kses_post($args['before_widget'], 'fenchi');

		$user_profile = isset($instance['user-profile']) ? $instance['user-profile'] : 'Add from widgets';
		$full_name = isset($instance['full-name']) ? $instance['full-name'] : 'Add from widgets';
		$career = isset($instance['career']) ? $instance['career'] : 'Add from widgets';
		$describe = isset($instance['describe']) ? $instance['describe'] : 'Add from widgets';
		// Output generated fields
		echo '<div id="author-pic"><img class="img-responsive author-picture" src="'.$user_profile.'"></div>';
		echo '<h5 class="line-left"><span>'.$full_name.'</span></h5>';
		echo '<h5 class="line-left"><span>'.$career.'</span></h5>';
		echo '<div class="about-me"><p>'.$describe.'</p></div>';
	
		// display social link if they set from widget section
		echo '<div class="social-link">';
		$twitter = isset($instance['twitter']) ? $instance['twitter'] : '';
			if($twitter != ''){
			echo '<a href="'.$twitter.'" data-toggle="tooltip" data-original-title="Follow on Twitter"><i class="fab fa-twitter"></i></a>';
			}
		$facebook = isset($instance['facebook']) ? $instance['facebook'] : '';
		if($facebook != ''){
			echo '<a href="'.$facebook.'" data-toggle="tooltip" data-original-title="Follow on Facebook"><i class="fab fa-facebook-f"></i></a>';
		}
		$linkedin = isset($instance['linkedin']) ? $instance['linkedin'] : '';
		if($linkedin != ''){
			echo '<a href="'.$linkedin.'" data-toggle="tooltip" data-original-title="Connect on Linkedin"><i class="fab fa-linkedin-in"></i></a>';
		}
		$gplus = isset($instance['gplus']) ? $instance['gplus'] : '';
		if($gplus != ''){
			echo '<a href="tel:'.$gplus.'" data-toggle="tooltip" data-original-title="Google+"><i class="fab fa-google-plus-g"></i></i></a>';
		}
		$instagram = isset($instance['instagram']) ? $instance['instagram'] : '';
		if($instagram != ''){
				echo '<a href="'.$instagram.'" data-toggle="tooltip" data-original-title="Follow on Instagram"><i class="fab fa-instagram"></i></a>';
		}
		$pinterest = isset($instance['pinterest']) ? $instance['pinterest'] : '';
		if($pinterest != ''){
		echo '<a href="'.$pinterest.'" data-toggle="tooltip" data-original-title="Follow on Pinterest"><i class="fab fa-pinterest-p"></i></a>';
		}
		$github = isset($instance['github']) ? $instance['github'] : '';
		if($github != ''){
				echo '<a href="'.$github.'" data-toggle="tooltip" data-original-title="Follow on Github"><i class="fab fa-github-square"></i></a>';
		}
		$gitlab = isset($instance['gitlab']) ? $instance['gitlab'] : '';
		if($gitlab != ''){
				echo '<a href="'.$gitlab.'" data-toggle="tooltip" data-original-title="Follow on Gitlab"><i class="fab fa-gitlab"></i></a>';
		}

		$email = isset($instance['email']) ? $instance['email'] : '';
		if($email != ''){
			echo '<a href="mailto:'.$email.'?Subject=Hi" data-toggle="tooltip" data-original-title="Send email"><i class="far fa-envelope"></i></a>';
		}
		
		
	
		echo '</div>';

		echo wp_kses_post($args['after_widget'], 'fenchi');
	}

	/**
	* Media Field Backend
	*/
	public function fenchi_media_fields() {
		?><script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$(document).on('click','.custommedia',function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = button.attr('id');
						_custom_media = true;
							wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$('input#'+id).val(attachment.url);
								$('input#'+id).trigger('change');
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
		</script><?php
	}

	/**
	* Back-end widget fields
	*/
	public function fenchi_field_generator( $instance ) {
		$output = '';
		foreach ( $this->widget_fields as $widget_field ) {
			$widget_value = ! empty( $instance[$widget_field['id']] ) ? $instance[$widget_field['id']] : esc_html__( $widget_field['default'], 'fenchi' );
			switch ( $widget_field['type'] ) {
				case 'media':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'fenchi' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_url( $widget_value ).'">';
					$output .= '<button id="'.$this->get_field_id( $widget_field['id'] ).'" class="button select-media custommedia">Add Media</button>';
					$output .= '</p>';
					break;
				case 'textarea':
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'fenchi' ).':</label> ';
					$output .= '<textarea class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" rows="6" cols="6" value="'.esc_attr( $widget_value ).'">'.$widget_value.'</textarea>';
					$output .= '</p>';
					break;
				default:
					$output .= '<p>';
					$output .= '<label for="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'">'.esc_attr( $widget_field['label'], 'fenchi' ).':</label> ';
					$output .= '<input class="widefat" id="'.esc_attr( $this->get_field_id( $widget_field['id'] ) ).'" name="'.esc_attr( $this->get_field_name( $widget_field['id'] ) ).'" type="'.$widget_field['type'].'" value="'.esc_attr( $widget_value ).'">';
					$output .= '</p>';
			}
		}
		echo $output;
	}

	public function form( $instance ) {
		$this->fenchi_field_generator( $instance );
	}

	/**
	* Sanitize widget form values as they are saved
	*/
	public function fenchi_update( $new_instance, $old_instance ) {
		$instance = array();
		foreach ( $this->widget_fields as $widget_field ) {
			switch ( $widget_field['type'] ) {
				case 'checkbox':
					$instance[$widget_field['id']] = $_POST[$this->get_field_id( $widget_field['id'] )];
					break;
				default:
					$instance[$widget_field['id']] = ( ! empty( $new_instance[$widget_field['id']] ) ) ? strip_tags( $new_instance[$widget_field['id']] ) : '';
			}
		}
		return $instance;
	}
} // class fenchi_about_me_Widget

// register fenchi about me widget
function register_fenchi_about_me_widget() {
	register_widget( 'fenchi_about_me_Widget' );
}
add_action( 'widgets_init', 'register_fenchi_about_me_widget' );