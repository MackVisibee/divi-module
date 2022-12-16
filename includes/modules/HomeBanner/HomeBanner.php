<?php

class Home_Banner_Custom extends ET_Builder_Module {

	public $slug       = 'home_banner_custom';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'https://gitlab.visibleone.io/mack/divi-module',
		'author'     => 'Mack',
		'author_uri' => 'https://gitlab.visibleone.io/mack',
	);

	public function init() {
		$this->name = esc_html__( 'Home Banner', 'home-banner-custom' );
	}

	public function get_fields() {
		return array(
			'intro_image' => array(
				'label' => esc_html__( 'Intro Image', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload intro image here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
			'neopets_logo' => array(
				'label' => esc_html__( 'Neopets Logo', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload Neopets Logo here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'charactors_group' => array(
				'label' => esc_html__( 'Charactors Group Image', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Upload your charactors group image here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'intro_text' => array(
				'label' => esc_html__( 'Introduction Text', 'home-banner-custom' ),
				'type' => 'tiny_mce',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Add your desired content here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'scroll_text' => array(
				'label' => esc_html__( 'Scroll Text', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired scroll text here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'scroll_icon' => array(
				'label' => esc_html__( 'Scroll Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your scroll icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'cloud_image' => array(
				'label' => esc_html__( 'Cloud Image', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your cloud image here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'community_text' => array(
				'label' => esc_html__( 'Community Text', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired community text here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_discord_url' => array(
				'label' => esc_html__( 'Discord Link', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired discord link here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_discord_icon' => array(
				'label' => esc_html__( 'Discord Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your discord icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_twitter_url' => array(
				'label' => esc_html__( 'Twitter Link', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired twitter link here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_twitter_icon' => array(
				'label' => esc_html__( 'Twitter Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your twitter icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_instagram_url' => array(
				'label' => esc_html__( 'Instagram Link', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired instagram link here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_instagram_icon' => array(
				'label' => esc_html__( 'Instagram Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your instagram icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_facebook_url' => array(
				'label' => esc_html__( 'Facebook Link', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired facebook link here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_facebook_icon' => array(
				'label' => esc_html__( 'Facebook Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your facebook icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_youtube_url' => array(
				'label' => esc_html__( 'Youtube Link', 'home-banner-custom' ),
				'type' => 'text',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Input you desired Youtube link here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_youtube_icon' => array(
				'label' => esc_html__( 'Youtube Icon', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your youtube icon here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'neopets_jump_icon' => array(
				'label' => esc_html__( 'Jump Image Gif', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your gif here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'cloud_image_1' => array(
				'label' => esc_html__( 'Cloud Image 1', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your cloud image 1 here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'cloud_image_2' => array(
				'label' => esc_html__( 'Cloud Image 2', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your cloud image 2 here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            'cloud_image_3' => array(
				'label' => esc_html__( 'Cloud Image 3', 'home-banner-custom' ),
				'type' => 'upload',
				'option_category' => 'basic_option',
				'description' => esc_html__( 'Uplaod your cloud image 3 here', 'home-banner-custom' ),
				'toggle_slug' => 'main_content'
			),
            
			
		);
	}

	public function render( $unprocessed_props, $content, $render_slug ) {
		return sprintf( 
'<section id="intro">
            <div class="intro-bg-overlay"></div>
            <div class="intro-bg">
                <img src="%1$s" alt="Neopets World" loading="eager" />
            </div>

            <div class="intro-group">
                <div class="logo-wrapper">
                    <img src="%2$s" alt="Neopets Logo" loading="eager" />
                </div>
                <div class="charactors-group">
                    <img src="%3$s" alt="Neopets charactors" loading="eager" />
                </div>
                <p class="intro-text hide">%4$s</p>
            </div>

            <div class="scroll-down hide">
                <p>%5$s</p>
                <img src="%6$s" alt="Star" />
            </div>

            <div class="join-community hide">
                <div class="cloud">
                    <img src="%7$s" alt="Neopets Community" />
                    <h5 class="jc-text">%8$s</h5>
                </div>
                <div class="social-list">
                    <ul class="show">
                        <li>
                            <a href="%9$s" target="_blank">
                                <img src="%10$s" alt="Neopets Discord" />
                            </a>
                        </li>
                        <li>
                            <a href="%11$s" target="_blank">
                                <img src="%12$s" alt="Neopets Twitter"
                                />
                            </a>
                        </li>
                        <li>
                            <a href="%13$s" target="_blank">
                                <img src="%14$s" alt="Neopets Instagram"
                                />
                            </a>
                        </li>
                        <li>
                            <a href="%15$s" target="_blank">
                                <img src="%16$s" alt="Neopets Facebook"
                                />
                            </a>
                        </li>
                        <li>
                            <a href="%17$s" target="_blank">
                                <img src="%18$s" alt="Neopets Youtube"
                                />
                            </a>
                        </li>
                    </ul>
                    <span class="trigger"><img src="./images/community-arrow.svg" alt="Neopets"/></span>
                </div>
                <div id="comModel" class="trigger">
                    <img src="%19$s" alt="Neopets Jup Jup" />
                </div>
            </div>

            <div class="clouds">
                <img src="%20$s" alt="Neopets Cloud" class="cloud-1" loading="eager" />
                <img src="%21$s" alt="Neopets Cloud" class="cloud-2" loading="eager" />
                <img src="%22$s" alt="Neopets Cloud" class="cloud-3" loading="eager" />
            </div>
        </section>', 
			$this->props['intro_image'],
			$this->props['neopets_logo'],
			$this->props['charactors_group'],
			esc_html( $this->props['intro_text'] ),
			esc_html( $this->props['scroll_text'] ),
			$this->props['scroll_icon'],
			$this->props['cloud_image'],
			esc_html( $this->props['community_text'] ),
			$this->props['neopets_discord_url'],
			$this->props['neopets_discord_icon'],
			$this->props['neopets_twitter_url'],
			$this->props['neopets_twitter_icon'],
			$this->props['neopets_instagram_url'],
			$this->props['neopets_instagram_icon'],
			$this->props['neopets_facebook_url'],
			$this->props['neopets_facebook_icon'],
			$this->props['neopets_youtube_url'],
			$this->props['neopets_youtube_icon'],
			$this->props['neopets_jump_icon'],
			$this->props['cloud_image_1'],
			$this->props['cloud_image_2'],
			$this->props['cloud_image_3'],
			
		);
	}
}

new Home_Banner_Custom;
