<?php

$site_settings = json_decode(file_get_contents(storage_path() . '/administrator_settings/site.json')); 

return array(
	'defaults' => array(
		/**
		 * default title and description
		 * Can be null|string|seotools
		 * If 'seotools' the title will be awarded by MetaGenerator->getTitle()
		 */
		'title'       => 'seotools',
		'description' => 'seotools',
		/**
		 * default url
		 * Can be null|string|url
		 * If 'url' the title will be awarded by Input::url()
		 */
		'url'         => null,
		'type'        => false,
		'image'       => array(),
		'site_name'   => false
	)
);
