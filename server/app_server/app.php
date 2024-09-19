<?php
include '../include.php'; 
$jsonData = file_get_contents('appList.json');
$data = json_decode($jsonData, true);

$jsonData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

header('Content-Type: application/json');
echo $jsonData;
?>