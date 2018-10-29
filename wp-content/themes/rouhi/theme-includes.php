<?php

//define constants
define('zenith_root', get_template_directory_uri());
define('zenith_root_dir', get_template_directory());
define('zenith_assets_root', get_template_directory_uri().'/assets');
define('zenith_assets_root_dir', get_template_directory().'/assets');
// define('ELATED_FRAMEWORK_ROOT', get_template_directory_uri().'/framework');
// define('ELATED_FRAMEWORK_ROOT_DIR', get_template_directory().'/framework');
// define('ELATED_FRAMEWORK_MODULES_ROOT', get_template_directory_uri().'/framework/modules');
// define('ELATED_FRAMEWORK_MODULES_ROOT_DIR', get_template_directory().'/framework/modules');
// define('ELATED_THEME_ENV', 'dev');

//include necessary files
// include_once zenith_root_DIR.'/framework/eltd-framework.php';
// Implement the Custom Header feature.
require zenith_root_dir.'/includes/custom-header.php';
// Custom template tags for this theme.
require zenith_root_dir.'/includes/template-tags.php';
// Functions which enhance the theme by hooking into WordPress.
require zenith_root_dir.'/includes/template-functions.php';
// Customizer additions.
require zenith_root_dir.'/includes/customizer.php';
// require zenith_root_dir. '/includes/wp_bootstrap_navwalker.php';
// include_once zenith_root_DIR.'/includes/sidebar/sidebar.php';
// require_once zenith_root_DIR.'/includes/plugins/class-tgm-plugin-activation.inc';
// include_once zenith_root_DIR.'/includes/plugins/plugins-activation.php';
// include_once zenith_root_DIR.'/assets/custom-styles/general-custom-styles.php';
// include_once zenith_root_DIR.'/assets/custom-styles/general-custom-styles-responsive.php';

// if(!is_admin()) {
//     include_once zenith_root_DIR.'/includes/eltd-body-class-functions.php';
// }