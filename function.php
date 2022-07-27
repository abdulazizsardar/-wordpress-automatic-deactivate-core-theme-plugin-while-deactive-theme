<?php

/**
	 * automatic deactivate core-theme plugin while deactive theme
	 *
	 */ 
	
	function meghgen_core_deactive_plugin(){
		include_once(ABSPATH. 'wp-admin/includes/plugin.php');
		$current_theme =wp_get_theme();
		$current_theme_name = $current_theme->parent_theme;
		if ($current_theme_name != 'MeghGen') {
			if (is_plugin_active('meghgen-core/meghgen.php')) {
				deactivate_plugins('meghgen-core/meghgen.php');
			}
			
		}
	}


	add_action('switch_theme','meghgen_core_deactive_plugin');
 
