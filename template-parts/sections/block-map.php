<?php if (function_exists('ot_get_option')) {
    $map = array(
        'display' => ot_get_option('map_display'),
        'address' => ot_get_option('map_address'),
    );

    if ($map['display'] === 'on') { ?>
        <!-- Map Block -->
        <div class="map">
            <div id="map" style="width: 100%; height: 400px;"></div>
            <div class="container">
                <div class="map-info">
                    <ul>
                        <li>
                            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <?= strip_tags($map['address'], '<br>'); ?>
                        </li>
                        <li>
                            <?php if (has_phones()) { ?>
                                <ul class="phone">
                                    <?php foreach (get_phones() as $phone) { ?>
                                        <li class="phone-item">
                                            <a href="tel:<?php echo esc_attr(get_phone_number($phone)); ?>"
                                               class="phone-number">
                                                <i class="fas fa-phone" aria-hidden="true"></i>
                                                <?php echo esc_html($phone); ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfg_bUbfwXmpJaKc27H03VaQXPZELMS_I&callback=initMap" async defer></script>
        <script>
            function initMap() {
                var uluru = {lat: 46.669579491978666, lng: 32.61989488818358};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru,
                    styles: [{
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                    }, {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}]
                    }, {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
                    }, {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 18}]
                    }, {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 16}]
                    }, {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 21}]
                    }, {
                        "elementType": "labels.text.stroke",
                        "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
                    }, {
                        "elementType": "labels.text.fill",
                        "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
                    }, {"elementType": "labels.icon", "stylers": [{"visibility": "off"}]}, {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [{"color": "#000000"}, {"lightness": 19}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [{"color": "#000000"}, {"lightness": 20}]
                    }, {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
                    }]
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    icon: {
                        "fillColor": "#E53935",
                        "fillOpacity": 1,
                        "strokeWeight": 0,
                        "scale": 1.5,
                        "path": "M10.2,7.4c-6,0-10.9,4.9-10.9,10.9c0,6,10.9,18.4,10.9,18.4s10.9-12.3,10.9-18.4C21.2,12.2,16.3,7.4,10.2,7.4z M10.2,22.9c-2.6,0-4.6-2.1-4.6-4.6s2.1-4.6,4.6-4.6s4.6,2.1,4.6,4.6S12.8,22.9,10.2,22.9z",
                        "anchor": {"x": 10, "y": 30},
                        "origin": {"x": 0, "y": 0},
                        "style": 1
                    },
                    map: map
                });
            }
        </script>
        <!-- End Map Block -->
    <?php }
} ?>
