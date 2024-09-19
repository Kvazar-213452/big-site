<?php session_start();
 include $_SERVER['DOCUMENT_ROOT'] . '/php/def.php'; 
 include $_SERVER['DOCUMENT_ROOT'] . '/dist/html/add/include.php';
 fon_check(22222, $_SESSION["id_user"], $url_shop_server, $comand_shop_server_fonuser, $domen_name);
 ?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
<link rel='stylesheet' href='https://cdn.jsdelivr.net/gh/alphardex/aqua.css@master/dist/aqua.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="stars">
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
  <div class="star"></div>
</div>
<!-- partial -->
  
</body>
</html>
<style>

.stars {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 120%;
  transform: rotate(-45deg);
}

.star {
  --star-color: var(--primary-color);
  --star-tail-length: 6em;
  --star-tail-height: 2px;
  --star-width: calc(var(--star-tail-length) / 6);
  --fall-duration: 9s;
  --tail-fade-duration: var(--fall-duration);
  position: absolute;
  top: var(--top-offset);
  left: 0;
  width: var(--star-tail-length);
  height: var(--star-tail-height);
  color: var(--star-color);
  background: linear-gradient(45deg, currentColor, transparent);
  border-radius: 50%;
  filter: drop-shadow(0 0 6px currentColor);
  transform: translate3d(104em, 0, 0);
  animation: fall var(--fall-duration) var(--fall-delay) linear infinite, tail-fade var(--tail-fade-duration) var(--fall-delay) ease-out infinite;
}
@media screen and (max-width: 750px) {
  .star {
    animation: fall var(--fall-duration) var(--fall-delay) linear infinite;
  }
}
.star:nth-child(1) {
  --star-tail-length: 6.13em;
  --top-offset: 18.37vh;
  --fall-duration: 11.086s;
  --fall-delay: 5.256s;
}
.star:nth-child(2) {
  --star-tail-length: 5.16em;
  --top-offset: 63.14vh;
  --fall-duration: 9.168s;
  --fall-delay: 0.544s;
}
.star:nth-child(3) {
  --star-tail-length: 5.78em;
  --top-offset: 65.68vh;
  --fall-duration: 11.632s;
  --fall-delay: 2.488s;
}
.star:nth-child(4) {
  --star-tail-length: 5.04em;
  --top-offset: 86.95vh;
  --fall-duration: 7.799s;
  --fall-delay: 3.88s;
}
.star:nth-child(5) {
  --star-tail-length: 7.08em;
  --top-offset: 27.41vh;
  --fall-duration: 9.654s;
  --fall-delay: 9.08s;
}
.star:nth-child(6) {
  --star-tail-length: 7.33em;
  --top-offset: 35.83vh;
  --fall-duration: 7.945s;
  --fall-delay: 8.146s;
}
.star:nth-child(7) {
  --star-tail-length: 6.65em;
  --top-offset: 54.03vh;
  --fall-duration: 8.534s;
  --fall-delay: 4.369s;
}
.star:nth-child(8) {
  --star-tail-length: 5.43em;
  --top-offset: 76.67vh;
  --fall-duration: 6.709s;
  --fall-delay: 1.245s;
}
.star:nth-child(9) {
  --star-tail-length: 6.18em;
  --top-offset: 73.17vh;
  --fall-duration: 9.456s;
  --fall-delay: 5.841s;
}
.star:nth-child(10) {
  --star-tail-length: 5.35em;
  --top-offset: 59.72vh;
  --fall-duration: 8.765s;
  --fall-delay: 2.83s;
}
.star:nth-child(11) {
  --star-tail-length: 7.18em;
  --top-offset: 50.02vh;
  --fall-duration: 6.287s;
  --fall-delay: 8.691s;
}
.star:nth-child(12) {
  --star-tail-length: 6.56em;
  --top-offset: 28.27vh;
  --fall-duration: 9.653s;
  --fall-delay: 4.81s;
}
.star:nth-child(13) {
  --star-tail-length: 5.33em;
  --top-offset: 38.31vh;
  --fall-duration: 10.286s;
  --fall-delay: 6.668s;
}
.star:nth-child(14) {
  --star-tail-length: 5.87em;
  --top-offset: 58.2vh;
  --fall-duration: 6.049s;
  --fall-delay: 5.272s;
}
.star:nth-child(15) {
  --star-tail-length: 6.23em;
  --top-offset: 62.54vh;
  --fall-duration: 10.058s;
  --fall-delay: 9.86s;
}
.star:nth-child(16) {
  --star-tail-length: 6.4em;
  --top-offset: 73.41vh;
  --fall-duration: 10.761s;
  --fall-delay: 2.292s;
}
.star:nth-child(17) {
  --star-tail-length: 5.29em;
  --top-offset: 15.38vh;
  --fall-duration: 6.99s;
  --fall-delay: 8.006s;
}
.star:nth-child(18) {
  --star-tail-length: 7.14em;
  --top-offset: 44.91vh;
  --fall-duration: 8.94s;
  --fall-delay: 5.053s;
}
.star:nth-child(19) {
  --star-tail-length: 6.34em;
  --top-offset: 46.37vh;
  --fall-duration: 11.876s;
  --fall-delay: 4.768s;
}
.star:nth-child(20) {
  --star-tail-length: 5.34em;
  --top-offset: 80.27vh;
  --fall-duration: 7.016s;
  --fall-delay: 4.232s;
}
.star:nth-child(21) {
  --star-tail-length: 5.31em;
  --top-offset: 35.76vh;
  --fall-duration: 10.446s;
  --fall-delay: 5.55s;
}
.star:nth-child(22) {
  --star-tail-length: 5.03em;
  --top-offset: 94.7vh;
  --fall-duration: 10.701s;
  --fall-delay: 3.801s;
}
.star:nth-child(23) {
  --star-tail-length: 5.74em;
  --top-offset: 75.03vh;
  --fall-duration: 10.673s;
  --fall-delay: 6.29s;
}
.star:nth-child(24) {
  --star-tail-length: 6.2em;
  --top-offset: 76.62vh;
  --fall-duration: 11.456s;
  --fall-delay: 8.663s;
}
.star:nth-child(25) {
  --star-tail-length: 5.64em;
  --top-offset: 38.43vh;
  --fall-duration: 8.236s;
  --fall-delay: 3.028s;
}
.star:nth-child(26) {
  --star-tail-length: 6.3em;
  --top-offset: 1.37vh;
  --fall-duration: 11.915s;
  --fall-delay: 3.121s;
}
.star:nth-child(27) {
  --star-tail-length: 6.72em;
  --top-offset: 58.76vh;
  --fall-duration: 7.35s;
  --fall-delay: 6.649s;
}
.star:nth-child(28) {
  --star-tail-length: 5.89em;
  --top-offset: 25.78vh;
  --fall-duration: 11.349s;
  --fall-delay: 1.283s;
}
.star:nth-child(29) {
  --star-tail-length: 5.03em;
  --top-offset: 84.12vh;
  --fall-duration: 9.333s;
  --fall-delay: 3.04s;
}
.star:nth-child(30) {
  --star-tail-length: 6.07em;
  --top-offset: 41.04vh;
  --fall-duration: 6.026s;
  --fall-delay: 7.453s;
}
.star:nth-child(31) {
  --star-tail-length: 6.21em;
  --top-offset: 55vh;
  --fall-duration: 10.181s;
  --fall-delay: 5.561s;
}
.star:nth-child(32) {
  --star-tail-length: 5.81em;
  --top-offset: 18.76vh;
  --fall-duration: 6.263s;
  --fall-delay: 2.228s;
}
.star:nth-child(33) {
  --star-tail-length: 5.15em;
  --top-offset: 5.9vh;
  --fall-duration: 10.455s;
  --fall-delay: 8.545s;
}
.star:nth-child(34) {
  --star-tail-length: 6.29em;
  --top-offset: 50.33vh;
  --fall-duration: 11.536s;
  --fall-delay: 8.438s;
}
.star:nth-child(35) {
  --star-tail-length: 6.28em;
  --top-offset: 71.57vh;
  --fall-duration: 11.589s;
  --fall-delay: 7.277s;
}
.star:nth-child(36) {
  --star-tail-length: 5.84em;
  --top-offset: 2.59vh;
  --fall-duration: 8.477s;
  --fall-delay: 2.061s;
}
.star:nth-child(37) {
  --star-tail-length: 5.71em;
  --top-offset: 98.01vh;
  --fall-duration: 11.912s;
  --fall-delay: 7.467s;
}
.star:nth-child(38) {
  --star-tail-length: 5.57em;
  --top-offset: 0.27vh;
  --fall-duration: 11.496s;
  --fall-delay: 2.789s;
}
.star:nth-child(39) {
  --star-tail-length: 6.92em;
  --top-offset: 19.8vh;
  --fall-duration: 10.606s;
  --fall-delay: 6.781s;
}
.star:nth-child(40) {
  --star-tail-length: 5.93em;
  --top-offset: 42.61vh;
  --fall-duration: 8.575s;
  --fall-delay: 7.762s;
}
.star:nth-child(41) {
  --star-tail-length: 5.37em;
  --top-offset: 6.35vh;
  --fall-duration: 10.075s;
  --fall-delay: 4.888s;
}
.star:nth-child(42) {
  --star-tail-length: 5.52em;
  --top-offset: 5.63vh;
  --fall-duration: 9.407s;
  --fall-delay: 3.272s;
}
.star:nth-child(43) {
  --star-tail-length: 6.58em;
  --top-offset: 29.58vh;
  --fall-duration: 11.273s;
  --fall-delay: 7.274s;
}
.star:nth-child(44) {
  --star-tail-length: 5.59em;
  --top-offset: 39.1vh;
  --fall-duration: 7.872s;
  --fall-delay: 0.924s;
}
.star:nth-child(45) {
  --star-tail-length: 7.25em;
  --top-offset: 4.49vh;
  --fall-duration: 9.884s;
  --fall-delay: 6.56s;
}
.star:nth-child(46) {
  --star-tail-length: 7.05em;
  --top-offset: 19.05vh;
  --fall-duration: 9.144s;
  --fall-delay: 1.387s;
}
.star:nth-child(47) {
  --star-tail-length: 7.5em;
  --top-offset: 23.81vh;
  --fall-duration: 10.169s;
  --fall-delay: 7.228s;
}
.star:nth-child(48) {
  --star-tail-length: 5.98em;
  --top-offset: 91.74vh;
  --fall-duration: 9.674s;
  --fall-delay: 3.439s;
}
.star:nth-child(49) {
  --star-tail-length: 5.92em;
  --top-offset: 37.55vh;
  --fall-duration: 11.095s;
  --fall-delay: 9.35s;
}
.star:nth-child(50) {
  --star-tail-length: 5.93em;
  --top-offset: 35.48vh;
  --fall-duration: 9.164s;
  --fall-delay: 0.073s;
}
.star::before, .star::after {
  position: absolute;
  top: 0;
  left: calc(var(--star-width) / -2);
  width: var(--star-width);
  height: 100%;
  background: linear-gradient(45deg, transparent, currentColor, transparent);
  border-radius: inherit;
  animation: blink 2s linear infinite;
}
.star::before {
  transform: rotate(45deg);
}
.star::after {
  transform: rotate(-45deg);
}

@keyframes fall {
  to {
    transform: translate3d(-30em, 0, 0);
  }
}
@keyframes tail-fade {
  0%, 50% {
    width: var(--star-tail-length);
    opacity: 1;
  }
  70%, 80% {
    width: 0;
    opacity: 0.4;
  }
  100% {
    width: 0;
    opacity: 0;
  }
}
@keyframes blink {
  50% {
    opacity: 0.6;
  }
}
</style>