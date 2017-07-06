@extends('backend.layouts.app') 
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Maklumat Bangunan</h3>
            </div>
            <form action="{{route('admin.insertBuilding')}}" method="POST" class="form-horizontal">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_bangun" class="form-control" id="nama_bangun" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Jenis</label>
                        <div class="col-sm-10">
                            <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Latitude</label>
                        <div class="col-sm-10">
                            <input type="text" name="latitude" class="form-control" id="latitude">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-sm-2 control-label">Longitude</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<div class="box box-primary">
    <div class="box-header">
        <h3 class="box-header">Tambah Maklumat Facility</h3>
    </div>
    <form action="{{route('admin.insertBuilding')}}" method="POST" class="form-horizontal">
        {{ csrf_field() }}
        <div class="box-body">
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Nama Facility</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_bangun" class="form-control" id="nama_bangun" placeholder="Nama">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Jenis Facility</label>
                <div class="col-sm-10">
                    <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Condition</label>
                <div class="col-sm-10">
                    <select name="" id="" class="form-control">
                        <option value="">Good</option>
                        <option value="">Normal</option>
                        <option value="">Bad</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label">Year</label>
                <div class="col-sm-10">
                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                </div>
            </div>
            <div class="form-group">
                <label for="inputEmail" class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
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