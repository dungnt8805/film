<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Categories extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('categories')) {
            Schema::create('categories', function (Blueprint $table) {
                $table->increments('id');
                $table->integer('parent_id')->default(0);
                $table->string('title');
                $table->string('keywords')->nullable();
                $table->string('lead')->nullable();
                $table->string('description')->nullable();
                $table->time('showon_homepage')->nullable();
                $table->time('showon_menu')->nullable();
                $table->string('position')->nullable();
                $table->string('status')->default('actived');
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
