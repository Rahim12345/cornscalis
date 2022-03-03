<?php

namespace Database\Seeders;

use App\Models\MainMenu;
use Illuminate\Database\Seeder;

class MainMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            MainMenu::create([
                'name' => 'MainMenu - ' . $i
            ]);
        }
    }
}
