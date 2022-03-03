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
                'name' => 'SubTwoMenu - ' . $i
            ]);
        }
    }
}
