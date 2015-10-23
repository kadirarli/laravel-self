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
	'title' => 'Permission Roles',
	/**
	 * The singular name of your model
	 *
	 * @type string
	 */
	'single' => 'permissionRole',
	/**
	 * The class name of the Eloquent model that this config represents
	 *
	 * @type string
	 */
	'model' => 'PermissionRole',
	/**
	 * The columns array
	 *
	 * @type array
	 */
	'columns' => array(
	    'roles' => array(
	        'title' => 'Role',
	        'relationship' => 'roles',
	        'select' => "(:table).name",
	    ),
	    'permissions' => array(
	        'title' => 'Permission',
	        'relationship' => 'permissions',
	        'select' => "(:table).display_name",
	    ),
	),
	'edit_fields' => array(
	    'roles' => array(
	        'title' => 'Role Name',
	        'type' => 'relationship',
	        'name_field' => 'name',
	    ),
	    'permissions' => array(
	        'title' => 'Permission Name',
	        'type' => 'relationship',
			'name_field' => 'name',
	    ),
	),
);