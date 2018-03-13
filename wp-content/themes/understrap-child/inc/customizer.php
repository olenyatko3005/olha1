<?php
/**
 * Understrap Theme Customizer
 *
 * @package understrap
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
if ( ! function_exists( 'understrap_customize_register' ) ) {
	/**
	 * Register basic customizer support.
	 *
	 * @param object $wp_customize Customizer reference.
	 */
	function understrap_customize_register( $wp_customize ) {
		$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	}
}
add_action( 'customize_register', 'understrap_customize_register' );

if ( ! function_exists( 'understrap_theme_customize_register' ) ) {
	/**
	 * Register individual settings through customizer's API.
	 *
	 * @param WP_Customize_Manager $wp_customize Customizer reference.
	 */
	function understrap_theme_customize_register( $wp_customize ) {

		// Theme layout settings.
		$wp_customize->add_section( 'understrap_theme_layout_options', array(
			'title'       => __( 'Theme Layout Settings', 'understrap' ),
			'capability'  => 'edit_theme_options',
			'description' => __( 'Container width and sidebar defaults', 'understrap' ),
			'priority'    => 160,
		) );

		 //select sanitization function
        function understrap_theme_slug_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }

		$wp_customize->add_setting( 'understrap_container_type', array(
			'default'           => 'container',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_container_type', array(
					'label'       => __( 'Container Width', 'understrap' ),
					'description' => __( "Choose between Bootstrap's container and container-fluid", 'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_container_type',
					'type'        => 'select',
					'choices'     => array(
						'container'       => __( 'Fixed width container', 'understrap' ),
						'container-fluid' => __( 'Full width container', 'understrap' ),
					),
					'priority'    => '10',
				)
			) );

		$wp_customize->add_setting( 'understrap_sidebar_position', array(
			'default'           => 'right',
			'type'              => 'theme_mod',
			'sanitize_callback' => 'sanitize_text_field',
			'capability'        => 'edit_theme_options',
		) );

		$wp_customize->add_control(
			new WP_Customize_Control(
				$wp_customize,
				'understrap_sidebar_position', array(
					'label'       => __( 'Sidebar Positioning', 'understrap' ),
					'description' => __( "Set sidebar's default position. Can either be: right, left, both or none. Note: this can be overridden on individual pages.",
					'understrap' ),
					'section'     => 'understrap_theme_layout_options',
					'settings'    => 'understrap_sidebar_position',
					'type'        => 'select',
					'sanitize_callback' => 'understrap_theme_slug_sanitize_select',
					'choices'     => array(
						'right' => __( 'Right sidebar', 'understrap' ),
						'left'  => __( 'Left sidebar', 'understrap' ),
						'both'  => __( 'Left & Right sidebars', 'understrap' ),
						'none'  => __( 'No sidebar', 'understrap' ),
					),
					'priority'    => '20',
				)
			) );
			
				 
		//setting Copyright 
		$wp_customize -> add_section(
            'copyright_section', array(
            'title' => __( 'Copyright', 'footer' ),
            'description' => __( 'Copyright text', 'footer' )
        ));	
		
        $wp_customize -> add_setting('copyright_text', array(
            'default' => 'copyright',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'copyright_text', array(
                'type' => 'text',
                'label' => __( 'Custom text/copyright', 'footer' ),
                'description' => __( 'This is a custom text box.' ),
                'section' => 'copyright_section',
                'settings' => 'copyright_text',
         )));
		 
		//setting Contact info 
		//setting address
		$wp_customize -> add_section(
            'contact_info_section', array(
            'title' => __( 'Contact info', 'contact' ),
            'description' => __( 'Setting contact info ', 'contact' )
        ));	
		
        $wp_customize -> add_setting('address_text', array(
            'default' => 'address',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'address_text', array(
                'type' => 'text',
                'label' => __( 'Custom text/address', 'contact' ),
                'description' => __( 'This is a custom text box.' ),
                'section' => 'contact_info_section',
                'settings' => 'address_text',
         )));
		 
		//setting email
		$wp_customize -> add_setting('email_text', array(
            'default' => 'email',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'email_text', array(
                'type' => 'text',
                'label' => __( 'Custom text/email', 'contact' ),
                'description' => __( 'This is a custom text box.' ),
                'section' => 'contact_info_section',
                'settings' => 'email_text',
         )));
		 
		//setting phone number
		$wp_customize -> add_setting('phone_number_first', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'phone_number_first', array(
                'type' => 'text',
                'label' => __( 'Custom text/phone number', 'contact' ),
                'description' => __( 'This is a custom text box.' ),
                'section' => 'contact_info_section',
                'settings' => 'phone_number_first',
         )));
		 
		 $wp_customize -> add_setting('phone_number_second', array(
            'default' => '',
        ));

        $wp_customize -> add_control(
            new WP_Customize_Control(
                $wp_customize,
                'phone_number_second', array(
                'type' => 'text',
                'section' => 'contact_info_section',
                'settings' => 'phone_number_second',
         )));
		 
	}
} // endif function_exists( 'understrap_theme_customize_register' ).
add_action( 'customize_register', 'understrap_theme_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
if ( ! function_exists( 'understrap_customize_preview_js' ) ) {
	/**
	 * Setup JS integration for live previewing.
	 */
	function understrap_customize_preview_js() {
		wp_enqueue_script( 'understrap_customizer', get_template_directory_uri() . '/js/customizer.js',
			array( 'customize-preview' ), '20130508', true );
	}
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );
