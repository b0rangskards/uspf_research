<?php 

class UsersTableSeeder extends MasterSeeder {

    public function run()
    {
        /* Create admin account */

        User::create([
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'recstat' => 'A'
        ]);
    }

    public function createSlug()
    {
    }
}