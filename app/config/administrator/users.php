<?php
return array(
	'action_permissions'=> array(
	    'delete' => function($model){
	        return Auth::user()->can('delete_user');
	    },
	    'create' => function($model){
	        return Auth::user()->can('create_user');
	    },
	    'update' => function($model){
	        return Auth::user()->can('edit_user');
	    },
	    'view' => function($model){
	    	return Auth::user()->can('view_user');
	    }
	),
	'permission'=> function(){
		return Auth::user()->can('read');
	},
	'title' => Lang::get('tags.users'),
	'single' => Lang::get('tags.user'),
	'model' => 'User',
	'columns' => array(
	    'username' => array(
	        'title' => Lang::get('tags.username')
	    ),
	    'email' => array(
	        'title' => Lang::get('tags.email')
	    ),
	    'confirmed' => array(
	        'title' => Lang::get('tags.confirmed')
	    ),
	    'created_at' => array(
	        'title' => Lang::get('tags.created_at')
	    ),
	    'updated_at' => array(
	        'title' => Lang::get('tags.updated_at')
	    ),
	),
	'edit_fields' => array(
	    'username' => array(
	        'title' => Lang::get('tags.username'),
	        'type' => 'text'
	    ),
	    'email' => array(
	        'title' => Lang::get('tags.email'),
	        'type' => 'text'
	    ),
	    'confirmed' => array(
	        'title' => Lang::get('tags.confirmed'),
	        'type' => 'bool'
	    ),
	    'role' => array(
	    	'title' => ucfirst(Lang::get('tags.role')),
	    	'type' => 'relationship',
	    	'name_field' => 'name'
	    )
	),
	'filters' => array(
	    'id',
	    'username' => array(
	        'title' => Lang::get('tags.username'),
	    ),
	    'email' => array(
	        'title' => Lang::get('tags.email'),
	        'type' => 'text'
	    ),
	    'created_at' => array(
	        'title' => Lang::get('tags.created_at'),
	        'type' => 'date'
	    ),
	    'updated_at' => array(
	        'title' => Lang::get('tags.updated_at'),
	        'type' => 'date'
	    )
	),
);