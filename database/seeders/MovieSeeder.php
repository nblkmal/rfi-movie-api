<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            [
                'id' => 1,
                'title' => 'Transformers',
                'description' => 'Lorem ipsum dolor sit amet',
                'mpaa_rating' => 'PG-13',
                'time_start' => '2020-04-04 00:00:00',
                'time_end' => '2020-04-05 00:00:00',
                'd_date' => '2020-04-04',
                'r_date' => '2020-01-01',
                'genre_id' => 1,
                'theater_id' => 1,
                'language_id' => 1,
                'release' => '2020-09-18',
                'length' => '98',
            ],
            [
                'id' => 2,
                'title' => 'Avengers Endgame',
                'description' => 'Lorem ipsum dolor sit amet',
                'mpaa_rating' => 'PG-13',
                'time_start' => '2020-04-04 00:00:00',
                'time_end' => '2020-04-05 00:00:00',
                'd_date' => '2020-04-04',
                'r_date' => '2020-01-01',
                'genre_id' => 2,
                'theater_id' => 2,
                'language_id' => 2,
                'release' => '2020-09-18',
                'length' => '98',
            ],
            [
                'id' => 3,
                'title' => 'Train to busan',
                'description' => 'Lorem ipsum dolor sit amet',
                'mpaa_rating' => 'PG-13',
                'time_start' => '2020-04-04 00:00:00',
                'time_end' => '2020-04-05 00:00:00',
                'd_date' => '2020-04-04',
                'r_date' => '2020-01-01',
                'genre_id' => 3,
                'theater_id' => 3,
                'language_id' => 3,
                'release' => '2020-09-18',
                'length' => '98',
            ],
        ]);
    }
}
