<?php
$source_url = __DIR__ . '/data.json';

//leggiamo il file
$json_data = file_get_contents($source_url);

$discs = json_decode($json_data, true);
$genres= [];

foreach($discs as $disc){
    if(!in_array( $disc['genre'],$genres))$genres[]= $disc['genre'];
};

sort($genres);
header('Content-Type: application/json');

echo json_encode($genres);