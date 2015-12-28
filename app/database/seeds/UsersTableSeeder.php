<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $user = new User;
        $user->username     = 'superadmin';
        $user->email        = 'superadmin@superadmin.com';
        $user->password     = 'superadmin';
        $user->password_confirmation = 'superadmin';
        $user->confirmed    = 1;
        $user->profile_photo = $faker->imageUrl($width = 198, $height = 198);
        $fullname = explode(" ", $faker->name);
        $surname = last($fullname);        
        unset($fullname[count($fullname)-1]);
        $name = implode(" ", $fullname);
        $user->name = $name;
        $user->surname = $surname;
        $user->save();

        $user = new User;
        $user->username     = 'admin';
        $user->email        = 'admin@admin.com';
        $user->password     = 'admin';
        $user->password_confirmation = 'admin';
        $user->confirmed    = 1;
        $user->profile_photo = $faker->imageUrl($width = 198, $height = 198);
        $fullname = explode(" ", $faker->name);
        $surname = last($fullname);        
        unset($fullname[count($fullname)-1]);
        $name = implode(" ", $fullname);
        $user->name = $name;
        $user->surname = $surname;
        $user->save();
    }
}
