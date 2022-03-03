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
                'name' => 'SubOneMenu - ' . $i
            ]);
        }
    }
}
