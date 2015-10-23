<?php

return array(
	'action_permissions'=> array(
	    'delete' => function($model)
	    {
	        return Auth::user()->can('delete_users');
	    },
	    'create' => function($model)
	    {
	        return Auth::user()->can('create_users');
	    },
	    'update' => function($model)
	    {
	        return Auth::user()->can('edit_users');
	    }
	),
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Users',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'user',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'User',
	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'username' => array(
	        'title' => 'Username'
	    ),
	    'email' => array(
	        'title' => 'Email'
	    ),
	    'confirmed' => array(
	        'title' => 'Confirmed'
	    ),
	    'created_at' => array(
	        'title' => 'Created At'
	    ),
	    'updated_at' => array(
	        'title' => 'Updated At'
	    ),
	),
	'edit_fields' => array(
	    'username' => array(
	        'title' => 'Username',
	        'type' => 'text'
	    ),
	    'email' => array(
	        'title' => 'Email',
	        'type' => 'text'
	    ),
	    'password' => array(
	        'title' => 'Password',
	        'type' => 'password'
	    ),
	    'confirmed' => array(
	        'title' => 'Confirmed',
	        'type' => 'bool'
	    )
	),
	/**
	 * The filter fields
	 *
	 * @type array
	 */
	'filters' => array(
	    'id',
	    'username' => array(
	        'title' => 'username',
	    ),
	    'email' => array(
	        'title' => 'Email',
	        'type' => 'text'
	    ),
	    'created_at' => array(
	        'title' => 'Date',
	        'type' => 'date'
	    ),
	    'updated_at' => array(
	        'title' => 'Date',
	        'type' => 'date'
	    )
	),
);