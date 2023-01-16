<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'cardinal_admin@mail.mail',
            'password' => '$2y$10$tV/djpdEHfyjhpqCg7uQ.urnh9N4/ks8W4aHUzT5Y10Vzz1fSZj/G'
        ]);

        DB::table('users')->insert([
            'name' => 'John Cardinal',
            'email' => 'test_user1@mail.mail',
            'password' => '$2y$10$tV/djpdEHfyjhpqCg7uQ.urnh9N4/ks8W4aHUzT5Y10Vzz1fSZj/G'
        ]);
        
        DB::table('users')->insert([
            'name' => 'Jane Cardinale',
            'email' => 'test_user2@mail.mail',
            'password' => '$2y$10$tV/djpdEHfyjhpqCg7uQ.urnh9N4/ks8W4aHUzT5Y10Vzz1fSZj/G'
        ]);
    }
}
