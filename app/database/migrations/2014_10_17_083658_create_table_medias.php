<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedias extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (!Schema::hasTable('medias')) {
            Schema::create('medias', function (Blueprint $table) {
                $table->increments('id');
                $table->string('hash');
                $table->string('checksum')->nullable();
                $table->string('type');
                $table->string('path')->nullable();
                $table->string('name')->nullable();
                $table->string('server')->nullable();
                $table->boolean('external');
                $table->string('url')->nullable();
                $table->string('caption');
                $table->string('description');
                $table->string('length');
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
