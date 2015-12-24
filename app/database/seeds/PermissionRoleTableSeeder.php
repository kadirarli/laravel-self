<?php

class PermissionRoleTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('permission_role')->insert(array(
		    array('permission_id' => '1', 'role_id' => '1'),
			array('permission_id' => '2', 'role_id' => '1'),
			array('permission_id' => '3', 'role_id' => '1'),
			array('permission_id' => '1', 'role_id' => '2'),
			array('permission_id' => '2', 'role_id' => '2'),
			array('permission_id' => '2', 'role_id' => '3')
		));
    }
}
