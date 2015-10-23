<?php

return array(
	'permission'=> function()
	{
		if(User::where('username','=',Auth::user()->username)->first()->can("read")){
			return true;	
		}
		else{
			return false;
		}
	},
	/**
	 * Model title
	 *
	 * @type string
	 */
	'title' => 'Permissions',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'permission',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'Permission',
	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'name' => array(
	        'title' => 'Name'
	    ),
	    'display_name' => array(
	        'title' => 'Display Name'
	    ),
	    'created_at' => array(
	        'title' => 'Created At'
	    ),
	    'updated_at' => array(
	        'title' => 'Updated At'
	    ),
	),
	'edit_fields' => array(
	    'name' => array(
	        'title' => 'Name',
	        'type' => 'text'
	    ),
	    'display_name' => array(
	        'title' => 'Display Name',
	        'type' => 'text'
	    )
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
	    ),
	    'display_name' => array(
	        'title' => 'Display Name',
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