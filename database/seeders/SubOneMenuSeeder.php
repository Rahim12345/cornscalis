<?php

namespace Database\Seeders;

use App\Models\MainMenu;
use App\Models\SubOneMenu;
use Illuminate\Database\Seeder;

class SubOneMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) {
            SubOneMenu::create([
                'main_menu_id' => MainMenu::all()->random()->id,
                'name_az' => 'SubOneMenu_az - ' . $i,
                'name_en' => 'SubOneMenu_en - ' . $i,
                'name_ru' => 'SubOneMenu_ru - ' . $i,
                'slug_az' => str_slug('SubOneMenu_az - ' . $i),
                'slug_en' => str_slug('SubOneMenu_en - ' . $i),
                'slug_ru' => str_slug('SubOneMenu_ru - ' . $i)
            ]);
        }
    }
}
