<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'id' => 1,
                'name' => 'Bahasa Melayu',
            ],
            [
                'id' => 2,
                'name' => 'English',
            ],
            [
                'id' => 3,
                'name' => 'Korean',
            ],
        ]);
    }
}
