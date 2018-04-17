<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class faqController extends Controller
{
    public function faq(){
    	return view("frontend/faq");
    }
}
