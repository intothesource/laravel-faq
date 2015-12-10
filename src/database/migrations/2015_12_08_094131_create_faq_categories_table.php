<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('faq_categories', function(Blueprint $table) {
			$table->increments('faq_category_id');
			$table->string('name', 255);
			$table->integer('order');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('faq_categories');
	}
}