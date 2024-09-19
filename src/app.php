<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 
include $_SERVER['DOCUMENT_ROOT'] . '/php/function.php'; 

$data = url_get_json_nono_decod("https://article.local/server/app");
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
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/app">
    <style id="tema"></style> 
    
</head>
<body> 
    <div class="bg"> 
        <div class="search-container">
            <div class="search-box">
                <input type="text" placeholder="Search" class="search-input">
                <button type="submit" class="search-button">
                <i class="fas fa-search"></i>
                </button>
            </div>
        </div>

        <div id="category" class="name_block_app">
            <select class="selector">
                <option value="Trended" class="option">Trended</option>
                <option value="Popular" class="option">Most popular</option>
                <option value="Recent" class="option">Recent</option>
            </select>
        </div>
        <div id="applications_div" class = "app_div"></div> 

        <script>
            let data =  <?php echo $data; ?>;
        </script>
        <script src="<?php echo $domen_name; ?>src/js/page/app.js"></script>
        <script>
            showElements(data);
        </script>
    </div>
</body>