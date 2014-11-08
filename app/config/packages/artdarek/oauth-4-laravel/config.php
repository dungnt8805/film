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
            'client_id'     => '722963311086788',
            'client_secret' => 'cfae4600551a3fecaeeefa3ed53241d7',
            'scope' => array('email', 'read_friendlists', 'user_online_presence', 'user_birthday', 'user_about_me', 'user_friends', 'user_hometown', 'user_location', 'user_website', 'user_likes', 'publish_actions'),
        ),		

	)

);