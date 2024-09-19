<?php session_start();
 include $_SERVER['DOCUMENT_ROOT'] . '/php/def.php'; 
 include $_SERVER['DOCUMENT_ROOT'] . '/dist/html/add/include.php';
 fon_check(44444, $_SESSION["id_user"], $url_shop_server, $comand_shop_server_fonuser, $domen_name);
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<style>
      body {
    overflow: hidden;
}
    * {
  margin: 0;
  padding: 0;
}

ul, li {
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
}

ul {
  height: 40px;
  width: 40px;
  margin-top: -20px;
  margin-left: -20px;
  animation: spin 3.5s infinite;
  transform-style: preserve-3d;
  animation: move 5s infinite ease alternate;
}

li {
  height: 20px;
  width: 20px;
  margin-top: -13.33333px;
  margin-left: -13.33333px;
  border-radius: 40px;
}

li:nth-child(1) {
  background-color: #cc7766;
  box-shadow: 0 0 20px #ff5533;
  transform: translateX(172.89674px) translateY(269.27072px);
  opacity: 0;
  animation: spin1 3s 0.2s infinite;
}

@keyframes spin1 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(2) {
  background-color: #cc8866;
  box-shadow: 0 0 20px #ff7733;
  transform: translateX(-133.16699px) translateY(290.97518px);
  opacity: 0;
  animation: spin2 3s 0.4s infinite;
}

@keyframes spin2 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(3) {
  background-color: #cc9966;
  box-shadow: 0 0 20px #ff9933;
  transform: translateX(-316.7976px) translateY(45.1584px);
  opacity: 0;
  animation: spin3 3s 0.6s infinite;
}

@keyframes spin3 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(4) {
  background-color: #ccaa66;
  box-shadow: 0 0 20px #ffbb33;
  transform: translateX(-209.16596px) translateY(-242.1768px);
  opacity: 0;
  animation: spin4 3s 0.8s infinite;
}

@keyframes spin4 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(5) {
  background-color: #ccbb66;
  box-shadow: 0 0 20px #ffdd33;
  transform: translateX(90.7719px) translateY(-306.85577px);
  opacity: 0;
  animation: spin5 3s 1s infinite;
}

@keyframes spin5 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(6) {
  background-color: #cccc66;
  box-shadow: 0 0 20px #ffff33;
  transform: translateX(307.25449px) translateY(-89.41296px);
  opacity: 0;
  animation: spin6 3s 1.2s infinite;
}

@keyframes spin6 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(7) {
  background-color: #bbcc66;
  box-shadow: 0 0 20px #ddff33;
  transform: translateX(241.24872px) translateY(210.23571px);
  opacity: 0;
  animation: spin7 3s 1.4s infinite;
}

@keyframes spin7 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(8) {
  background-color: #aacc66;
  box-shadow: 0 0 20px #bbff33;
  transform: translateX(-46.56001px) translateY(316.59464px);
  opacity: 0;
  animation: spin8 3s 1.6s infinite;
}

@keyframes spin8 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(9) {
  background-color: #99cc66;
  box-shadow: 0 0 20px #99ff33;
  transform: translateX(-291.56168px) translateY(131.87792px);
  opacity: 0;
  animation: spin9 3s 1.8s infinite;
}

@keyframes spin9 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(10) {
  background-color: #88cc66;
  box-shadow: 0 0 20px #77ff33;
  transform: translateX(-268.50289px) translateY(-174.08676px);
  opacity: 0;
  animation: spin10 3s 2s infinite;
}

@keyframes spin10 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(11) {
  background-color: #77cc66;
  box-shadow: 0 0 20px #55ff33;
  transform: translateX(1.41622px) translateY(-319.99687px);
  opacity: 0;
  animation: spin11 3s 2.2s infinite;
}

@keyframes spin11 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(12) {
  background-color: #66cc66;
  box-shadow: 0 0 20px #33ff33;
  transform: translateX(270.03327px) translateY(-171.70333px);
  opacity: 0;
  animation: spin12 3s 2.4s infinite;
}

@keyframes spin12 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(13) {
  background-color: #66cc77;
  box-shadow: 0 0 20px #33ff55;
  transform: translateX(290.38297px) translateY(134.45345px);
  opacity: 0;
  animation: spin13 3s 2.6s infinite;
}

@keyframes spin13 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(14) {
  background-color: #66cc88;
  box-shadow: 0 0 20px #33ff77;
  transform: translateX(43.75591px) translateY(316.99435px);
  opacity: 0;
  animation: spin14 3s 2.8s infinite;
}

@keyframes spin14 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(15) {
  background-color: #66cc99;
  box-shadow: 0 0 20px #33ff99;
  transform: translateX(-243.10013px) translateY(208.09211px);
  opacity: 0;
  animation: spin15 3s 3s infinite;
}

@keyframes spin15 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(16) {
  background-color: #66ccaa;
  box-shadow: 0 0 20px #33ffbb;
  transform: translateX(-306.45103px) translateY(-92.12906px);
  opacity: 0;
  animation: spin16 3s 3.2s infinite;
}

@keyframes spin16 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(17) {
  background-color: #66ccbb;
  box-shadow: 0 0 20px #33ffdd;
  transform: translateX(-88.05227px) translateY(-307.6472px);
  opacity: 0;
  animation: spin17 3s 3.4s infinite;
}

@keyframes spin17 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(18) {
  background-color: #66cccc;
  box-shadow: 0 0 20px #33ffff;
  transform: translateX(211.30135px) translateY(-240.31592px);
  opacity: 0;
  animation: spin18 3s 3.6s infinite;
}

@keyframes spin18 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(19) {
  background-color: #66bbcc;
  box-shadow: 0 0 20px #33ddff;
  transform: translateX(316.38548px) translateY(47.96071px);
  opacity: 0;
  animation: spin19 3s 3.8s infinite;
}

@keyframes spin19 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(20) {
  background-color: #66aacc;
  box-shadow: 0 0 20px #33bbff;
  transform: translateX(130.58626px) translateY(292.14248px);
  opacity: 0;
  animation: spin20 3s 4s infinite;
}

@keyframes spin20 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(21) {
  background-color: #6699cc;
  box-shadow: 0 0 20px #3399ff;
  transform: translateX(-175.27336px) translateY(267.7298px);
  opacity: 0;
  animation: spin21 3s 4.2s infinite;
}

@keyframes spin21 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(22) {
  background-color: #6688cc;
  box-shadow: 0 0 20px #3377ff;
  transform: translateX(-319.98746px) translateY(-2.83242px);
  opacity: 0;
  animation: spin22 3s 4.4s infinite;
}

@keyframes spin22 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(23) {
  background-color: #6677cc;
  box-shadow: 0 0 20px #3355ff;
  transform: translateX(-170.50657px) translateY(-270.79053px);
  opacity: 0;
  animation: spin23 3s 4.6s infinite;
}

@keyframes spin23 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(24) {
  background-color: #6666cc;
  box-shadow: 0 0 20px #3333ff;
  transform: translateX(135.73728px) translateY(-289.78508px);
  opacity: 0;
  animation: spin24 3s 4.8s infinite;
}

@keyframes spin24 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(25) {
  background-color: #7766cc;
  box-shadow: 0 0 20px #5533ff;
  transform: translateX(317.1849px) translateY(-42.35256px);
  opacity: 0;
  animation: spin25 3s 5s infinite;
}

@keyframes spin25 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(26) {
  background-color: #8866cc;
  box-shadow: 0 0 20px #7733ff;
  transform: translateX(207.01418px) translateY(244.0187px);
  opacity: 0;
  animation: spin26 3s 5.2s infinite;
}

@keyframes spin26 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(27) {
  background-color: #9966cc;
  box-shadow: 0 0 20px #9933ff;
  transform: translateX(-93.48442px) translateY(306.0403px);
  opacity: 0;
  animation: spin27 3s 5.4s infinite;
}

@keyframes spin27 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(28) {
  background-color: #aa66cc;
  box-shadow: 0 0 20px #bb33ff;
  transform: translateX(-308.03388px) translateY(86.68985px);
  opacity: 0;
  animation: spin28 3s 5.6s infinite;
}

@keyframes spin28 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(29) {
  background-color: #bb66cc;
  box-shadow: 0 0 20px #dd33ff;
  transform: translateX(-239.37841px) translateY(-212.36284px);
  opacity: 0;
  animation: spin29 3s 5.8s infinite;
}

@keyframes spin29 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(30) {
  background-color: #cc66cc;
  box-shadow: 0 0 20px #ff33ff;
  transform: translateX(49.36046px) translateY(-316.17012px);
  opacity: 0;
  animation: spin30 3s 6s infinite;
}

@keyframes spin30 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(31) {
  background-color: #cc66bb;
  box-shadow: 0 0 20px #ff33dd;
  transform: translateX(292.71755px) translateY(-129.29205px);
  opacity: 0;
  animation: spin31 3s 6.2s infinite;
}

@keyframes spin31 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(32) {
  background-color: #cc66aa;
  box-shadow: 0 0 20px #ff33bb;
  transform: translateX(266.95148px) translateY(176.45654px);
  opacity: 0;
  animation: spin32 3s 6.4s infinite;
}

@keyframes spin32 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(33) {
  background-color: #cc6699;
  box-shadow: 0 0 20px #ff3399;
  transform: translateX(-4.24856px) translateY(319.9718px);
  opacity: 0;
  animation: spin33 3s 6.6s infinite;
}

@keyframes spin33 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(34) {
  background-color: #cc6688;
  box-shadow: 0 0 20px #ff3377;
  transform: translateX(-271.54249px) translateY(169.30646px);
  opacity: 0;
  animation: spin34 3s 6.8s infinite;
}

@keyframes spin34 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(35) {
  background-color: #cc6677;
  box-shadow: 0 0 20px #ff3355;
  transform: translateX(-289.18151px) translateY(-137.01845px);
  opacity: 0;
  animation: spin35 3s 7s infinite;
}

@keyframes spin35 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(36) {
  background-color: #cc6666;
  box-shadow: 0 0 20px #ff3333;
  transform: translateX(-40.94838px) translateY(-317.36923px);
  opacity: 0;
  animation: spin36 3s 7.2s infinite;
}

@keyframes spin36 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(37) {
  background-color: #cc7766;
  box-shadow: 0 0 20px #ff5533;
  transform: translateX(244.9325px) translateY(-205.9322px);
  opacity: 0;
  animation: spin37 3s 7.4s infinite;
}

@keyframes spin37 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(38) {
  background-color: #cc8866;
  box-shadow: 0 0 20px #ff7733;
  transform: translateX(305.62357px) translateY(94.83795px);
  opacity: 0;
  animation: spin38 3s 7.6s infinite;
}

@keyframes spin38 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(39) {
  background-color: #cc9966;
  box-shadow: 0 0 20px #ff9933;
  transform: translateX(85.32574px) translateY(308.41452px);
  opacity: 0;
  animation: spin39 3s 7.8s infinite;
}

@keyframes spin39 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(40) {
  background-color: #ccaa66;
  box-shadow: 0 0 20px #ffbb33;
  transform: translateX(-213.42018px) translateY(238.43621px);
  opacity: 0;
  animation: spin40 3s 8s infinite;
}

@keyframes spin40 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(41) {
  background-color: #ccbb66;
  box-shadow: 0 0 20px #ffdd33;
  transform: translateX(-315.94857px) translateY(-50.75925px);
  opacity: 0;
  animation: spin41 3s 8.2s infinite;
}

@keyframes spin41 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(42) {
  background-color: #cccc66;
  box-shadow: 0 0 20px #ffff33;
  transform: translateX(-127.9953px) translateY(-293.2869px);
  opacity: 0;
  animation: spin42 3s 8.4s infinite;
}

@keyframes spin42 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(43) {
  background-color: #bbcc66;
  box-shadow: 0 0 20px #ddff33;
  transform: translateX(177.63626px) translateY(-266.16792px);
  opacity: 0;
  animation: spin43 3s 8.6s infinite;
}

@keyframes spin43 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
li:nth-child(44) {
  background-color: #aacc66;
  box-shadow: 0 0 20px #bbff33;
  transform: translateX(319.94986px) translateY(5.66462px);
  opacity: 0;
  animation: spin44 3s 8.8s infinite;
}

@keyframes spin44 {
  50% {
    opacity: .6;
    transform: rotateX(360deg) rotateY(360deg);
  }
}
@keyframes move {
  to {
    transform: translateX(-134.25144px) translateY(60.73724px);
  }
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<ul>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li></li>
</ul>
<!-- partial -->
  
</body>
</html>
