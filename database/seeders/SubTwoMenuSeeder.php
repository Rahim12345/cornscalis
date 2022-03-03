<?php

namespace Database\Seeders;

use App\Models\SubOneMenu;
use App\Models\SubTwoMenu;
use Illuminate\Database\Seeder;

class SubTwoMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            SubTwoMenu::create([
                'sub_one_menu_id' => SubOneMenu::all()->random()->id,
                'name_az' => 'SubTwoMenu_az - ' . $i,
                'name_en' => 'SubTwoMenu_en - ' . $i,
                'name_ru' => 'SubTwoMenu_ru - ' . $i,
                'slug_az' => str_slug('SubTwoMenu_az - ' . $i),
                'slug_en' => str_slug('SubTwoMenu_en - ' . $i),
                'slug_ru' => str_slug('SubTwoMenu_ru - ' . $i)
            ]);
        }
    }
}
