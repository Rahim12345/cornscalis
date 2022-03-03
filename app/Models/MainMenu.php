<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainMenu extends Model
{
    use HasFactory;

    protected $table = 'main_menus';

    protected $fillable = ['name'];

    public function sub_one_menus()
    {
        return $this->hasMany(SubOneMenu::class);
    }
}
