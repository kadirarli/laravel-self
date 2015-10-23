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