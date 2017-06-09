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



  public function insertBuilding(Request $request){
    $validate = \Validator::make($request->all(),[
            'nama'      =>  'required',
            'jenis'     =>  'required',
            'alamat'    =>  'required',
            'latitude'  =>  'required',
            'longitude' =>  'required'
    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>  'Something wrong',
            'text2' =>  'Please Try Again'
    ]);
    
    // if($validate->fails()){
    //   return redirect()->back()->with('after_save',$after_save);
    // }

    $after_save = [
            'alert'   => 'success',
            'title'   => 'God Job!',
            'text1'  => 'Tambah lagi',
            'text2'  => 'Atau kembali.'
        ];

    $insert = [
            'nama_bangunan'      =>  $request->nama,
            'jenis'              =>  $request->jenis,
            'alamat'             =>  $request->alamat,
            'latitude'           =>  $request->latitude,
            'longitude'          =>  $request->longitude

    ];

    DB::table('Building')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);
  }

  public function insertFacility(){

  }


  
  
  public function insertPenduduk(){

  }

  
  
  public function insertRumah(){
    //To Do, inserting data rumah

  }

  
}
