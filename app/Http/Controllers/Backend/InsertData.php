<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class InsertData extends Controller
{
  public function index(){
        $user = DB::table('users')->paginate(15);

        return view('backend.insertindex', ['user' => $user]);
  }
  public function add(){
    return view('backend.insert');
  }
}
