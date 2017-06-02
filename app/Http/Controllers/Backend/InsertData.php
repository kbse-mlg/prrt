<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InsertData extends Controller
{
  public function index(){
     return view('frontend.user.insert');
  }
}
