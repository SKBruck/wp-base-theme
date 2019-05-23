<?php

/*
	 Always use this file to add stylesheets, script files, etc
 */

// Adds custom css and js to header and footer, respectively
function anxiousstoic_script_enqueue() {

		/*
			 Add css to header
			 Takes five params:
			 1. (STRING)  a custom id for the stylesheet
			 2. (STRING)  an absolute path to the stylesheet
			 3. (ARRAY)   an array to handle dependencies (leave empty for none)
			 4. (STRING)  a version number of the stylesheet
			 5. (STRING)  a string to set display media (set to all for all)
		 */
    wp_enqueue_style('customstyle', get_template_directory_uri() . 'css/anxioustoic.css', array(), '1.0.0', 'all');
		/*
			 Add js to header or footer
			 Takes five params:
			 1. (STRING)  a custom id for the script file
			 2. (STRING)  an absolute path to the script file
			 3. (ARRAY)   an array to handle dependencies (leave empty for none)
			 4. (STRING)  a version number of the script file
			 5. (BOOLEAN) a boolean to add file to header or footer (always set true)
		 */
    wp_enqueue_script('customjs', get_template_directory_uri() . 'js/anxioustoic.js', array(), '1.0.0', true);

}

/*
   An action that calls the anxiousstoic_script_enqueue function 
	 to tell WP when it needs to execute the function. It takes four params: 
	 1. (STRING)  wp_enqueue_scripts
	 2. (STRING)  function name
	 3. (INT)     priority
	 4. (INT)     arguments
 */
add_action('wp_enqueue_scripts', 'anxiousstoic_script_enqueue');
