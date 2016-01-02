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
	'title' => Lang::get('tags.permissions'),
	'single' => Lang::get('tags.permission'),
	'model' => 'Permission',
	'columns' => array(
	    'name' => array(
	        'title' => Lang::get('tags.name')
	    ),
	    'display_name' => array(
	        'title' => Lang::get('tags.display_name')
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
	    'display_name' => array(
	        'title' => Lang::get('tags.display_name'),
	        'type' => 'text'
	    )
	), 
	'filters' => array(
	    'id',
	    'name' => array(
	        'title' => Lang::get('tags.name'),
	    ),
	    'display_name' => array(
	        'title' => Lang::get('tags.display_name'),
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