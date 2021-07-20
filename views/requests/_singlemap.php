<?php

use dosamigos\leaflet\types\LatLng;
use dosamigos\leaflet\layers\Marker;
use dosamigos\leaflet\layers\TileLayer;
use dosamigos\leaflet\LeafLet;
use dosamigos\leaflet\widgets\Map;

// The Tile Layer (very important)
$tileLayer = new TileLayer([
    'urlTemplate' => 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}',
    'clientOptions' => [
        'id' => 'mapbox/streets-v11',
        'attribution' => 'AndreyPootMay &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        'accessToken' => 'pk.eyJ1IjoibmVvdHJpcG14IiwiYSI6ImNrMmFtZ2FlYjB4cnAzY25yMG1ldmticzkifQ.b85-F3CP2TugwzyeDEmrQw'
    ]
]);

// now our component and we are going to configure it
$leaflet = new LeafLet([
    'tileLayer' => $tileLayer, // set the TileLayer
    'center' => new LatLng(['lat' => $lat, 'lng' => $lng]),
    'zoom' => 20,
    'clientOptions' => [
        'scrollWheelZoom' => false
    ]
]);


// first lets setup the center of our map
$center = new LatLng([
    'lat' => $lat,
    'lng' => $lng
]);
$marker = new Marker([
    'latLng' => $center,
    'popupContent' => "<b>Dirección: </b> {$title}"
]);
$leaflet->addLayer($marker);

if (!is_null($lat) && !is_null($lng)) {
    // finally render the widget
    echo Map::widget(['leafLet' => $leaflet, 'height' => '350px']);
}
