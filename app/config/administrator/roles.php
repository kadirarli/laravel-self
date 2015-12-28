<?php
return array(
	'action_permissions'=> array(
	    'delete' => function($model){
	        return Auth::user()->can('delete_role');
	    },
	    'create' => function($model){
	        return Auth::user()->can('create_role');
	    },
	    'update' => function($model){
	        return Auth::user()->can('update_role');
	    },
	    // 'view' => function($model){
	    // 	return Auth::user()->can('view_role');
	    // }
	),
	'permission'=> function(){
		return Auth::user()->can('read');
	},
	'title' => 'Roles',
	'single' => 'role',
	'model' => 'Role',
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
	    'permission' => array(
	    	'title' => 'Permission',
	    	'type' => 'relationship',
	    	'name_field' => 'display_name'
	    )
	),
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