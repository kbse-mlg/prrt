@extends('backend.layouts.app')
@section('content')
 
<div class="box">
    <div class="box-header">
         <a href="{{ route('admin.newAsset',$user->id) }}" class="btn btn-primary">Tambah</a>
         <br>
         <br>
        <h3 class="box-title">Senarai Asset Keluarga {{$user->nama}}</h3>
    </div>
    <input type="hidden" value="">
    <div class="box-body table-responsive">
        <table id="example" class="display" width="100%">
            
        </table>
    </div>
</div>


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
            "ajax": '{{route("admin.listAssets",$user->id)}}',
            "columns": [
                { "data": "asset",title:"Asset" },
                { "data":"price",title:"Harga",render: $.fn.dataTable.render.number( ',', '.', 0, 'RM ' )},
                {"data":"year",title:"Year"},
                {"data":"alamat",title:"Alamat"},
                
                {"data":"id",title:"Action", 
                    "render":function(data, type, row, meta){
                        if(type === 'display'){
                            console.log(data);
                            
                            data =  '<a href="/prrt/public/admin/manageedit/'+data+'">Edit</a>';
                        }
                        return data;
                    }
                }
            ]
            
        });
    })
</script>
@endsection