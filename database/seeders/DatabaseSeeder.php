<?php

namespace Database\Seeders;

use App\Models\MainMenu;
use App\Models\SubOneMenu;
use App\Models\SubTwoMenu;
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
        $this->call([
            MainMenuSeeder::class,
            SubOneMenuSeeder::class,
            SubTwoMenuSeeder::class
        ]);
    }
}
