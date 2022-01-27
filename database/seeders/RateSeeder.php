<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rates')->insert([
            [
                'id' => 1,
                'value' => '90',
                'description' => 'Lorem ipsum dolor sit amet',
                'movie_id' => 1,
                'user_id' => 1,
            ],
            [
                'id' => 2,
                'value' => '80',
                'description' => 'Lorem ipsum dolor sit amet',
                'movie_id' => 2,
                'user_id' => 1,
            ],
            [
                'id' => 3,
                'value' => '85',
                'description' => 'Lorem ipsum dolor sit amet',
                'movie_id' => 3,
                'user_id' => 1,
            ],
        ]);
    }
}
