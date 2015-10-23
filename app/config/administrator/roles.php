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
	'title' => 'Roles',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'role',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Role',
	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'name' => array(
	        'title' => 'Name'
	    ),
	    'created_at' => array(
	        'title' => 'Created At'
	    ),
	),
	'edit_fields' => array(
	    'name' => array(
	        'title' => 'Name',
	        'type' => 'text'
	    ),
	),
	/**
	 * The filter fields
	 *
	 * @type array
	 */
	'filters' => array(
	    'id',
	    'name' => array(
	        'title' => 'Name',
	        'type'	=> 'text',
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