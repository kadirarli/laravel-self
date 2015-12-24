<?php

class DatabaseSeeder extends Seeder {

	/**
     * @var array
     */
    protected $tables = [
        'roles',
        'permissions',
        'permission_role',
        'users',
        'assigned_roles'
    ];

    /**
     * @var array
     */
    protected $seeders = [
        'RolesTableSeeder',
        'PermissionsTableSeeder',
        'PermissionRoleTableSeeder',
        'UsersTableSeeder',
        'AssignedRoleTableSeeder'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        $this->cleanDatabase();

        foreach($this->seeders as $seedClass)
        {
            $this->call($seedClass);
        }
    }

    /**
     * Clean out the database
     */
    public function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        foreach($this->tables as $table)
        {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
