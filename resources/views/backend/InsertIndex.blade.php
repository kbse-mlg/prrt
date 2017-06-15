@extends('backend.layouts.app')
@section('content')

  <div class="row">
    <div class="col-md-12">
    <a href="{{ route('admin.insert') }}" class="btn btn-primary">Tambah</a>
        <table class="table">
        <tr>
           <th>No</th>
           <th>Building</th>
           <th>Alamat</th>
           <th>Latitude</th>
           <th>Latitude</th>
        </tr>
        <tbody>
           <?php $i = 1 ?>
            @foreach($user as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->nama_bangun}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->latitude}}</td>
                <td>{{$item->longitude}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>
 
@endsection