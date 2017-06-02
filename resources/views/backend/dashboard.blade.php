@extends('backend.layouts.app')

@section('page-header')
    <h1>
        {{ app_name() }}
        <small>{{ trans('strings.backend.dashboard.title') }}</small>
    </h1>
@endsection

@section('content')
    <div class="box box-info">
            <div class="box-header with-border">
            <h3 class="box-title">{{ trans('strings.backend.map.label') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <div id="map"></div>
        </div><!-- /.box-body -->
    </div>

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('history.backend.recent_history') }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            </div><!-- /.box tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            {!! history()->render() !!}
        </div><!-- /.box-body -->
    </div><!--box box-success-->
@endsection

@section('after-scripts')
    <script>
      function initMap() {
        var malaysia = {lat: 4.2105, lng: 101.9758};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 7,
          center: malaysia
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key={!! getenv('GOOGLE_MAP_API') !!}&callback=initMap">
    </script>
@endsection