<?php
include_once(__DIR__ . '/Voiture.php');
include_once(__DIR__ . '/Model.php');


$vtrs =
  [
    $v = new Voiture('Batmobile'),
    $v2 = new Voiture('Papamobile'),
    $v3 = new Voiture('Wagon_bar')
  ];
$models =
  [
    $mb1 = new Model('Batmobile', 'Bale'),
    $mb2 = new Model('Batmobile', 'Keaton'),
    $mb3 = new Model('Batmobile', 'West'),

    $mp1 = new Model('Papamobile', 'Jean-Paul 2'),
    $mp2 = new Model('Papamobile', 'Benoit XVI'),
    $mp3 = new Model('Papamobile', 'Pie VII'),

    $mw1 = new Model('Wagon_bar', 'Orient-express'),
    $mw2 = new Model('Wagon_bar', 'Pride of Africa'),
    $mw3 = new Model('Wagon_bar', 'Maharajas Express')

  ];

$jV = json_encode($vtrs);
$jM = json_encode($models);

if (isset($_GET['model'])) {
  echo $jM;
} else {
  echo $jV;
}
