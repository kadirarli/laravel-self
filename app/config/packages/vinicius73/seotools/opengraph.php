<?php

$site_settings = json_decode(file_get_contents(storage_path() . '/administrator_settings/site.json')); 
$fb_admins = array();
if(isset($site_settings->fb_admins)){
	$fb_admins = explode(',', $site_settings->fb_admins);
}
$fb_app_id = '';
if(isset($site_settings->fb_app_id)){
	$fb_app_id = $site_settings->fb_app_id;
}

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
		'site_name'   => 'seotools',
		'fb:admins'   => $fb_admins,
		'fb:app_id'   => $fb_app_id
	)
);
