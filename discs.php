<?php

$source_url = __DIR__ . '/data.json';

//leggiamo il file
$json_data = file_get_contents($source_url);

$discs = json_decode($json_data, true);

header('Content-Type: application/json');

echo json_encode($discs);