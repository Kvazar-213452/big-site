<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/include.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/function.php'; 

$input = json_decode(file_get_contents('php://input'), true);
$type = $input['type'] ?? '';

if ($type == 1) {
    session_unset();
    session_destroy();
    
    echo json_encode(0);
}
?>