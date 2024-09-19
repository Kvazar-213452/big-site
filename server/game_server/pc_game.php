<?php
include '../include.php'; 
// Зчитування вмісту файлу game_pc.json
$jsonData = file_get_contents('data/game_pc.json');

// Декодування JSON у масив PHP
$data = json_decode($jsonData, true);

// Функція для перейменування ключів
function renameKeys($array, $url_domen) {
    return [
        "name" => $array["name"],
        "img_url" => $url_domen . $array["img_url"],
        "url_game" => $url_domen . $array["url_game"]
    ];
}

// Перейменовуємо ключі
$data = array_map(function($item) use ($url_domen) {
    return renameKeys($item, $url_domen);
}, $data);

// Перетворюємо масив у JSON
$json = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Виводимо JSON
echo $json;
?>
