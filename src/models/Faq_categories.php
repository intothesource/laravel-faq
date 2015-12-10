<?php

namespace IntoTheSource\Faq\Models;

use Illuminate\Database\Eloquent\Model;

class Faq_categories extends Model {

	protected $table = 'faq_categories';
	public $timestamps = true;

	public function faq()
	{
		return $this->hasMany('Faq', 'faq_faq_categories');
	}

}