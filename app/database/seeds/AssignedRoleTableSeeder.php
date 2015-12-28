<?php

class AssignedRoleTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('assigned_roles')->insert(array(
		    array('user_id' => '1', 'role_id' => '1'),
			array('user_id' => '2', 'role_id' => '2')
		));
    }
}
