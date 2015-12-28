<?php
return array(

	'permission'=> function(){
		return Auth::user()->can('manage_site_settings');
	},
	'title' => 'Site Settings',
	'edit_fields' => array(
		'site_name' => array(
			'title' => 'General Site Title',
			'type' => 'text',
			'limit' => 50,
		),
		'site_description' => array(
			'title' => 'Site Description',
			'type' => 'textarea',
			'limit' => 150,
		),
		'site_keywords' => array(
			'title' => 'Site Keywords',
			'type' => 'textarea',
			'limit' => 200,
		),
		'fb_app_id' => array(
			'title' => 'Facebook App Id',
			'type' => 'text'
		),
		'fb_admins' => array(
			'title' => 'Facebook Admins',
			'type' => 'textarea'
		),
		'page_cache_lifetime' => array(
			'title' => 'Page Cache Lifetime (in minutes)',
			'type' => 'number',
		),
		'favicon' => array(
			'title' => 'Favicon Image (200 x 150)',
			'type' => 'image',
			'naming' => 'random',
			'location' => public_path()."/assets/images/",
			'size_limit' => 2,
			'sizes' => array(
		 		array(200, 150, 'crop', public_path() . '/resize/', 100),
		 	)
		),
	),
	'rules' => array(
		'site_name' => 'required|max:50',
		'site_description' => 'required|max:150',
		'site_keywords' => 'required',
		'page_cache_lifetime' => 'required|integer',
		'favicon' => 'required',
	),
	'before_save' => function(&$data){
	},
	'actions' => array(
		'clear_page_cache' => array(
			'title' => 'Clear Page Cache',
			'messages' => array(
				'active' => 'Clearing cache...',
				'success' => 'Page Cache Cleared',
				'error' => 'There was an error while clearing the page cache',
			),
			'action' => function(&$data){
				Cache::forget('pages');
				return true;
			}
		),
	),
);