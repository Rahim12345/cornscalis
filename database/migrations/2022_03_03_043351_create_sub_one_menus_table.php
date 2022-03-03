<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubOneMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_one_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('main_menu_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('main_menu_id')
                ->references('id')
                ->on('main_menus')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_one_menus');
    }
}
