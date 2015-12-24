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
        $user->username     = 'useradmin';
        $user->email        = 'useradmin@useradmin.com';
        $user->password     = 'useradmin';
        $user->password_confirmation = 'useradmin';
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

        // $faker = Faker::create();

        // foreach(range(1, 50) as $index)
        // {
        //     $user = new User;
        //     $user->username     = $faker->userName()  . $index;
        //     $user->email        = $faker->email() . $index;
        //     $user->display_name = $user->username;
        //     $user->confirmed    = true;
        //     $user->password     = 'admin';
        //     $user->password_confirmation = 'admin';
        //     $user->confirmation_code = md5(uniqid(mt_rand(), true));

        //     if(! $user->save()) {
        //       Log::info('Unable to create user '.$user->username, (array)$user->errors());
        //     } else {
        //       Log::info('Created user "'.$user->username.'" <'.$user->email.'>');
        //     }
        // }
    }
}
