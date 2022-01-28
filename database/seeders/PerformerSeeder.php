<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerformerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('performers')->insert([
            [
                'id' => 1,
                'name' => 'Jason Statham',
            ],
            [
                'id' => 2,
                'name' => 'Robert Downey JR',
            ],
            [
                'id' => 3,
                'name' => 'Aqil Tan',
            ],
        ]);
    }
}
