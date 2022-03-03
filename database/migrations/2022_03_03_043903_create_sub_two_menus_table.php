<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubTwoMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_two_menus', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sub_one_menu_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('sub_one_menu_id')
                ->references('id')
                ->on('sub_one_menus')
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
        Schema::dropIfExists('sub_two_menus');
    }
}
