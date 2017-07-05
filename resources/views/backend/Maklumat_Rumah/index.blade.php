@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.insert') }}" class="btn btn-primary">Tambah</a>
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
        <table class="table table-hover">
            <tbody>
                <tr>
                    <th>No</th>
                    <th>No Lot</th>
                    <th>Pemilik</th>
                    <th>Jumlah Penduduk</th>
                    <th>Type Rumah</th>
                    <th>Tindakan</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Lot 1</td>
                    <td>Syazwan bin Mohammed</td>
                    <td>5</td>
                    <td>Apartment</td>
                    <td><a href="">Edit</a> || <a href="">Detail Penduduk</a>  </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lot 2</td>
                    <td>Adam bin Ahmad</td>
                    <td>3</td>
                    <td>Apartment</td>
                    <td><a href="">Edit</a> || <a href="{{route('admin.pendudukIndex')}}">Detail Penduduk</a> </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>
 
@endsection