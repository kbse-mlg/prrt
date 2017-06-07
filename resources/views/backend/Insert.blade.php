@extends('backend.layouts.app')
@section('content')
    <section class="contet">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with border">
                        <h3 class="box-title">Tambah Data</h3>
                    </div>
                    <form action="" class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Jenis</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="Jenis">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection