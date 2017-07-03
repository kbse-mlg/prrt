@extends('backend.layouts.app')
@section('content')

<div class="row">
    <div class="col-md-12">
        <a href="{{ route('admin.insert') }}" class="btn btn-primary">Tambah</a>
        <br>
        <br>
    <div class="box">
    <div class="box-header">
        <h3 class="box-title">List Building</h3>
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
                    <th>Building</th>
                    <th>Alamat</th>
                    <th>Latitude</th>
                    <th>Latitude</th>
                    <th>Tindakan</th>
                </tr>
            <?php $i = 1 ?>
            @foreach($user as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->nama_bangun}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->latitude}}</td>
                <td>{{$item->longitude}}</td>
                <td><a href="{{route('admin.addFacility')}}"><i class="fa fa-add"></i>Tambah</a></td>
            <?php $i++; ?>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>
 
@endsection