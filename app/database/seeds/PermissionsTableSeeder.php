<?php

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(array('name' => 'read', 					"display_name"  => "Read"));
        Permission::create(array('name' => 'manage_site_settings', 	"display_name"  => "Manage Site Settings"));
        Permission::create(array('name' => 'create_permission', 	"display_name"  => "Create Permission"));
        Permission::create(array('name' => 'update_permission', 	"display_name"  => "Update Permission"));
        Permission::create(array('name' => 'delete_permission', 	"display_name"  => "Delete Permission"));
        Permission::create(array('name' => 'view_permission', 		"display_name"  => "View Permission"));
        Permission::create(array('name' => 'create_role', 			"display_name"  => "Create Role"));
        Permission::create(array('name' => 'update_role', 			"display_name"  => "Update Role"));
        Permission::create(array('name' => 'delete_role', 			"display_name"  => "Delete Role"));
        Permission::create(array('name' => 'view_role', 			"display_name"  => "View Role"));
        Permission::create(array('name' => 'create_user', 			"display_name"  => "Create User"));
        Permission::create(array('name' => 'update_user', 			"display_name"  => "Update User"));
        Permission::create(array('name' => 'delete_user', 			"display_name"  => "Delete User"));
        Permission::create(array('name' => 'view_user', 			"display_name"  => "View User"));

    }
}
