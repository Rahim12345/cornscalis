<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubOneMenu extends Model
{
    use HasFactory;

    protected $table = 'sub_one_menus';

    protected $fillable = ['main_menu_id','name'];

    public function sub_two_menus()
    {
        return $this->hasMany(SubTwoMenu::class);
    }
}
