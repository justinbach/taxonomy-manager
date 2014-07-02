<?php

/**
 * Class UserTableSeeder
 *
 * Seed the users table.
 */
class UserTableSeeder extends \Illuminate\Database\Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'name'      =>  'Justin Bachorik',
            'username'  =>  'jbachorik',
            'email'     =>  'jbachorik@npr.org',
            'password'  =>  Hash::make('password')
        ]);
    }
}