<?php


class Custom_Customizer {
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}
	public function register_customize_sections( $wp_customize ) {
        /*
        * Add settings to sections.
        */
       
        $this->hero_section( $wp_customize );
    }
    
    /* Sanitize Inputs */
    public function sanitize_custom_option($input) {
        return ( $input === "No" ) ? "No" : "Yes";
    }
    public function sanitize_custom_text($input) {
        return filter_var($input, FILTER_SANITIZE_STRING);
    }
    public function sanitize_custom_url($input) {
        return filter_var($input, FILTER_SANITIZE_URL);
    }
    public function sanitize_custom_email($input) {
        return filter_var($input, FILTER_SANITIZE_EMAIL);
    }
    public function sanitize_hex_color( $color ) {
        if ( '' === $color ) {
            return '';
        }
     
        // 3 or 6 hex digits, or the empty string.
        if ( preg_match( '|^#([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
            return $color;
        }
    }
  
    


    private function hero_section( $wp_customize ) {

        $wp_customize->add_section('hero-section', array(
            'title' => 'Hero',
            'priority' => 1,
            'description' => __('Hero section text and CTA', 'doesthismatter'),
        ));

        $wp_customize->add_section('first-section', array(
            'title' => 'First Section',
            'priority' => 1,
            'description' => __('First Section section text and CTA', 'doesthismatter'),
        ));

        $wp_customize->add_section('second-section', array(
            'title' => 'Second Section',
            'priority' => 1,
            'description' => __('second Section section text and CTA', 'doesthismatter'),
        ));
       
        
        

        
        // hero section
        $wp_customize->add_setting('hero-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-heading-control', array(
            'label' => 'Hero Heading',
            'section' => 'hero-section',
            'settings' => 'hero-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('hero-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'hero-paragraph-control', array(
            'label' => 'Hero Paragraph',
            'section' => 'hero-section',
            'settings' => 'hero-paragraph',
            'type' => 'textarea'
        )));
        


        //first section
        $wp_customize->add_setting('first-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-heading-control', array(
            'label' => 'First Heading',
            'section' => 'first-section',
            'settings' => 'first-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-tagline-control', array(
            'label' => 'First Tagline',
            'section' => 'first-section',
            'settings' => 'first-tagline',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'first-paragraph-control', array(
            'label' => 'First Paragraph',
            'section' => 'first-section',
            'settings' => 'first-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('first-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'first-image-control', array(
            'label' => 'Image',
            'section' => 'first-section',
            'settings' => 'first-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));

        //second section
        $wp_customize->add_setting('second-heading', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-heading-control', array(
            'label' => 'second Heading',
            'section' => 'second-section',
            'settings' => 'second-heading',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-tagline', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-tagline-control', array(
            'label' => 'second Tagline',
            'section' => 'second-section',
            'settings' => 'second-tagline',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-paragraph', array(
            'default' => '',
            'sanitize_callback' => array($this, 'sanitize_custom_text')
        ));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'second-paragraph-control', array(
            'label' => 'second Paragraph',
            'section' => 'second-section',
            'settings' => 'second-paragraph',
            'type' => 'textarea'
        )));

        $wp_customize->add_setting('second-image', array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'sanitize_callback' => array($this, 'sanitize_custom_url')
        ));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'second-image-control', array(
            'label' => 'Image',
            'section' => 'second-section',
            'settings' => 'second-image',
            'width' => 3000,
            'height' => 3000,
            'flex_height' => true,
            'flex_width'  => true,
        )));



       



}}