<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\RateSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\GenreSeeder;
use Database\Seeders\MovieSeeder;
use Database\Seeders\TheaterSeeder;
use Database\Seeders\DirectorSeeder;
use Database\Seeders\LanguageSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            UserSeeder::class,
            GenreSeeder::class,
            DirectorSeeder::class,
            LanguageSeeder::class,
            PerformerSeeder::class,
            TheaterSeeder::class,
            MovieSeeder::class,
            RateSeeder::class,
        ]);
    }
}
