<?php
include '../include.php'; 
$jsonData = file_get_contents('data/play_list.json');
$data = json_decode($jsonData, true);

foreach ($data as &$item) {
    if (isset($item[1])) {
        $item[1] = $url_domen . $item[1];
        $item[2] = $url_domen . $item[2];
    }
}

$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $jsonData;
?>