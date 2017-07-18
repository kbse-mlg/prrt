@extends('backend.layouts.app')
@section('content')
 
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Senarai Bangun PRR</h3>
    </div>
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
<script src="js/app.js" type="text/javascript"></script>
    <script>
    var url = "'admin.editManage'";
    var dataSet = [
        ["PRR 1","Johor","Segamat","Buloh Kasap","200","RM 2700" ,'<a href="{{route("admin.manageEdit","Buloh Kasap")}}">Detail</a>'],
        ["PRR 2","Johor","Batu Pahat","Penggaram","130","RM 2600",'<a href="{{route("admin.manageEdit","Buloh Kasap")}}">Detail</a>'],
        ["PRR 3","Johor","Batu Pahat","Penggaram","200","RM 2600",'<a href="{{route("admin.manageEdit","Buloh Kasap")}}">Detail</a>'],
        ["PRR 4","Selangor","Shah Alam","Batu Tiga","143","RM 3000",'<a href="{{route("admin.manageEdit","Buloh Kasap")}}">Detail</a>']    
        ];
    $(document).ready(function(){
        $('#example').DataTable({
            data:dataSet,
            columns:[
                {title:"Name"},
                {title:"Negeri"},
                {title:"Parlimen"},
                {title:"Dun"},
                {title:"Population"},
                {title:"Average Income"},
                {title:"Tindakan"}]
        })
    })
</script>
@endsection