<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
//        if(!Schema::hasTable('contents')){
//            Schema::create('contents',function(Blueprint $table){
//                $table->increments('id');
//                $table->integer('user_id')->nullable();
//                $table->integer('category_id')->nullable();
//                $table->string('title');
//                $table->string('thumbnail');
//                $table->string('keywords');
//                $table->string('lead')->nullable();
//                $table->text('description');
//                $table->bigInteger('views')->default(0);
//                $table->bigInteger('likes')->default(0);
//                $table->string('status')->default('draft');
//                $table->softDeletes();
//                $table->timestamps();
//            });
//        }
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
