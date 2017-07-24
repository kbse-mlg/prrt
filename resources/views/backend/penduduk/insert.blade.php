@extends('backend.layouts.app') 
@section('content')
<div class="row">
    <div class="col-md-12">
       
    </div>
</div>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-header">Tambah Maklumat Penduduk</h3>
    </div>
    @if(Session::has('after_save'))
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-dismissible alert-{{Session::get('after_save.alert')}}">
                <button class="close" data-dismiss="alert">x</button>
                <strong>{{Session::get('after_save.tittle')}}</strong>
                <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_save.text1') }}</a> {{ Session::get('after_save.text2')
                }}
            </div>
        </div>
    </div>
    @endif
    
    <form action="{{route('admin.addPenduduk')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
      
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">No IC</label>
                <div class="col-sm-10">
                    <input type="text" name="no_ic" class="form-control" id="nama_bangun" placeholder="No IC">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="jenis" placeholder="Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Jantina</label>
                <div class="col-sm-10">
                    <select name="jantina" id="" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Umur</label>
                <div class="col-sm-10">
                    <input type="text" name="umur" class="form-control" id="alamat" placeholder="Umur">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Race</label>
                <div class="col-sm-10">
                    <select name="race" id="" class="form-control">
                        <option value="melayu">Melayu</option>
                        <option value="cina">Cina</option>
                        <option value="india">India</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Religion</label>
                <div class="col-sm-10">
                    <select name="religion" id="" class="form-control">
                        <option value="islam">Islam</option>
                        <option value="hindu">Hindu</option>
                        <option value="budha">Budha</option>
                        <option value="other">Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" name="status" class="form-control" id="alamat" placeholder="Status">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Income</label>
                <div class="col-sm-10">
                    <input type="text" name="income" class="form-control" id="alamat" placeholder="Income / month">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Jml Ahli Waris</label>
                <div class="col-sm-10">
                    <input type="text" name="member" class="form-control" id="nama_bangun" placeholder="Jumlah Ahli Waris">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Rumah</label>
                <div class="col-sm-10">
                    <select name="id_rumah" id="" class="form-control">
                       @foreach($user as $item)
                           <option value="{{$item->id_building}}">{{$item->no_lot}}</option>
                       @endforeach
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
                <button type="submit" class="btn btn-danger">Kembali</button>
            </div>
        </div>
    </form>
</div>
@endsection