<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqI18nsTable extends Migration {

	public function up()
	{
		Schema::create('faq_i18ns', function(Blueprint $table) {
			$table->increments('i18n_id');
			$table->integer('faq_id')->unsigned();
			$table->string('locale', 255)->index();
			$table->text('question')->nullable();
			$table->text('answer')->nullable();
			$table->timestamps();


			$table->foreign('faq_id')->references('faq_id')->on('faqs')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::drop('faq_i18ns');
	}
}