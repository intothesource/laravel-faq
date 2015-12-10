<?php

namespace IntoTheSource\Faq\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model {

    protected $table = 'faqs';
    public $timestamps = true;

    public function faq_categories()
    {
        return $this->belongsToMany('Faq_categories', 'faq_faq_categories');
    }

    public function faq_i18ns()
    {
        return $this->hasMany('Faq_i18n');
    }

}