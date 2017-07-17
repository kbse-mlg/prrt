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
    var dataSet = [["PRR 1","System Architect","EdinBurgh","5421","2011/04/25", '<a href="">Edit</a>']];
    $(document).ready(function(){
        $('#example').DataTable({
            data:dataSet,
            columns:[
                {title:"Name"},
                {title:"Position"},
                {title:"Dun"},
                {title:"Position"},
                {title:"Position"},
                {title:"Position"}]
        })
    })
</script>
@endsection