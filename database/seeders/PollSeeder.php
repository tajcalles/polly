<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PollSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('polls')->insert([
            'name' => 'Who is the best superhero?',
            'description' => null,
            'created_by' => 2, // Test User #1's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-23 0:00',
            'status' => 'STARTED'
        ]);

        DB::table('polls')->insert([
            'name' => 'Favorite Italian food?',
            'description' => null,
            'created_by' => 2, // Test User #1's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-23 0:00',
            'status' => 'STARTED'
        ]);
       
        DB::table('polls')->insert([
            'name' => 'Who will win the world cup?',
            'description' => null,
            'created_by' => 2, // Test User #1's ID
            'start_date' => '2022-12-17 0:00',
            'finish_date' => '2022-12-18 0:00',
            'status' => 'FINISHED'
        ]);
       
        DB::table('polls')->insert([
            'name' => 'Who will win the 2024 Election?',
            'description' => null,
            'created_by' => 2, // Test User #1's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-31 0:00',
            'status' => 'STARTED'
        ]);

        DB::table('polls')->insert([
            'name' => 'Funniest Actor?',
            'description' => null,
            'created_by' => 3, // Test User #2's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-31 0:00',
            'status' => 'STARTED'
        ]);

        DB::table('polls')->insert([
            'name' => 'Who will win this AFC Divisional matchup?',
            'description' => null,
            'created_by' => 2, // Test User #1's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-31 0:00',
            'status' => 'STARTED'
        ]);

        DB::table('polls')->insert([
            'name' => 'Who will win this NFC Divisional matchup?',
            'description' => null,
            'created_by' => 3, // Test User #2's ID
            'start_date' => '2023-01-16 0:00',
            'finish_date' => '2023-01-31 0:00',
            'status' => 'STARTED'
        ]);

        DB::table('polls')->insert([
            'name' => "What color should I wear to my sister's wedding?",
            'description' => null,
            'created_by' => 3, // Test User #2's ID
            'start_date' => '2023-01-19 0:00',
            'finish_date' => '2023-02-05 0:00',
            'status' => 'PENDING'
        ]);
    }
}
