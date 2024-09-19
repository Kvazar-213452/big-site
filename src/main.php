<?php
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $html_body_x; ?>
    <?php echo $content; ?>
    <?php echo $lib_jquery; ?>
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/lib/css/bg_css">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/global">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/modal">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/style">
    <link id="theme" rel="stylesheet" href="<?php echo $domen_name; ?>/style/topic/black">
    <style id="tema"></style>
</head>
<body> 
<div>
    <div class="main_text">
        <h1 class="main_text_p"><span class="color_g">Article</span> company</h1>
        <p class="main_tetx_p_smoll">The article site has everything!</p>
    </div>
    <div class="hero-figure anime-element">
        <svg class="placeholder" width="528" height="396" viewBox="0 0 528 396">
            <rect width="528" height="396" style="fill:transparent;"></rect>
        </svg>
        <div class="hero-figure-box hero-figure-box-01" data-rotation="45deg" style="transform: rotate(45deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-02" data-rotation="-45deg" style="transform: rotate(-45deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-03" data-rotation="0deg" style="transform: rotate(0deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-04" data-rotation="-135deg" style="transform: rotate(-135deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-05" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateY(-15deg) rotateX(8deg) rotateZ(-1deg);"></div>
        <div class="hero-figure-box hero-figure-box-06" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateZ(20deg);"></div>
        <div class="hero-figure-box hero-figure-box-07" style="transform: scaleX(1) scaleY(1) perspective(500px) rotateZ(20deg);"></div>
        <div class="hero-figure-box hero-figure-box-08" data-rotation="-22deg" style="transform: rotate(-22deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-09" data-rotation="-52deg" style="transform: rotate(-52deg) scale(1); opacity: 1;"></div>
        <div class="hero-figure-box hero-figure-box-10" data-rotation="-50deg" style="transform: rotate(-50deg) scale(1); opacity: 1;"></div>
    </div>
</div>
<script src="<?php echo $domen_name; ?>/js/conf"></script>
<script src="<?php echo $domen_name; ?>/js/start_frame"></script>
<script src="<?php echo $domen_name; ?>/js/frame_controller"></script>
</body>