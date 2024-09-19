<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/include.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head> 
    <?php echo $content; ?>
    <?php echo $lib_jquery; ?>
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/global">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/modal">
    <link rel="stylesheet" href="<?php echo $domen_name; ?>/style/menu">
    <link id="theme" rel="stylesheet" href="<?php echo $domen_name; ?>/style/topic/black">
    <style id="tema"></style>
</head>
<body> 
<?php require 'src/add_html/menu.php'; ?>
<div id="fon_div">
    <iframe id="fon_chenge" class="bakdraun" src="fon/1" frameborder="0"></iframe>
</div>
<iframe name="music" id="musx" class="iframe" src="page/main" frameborder="0"></iframe>
<?php require 'src/add_html/modal.php'; ?>
<div id="popup-container">
    <p class="idfghjb"></p>
</div>
<script>
    let domen = "<?php echo $domen_name; ?>";
</script>
<script src="<?php echo $domen_name; ?>/js/conf"></script>
<script src="<?php echo $domen_name; ?>/js/start"></script>
<script src="<?php echo $domen_name; ?>/js/function"></script>
<script src="<?php echo $domen_name; ?>/js/settings"></script>
<script src="<?php echo $domen_name; ?>/js/page"></script>
<script src="<?php echo $domen_name; ?>/js/menu"></script>
<script src="<?php echo $domen_name; ?>/js/reg_log"></script>
<script src="<?php echo $domen_name; ?>/js/accaunt"></script>
<script src="<?php echo $domen_name; ?>/js/style"></script>
</body>

<script>
/*
fetch('http://127.0.0.1:5000/send', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        iddiscord: "1127641029730910281",
        random_number: 101010
    })
})
.then(response => response.json())
.then(data => {
    console.log(data);
    alert('Message sent!');
})
.catch(error => {
    console.error('Error:', error);
    alert('Failed to send message.');
});

*/
</script>