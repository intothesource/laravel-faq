<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFaqsTable extends Migration {

	public function up()
	{
		Schema::create('faqs', function(Blueprint $table) {
			$table->increments('faq_id');
			$table->integer('order');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('faqs');
	}
}