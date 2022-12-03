<?php

class SIMP_Simple_Box extends ET_Builder_Module {

	public $slug       = 'simp_simple_box';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://github.com/VisibleOneMack',
		'author'     => 'Mack',
		'author_uri' => '',
	);

	public function init() {
		$this->name = esc_html__( 'Simple Box', 'simp-simple-box' );
	}

	public function get_fields() {
		return array(
			'heading' => array(
				'label' => esc_html__( 'Box Heading', 'simp-simple-box' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired heading here', 'simp-simple-box' ),
				'toggle_slug' => 'main_content'
			)
		);
	}

	public function render( $unprocessed_props, $content, $render_slug ) {
		return sprintf( 
			'<h1 class="simp-simple-box-header">%1$s</h1>', 
			esc_html( $this->props['heading'] )
		);
	}
}

new SIMP_Simple_Box;
