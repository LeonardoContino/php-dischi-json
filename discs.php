<?php

$source_url = __DIR__ . '/data.json';

//leggiamo il file
$json_data = file_get_contents($source_url);

$genre = $_GET['genre'] ?? '';
if($genre){
    $discs = json_decode($json_data, true);

    $filtered_discs = [];
    foreach($discs as $disc){
        if($disc['genre'] === $genre) $filtered_discs[] = $disc;
    }
    $json_data = json_encode($filtered_discs);
}

header('Content-Type: application/json');

echo $json_data;

