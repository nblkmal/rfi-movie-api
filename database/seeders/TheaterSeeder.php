<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TheaterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('theaters')->insert([
            [
                'id' => 1,
                'name' => 'GSC',
            ],
            [
                'id' => 2,
                'name' => 'TGV',
            ],
            [
                'id' => 3,
                'name' => 'MBO',
            ],
        ]);
    }
}
