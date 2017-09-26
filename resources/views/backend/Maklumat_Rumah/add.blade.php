@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">

    </div>
</div>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-header">Tambah Maklumat Rumah</h3>
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

    <form action="{{route('admin.insertRumah')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
       <input type="hidden" value="{{$id}}" name="id_building">
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">No Lot</label>
                <div class="col-sm-10">
                    <input type="text" name="no_lot" class="form-control" id="nama_bangun" placeholder="Nama Facility">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Type</label>
                <div class="col-sm-10">
                    <input type="text" name="type" class="form-control" id="jenis" placeholder="Jenis">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <select name="status" id="" class="form-control">
                        <option value="Good">Available</option>
                        <option value="Normal">Not Available</option>
                         <option value="Normal">Under Maintenance</option>

                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
                  <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
            </div>
        </div>
    </form>
</div>
@endsection
