<?php

require get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php';
/**
 * Recommended plugins.
 */
function elearning_education_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Learnpress', 'elearning-education' ),
			'slug'             => 'learnpress',
			'source'           => '',
			'required'         => false,
			'force_activation' => false,
		),
	);
	$config = array();
	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'elearning_education_register_recommended_plugins' );
