@extends('backend.layouts.app')
@section('content')
    <section class="contet">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with border">
                        <h3 class="box-title">Detail Penduduk</h3>
                    </div>
                    @if(Session::has('after_save'))
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-dismissible alert-{{Session::get('after_save.alert')}}">
                                <button class="close" data-dismiss="alert">x</button>
                                <strong>{{Session::get('after_save.tittle')}}</strong>
                                <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_save.text1') }}</a>                                {{ Session::get('after_save.text2') }}
                            </div>
                        </div>
                    </div>
                    @endif
                    <form action="{{route('admin.insertBuilding')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">No Ic</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama_bangun" class="form-control" id="nama_bangun" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="jenis" class="form-control" id="jenis" placeholder="Jenis">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Jantina</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Umur</label>
                                <div class="col-sm-10">
                                    <input type="text" name="latitude" class="form-control" id="latitude">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Total Income / Month</label>
                                <div class="col-sm-10">
                                    <input type="text" name="latitude" class="form-control" id="latitude">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Race</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Religion</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info">Simpan</button>
                              <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
