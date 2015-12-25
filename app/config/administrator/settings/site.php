<?php
/**
 * The main site settings page
 */
return array(
	/**
	 * Settings page title
	 *
	 * @type string
	 */
	'title' => 'Site Settings',
	/**
	 * The edit fields array
	 *
	 * @type array
	 */
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
	/**
	 * The validation rules for the form, based on the Laravel validation class
	 *
	 * @type array
	 */
	'rules' => array(
		'site_name' => 'required|max:50',
		'site_description' => 'required|max:150',
		'site_keywords' => 'required',
		'page_cache_lifetime' => 'required|integer',
		'favicon' => 'required',
	),
	/**
	 * This is run prior to saving the JSON form data
	 *
	 * @type function
	 * @param array		$data
	 *
	 * @return string (on error) / void (otherwise)
	 */
	'before_save' => function(&$data)
	{
		
	},
	/**
	 * The permission option is an authentication check that lets you define a closure that should return true if the current user
	 * is allowed to view this settings page. Any "falsey" response will result in a 404.
	 *
	 * @type closure
	 */
	'permission'=> function()
	{
		return true;
		//return Auth::user()->hasRole('developer');
	},
	/**
	 * This is where you can define the settings page's custom actions
	 */
	'actions' => array(
		//Ordering an item up
		'clear_page_cache' => array(
			'title' => 'Clear Page Cache',
			'messages' => array(
				'active' => 'Clearing cache...',
				'success' => 'Page Cache Cleared',
				'error' => 'There was an error while clearing the page cache',
			),
			//the settings data is passed to the closure and saved if a truthy response is returned
			'action' => function(&$data)
			{
				Cache::forget('pages');
				return true;
			}
		),
	),
);