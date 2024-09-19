<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 

function url_get_json_nono_decod($url) {
    $json = @file_get_contents($url);
    if ($json === false) { 
        return "none"; 
    }
    return $json;
}


//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server
//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server
//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server//gameil_server
function generateUniqueId($length = 14) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function code_sent_gmail($email, $code) {
    global $url_email_server;
    
    $postData = array(
        'receiver' => $email,
        'code' => $code
    );

    $ch = curl_init($url_email_server);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json'
    ));

    $response = curl_exec($ch);

    if ($response === false) {
        $result = ['status' => 'error', 'message' => curl_error($ch)];
    } else {
        $responseData = json_decode($response, true);
        if (json_last_error() === JSON_ERROR_NONE && $responseData['status'] === 'success') {
            $result = ['status' => 'success'];
        } else {
            $result = ['status' => 'error', 'message' => 'Invalid response from email server'];
        }
    }

    curl_close($ch);
    return $result;
}

function check_user($name) {
    global $users;
    $data = json_decode(file_get_contents($users), true);

    if (is_array($data)) {
        foreach ($data as $user) {
            if (isset($user[1]) && $user[1] === $name) {
                return 1; 
            }
        }
    }
    
    return 0; 
}

function find_user_get_index($name, $index, $file) {
    $data = json_decode(file_get_contents($file), true);

    if (is_array($data)) {
        foreach ($data as $user) {
            if (isset($user[0]) && $user[0] === $name) {
                if (isset($user[$index])) {
                    return $user[$index];
                } else {
                    return null; 
                }
            }
        }
    }

    return null; 
}

?>