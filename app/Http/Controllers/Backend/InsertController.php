<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use View;
class InsertController extends Controller
{
  public function index(){
        $user = DB::table('building')->get();

        return view('backend.insertindex', ['user' => $user]);
  }



  public function add(){
    return view('backend.insert');
  }



  public function insertBuilding(Request $request){
    
    $validate = \Validator::make($request->all(),[
            'nama_bangun'      =>  'required',
            'jenis'            =>  'required',
            'alamat'           =>  'required',
            'latitude'         =>  'required',
            'longitude'        =>  'required'
    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>  $request->get('nama_bangun'),
            'text2' =>  'Please Try Again'
    ]);
    
    if($validate->fails()){
      return redirect()->back()->with('after_save',$after_save);
    }

    $after_save = [
            'alert'   => 'success',
            'title'   => 'God Job!',
            'text1'   => 'Tambah lagi',
            'text2'   => 'Atau kembali.'
        ];

    $insert = [
            'nama_bangun'        =>  $request->nama_bangun,
            'jenis'              =>  $request->jenis,
            'alamat'             =>  $request->alamat,
            'latitude'           =>  $request->latitude,
            'longitude'          =>  $request->longitude,
            'geojson'            => '0'

    ];

    DB::table('building')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);
  }
  public function buildingFacility($id){
    $data = DB::table('building')->where('id',$id)->get();
    return View::make('backend.InsertFacility')->with('data',$data);
  }

  public function insertFacility(Request $request){
    
  }


  
  
  public function insertPenduduk(){

  }

  
  
  public function insertRumah(){
    //To Do, inserting data rumah

  }

  public function rumahIndex(){

    return view('backend.Maklumat_Rumah.index');
  }


  public function addFacility(){
    //Add Building Facility
    return view('backend.InsertFacility'); 
  }

  public function pendudukIndex(){
    
    return view('backend.penduduk.edit');
  }

  
}
