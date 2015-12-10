<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqFaqCategoriesTable extends Migration {

	public function up()
	{
		Schema::create('faq_faq_categories', function(Blueprint $table) {
			$table->integer('faq_id')->unsigned();
			$table->integer('faq_category_id')->unsigned();
			$table->timestamps();

			$table->foreign('faq_id')->references('faq_id')->on('faqs')
						->onDelete('cascade')
						->onUpdate('cascade');
			$table->foreign('faq_category_id')->references('faq_category_id')->on('faq_categories')
						->onDelete('cascade')
						->onUpdate('cascade');

		});
	}

	public function down()
	{
		Schema::drop('faq_faq_categories');
	}
}