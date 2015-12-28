<?php 

return array( 
	
	/*
	|--------------------------------------------------------------------------
	| oAuth Config
	|--------------------------------------------------------------------------
	*/

	/**
	 * Storage
	 */
	'storage' => 'Session', 

	/**
	 * Consumers
	 */
	'consumers' => array(

		/**
		 * Facebook
		 */
        'Facebook' => array(
            'client_id'     => '1099024203609843',
            'client_secret' => 'a6037a243ff2aa4ed66733446e44b40d',
            'scope'         => array('email','public_profile','user_friends'),
        ),		

	)

);