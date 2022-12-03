<?php

class SIMP_Simple_Image extends ET_Builder_Module {

	public $slug       = 'simp_simple_image';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://github.com/VisibleOneMack',
		'author'     => 'Mack',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Simple Image', 'simp-simple-image' );
	}

	public function get_fields() {
		return array(
			'src'                 => array(
				'label'              => esc_html__( 'Image', 'simp-simple-image' ),
				'type'               => 'upload',
				'option_category'    => 'basic_option',
				'upload_button_text' => esc_attr__( 'Upload an image', 'simp-simple-image' ),
				'choose_text'        => esc_attr__( 'Choose an Image', 'simp-simple-image' ),
				'update_text'        => esc_attr__( 'Set As Image', 'simp-simple-image' ),
				'hide_metadata'      => true,
				'affects'            => array( 'alt', 'title_text' ),
				'description'        => esc_html__( 'Upload your desired image, or type in the URL to the image you would like to display.', 'lwp-overlay-images' ),
				'toggle_slug'        => 'main_content'
			)
		);
	}

	public function render( $unprocessed_props, $content, $render_slug ) {
		return sprintf( 
			'<img src="%1$s" class="image"  alt="" title="">', 
			esc_html( $this->props['src'] )
		);
	}
}

new SIMP_Simple_Image;
