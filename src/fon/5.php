<?php session_start();
 include $_SERVER['DOCUMENT_ROOT'] . '/php/def.php'; 
 include $_SERVER['DOCUMENT_ROOT'] . '/dist/html/add/include.php';
 fon_check(55555, $_SESSION["id_user"], $url_shop_server, $comand_shop_server_fonuser, $domen_name);
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
<!-- partial -->
  
</body>
</html>
<style>
    html {
  height:100%;
}

body {
  margin:0;
}

.bg {
  animation:slide 3s ease-in-out infinite alternate;
  background-image: linear-gradient(-60deg, rgb(40, 42, 52) 50%, rgb(65, 51, 97) 50%);
  bottom:0;
  left:-50%;
  opacity:.5;
  position:fixed;
  right:-50%;
  top:0;
  z-index:-1;
}

.bg2 {
  animation-direction:alternate-reverse;
  animation-duration:4s;
}

.bg3 {
  animation-duration:5s;
}

.content {
  background-color:rgba(255,255,255,.8);
  border-radius:.25em;
  box-shadow:0 0 .25em rgba(0,0,0,.25);
  box-sizing:border-box;
  left:50%;
  padding:10vmin;
  position:fixed;
  text-align:center;
  top:50%;
  transform:translate(-50%, -50%);
}

h1 {
  font-family:monospace;
}

@keyframes slide {
  0% {
    transform:translateX(-25%);
  }
  100% {
    transform:translateX(25%);
  }
}
</style>