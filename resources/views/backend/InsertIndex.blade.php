@extends('backend.layouts.app')
@section('content')

  <div class="row">
    <div class="col-md-12">
    <a href="{{ route('admin.insert') }}" class="btn btn-primary">Tambah</a>
        <table class="table">
        <tr>
           <th>No</th>
           <th>Email</th>
           <th>Password</th>
        </tr>
        <tbody>
           <?php $i = 1 ?>
            @foreach($user as $item)
            <tr>
                <td>{{$i}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->password}}<td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
        </table>
    </div>
  </div>
 
@endsection