<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/php/function.php'; 

$data = url_get_json_nono_decod($url_music_server . $comand_music_server_play_list);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $content; ?>
    <?php echo $lib_jquery; ?>
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/global">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/modal">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/style">
    <link id="theme" rel="stylesheet" href="<?php echo $domen_name; ?>/style/topic/black">
    <style id="tema"></style>
</head>
<body> 
<div id="play_list_div1"></div>
<script>
let play_list_data =  <?php echo $data; ?>;
</script>
<script src="<?php echo $domen_name; ?>/js/page/music"></script>
<script>
    play_list_f();
</script>
</body>