@extends('backend.layouts.app')
@section('content')
    <section class="contet">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with border">
                        <h3 class="box-title">Tambah Data Building</h3>
                    </div>
                    @if(Session::has('after_save'))
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-dismissible alert-{{Session::get('after_save.alert')}}">
                                    <button class="close" data-dismiss="alert">x</button>
                                    <strong>{{Session::get('after_save.tittle')}}</strong>
                                    <a href="javascript:void(0)" class="alert-link">{{ Session::get('after_save.text1') }}</a> {{ Session::get('after_save.text2') }}
                                </div>
                            </div>
                        </div>
                    @endif
                    <form action="{{route('admin.insertBuilding')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-10">
                                    <input type="text" name="nama" class="form-control" id="nama_bangun" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Jenis</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="jenis"class="form-control" id="jenis" placeholder="Jenis">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Negeri</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="negeri"class="form-control" id="negeri" placeholder="Negeri">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Parlimen</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="parlimen"class="form-control" id="parlimen" placeholder="Parlimen">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Dun</label>
                                <div class="col-sm-10">
                                    <input type="text" name ="dun"class="form-control" id="dun" placeholder="Dun">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                    <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Alamat">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Latitude</label>
                                <div class="col-sm-10">
                                    <input type="text"name="latitude"class="form-control" id="latitude" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Longitude</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="longitude" id="longitude" placeholder="Longitude">
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <div class="col-sm-2">

                            </div>
                            <div class="col-sm-10">
                                <div id="mapid" class="form-control"style="width: 100%; height: 400px;"></div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <button type="submit"class="btn btn-info">Simpan</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger">Kembali</a>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('after-scripts')
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"
        integrity="sha512-A7vV8IFfih/D732iSSKi20u/ooOfj/AGehOKq0f4vLT1Zr2Y+RX7C+w8A1gaSasGtRUZpF/NZgzSAu4/Gc41Lg=="
        crossorigin=""></script>
    <script src="https://unpkg.com/leaflet-easybutton@2.0.0/src/easy-button.js"></script>
    <script src="https://unpkg.com/esri-leaflet@2.0.8"></script>

    <!-- Esri Leaflet Geocoder -->
    <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@2.2.4/dist/esri-leaflet-geocoder.css">
    <script src="https://unpkg.com/esri-leaflet-geocoder@2.2.4"></script>
        <script>

        var mymap = L.map('mapid').setView([3.1390, 101.6869], 13);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            maxZoom: 18,
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
                '<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="http://mapbox.com">Mapbox</a>',
            id: 'mapbox.streets'
        }).addTo(mymap);


        var geocodeServices = L.esri.Geocoding.geocodeService();
        var shapes = L.featureGroup().addTo(mymap);
        mymap.on("click",function(event){
            $("#latitude").val(event.latlng.lat.toString()) ;
            $("#longitude").val(event.latlng.lng.toString())
            geocodeServices.reverse().latlng(event.latlng).run(function(error,result){
                $("#alamat").val(result.address.Match_addr);
                $("#negeri").val(result.address.Region);
                $("#parlimen").val(result.address.Subregion);
            })
            console.log(event.latlng.lat.toString()+"test");
        });
        var arcgisOnline = L.esri.Geocoding.arcgisOnlineProvider();
        var searchControl = L.esri.Geocoding.geosearch({
            providers:[
                arcgisOnline,
                L.esri.Geocoding.mapServiceProvider({
                    label:'States and Counties',
                    url:'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Census/MapServer',
                    layers:[3,4],
                    searchFields:['NAME','STATE_NAME']
                })
            ]
        }).addTo(mymap);

        mymap.on('geosearch/showlocation', function(data,event){
            console.log(data,event);
        })



    </script>
@endsection
@section('after-styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet-easybutton@2.0.0/src/easy-button.css">
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css"
   integrity="sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ=="
   crossorigin=""/>
@endsection
