<?php

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        Permission::create(array('name' => 'manage_users', "display_name"  => "Manage Users"));
        Permission::create(array('name' => 'read', "display_name"  => "Read"));
        Permission::create(array('name' => 'manage_site_settings', "display_name"  => "Manage Site Settings"));
    }
}
