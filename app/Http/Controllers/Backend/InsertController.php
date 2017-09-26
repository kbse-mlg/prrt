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

        return response()->json(["data"=> $user]);
  }



  public function add(){
    return view('backend.insert');
  }



  public function insertBuilding(Request $request){

    $validate = \Validator::make($request->all(),[
            'nama'      =>  'required',
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
            'nama'               =>  $request->nama,
            'jenis'              =>  $request->jenis,
            'alamat'             =>  $request->alamat,
            'latitude'           =>  $request->latitude,
            'longitude'          =>  $request->longitude,
            'parlimen'           =>  $request->parlimen,
            'dun'                =>  $request->dun,
            'negeri'             =>  $request->negeri,
            'geojson'            => '0'

    ];

    DB::table('building')->insert($insert);
    return redirect('/manage');
    // return redirect()->back()->with('after_save',$after_save);
  }

  public function buildingFacility($id){
    $data = DB::table('building')->where('id',$id)->get();
    return View::make('backend.InsertFacility')->with('data',$data);
  }

  public function insertFacility(Request $request){
    $validate = \Validator::make($request->all(),[
            'nama'                =>  'required',

            'condition'           =>  'required',
            'year'                =>  'required',
            'harga'               =>  'required'
    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>   $request->condition,
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
            'id_building'        =>  $request->id_building,
            'Nama'               =>  $request->nama,

            'condition'          =>  $request->condition,
            'tahun'              =>  $request->year,
            'harga'              =>  $request->harga
    ];

    DB::table('facility')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);
  }




  public function insertPenduduk($id){
    $user = DB::table('rumah')->where('id_building',$id)->get();
    return view('backend.penduduk.insert',["user"=>$user]);
  }

  public function newPenduduk(Request $request){
     $validate = \Validator::make($request->all(),[
            'no_ic'      => 'required',
            'nama'       => 'required',
            'jantina'    => 'required',
            'umur'       => 'required',
            'race'       => 'required',
            'religion'   => 'required',
            'income'     => 'required',
            'member'     => 'required'
    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>  'something wrong',
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
            'id_rumah'          =>  $request->id_rumah,
            'no_ic'             =>  $request->no_ic,
            'nama'              =>  $request->nama,
            'jantina'           =>  $request->jantina,
            'umur'              =>  $request->umur,
            'race'              =>  $request->race,
            'religion'          =>  $request->religion,
            'income'            =>  $request->income,
            'status'            =>  $request->status,
            'member'            =>  $request->member
    ];

    DB::table('penduduk')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);
  }




  public function insertRumah(Request $request){
    $validate = \Validator::make($request->all(),[
            'id_building'=> 'required',
            'no_lot'      => 'required',
            'type'       => 'required',
            'status'    => 'required',

    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>  'something wrong',
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
            'id_building'          =>  $request->id_building,
            'no_lot'             =>  $request->no_lot,
            'type'              =>  $request->type,
            'status'           =>  $request->status,

    ];

    DB::table('rumah')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);

  }

  public function rumahIndex($id){
    $user = DB::table('building')->where('id',$id)->first();
    return view('backend.Maklumat_Rumah.index')->with('user',$user);

  }
  public function newRumah($id){
      return view('backend.Maklumat_Rumah.add')->with('id',$id);
  }
  public function listRumah($id){
    $user = DB::table('rumah')->where('id_building',$id)->get();
    return response()->json(["data"=>$user]);
  }


  public function addFacility(){
    //Add Building Facility
    return view('backend.InsertFacility');
  }

  public function pendudukIndex($id){
    $user = DB::table('building')->where('id',$id)->first();
    return view('backend.penduduk.index')->with('user',$user);
  }

  public function manage(){
    return view('backend.manage');
  }

  public function manageEdit($id){
    $user = DB::table('building')->where('id',$id)->first();
    return view('backend.detail')->with(['user'=>$user]);
  }
  public function listPenduduk($id){
    $user = DB::table('penduduk')->where('id_rumah',$id)->get();
    return response()->json(["data"=>$user]);
  }
  public function detailAsset($id){
    $user = DB::table('penduduk')->where('id',$id)->first();
    return view('backend.penduduk_asset.detail')->with('user',$user);
  }
  public function newAsset($id){
    return view('backend.penduduk_asset.insert')->with('id',$id);
  }

  public function addAsset(Request $request){
    $validate = \Validator::make($request->all(),[
            'asset'               =>  'required',
            'penduduk_id'         =>  'required',
            'price'               =>  'required',
            'year'                =>  'required',
            'alamat'              =>  'required'

    ],
    $after_save =[
            'alert' =>  'danger',
            'title' =>  'Oh wait',
            'text1' =>   'Something wrong',
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
            'penduduk_id'        =>  $request->penduduk_id,
            'asset'              =>  $request->asset,

            'year'               =>  $request->year,
            'price'              =>  $request->price,
            'alamat'             =>  $request->alamat
    ];

    DB::table('asset')->insert($insert);
    return redirect()->back()->with('after_save',$after_save);
  }

  public function listAssets($id){
    $user = DB::table('asset')->where('penduduk_id',$id)->get();
    return response()->json(["data"=>$user]);
  }



}
