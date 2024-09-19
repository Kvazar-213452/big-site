<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/php/function.php'; 

$data = url_get_json_nono_decod($url_game_server . $comand_game_server_all);
$data1 = url_get_json_nono_decod($url_game_server . $comand_game_server_pc);
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
    <div class="top_hahah_block">
    <div class="block_haha">
    <div id="all_game" class="name_block_game">All game</div>
    <div class="game_div_global" id="game_all_div"></div>
    </div>

    <div class="block_haha">
    <div id="pc_game" class="name_block_game">Pc game</div>
    <div class="game_div_global" id="game_pc_div"></div>
    </div>
    </div>

<script>
var jsonData =  <?php echo $data; ?>;
var jsonData1 =  <?php echo $data1; ?>;
</script>
<script src="<?php echo $domen_name; ?>/js/conf"></script>
<script src="<?php echo $domen_name; ?>/js/start_frame"></script>
<script src="<?php echo $domen_name; ?>/js/frame_controller"></script>
<script src="<?php echo $domen_name; ?>/js/page/game"></script>
<script>
    game();
    game_pc();
</script>
</body>