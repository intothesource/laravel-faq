<?php

namespace IntoTheSource\Faq\Models;

use Illuminate\Database\Eloquent\Model;

class Faq_i18n extends Model {

	protected $table = 'faq_i18ns';
	public $timestamps = true;

	public function faqs()
	{
		return $this->belongsTo('Faq');
	}

}
