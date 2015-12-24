<?php

$site_settings = json_decode(file_get_contents(storage_path() . '/administrator_settings/site.json')); 
$keywords = explode(',',$site_settings->site_keywords);
return array(

	/*
	|--------------------------------------------------------------------------
	| Default configurations
	|--------------------------------------------------------------------------
	|
	| The default configurations to be used by the meta generator.
	|
	*/

	'defaults' => array(
		'title'       => $site_settings->site_name,
		'description' => $site_settings->site_description,
		'separator'   => ' | ',
		'keywords'    => $keywords,
		'favicon'     => url()."/assets/images/".$site_settings->favicon
	),

);
