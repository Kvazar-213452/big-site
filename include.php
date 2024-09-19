<?php
$domen_name = "https://article.local/";
$macro_server = "https://article.local/";


//live_time
$sessionLifetime = 3600; 
$cookieLifetime = 3600;


//microserver
$url_email_server = "http://localhost:5000/send_email";
 

//db
$users = $_SERVER['DOCUMENT_ROOT'] . "/db/users.json";
$currency = $_SERVER['DOCUMENT_ROOT'] . "/db/currency.json";
$include_media = $_SERVER['DOCUMENT_ROOT'] . "/db/include_media.json";

//music server
$url_music_server = $macro_server . "server/music";
$comand_music_server_play_list = "/play_list";

//game server
$url_game_server = $macro_server . "server/game";
$comand_game_server_all = "/all";
$comand_game_server_pc = "/pc";

//path to app server
$path_to_app_server = "server/app_server";


$content = <<<EOD
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pixelify%20Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="$domen_name/style/global">
<title>Article</title>
EOD;

$lib_jquery = <<<EOD
<script src="$domen_name/lib/js/jquery"></script>
EOD;

$html_body_x = <<<EOD
    <style>body{overflow: hidden;}</style>
EOD;

?>