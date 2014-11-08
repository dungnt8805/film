<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableContentsCategories extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
        if(!Schema::hasTable('contents_categories')){
            Schema::create('contents_categories',function(Blueprint $table){
                $table->increments('id');
                $table->integer('content_id');
                $table->integer('category_id');
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
