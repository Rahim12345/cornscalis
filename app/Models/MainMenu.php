<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    use HasFactory;

    protected $table = 'main_menus';

    protected $fillable = [
        'name_az',
        'name_en',
        'name_ru',
        'slug_az',
        'slug_en',
        'slug_ru'
    ];

    public function sub_one_menus()
    {
        return $this->hasMany(SubOneMenu::class);
    }
}
