@extends('backend.layouts.app')
@section('content')

<div class="box">
    <div class="box-header">
         <a href="{{ route('admin.insertPenduduk',$user->id) }}" class="btn btn-primary">Tambah</a>
         <br>
         <br>
        <h3 class="box-title">Senarai Penduduk Bangun {{$user->nama}}</h3>
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
<style>
 .red {
  background-color: #b55a7d !important;
}
</style>
<script src="https://code.jquery.com/jquery-1.12.4.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
<script src="{{asset('assets/js/app.js')}}" type="text/javascript"></script>
    <script>


    $(document).ready(function(){
       $('#example').DataTable({
            "ajax": '{{route("admin.listPenduduk",$user->id)}}',
            "createdRow": function (row, data, dataIndex) {
                if (data.income < 2600) {
                    console.log(data.income);
                    $(row).addClass('red');

                }


            },
            "columns": [
                { "data": "no_ic",title:"No Ic" },
                { "data":"nama",title:"Nama"},
                {"data":"jantina",title:"Jantina"},
                {"data":"umur",title:"Umur"},
                {"data":"status",title:"Status"},
                {"data":"race",title:"Race"},
                {"data":"religion",title:"Agama"},
                {"data":"income",title:"Total Income",render: $.fn.dataTable.render.number( ',', '.', 0, 'RM ' )},
                {"data":"member",title:"Jmlh Ahli Waris",render:function(data,type,row){

                    return data + " Orang";
                }},
                {"data":"id",title:"Action",
                    "render":function(data, type, row, meta){
                        if(type === 'display'){
                          var APP_URL = {!! json_encode(url('/')) !!}
                          console.log(APP_URL);
                          // var route = {{route('admin.manageEdit','data')}}
                          $("#id").val(data);
                          data = '<a href="'+APP_URL+'/admin/asset/'+data+'" class="lg lg-primary">Asset</a>';
                        }
                        return data;
                    }
                }
            ]

        });
    })
</script>
@endsection
