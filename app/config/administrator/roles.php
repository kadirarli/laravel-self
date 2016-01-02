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
	'title' => Lang::get('tags.roles'),
	'single' => Lang::get('tags.role'),
	'model' => 'Role',
	'columns' => array(
	    'name' => array(
	        'title' => Lang::get('tags.name')
	    ),
	    'created_at' => array(
	        'title' => Lang::get('tags.created_at')
	    ),
	    'updated_at' => array(
	        'title' => Lang::get('tags.updated_at')
	    ),
	),
	'edit_fields' => array(
	    'name' => array(
	        'title' => Lang::get('tags.name'),
	        'type' => 'text'
	    ),
	    'permission' => array(
	    	'title' => ucfirst(Lang::get('tags.permission')),
	    	'type' => 'relationship',
	    	'name_field' => 'display_name'
	    )
	),
	'filters' => array(
	    'id',
	    'name' => array(
	        'title' => Lang::get('tags.name'),
	        'type'	=> 'text',
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