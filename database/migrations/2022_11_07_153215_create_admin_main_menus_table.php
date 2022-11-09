<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminMainMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_main_menus', function (Blueprint $table) {
            $table->id();
            $table->integer('sl');
            $table->string('menu_name');
            $table->string('icon_name');
            $table->integer('status')->comment('0 = inactive & 1 = Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_main_menus');
    }
}
