<?php

namespace App\Http\Controllers\front_end;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
  public function home(){
    return view('frontend.index');
  }
}
