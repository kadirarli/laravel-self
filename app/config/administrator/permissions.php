<?php
return array(
	'action_permissions'=> array(
	    'delete' => function($model){
	        return Auth::user()->can('delete_permission');
	    },
	    'create' => function($model){
	        return Auth::user()->can('create_permission');
	    },
	    'update' => function($model){
	        return Auth::user()->can('update_permission');
	    },
	    'view' => function($model){
	    	return Auth::user()->can('view_permission');
	    }
	),
	'permission'=> function(){
		return Auth::user()->can('read');
	},
	'title' => 'Permissions',
	'single' => 'permission',
	'model' => 'Permission',
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