<?php 

class UsersTableSeeder extends MasterSeeder {

    public function run()
    {
        /* Create admin account */

        User::create([
            'username' => 'admin',
            'password' => Hash::make('1234'),
            'email' => 'admin@gmail.com',
            'recstat' => 'A'
        ]);
    }

    public function createSlug()
    {
    }
}