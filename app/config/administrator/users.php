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
	'title' => 'Users',
	'single' => 'user',
	'model' => 'User',
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
	    ),
	    'role' => array(
	    	'title' => 'Role',
	    	'type' => 'relationship',
	    	'name_field' => 'name'
	    )
	),
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