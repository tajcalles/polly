<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('options')->insert([
            'poll_id' => 1,
            'content' => 'Superman',
            'votes_count' => 1
        ]);

        DB::table('options')->insert([
            'poll_id' => 1,
            'content' => 'Batman',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 1,
            'content' => 'Spiderman',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 1,
            'content' => 'Antman',
            'votes_count' => 0
        ]);
       
        
        DB::table('options')->insert([
            'poll_id' => 2,
            'content' => 'Spaghetti & Meatballs',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 2,
            'content' => 'Fettucine Alfredo',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 2,
            'content' => 'Pizza',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 2,
            'content' => 'Lasagna',
            'votes_count' => 0
        ]);


        DB::table('options')->insert([
            'poll_id' => 3,
            'content' => 'Argentina',
            'votes_count' => 1
        ]);
        
        DB::table('options')->insert([
            'poll_id' => 3,
            'content' => 'France',
            'votes_count' => 1
        ]);


        DB::table('options')->insert([
            'poll_id' => 4,
            'content' => 'Donald Trump',
            'votes_count' => 1
        ]);

        DB::table('options')->insert([
            'poll_id' => 4,
            'content' => 'Joseph Biden',
            'votes_count' => 1
        ]);
        
        DB::table('options')->insert([
            'poll_id' => 5,
            'content' => 'Seth Rogen',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 5,
            'content' => 'Adam Sandler',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 6,
            'content' => 'Cincinnati Bengals',
            'votes_count' => 1
        ]);

        DB::table('options')->insert([
            'poll_id' => 6,
            'content' => 'Buffalo Bills',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 7,
            'content' => 'Tampa Bay Buccanneers',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 7,
            'content' => 'Dallas Cowboys',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 8,
            'content' => 'Black',
            'votes_count' => 0
        ]);

        DB::table('options')->insert([
            'poll_id' => 8,
            'content' => 'White',
            'votes_count' => 0
        ]);

    }
}
