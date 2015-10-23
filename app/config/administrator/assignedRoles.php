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
	'title' => 'Assigned Roles',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'assignedRole',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'AssignedRole',
	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'users' => array(
	        'title' => 'User',
	        'relationship' => 'users',
	        'select' => "(:table).username",
	    ),
	    'roles' => array(
	        'title' => 'Role',
	        'relationship' => 'roles',
	        'select' => "(:table).name",
	    ),
	),
	'edit_fields' => array(
	    'users' => array(
	        'title' => 'User Name',
	        'type' => 'relationship',
	        'name_field' => 'username',
	    ),
	    'roles' => array(
	        'title' => 'Role',
	        'type' => 'relationship',
			'name_field' => 'name',
	    ),
	),
);