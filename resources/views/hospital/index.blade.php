@extends('layouts.app')

@section('title','| Sites Index')

@section('stylesheets')
    <link rel="stylesheet" href="{{ asset('css/datatables.css') }}">
@endsection

@section('content')
    <!-- Contents of this page -->
    <section class="row justify-content-center main-content">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <h3 class="page-title card-header">Hospital <a href=""><button class="btn btn-outline-info float-right">Add New Hospital</button></a></h3>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped" id="hospitalList">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Hospital</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Address</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>RSUD Kota Bogor</td>
                                <td>Kota Bogor</td>
                                <td>Jalan Cisitu Lama 33/160B Bogor</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Semen Padang Hospital</td>
                                <td>Kota Padang</td>
                                <td>Jalan Sunan Kalijaga 16C Padang</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div id="map" style="height: 400px; width: 100%"></div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
        var locations = [
            ['RSUD Cibinong', -6.4736515, 106.82984169999997, 1],
            ['RSUD Ciawi', -6.6604568, 106.85268719999999, 2],
            ['Semen Padang Hospital', -0.9418380000000001, 100.399133, 3],
            ['RSI Siti Khadijah', -2.9715195, 104.73128969999993, 4],
            ['Padang', -0.9470831999999999, 100.41718100000003, 5]
            ['RSUD Kota Bogor', -6.5804583, 106.7780596, 6]
        ];

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 5,
            center: new google.maps.LatLng(-2.5, 116),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });

        var infowindow = new google.maps.InfoWindow();

        var marker, i;

        for (i = 0; i < locations.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                map: map
            });

            google.maps.event.addListener(marker, 'click', (function(marker, i) {
                return function() {
                    infowindow.setContent(locations[i][0]);
                    infowindow.open(map, marker);
                }
            })(marker, i));
        }
    </script>

    <script type="text/javascript" src="{{ asset('js/datatables.js') }}"></script>
    <script>
        $(document).ready( function () {
            $('#hospitalList').DataTable();
        } );
    </script>
@endsection
