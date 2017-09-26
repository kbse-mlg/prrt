@extends('backend.layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">

    </div>
</div>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-header">Tambah Maklumat Facility</h3>
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
    <form action="{{route('admin.insertFacility')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        @foreach($data as $item)
            <input type="hidden" value="{{$item->id}}" name="id_building">
        @endforeach
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Nama Facility</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="nama_bangun" placeholder="Nama Facility">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Condition</label>
                <div class="col-sm-10">
                    <select name="condition" id="" class="form-control">
                        <option value="Good">Good</option>
                        <option value="Normal">Normal</option>
                        <option value="Bad">Bad</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Year</label>
                <div class="col-sm-10">
                    <input type="text" name="year" class="form-control" id="alamat" placeholder="Year">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Price</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="harga" id="longitude" placeholder="harga">
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
