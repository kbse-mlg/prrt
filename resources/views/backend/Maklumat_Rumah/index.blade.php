@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="" class="btn btn-primary">Tambah</a>
        <br>
        <br>
        
    <div class="box">
    <div class="box-header">
        <h3 class="box-title">List Rumah</h3>
        <div class="box-tools">
            <div class="input-group">
                <input type="text" style="width:150px" name="table_search" class="form-control input-sm pull-right" placeholder="Search" value="">
                <div class="input-group-btn">
                    <button class="btn btn-sm btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="box-body table-responsive no-padding">
        @if(Session::has('no_data'))
            <div>No Data</div>
        @else
            <table class="table table-hover">
                <tbody>
                    <tr>
                        <th>No</th>
                        <th>No Lot</th>
                        <th>Type</th>
                        <th>Jumlah Penduduk</th>
                        <th>Type Rumah</th>
                        <th>Tindakan</th>
                    </tr>
                </tbody>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td></td>
                        <td>{{$item->type}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
        
    </div>
    </div>
    </div>
    </div>
 
@endsection