<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            'username' => 'Lat',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('rootadmin'),
        ]);
        DB::table('users')->insert([
            'role_id' => '2',
            'name' => 'Organizer',
            'username' => 'hiba',
            'email' => 'latifa@gmail.com',
            'password' => bcrypt('rootorganizer'),
        ]);
        DB::table('users')->insert([
            'role_id' => '4',
            'name' => 'Guest',
            'username' => 'Ines',
            'email' => 'ines@gmail.com',
            'password' => bcrypt('rootguest'),
        ]);
    }
}
