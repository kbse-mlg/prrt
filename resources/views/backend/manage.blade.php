@extends('backend.layouts.app')
@section('content')

<div class="box">
    <div class="box-header">
         <a href="{{ route('admin.insert') }}" class="btn btn-primary">Tambah</a>
         <br>
         <br>
        <h3 class="box-title">Senarai Bangun PRR</h3>
    </div>

    <div class="box-body table-responsive">
        <table id="example" class="display" width="100%">

        </table>
    </div>
</div>
<input type="hidden" id="id" name="id">

@endsection
@section('after-scripts')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">

<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
    <script>


    $(document).ready(function(){

       $('#example').DataTable({
            "ajax": '{{route("admin.tambah")}}',
            "columns": [
                { "data": "nama",title:"Nama" },
                { "data":"jenis",title:"Jenis"},
                {"data":"negeri",title:"Negeri"},
                {"data":"parlimen",title:"Parlimen"},
                {"data":"dun",title:"Dun"},
                {"data":"id",title:"Action",
                    "render":function(data, type, row, meta){
                        if(type === 'display'){
                            console.log(data);
                            var APP_URL = {!! json_encode(url('/')) !!}
                            console.log(APP_URL);
                            // var route = {{route('admin.manageEdit','data')}}
                            $("#id").val(data);
                            data = '<a href="'+APP_URL+'/admin/manageedit/'+data+'">Edit</a>';
                        }
                        return data;
                    }
                }
            ]

        });
    })
</script>
@endsection
