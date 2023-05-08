<?php
$dischi_string = file_get_contents("dischi.json");
// var_dump($dischi_string);
$dischi_array = json_decode($dischi_string, true);
// var_dump($dischi_array);

$response = [
    "data" => $dischi_array
];

header('Content-Type: application/json');
echo json_encode($response);