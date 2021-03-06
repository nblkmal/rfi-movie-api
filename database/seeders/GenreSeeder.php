<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert([
            [
                'id' => 1,
                'name' => 'Horror',
            ],
            [
                'id' => 2,
                'name' => 'Romance',
            ],
            [
                'id' => 3,
                'name' => 'Action',
            ],
        ]);
    }
}
