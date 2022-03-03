<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubTwoMenu extends Model
{
    use HasFactory;

    protected $table = 'sub_two_menus';

    protected $fillable = ['sub_one_menu_id','name'];
}
