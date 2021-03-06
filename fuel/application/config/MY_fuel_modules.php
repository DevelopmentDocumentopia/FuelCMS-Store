<?php 
/*
|--------------------------------------------------------------------------
| MY Custom Modules
|--------------------------------------------------------------------------
|
| Specifies the module controller (key) and the name (value) for fuel
*/


/*********************** EXAMPLE ***********************************

$config['modules']['quotes'] = array(
	'preview_path' => 'about/what-they-say',
);

$config['modules']['projects'] = array(
	'preview_path' => 'showcase/project/{slug}',
	'sanitize_images' => FALSE // to prevent false positives with xss_clean image sanitation
);

*********************** EXAMPLE ***********************************/

$config['modules']['calendar'] = array(
	'preview_path' => 'calendar',
);

$config['modules']['home'] = array();

$config['modules']['invest'] = array();

$config['modules']['services'] = array();

$config['modules']['rates'] = array();

$config['modules']['about'] = array(
	'preview_path' => 'about',
);
