<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuLinks extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('menu_links')) {
            Schema::create('menu_links', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('menu_id');
                $table->string('title', 50);
                $table->string('alt');
                $table->string('url');
                $table->string('target');
                $table->string('showon');
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }

}
