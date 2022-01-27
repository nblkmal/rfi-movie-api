<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('directors')->insert([
            [
                'id' => 1,
                'name' => 'Jason Murphill',
            ],
            [
                'id' => 2,
                'name' => 'Thomas Shelby',
            ],
            [
                'id' => 3,
                'name' => 'Adam Warlock',
            ],
        ]);
    }
}
