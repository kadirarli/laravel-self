<?php

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        Role::create(array('name' => 'SuperAdmin'));
        Role::create(array('name' => 'Admin'));
    }
}
