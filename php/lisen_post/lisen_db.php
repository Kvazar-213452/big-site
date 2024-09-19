<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'] . '/include.php';
include $_SERVER['DOCUMENT_ROOT'] . '/php/function.php'; 

$input = json_decode(file_get_contents('php://input'), true);
$type = $input['type'] ?? '';

if ($type == 4) {
    if (!empty($_SESSION['user_name']) && !empty($_SESSION['user_pasw'])) {
        echo 1;
    } else {
        $name = $input['name'] ?? '';
        $pasw = $input['pasw'] ?? '';

        $let = check_user($name);
        if ($let == 1){
            echo 2;
        } else {
            $_SESSION['user_name_r'] = $name;
            $_SESSION['user_pasw_r'] = $pasw;
            echo 0;
        }
    }
}

if ($type == 5) {
    if (!empty($_SESSION['user_name_r']) && !empty($_SESSION['user_pasw_r'])) {
        $gmail = $input['gmail'] ?? ''; 
        $_SESSION['user_gmail_r'] = $gmail;

        $code = mt_rand(10000000, 99999999);
        $_SESSION['user_code_v'] = $code;
        $_SESSION['user_code_v_ch'] = 0;
        code_sent_gmail($gmail, $code);
    
        echo 0;
    } else {
        echo 1;
    }
}

if ($type == 6) {
    if (!empty($_SESSION['user_name_r']) && !empty($_SESSION['user_pasw_r']) && !empty($_SESSION['user_gmail_r'])) {
        $code = $input['code'] ?? ''; 

        if ($code == $_SESSION['user_code_v']) {
            $name = $_SESSION['user_name_r'];
            $pasw = $_SESSION['user_pasw_r'];
            $gmail = $_SESSION['user_gmail_r'];
    
            $data = json_decode(file_get_contents($users), true);
            if (!is_array($data)) {
                $data = [];
            }

            $data[] = [$name, $pasw];
            file_put_contents($users, json_encode($data));

            $currencyData = json_decode(file_get_contents($currency), true);
            if (!is_array($currencyData)) {
                $currencyData = [];
            }
    
            $currencyData[] = [$name, 100, 10];
            file_put_contents($currency, json_encode($currencyData));

            $includeMediaData = json_decode(file_get_contents($include_media), true);
            if (!is_array($includeMediaData)) {
                $includeMediaData = [];
            }
    
            $_SESSION['user_name'] = $_SESSION['user_name_r'];
            $_SESSION['user_pasw'] = $_SESSION['user_pasw_r'];
            $_SESSION['user_gmail'] = $_SESSION['user_gmail_r'];
            $_SESSION['user_ar'] = 10;
            $_SESSION['user_code'] = 100;

            unset($_SESSION['user_gmail_r']);
            unset($_SESSION['user_name_r']);
            unset($_SESSION['user_pasw_r']);
            unset($_SESSION['user_code_v_ch']);
            unset($_SESSION['user_code_v']);

            $includeMediaData[] = [$name, 0, 0, $gmail];
            file_put_contents($include_media, json_encode($includeMediaData));
    
            echo 0;
        } else if ($_SESSION['user_code_v_ch'] == 0){
            $_SESSION['user_code_v_ch'] += 1;
            echo 21;
        } else if ($_SESSION['user_code_v_ch'] == 1){
            $_SESSION['user_code_v_ch'] += 1;
            echo 22;
        } else if ($_SESSION['user_code_v_ch'] == 2){
            $_SESSION['user_code_v_ch'] += 1;
            echo 23;
        } else if ($_SESSION['user_code_v_ch'] == 3){
            $_SESSION['user_code_v_ch'] += 1;
            session_unset();
            session_destroy();

            echo 24;
        }
    } else {
        echo 1;
    }
}

if ($type == 1) {
    $name = $input['name'] ?? '';
    $pasw = $input['pasw'] ?? '';

    $let = check_user($name);
    if ($let == 1) {
        $_SESSION['user_name_l'] = $name;
        $_SESSION['user_pasw_l'] = $pasw;

        $_SESSION['user_gmail_l'] = find_user_get_index($name, 3, $include_media);
        $_SESSION['user_teleg_l'] = find_user_get_index($name, 2, $include_media);
        $_SESSION['user_discord_l'] = find_user_get_index($name, 1, $include_media);

        echo json_encode([0, $_SESSION['user_gmail_l'], $_SESSION['user_teleg_l'], $_SESSION['user_discord_l']]);
    } else {
        echo 1;
    }
}

if ($type == 3) {
    $type_v = $input['type_v'] ?? '';

    if (!empty($_SESSION['user_name_l']) && !empty($_SESSION['user_pasw_l'])) {
        if ($type_v == 0) {
            if ($_SESSION['user_gmail_l'] != null) {
                $_SESSION['user_code_v_l'] = mt_rand(10000000, 99999999);
                $_SESSION['user_code_v_ch_l'] = 0;
                
                code_sent_gmail($_SESSION['user_gmail_l'], $_SESSION['user_code_v_l'] );

                echo 0;
            } else {
                echo 20;
            }
        } else if ($type_v == 1) {
            if ($_SESSION['user_teleg_l'] != null) {
                $_SESSION['user_teleg_l'] = mt_rand(10000000, 99999999);
                $_SESSION['user_code_v_ch_l'] = 0;

                echo 0;
            } else {
                echo 21;
            }
        } else if ($type_v == 2) {
            if ($_SESSION['user_discord_l'] != null) {
                $_SESSION['user_discord_l'] = mt_rand(10000000, 99999999);
                $_SESSION['user_code_v_ch_l'] = 0;

                echo 0;
            } else {
                echo 22;
            }
        }
    } else {
        echo 1;
    }
}

if ($type == 2) {
    $code = $input['code'] ?? '';

    if ($code == $_SESSION['user_code_v_l']) {
        $_SESSION['user_coin'] = find_user_get_index($_SESSION['user_name_l'], 1, $currency);
        $_SESSION['user_ar'] = find_user_get_index($_SESSION['user_name_l'], 2, $currency);
        
        $_SESSION['user_teleg'] = find_user_get_index($_SESSION['user_name_l'], 1, $include_media);
        $_SESSION['user_discord'] = find_user_get_index($_SESSION['user_name_l'], 2, $include_media);
        $_SESSION['user_gmail'] = find_user_get_index($_SESSION['user_name_l'], 3, $include_media);

        $_SESSION['user_name'] = $_SESSION['user_name_l'];
        $_SESSION['user_pasw'] = $_SESSION['user_pasw_l'];
        $_SESSION['user_gmail'] = $_SESSION['user_gmail_l'];

        unset($_SESSION['user_code_v_ch_l']);
        unset($_SESSION['user_code_v_l']);
        unset($_SESSION['user_name_l']);
        unset($_SESSION['user_pasw_l']);
        unset($_SESSION['user_gmail_l']);

        echo 0;
    } else if ($_SESSION['user_code_v_ch_l'] == 0){
        $_SESSION['user_code_v_ch_l'] += 1;
        echo 21;
    } else if ($_SESSION['user_code_v_ch_l'] == 1){
        $_SESSION['user_code_v_ch_l'] += 1;
        echo 22;
    } else if ($_SESSION['user_code_v_ch_l'] == 2){
        $_SESSION['user_code_v_ch_l'] += 1;
        echo 23;
    } else if ($_SESSION['user_code_v_ch_l'] == 3){
        $_SESSION['user_code_v_ch_l'] += 1;
        session_unset();
        session_destroy();

        echo 24;
    }
}

?> 