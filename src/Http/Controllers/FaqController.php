<?php

namespace IntoTheSource\Faq\Http\Controllers;

/**
 * @package Faq
 * @author David Bikanov <dbikanov@intothesource.com>
 */
use App\Http\Controllers\Controller;
// use IntoTheSource\Faq\Models\Faq;
// use IntoTheSource\Faq\Models\Faq_categories;
use Illuminate\Http\Request;


class FaqController extends Controller
{

    /**
     * Logs user in after checking inserted data.
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     * @author David Bikanov
     */
    public function index(){
            $data = "hoi";
            return redirect()->route('faq.{data}.index');
    }


    
}
