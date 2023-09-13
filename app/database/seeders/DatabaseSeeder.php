<?php

namespace Database\Seeders;

use App\Models\Clan;
use App\Models\Knjiga;
use App\Models\Pozajmica;
use Illuminate\Database\Seeder;

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

        Clan::truncate();
        Knjiga::tsruncate();
        Pozajmica::truncate();

        Clan::factory()
            ->count(15)
            ->create();

        Knjiga::factory()
            ->count(15)
            ->create();

        Pozajmica::factory()
            ->count(15)
            ->create();
    }
}
