<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class loginController extends Controller
{
  public function view_login(){
  	return view("frontend/view_login");
  }
}
