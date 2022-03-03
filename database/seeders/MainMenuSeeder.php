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
                'name_az' => 'MainMenu_az - ' . $i,
                'name_en' => 'MainMenu_en - ' . $i,
                'name_ru' => 'MainMenu_ru - ' . $i,
                'slug_az' => str_slug('MainMenu_az - ' . $i),
                'slug_en' => str_slug('MainMenu_en - ' . $i),
                'slug_ru' => str_slug('MainMenu_ru - ' . $i)
            ]);
        }
    }
}
