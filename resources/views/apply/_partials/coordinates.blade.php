<div class="modal fade" id="guide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="row-table">
                    <b class="col-cell">
                        {{trans('apply.second.map')}}
                    </b>
                </div>
            </div>
            <div class="modal-body">
                <input id="pac-input" class="controls" type="text" placeholder="Search Box">
                <div id="map_canvas" style="width: 720px; height: 400px;"></div>
                {!! Form::hidden('lat', old('lat', explode(';', $highways->first())[0]), ['id' => 'lat']) !!}
                {!! Form::hidden('lng', old('lng', explode(';', $highways->first())[1]), ['id' => 'lng']) !!}

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('general.ok')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script type="text/javascript"
        src='https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places&ext=.js&key=AIzaSyCwSQeFz3AjZXx73jZz0NsLRdsJZSgA86Y'></script>
<script>
    var geocoder;
    var map;
    var overlay;
    var coordinates = {
        @foreach($highways as $id => $coordinates)
        '{{$id}}': {
            'lat': '{{explode(';', $coordinates)[0]}}',
            'lng': '{{explode(';', $coordinates)[1]}}'
        },
        @endforeach
    };

    function setCoordinates(position) {
        var lng = typeof position.lng === 'function' ? position.lng() : position.lng;
        var lat = typeof position.lat === 'function' ? position.lat() : position.lat;
        document.getElementById('lng').value = lng;
        document.getElementById('lat').value = lat;
        $("#coordinatesContainer").text(lat + ', ' + lng);
        var latlng = new google.maps.LatLng(lat, lng);
        marker.setPosition(latlng);
    }

    function initialize() {
        if (typeof window.marker !== 'object') {
            var map = new google.maps.Map(
                    document.getElementById("map_canvas"), {
                        center: new google.maps.LatLng(
                                $('#lat').val(),
                                $('#lng').val()
                        ),
                        zoom: 13,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                    });
            var marker = new google.maps.Marker({
                map: map,
                draggable: true,
                position: map.getCenter()
            });
            window.marker = marker;
            google.maps.event.addListener(map, 'projection_changed', function () {
                overlay = new google.maps.OverlayView();
                overlay.draw = function () {
                };
                overlay.setMap(map);

                var info = document.getElementById('myinfo');
                google.maps.event.addListener(marker, 'click', function (e) {
                    setCoordinates(marker.getPosition());
                });
                google.maps.event.addListener(map, 'center_changed', function (e) {
                    setCoordinates(marker.getPosition());
                });
                google.maps.event.addListener(marker, 'drag', function (e) {
                    setCoordinates(marker.getPosition());
                });

            });

            var input = document.getElementById('pac-input');
            var searchBox = new google.maps.places.SearchBox(input);
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            map.addListener('bounds_changed', function () {
                searchBox.setBounds(map.getBounds());
            });

            var markers = [];
            searchBox.addListener('places_changed', function () {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }

                markers.forEach(function (marker) {
                    marker.setMap(null);
                });
                markers = [];

                var bounds = new google.maps.LatLngBounds();
                places.forEach(function (place) {
                    var icon = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    marker.setPosition(place.geometry.location);
                    setCoordinates(place.geometry.location);

                    if (place.geometry.viewport) {
                        bounds.union(place.geometry.viewport);
                    } else {
                        bounds.extend(place.geometry.location);
                    }
                });
                map.fitBounds(bounds);
            });
        }
    }
    ;


    $('#guide').on('shown.bs.modal', function (e) {
        initialize();

    });
    $('#highway').on('change', function () {
        var highway_id = $(this).val();
        var position = coordinates[highway_id];
        setCoordinates(position);
    });
</script>


@endpush

@push('styles')
<style>
    .controls {
        position: absolute;
        z-index: 99;
        left: 20%;
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 31px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
    }

    #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
    }

    #pac-input:focus {
        border-color: #4d90fe;
    }

    .pac-container {
        font-family: Roboto;
        z-index: 9999;
    }

    #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
    }

    #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
    }
</style>
@endpush