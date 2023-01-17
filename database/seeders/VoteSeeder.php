<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class VoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('votes')->insert([
            'poll_id' => 1,
            'option_id' => 1,
            'user_id' => 2
        ]);

        DB::table('votes')->insert([
            'poll_id' => 3,
            'option_id' => 1,
            'user_id' => 2
        ]);

        DB::table('votes')->insert([
            'poll_id' => 3,
            'option_id' => 9,
            'user_id' => 3
        ]);

        DB::table('votes')->insert([
            'poll_id' => 4,
            'option_id' => 10,
            'user_id' => 2
        ]);

        DB::table('votes')->insert([
            'poll_id' => 4,
            'option_id' => 11,
            'user_id' => 3
        ]);
        
        DB::table('votes')->insert([
            'poll_id' => 6,
            'option_id' => 14,
            'user_id' => 3
        ]);
        
    }
}
