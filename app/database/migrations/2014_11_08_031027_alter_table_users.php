<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableUsers extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        Schema::table('users',function(Blueprint $table){
            $table->string('avatar')->after('username')->nullable();
            $table->string('middle_name',50)->after('first_name')->nullable();
            $table->string('fb_id')->nullable();
            $table->string('birth_day',2)->nullable();
            $table->string('birth_month',2)->nullable();
            $table->string('birth_year',4)->nullable();


        });
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
