<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Starry Sky with layered SVG + CSS Animation</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
  :root {
  --twinkle-duration: 4s;
}

.stars-wrapper {
  position: relative;
  pointer-events: none;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}

.stars {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  -webkit-animation: twinkle var(--twinkle-duration) ease-in-out infinite;
          animation: twinkle var(--twinkle-duration) ease-in-out infinite;
}
.stars:nth-child(2) {
  -webkit-animation-delay: calc(var(--twinkle-duration) * -0.33);
          animation-delay: calc(var(--twinkle-duration) * -0.33);
}
.stars:nth-child(3) {
  -webkit-animation-delay: calc(var(--twinkle-duration) * -0.66);
          animation-delay: calc(var(--twinkle-duration) * -0.66);
}
@-webkit-keyframes twinkle {
  25% {
    opacity: 0;
  }
}
@keyframes twinkle {
  25% {
    opacity: 0;
  }
}

.star {
  fill: white;
}
.star:nth-child(3n) {
  opacity: 0.8;
}
.star:nth-child(7n) {
  opacity: 0.6;
}
.star:nth-child(13n) {
  opacity: 0.4;
}
.star:nth-child(19n) {
  opacity: 0.2;
}

.comet {
  transform-origin: center center;
  -webkit-animation: comet 10s linear infinite;
          animation: comet 10s linear infinite;
}
@-webkit-keyframes comet {
  0%, 40% {
    transform: translateX(0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  60%, 100% {
    transform: translateX(-100vmax);
    opacity: 0;
  }
}
@keyframes comet {
  0%, 40% {
    transform: translateX(0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  60%, 100% {
    transform: translateX(-100vmax);
    opacity: 0;
  }
}

.comet-b {
  -webkit-animation-delay: -3.3s;
          animation-delay: -3.3s;
}

.comet-c {
  -webkit-animation-delay: -5s;
          animation-delay: -5s;
}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="stars-wrapper">
  <svg class="stars" width="100%" height="100%" preserveAspectRatio="none">
    <circle class="star" cx="60.64%" cy="92.13%" r="1"></circle>
    <circle class="star" cx="83.73%" cy="98.38%" r="1.2"></circle>
    <circle class="star" cx="35.84%" cy="14.2%" r="0.8"></circle>
    <circle class="star" cx="87.74%" cy="75.21%" r="1"></circle>
    <circle class="star" cx="20.31%" cy="0.73%" r="0.9"></circle>
    <circle class="star" cx="82.42%" cy="7.38%" r="0.8"></circle>
    <circle class="star" cx="91.94%" cy="49.45%" r="1.1"></circle>
    <circle class="star" cx="89.7%" cy="41.31%" r="0.8"></circle>
    <circle class="star" cx="6.63%" cy="10.37%" r="1.4"></circle>
    <circle class="star" cx="99.47%" cy="86.75%" r="1.5"></circle>
    <circle class="star" cx="30.28%" cy="12.92%" r="0.5"></circle>
    <circle class="star" cx="26.94%" cy="8.56%" r="0.5"></circle>
    <circle class="star" cx="16.01%" cy="99.24%" r="0.7"></circle>
    <circle class="star" cx="30.69%" cy="43.87%" r="1.2"></circle>
    <circle class="star" cx="70.43%" cy="0.59%" r="0.8"></circle>
    <circle class="star" cx="79.66%" cy="80.64%" r="1.3"></circle>
    <circle class="star" cx="87.48%" cy="75.88%" r="1.3"></circle>
    <circle class="star" cx="43.64%" cy="80.69%" r="1"></circle>
    <circle class="star" cx="38.23%" cy="19.12%" r="1.1"></circle>
    <circle class="star" cx="21.21%" cy="7.54%" r="1.1"></circle>
    <circle class="star" cx="9.18%" cy="50.06%" r="1.3"></circle>
    <circle class="star" cx="88.53%" cy="70.96%" r="1.1"></circle>
    <circle class="star" cx="8.77%" cy="9.1%" r="1.4"></circle>
    <circle class="star" cx="92.19%" cy="71.95%" r="1"></circle>
    <circle class="star" cx="85.57%" cy="88.32%" r="1.5"></circle>
    <circle class="star" cx="4.9%" cy="23.46%" r="1"></circle>
    <circle class="star" cx="14.92%" cy="44.98%" r="0.7"></circle>
    <circle class="star" cx="58.49%" cy="4.07%" r="0.7"></circle>
    <circle class="star" cx="16.41%" cy="48.52%" r="0.8"></circle>
    <circle class="star" cx="1.09%" cy="69.56%" r="0.7"></circle>
    <circle class="star" cx="32.79%" cy="84.82%" r="0.9"></circle>
    <circle class="star" cx="28.77%" cy="41.71%" r="0.8"></circle>
    <circle class="star" cx="33.2%" cy="49.84%" r="0.9"></circle>
    <circle class="star" cx="65.08%" cy="63.56%" r="1.2"></circle>
    <circle class="star" cx="80.61%" cy="85.81%" r="1.2"></circle>
    <circle class="star" cx="73%" cy="38.6%" r="1"></circle>
    <circle class="star" cx="77.42%" cy="90.8%" r="1.4"></circle>
    <circle class="star" cx="87.5%" cy="71.08%" r="0.7"></circle>
    <circle class="star" cx="74.88%" cy="19.35%" r="0.8"></circle>
    <circle class="star" cx="29.67%" cy="80.02%" r="1.1"></circle>
    <circle class="star" cx="44.45%" cy="15.68%" r="0.8"></circle>
    <circle class="star" cx="98.95%" cy="93.59%" r="1.3"></circle>
    <circle class="star" cx="25.78%" cy="54.35%" r="1.2"></circle>
    <circle class="star" cx="42.52%" cy="89.73%" r="1.3"></circle>
    <circle class="star" cx="20.14%" cy="42.01%" r="1.1"></circle>
    <circle class="star" cx="79.96%" cy="51.93%" r="0.8"></circle>
    <circle class="star" cx="68.47%" cy="26.49%" r="1.2"></circle>
    <circle class="star" cx="31.74%" cy="90.94%" r="0.9"></circle>
    <circle class="star" cx="93.25%" cy="19.62%" r="1.2"></circle>
    <circle class="star" cx="8.41%" cy="12.91%" r="1"></circle>
    <circle class="star" cx="74.38%" cy="53.74%" r="1.2"></circle>
    <circle class="star" cx="97.29%" cy="71.74%" r="1.4"></circle>
    <circle class="star" cx="25.51%" cy="36.81%" r="0.6"></circle>
    <circle class="star" cx="69.37%" cy="29.92%" r="0.7"></circle>
    <circle class="star" cx="40.76%" cy="91.2%" r="1.1"></circle>
    <circle class="star" cx="37.8%" cy="64.18%" r="1"></circle>
    <circle class="star" cx="35.68%" cy="74.34%" r="0.9"></circle>
    <circle class="star" cx="52.36%" cy="65.17%" r="1.1"></circle>
    <circle class="star" cx="54.97%" cy="51.1%" r="0.8"></circle>
    <circle class="star" cx="29.37%" cy="91.3%" r="0.9"></circle>
    <circle class="star" cx="93.18%" cy="25.7%" r="1.3"></circle>
    <circle class="star" cx="94.09%" cy="47.28%" r="0.7"></circle>
    <circle class="star" cx="96.69%" cy="47.04%" r="1.4"></circle>
    <circle class="star" cx="21.55%" cy="47.09%" r="1"></circle>
    <circle class="star" cx="2.84%" cy="64.43%" r="0.7"></circle>
    <circle class="star" cx="26.63%" cy="33.77%" r="0.5"></circle>
    <circle class="star" cx="20.89%" cy="57.94%" r="1.4"></circle>
    <circle class="star" cx="6.61%" cy="6.16%" r="1.3"></circle>
    <circle class="star" cx="88.52%" cy="84.67%" r="1.2"></circle>
    <circle class="star" cx="36.36%" cy="46.89%" r="1"></circle>
    <circle class="star" cx="72.16%" cy="94.45%" r="0.8"></circle>
    <circle class="star" cx="3.11%" cy="28.28%" r="1.2"></circle>
    <circle class="star" cx="1.88%" cy="78.31%" r="0.6"></circle>
    <circle class="star" cx="18.15%" cy="36.97%" r="0.9"></circle>
    <circle class="star" cx="89.45%" cy="91.83%" r="0.9"></circle>
    <circle class="star" cx="30.6%" cy="98.01%" r="0.6"></circle>
    <circle class="star" cx="74.11%" cy="5.14%" r="0.6"></circle>
    <circle class="star" cx="35.62%" cy="41.13%" r="0.5"></circle>
    <circle class="star" cx="21.09%" cy="31.83%" r="0.8"></circle>
    <circle class="star" cx="28.08%" cy="51.48%" r="1"></circle>
    <circle class="star" cx="16.1%" cy="98.84%" r="0.9"></circle>
    <circle class="star" cx="47.52%" cy="23.63%" r="1"></circle>
    <circle class="star" cx="74.95%" cy="89.24%" r="1.2"></circle>
    <circle class="star" cx="70.92%" cy="52.27%" r="0.8"></circle>
    <circle class="star" cx="1.35%" cy="68.65%" r="1.1"></circle>
    <circle class="star" cx="47.62%" cy="92.6%" r="1.4"></circle>
    <circle class="star" cx="65.03%" cy="64.09%" r="0.5"></circle>
    <circle class="star" cx="64.9%" cy="50.77%" r="1.5"></circle>
    <circle class="star" cx="44.82%" cy="25.79%" r="1.4"></circle>
    <circle class="star" cx="55.78%" cy="22.92%" r="1.4"></circle>
    <circle class="star" cx="94.66%" cy="1.11%" r="1.3"></circle>
    <circle class="star" cx="77.63%" cy="11.22%" r="1.2"></circle>
    <circle class="star" cx="21.03%" cy="65.5%" r="0.8"></circle>
    <circle class="star" cx="60.23%" cy="94.68%" r="0.5"></circle>
    <circle class="star" cx="88.87%" cy="33.57%" r="1"></circle>
    <circle class="star" cx="30.86%" cy="44.09%" r="1.4"></circle>
    <circle class="star" cx="1.07%" cy="78.28%" r="1.2"></circle>
    <circle class="star" cx="64.05%" cy="3.62%" r="1.5"></circle>
    <circle class="star" cx="1.37%" cy="61.74%" r="0.5"></circle>
    <circle class="star" cx="43.3%" cy="14.96%" r="1.4"></circle>
    <circle class="star" cx="21.54%" cy="95.99%" r="0.8"></circle>
    <circle class="star" cx="21.69%" cy="72.42%" r="1.1"></circle>
    <circle class="star" cx="72.68%" cy="35.16%" r="1"></circle>
    <circle class="star" cx="91.47%" cy="2.93%" r="0.5"></circle>
    <circle class="star" cx="96.39%" cy="18.02%" r="1.2"></circle>
    <circle class="star" cx="3.97%" cy="82.37%" r="0.9"></circle>
    <circle class="star" cx="49.51%" cy="92.89%" r="0.5"></circle>
    <circle class="star" cx="25.63%" cy="52.06%" r="1.1"></circle>
    <circle class="star" cx="20.25%" cy="42.31%" r="0.5"></circle>
    <circle class="star" cx="78.95%" cy="28.97%" r="0.9"></circle>
    <circle class="star" cx="85.07%" cy="46.2%" r="1"></circle>
    <circle class="star" cx="71.44%" cy="66.15%" r="1.2"></circle>
    <circle class="star" cx="81.52%" cy="93.57%" r="1.4"></circle>
    <circle class="star" cx="67.34%" cy="5.61%" r="1.1"></circle>
    <circle class="star" cx="36.48%" cy="44.99%" r="1.5"></circle>
    <circle class="star" cx="46.91%" cy="7.78%" r="0.6"></circle>
    <circle class="star" cx="88.63%" cy="85.86%" r="1.2"></circle>
    <circle class="star" cx="17.41%" cy="81.64%" r="1.3"></circle>
    <circle class="star" cx="13.51%" cy="69.33%" r="1.1"></circle>
    <circle class="star" cx="17.15%" cy="47.02%" r="1.5"></circle>
    <circle class="star" cx="79.15%" cy="63.88%" r="0.7"></circle>
    <circle class="star" cx="45.58%" cy="71.36%" r="1.3"></circle>
    <circle class="star" cx="37.58%" cy="64.3%" r="0.8"></circle>
    <circle class="star" cx="4.98%" cy="30.2%" r="0.9"></circle>
    <circle class="star" cx="84.81%" cy="48.7%" r="1.4"></circle>
    <circle class="star" cx="24.47%" cy="81.64%" r="0.8"></circle>
    <circle class="star" cx="59.53%" cy="66.92%" r="1.2"></circle>
    <circle class="star" cx="0.03%" cy="10.48%" r="1.3"></circle>
    <circle class="star" cx="93.93%" cy="95.29%" r="1.3"></circle>
    <circle class="star" cx="1.21%" cy="28.72%" r="1"></circle>
    <circle class="star" cx="92.91%" cy="42.64%" r="1.3"></circle>
    <circle class="star" cx="54.83%" cy="67.96%" r="1.4"></circle>
    <circle class="star" cx="19.82%" cy="50.43%" r="1.3"></circle>
    <circle class="star" cx="71.1%" cy="16.92%" r="1.5"></circle>
    <circle class="star" cx="51.36%" cy="99.31%" r="1.4"></circle>
    <circle class="star" cx="40.97%" cy="61.55%" r="0.9"></circle>
    <circle class="star" cx="74.71%" cy="25.2%" r="1.2"></circle>
    <circle class="star" cx="27.91%" cy="42.65%" r="1.3"></circle>
    <circle class="star" cx="15.54%" cy="79.11%" r="0.6"></circle>
    <circle class="star" cx="76.99%" cy="70.21%" r="1.4"></circle>
    <circle class="star" cx="54.11%" cy="66.83%" r="0.6"></circle>
    <circle class="star" cx="68.92%" cy="19.02%" r="1.1"></circle>
    <circle class="star" cx="53.02%" cy="15.21%" r="0.5"></circle>
    <circle class="star" cx="78.07%" cy="57.69%" r="1.3"></circle>
    <circle class="star" cx="88.13%" cy="4.2%" r="0.9"></circle>
    <circle class="star" cx="16.9%" cy="88.04%" r="1"></circle>
    <circle class="star" cx="21.82%" cy="38.03%" r="1"></circle>
    <circle class="star" cx="88.91%" cy="52.93%" r="0.9"></circle>
    <circle class="star" cx="24.93%" cy="23.93%" r="1.4"></circle>
    <circle class="star" cx="22.15%" cy="41.97%" r="1.4"></circle>
    <circle class="star" cx="74.94%" cy="12.73%" r="1.4"></circle>
    <circle class="star" cx="89.11%" cy="81.36%" r="0.6"></circle>
    <circle class="star" cx="87.11%" cy="21.33%" r="0.8"></circle>
    <circle class="star" cx="92.9%" cy="1.27%" r="1.4"></circle>
    <circle class="star" cx="55.62%" cy="73.71%" r="0.5"></circle>
    <circle class="star" cx="81.24%" cy="81.86%" r="1.1"></circle>
    <circle class="star" cx="74.18%" cy="69.94%" r="1.4"></circle>
    <circle class="star" cx="73.25%" cy="2.46%" r="0.7"></circle>
    <circle class="star" cx="62.82%" cy="52.27%" r="0.8"></circle>
    <circle class="star" cx="46.49%" cy="52.51%" r="0.8"></circle>
    <circle class="star" cx="83.85%" cy="62.41%" r="0.5"></circle>
    <circle class="star" cx="27.07%" cy="92.37%" r="0.6"></circle>
    <circle class="star" cx="43.08%" cy="63.28%" r="0.9"></circle>
    <circle class="star" cx="12.77%" cy="65%" r="0.8"></circle>
    <circle class="star" cx="50.07%" cy="61.55%" r="1"></circle>
    <circle class="star" cx="48.02%" cy="71.42%" r="1.4"></circle>
    <circle class="star" cx="84.77%" cy="42.27%" r="0.8"></circle>
    <circle class="star" cx="89.01%" cy="94.86%" r="1.5"></circle>
    <circle class="star" cx="74.24%" cy="42.23%" r="1.4"></circle>
    <circle class="star" cx="7.79%" cy="68.24%" r="1.4"></circle>
    <circle class="star" cx="33.65%" cy="24.55%" r="0.9"></circle>
    <circle class="star" cx="28.86%" cy="45.32%" r="1.2"></circle>
    <circle class="star" cx="89.4%" cy="20.58%" r="0.5"></circle>
    <circle class="star" cx="27.29%" cy="24.69%" r="0.8"></circle>
    <circle class="star" cx="2.95%" cy="81.83%" r="0.9"></circle>
    <circle class="star" cx="53.35%" cy="80.59%" r="1.4"></circle>
    <circle class="star" cx="68.14%" cy="3.48%" r="0.6"></circle>
    <circle class="star" cx="27.11%" cy="46.86%" r="0.7"></circle>
    <circle class="star" cx="90%" cy="64.87%" r="0.9"></circle>
    <circle class="star" cx="32.28%" cy="24.8%" r="1.4"></circle>
    <circle class="star" cx="1.75%" cy="97.09%" r="0.8"></circle>
    <circle class="star" cx="10.53%" cy="81.25%" r="1.4"></circle>
    <circle class="star" cx="41.03%" cy="70.93%" r="0.7"></circle>
    <circle class="star" cx="38.97%" cy="74.32%" r="0.5"></circle>
    <circle class="star" cx="51.41%" cy="56%" r="0.5"></circle>
    <circle class="star" cx="79.86%" cy="61.81%" r="0.7"></circle>
    <circle class="star" cx="73.88%" cy="93.77%" r="0.5"></circle>
    <circle class="star" cx="23.63%" cy="31.6%" r="0.9"></circle>
    <circle class="star" cx="36.52%" cy="11.51%" r="0.9"></circle>
    <circle class="star" cx="62.97%" cy="63.85%" r="0.8"></circle>
    <circle class="star" cx="95.85%" cy="98.23%" r="0.7"></circle>
    <circle class="star" cx="14.52%" cy="83.66%" r="0.7"></circle>
    <circle class="star" cx="27.24%" cy="34.27%" r="0.5"></circle>
    <circle class="star" cx="79.73%" cy="55.76%" r="1.2"></circle>
    <circle class="star" cx="19.19%" cy="99.99%" r="0.8"></circle>
    <circle class="star" cx="30.34%" cy="50.73%" r="1.2"></circle>
    <circle class="star" cx="42.28%" cy="60.1%" r="1.2"></circle>
    <circle class="star" cx="95.37%" cy="9.88%" r="1.1"></circle>
    <circle class="star" cx="64.65%" cy="95.34%" r="0.7"></circle>
    <circle class="star" cx="11.83%" cy="35.87%" r="0.7"></circle>
  </svg>
  <svg class="stars" width="100%" height="100%" preserveAspectRatio="none">
    <circle class="star" cx="56%" cy="86.28%" r="0.7"></circle>
    <circle class="star" cx="62.82%" cy="12.84%" r="1.1"></circle>
    <circle class="star" cx="33.01%" cy="79.19%" r="0.7"></circle>
    <circle class="star" cx="3.66%" cy="82.67%" r="0.8"></circle>
    <circle class="star" cx="76.14%" cy="56.88%" r="1.3"></circle>
    <circle class="star" cx="51.67%" cy="14.85%" r="0.5"></circle>
    <circle class="star" cx="32.32%" cy="65.62%" r="1"></circle>
    <circle class="star" cx="35.35%" cy="60.02%" r="0.6"></circle>
    <circle class="star" cx="64.08%" cy="59.97%" r="0.6"></circle>
    <circle class="star" cx="25.36%" cy="3.15%" r="0.9"></circle>
    <circle class="star" cx="94.58%" cy="6.56%" r="1"></circle>
    <circle class="star" cx="66.06%" cy="48.88%" r="0.9"></circle>
    <circle class="star" cx="32.99%" cy="88.94%" r="1.1"></circle>
    <circle class="star" cx="46.53%" cy="72.3%" r="1"></circle>
    <circle class="star" cx="74.65%" cy="21.6%" r="0.6"></circle>
    <circle class="star" cx="72.31%" cy="25.72%" r="0.9"></circle>
    <circle class="star" cx="84.72%" cy="29.71%" r="0.6"></circle>
    <circle class="star" cx="4.31%" cy="25.94%" r="1.3"></circle>
    <circle class="star" cx="66.35%" cy="34.65%" r="0.7"></circle>
    <circle class="star" cx="9.26%" cy="6.39%" r="0.9"></circle>
    <circle class="star" cx="84.56%" cy="74.52%" r="1.1"></circle>
    <circle class="star" cx="56.12%" cy="0.51%" r="1.3"></circle>
    <circle class="star" cx="62.17%" cy="42.25%" r="1.4"></circle>
    <circle class="star" cx="39.4%" cy="89.54%" r="1"></circle>
    <circle class="star" cx="51.04%" cy="66.89%" r="0.5"></circle>
    <circle class="star" cx="34.83%" cy="41.74%" r="0.8"></circle>
    <circle class="star" cx="51.94%" cy="90.27%" r="0.9"></circle>
    <circle class="star" cx="36.41%" cy="43.01%" r="1.3"></circle>
    <circle class="star" cx="64.16%" cy="42.65%" r="0.7"></circle>
    <circle class="star" cx="20.13%" cy="64.63%" r="1.5"></circle>
    <circle class="star" cx="33.83%" cy="5.61%" r="1.4"></circle>
    <circle class="star" cx="92.05%" cy="92.79%" r="1.3"></circle>
    <circle class="star" cx="26.99%" cy="31.7%" r="1.3"></circle>
    <circle class="star" cx="37.71%" cy="80.64%" r="1.1"></circle>
    <circle class="star" cx="58.32%" cy="36.67%" r="1.3"></circle>
    <circle class="star" cx="34.99%" cy="73.7%" r="1.3"></circle>
    <circle class="star" cx="16.66%" cy="48.39%" r="1.3"></circle>
    <circle class="star" cx="81.37%" cy="76%" r="1.1"></circle>
    <circle class="star" cx="86.17%" cy="16.31%" r="1"></circle>
    <circle class="star" cx="86.2%" cy="67.7%" r="0.8"></circle>
    <circle class="star" cx="14.53%" cy="95.03%" r="0.8"></circle>
    <circle class="star" cx="14.78%" cy="19.74%" r="1.5"></circle>
    <circle class="star" cx="1.45%" cy="2.17%" r="0.7"></circle>
    <circle class="star" cx="78.3%" cy="47.95%" r="1.4"></circle>
    <circle class="star" cx="60.31%" cy="11.3%" r="1.1"></circle>
    <circle class="star" cx="84.89%" cy="77.3%" r="0.9"></circle>
    <circle class="star" cx="1.97%" cy="79.42%" r="1.2"></circle>
    <circle class="star" cx="50.59%" cy="58.67%" r="1"></circle>
    <circle class="star" cx="3.06%" cy="16.85%" r="0.6"></circle>
    <circle class="star" cx="42.72%" cy="8.34%" r="0.6"></circle>
    <circle class="star" cx="64.1%" cy="0.77%" r="1"></circle>
    <circle class="star" cx="54.8%" cy="52.4%" r="0.5"></circle>
    <circle class="star" cx="75.07%" cy="27.89%" r="1"></circle>
    <circle class="star" cx="15.16%" cy="96.16%" r="1.1"></circle>
    <circle class="star" cx="36.51%" cy="5.3%" r="0.8"></circle>
    <circle class="star" cx="68.68%" cy="6.99%" r="1.3"></circle>
    <circle class="star" cx="73.91%" cy="59.72%" r="1"></circle>
    <circle class="star" cx="33.7%" cy="91.09%" r="0.5"></circle>
    <circle class="star" cx="34.7%" cy="84.28%" r="0.8"></circle>
    <circle class="star" cx="43.29%" cy="18.14%" r="1.5"></circle>
    <circle class="star" cx="76.62%" cy="11.99%" r="0.6"></circle>
    <circle class="star" cx="52.11%" cy="97.17%" r="0.8"></circle>
    <circle class="star" cx="20.76%" cy="90.5%" r="1.2"></circle>
    <circle class="star" cx="26.5%" cy="64.8%" r="1.4"></circle>
    <circle class="star" cx="48.56%" cy="57.19%" r="1.2"></circle>
    <circle class="star" cx="41.5%" cy="96.81%" r="0.6"></circle>
    <circle class="star" cx="99%" cy="96.35%" r="1.5"></circle>
    <circle class="star" cx="92.07%" cy="29.18%" r="0.7"></circle>
    <circle class="star" cx="53.73%" cy="41.25%" r="0.7"></circle>
    <circle class="star" cx="75.77%" cy="76.75%" r="1"></circle>
    <circle class="star" cx="58.72%" cy="4.52%" r="1.1"></circle>
    <circle class="star" cx="76.8%" cy="97.24%" r="0.6"></circle>
    <circle class="star" cx="94.9%" cy="95.84%" r="1.5"></circle>
    <circle class="star" cx="14.31%" cy="84.72%" r="1.2"></circle>
    <circle class="star" cx="70.45%" cy="17.67%" r="1.3"></circle>
    <circle class="star" cx="37.51%" cy="9.08%" r="1.1"></circle>
    <circle class="star" cx="52.91%" cy="26.23%" r="0.8"></circle>
    <circle class="star" cx="35.12%" cy="96.85%" r="0.9"></circle>
    <circle class="star" cx="75.63%" cy="12.46%" r="1.2"></circle>
    <circle class="star" cx="47.1%" cy="54.86%" r="0.6"></circle>
    <circle class="star" cx="46.23%" cy="50.81%" r="1.4"></circle>
    <circle class="star" cx="61.07%" cy="32.57%" r="1.1"></circle>
    <circle class="star" cx="61.8%" cy="36.72%" r="1.1"></circle>
    <circle class="star" cx="34.92%" cy="50.29%" r="1.2"></circle>
    <circle class="star" cx="44.55%" cy="67.33%" r="1.3"></circle>
    <circle class="star" cx="65.47%" cy="28.18%" r="1"></circle>
    <circle class="star" cx="52.72%" cy="85.88%" r="0.6"></circle>
    <circle class="star" cx="82.8%" cy="96.84%" r="1"></circle>
    <circle class="star" cx="13.49%" cy="26.03%" r="1"></circle>
    <circle class="star" cx="7.61%" cy="77.19%" r="0.7"></circle>
    <circle class="star" cx="34.91%" cy="89.44%" r="1.1"></circle>
    <circle class="star" cx="30.16%" cy="60.68%" r="1.2"></circle>
    <circle class="star" cx="79.3%" cy="81.46%" r="1.5"></circle>
    <circle class="star" cx="2.41%" cy="26.74%" r="0.9"></circle>
    <circle class="star" cx="19.33%" cy="22.37%" r="1"></circle>
    <circle class="star" cx="48.83%" cy="48.93%" r="0.9"></circle>
    <circle class="star" cx="13.71%" cy="38.02%" r="0.9"></circle>
    <circle class="star" cx="52.76%" cy="84.07%" r="0.9"></circle>
    <circle class="star" cx="89.75%" cy="35.55%" r="0.5"></circle>
    <circle class="star" cx="45.57%" cy="49.47%" r="1.3"></circle>
    <circle class="star" cx="52.79%" cy="91.5%" r="0.9"></circle>
    <circle class="star" cx="28.55%" cy="28.5%" r="0.8"></circle>
    <circle class="star" cx="66.17%" cy="12.33%" r="0.8"></circle>
    <circle class="star" cx="11.61%" cy="88.64%" r="0.6"></circle>
    <circle class="star" cx="17.9%" cy="54.51%" r="1.1"></circle>
    <circle class="star" cx="31.87%" cy="33.16%" r="1.3"></circle>
    <circle class="star" cx="24.16%" cy="89.44%" r="0.7"></circle>
    <circle class="star" cx="93.17%" cy="61.15%" r="1"></circle>
    <circle class="star" cx="99.19%" cy="81.63%" r="1.1"></circle>
    <circle class="star" cx="41.39%" cy="6.33%" r="0.9"></circle>
    <circle class="star" cx="65.22%" cy="89.88%" r="1.2"></circle>
    <circle class="star" cx="27.08%" cy="12.86%" r="0.8"></circle>
    <circle class="star" cx="38.58%" cy="74.33%" r="1.2"></circle>
    <circle class="star" cx="99.49%" cy="77.63%" r="1.3"></circle>
    <circle class="star" cx="7.92%" cy="90.1%" r="0.9"></circle>
    <circle class="star" cx="44.89%" cy="26.61%" r="0.8"></circle>
    <circle class="star" cx="86.62%" cy="55.86%" r="1.3"></circle>
    <circle class="star" cx="99.26%" cy="29.11%" r="1"></circle>
    <circle class="star" cx="87.81%" cy="26.81%" r="0.8"></circle>
    <circle class="star" cx="79.21%" cy="59.25%" r="1.4"></circle>
    <circle class="star" cx="15.26%" cy="92.01%" r="1"></circle>
    <circle class="star" cx="80.75%" cy="92.23%" r="1.1"></circle>
    <circle class="star" cx="92.29%" cy="29.84%" r="1.1"></circle>
    <circle class="star" cx="37.64%" cy="18.28%" r="1.2"></circle>
    <circle class="star" cx="12.78%" cy="23.35%" r="1.1"></circle>
    <circle class="star" cx="11.88%" cy="81.58%" r="0.7"></circle>
    <circle class="star" cx="26.96%" cy="93.12%" r="0.9"></circle>
    <circle class="star" cx="99.03%" cy="64.13%" r="1"></circle>
    <circle class="star" cx="69.43%" cy="20.9%" r="0.6"></circle>
    <circle class="star" cx="61.46%" cy="13.51%" r="0.9"></circle>
    <circle class="star" cx="93.46%" cy="29.82%" r="0.6"></circle>
    <circle class="star" cx="56.01%" cy="29.48%" r="1.4"></circle>
    <circle class="star" cx="26.75%" cy="12.08%" r="1"></circle>
    <circle class="star" cx="89.63%" cy="33.1%" r="0.6"></circle>
    <circle class="star" cx="60.88%" cy="95.36%" r="0.9"></circle>
    <circle class="star" cx="4.21%" cy="5.53%" r="0.7"></circle>
    <circle class="star" cx="87.23%" cy="36.34%" r="1"></circle>
    <circle class="star" cx="18.8%" cy="82.51%" r="0.5"></circle>
    <circle class="star" cx="3.07%" cy="82.58%" r="1.3"></circle>
    <circle class="star" cx="89.73%" cy="96.67%" r="1.3"></circle>
    <circle class="star" cx="60.2%" cy="40.59%" r="1.3"></circle>
    <circle class="star" cx="0.69%" cy="17.75%" r="1.3"></circle>
    <circle class="star" cx="75.3%" cy="56.98%" r="1.2"></circle>
    <circle class="star" cx="89.64%" cy="90.47%" r="1.1"></circle>
    <circle class="star" cx="98.88%" cy="74.83%" r="0.7"></circle>
    <circle class="star" cx="20.4%" cy="38.7%" r="1.4"></circle>
    <circle class="star" cx="41.76%" cy="91.7%" r="1"></circle>
    <circle class="star" cx="88.76%" cy="92.64%" r="1"></circle>
    <circle class="star" cx="93.06%" cy="20.68%" r="1"></circle>
    <circle class="star" cx="42.04%" cy="44.14%" r="0.5"></circle>
    <circle class="star" cx="81.76%" cy="30.5%" r="0.8"></circle>
    <circle class="star" cx="78.15%" cy="74.8%" r="0.9"></circle>
    <circle class="star" cx="46.72%" cy="12.04%" r="1"></circle>
    <circle class="star" cx="65.94%" cy="51.58%" r="0.9"></circle>
    <circle class="star" cx="49.67%" cy="5.98%" r="1.3"></circle>
    <circle class="star" cx="8.42%" cy="21.39%" r="0.6"></circle>
    <circle class="star" cx="26.9%" cy="71.05%" r="1.1"></circle>
    <circle class="star" cx="15.09%" cy="73.91%" r="0.7"></circle>
    <circle class="star" cx="91.1%" cy="53.13%" r="1.5"></circle>
    <circle class="star" cx="46.44%" cy="74.98%" r="0.7"></circle>
    <circle class="star" cx="68.83%" cy="58.16%" r="1.4"></circle>
    <circle class="star" cx="18.01%" cy="41.38%" r="1.2"></circle>
    <circle class="star" cx="73.79%" cy="26.07%" r="1.4"></circle>
    <circle class="star" cx="51.81%" cy="53.59%" r="1.3"></circle>
    <circle class="star" cx="86.99%" cy="16.38%" r="1"></circle>
    <circle class="star" cx="14.58%" cy="14.6%" r="0.8"></circle>
    <circle class="star" cx="24.62%" cy="69.34%" r="1.5"></circle>
    <circle class="star" cx="80.16%" cy="86%" r="0.9"></circle>
    <circle class="star" cx="5.72%" cy="90.36%" r="1"></circle>
    <circle class="star" cx="1.66%" cy="77.95%" r="0.7"></circle>
    <circle class="star" cx="6.79%" cy="33.67%" r="1.4"></circle>
    <circle class="star" cx="60.44%" cy="88.41%" r="1.3"></circle>
    <circle class="star" cx="80.41%" cy="55.39%" r="1.1"></circle>
    <circle class="star" cx="19.13%" cy="47.11%" r="0.6"></circle>
    <circle class="star" cx="85.25%" cy="84.02%" r="1.2"></circle>
    <circle class="star" cx="93.42%" cy="35.87%" r="0.8"></circle>
    <circle class="star" cx="48.69%" cy="50.01%" r="1.1"></circle>
    <circle class="star" cx="18.73%" cy="34.2%" r="0.9"></circle>
    <circle class="star" cx="70.61%" cy="36.9%" r="1"></circle>
    <circle class="star" cx="56.4%" cy="10.52%" r="1"></circle>
    <circle class="star" cx="26.55%" cy="69.61%" r="0.9"></circle>
    <circle class="star" cx="14.84%" cy="72.04%" r="1.2"></circle>
    <circle class="star" cx="21.73%" cy="61.8%" r="1.4"></circle>
    <circle class="star" cx="97.47%" cy="23.46%" r="1.5"></circle>
    <circle class="star" cx="25.21%" cy="4.26%" r="1.4"></circle>
    <circle class="star" cx="96.55%" cy="61.75%" r="0.8"></circle>
    <circle class="star" cx="76.08%" cy="69.64%" r="1.1"></circle>
    <circle class="star" cx="69.55%" cy="25.07%" r="0.9"></circle>
    <circle class="star" cx="15.26%" cy="24.78%" r="0.8"></circle>
    <circle class="star" cx="66.54%" cy="51.3%" r="1.1"></circle>
    <circle class="star" cx="37.03%" cy="51.1%" r="1.3"></circle>
    <circle class="star" cx="69.82%" cy="75.92%" r="0.6"></circle>
    <circle class="star" cx="67.73%" cy="60.17%" r="1"></circle>
    <circle class="star" cx="81.53%" cy="64.39%" r="0.5"></circle>
    <circle class="star" cx="96.14%" cy="37.87%" r="1.2"></circle>
    <circle class="star" cx="76.71%" cy="79.37%" r="1"></circle>
    <circle class="star" cx="44.63%" cy="95.83%" r="0.8"></circle>
    <circle class="star" cx="95.55%" cy="10.32%" r="0.7"></circle>
    <circle class="star" cx="58.9%" cy="48.56%" r="0.9"></circle>
    <circle class="star" cx="42.04%" cy="86.91%" r="1.1"></circle>
  </svg>
  <svg class="stars" width="100%" height="100%" preserveAspectRatio="none">
    <circle class="star" cx="65.78%" cy="9.17%" r="0.6"></circle>
    <circle class="star" cx="14.85%" cy="92.39%" r="0.9"></circle>
    <circle class="star" cx="81.77%" cy="60.66%" r="0.9"></circle>
    <circle class="star" cx="35.22%" cy="48.44%" r="0.7"></circle>
    <circle class="star" cx="63.1%" cy="46.55%" r="1.4"></circle>
    <circle class="star" cx="23.09%" cy="52.81%" r="1.3"></circle>
    <circle class="star" cx="45.82%" cy="16.22%" r="1"></circle>
    <circle class="star" cx="28.44%" cy="18.2%" r="0.7"></circle>
    <circle class="star" cx="15.35%" cy="29.76%" r="1.2"></circle>
    <circle class="star" cx="79.87%" cy="35.28%" r="1.5"></circle>
    <circle class="star" cx="6.36%" cy="69.27%" r="0.5"></circle>
    <circle class="star" cx="30.7%" cy="81.77%" r="1.1"></circle>
    <circle class="star" cx="63.75%" cy="2.74%" r="1"></circle>
    <circle class="star" cx="18.56%" cy="13.54%" r="0.6"></circle>
    <circle class="star" cx="32.63%" cy="74.1%" r="1.3"></circle>
    <circle class="star" cx="18.28%" cy="95.34%" r="1.3"></circle>
    <circle class="star" cx="77.22%" cy="45.12%" r="1.1"></circle>
    <circle class="star" cx="75.9%" cy="35.48%" r="0.7"></circle>
    <circle class="star" cx="70.57%" cy="22.02%" r="1.2"></circle>
    <circle class="star" cx="20.38%" cy="1.99%" r="1.3"></circle>
    <circle class="star" cx="1.29%" cy="8.51%" r="1.4"></circle>
    <circle class="star" cx="70.38%" cy="69.9%" r="1"></circle>
    <circle class="star" cx="29.35%" cy="33.2%" r="0.7"></circle>
    <circle class="star" cx="51.45%" cy="18.82%" r="0.9"></circle>
    <circle class="star" cx="80.22%" cy="85.24%" r="0.7"></circle>
    <circle class="star" cx="15.48%" cy="70.11%" r="0.8"></circle>
    <circle class="star" cx="60.97%" cy="4.81%" r="1.4"></circle>
    <circle class="star" cx="49.24%" cy="23.14%" r="1.4"></circle>
    <circle class="star" cx="94.9%" cy="87.28%" r="0.6"></circle>
    <circle class="star" cx="0.46%" cy="6.07%" r="0.8"></circle>
    <circle class="star" cx="98.65%" cy="43.2%" r="0.6"></circle>
    <circle class="star" cx="36.71%" cy="40.16%" r="0.8"></circle>
    <circle class="star" cx="96.08%" cy="80.97%" r="0.9"></circle>
    <circle class="star" cx="44.96%" cy="69.76%" r="1.4"></circle>
    <circle class="star" cx="6.81%" cy="45.46%" r="1.3"></circle>
    <circle class="star" cx="31.07%" cy="12.28%" r="0.7"></circle>
    <circle class="star" cx="14.62%" cy="30.02%" r="0.9"></circle>
    <circle class="star" cx="30.57%" cy="14.05%" r="0.6"></circle>
    <circle class="star" cx="50.38%" cy="59.58%" r="0.7"></circle>
    <circle class="star" cx="88.25%" cy="5.34%" r="0.8"></circle>
    <circle class="star" cx="53.75%" cy="65.3%" r="0.7"></circle>
    <circle class="star" cx="39.15%" cy="64.21%" r="0.8"></circle>
    <circle class="star" cx="4.87%" cy="69.08%" r="1.4"></circle>
    <circle class="star" cx="41.54%" cy="1.4%" r="0.7"></circle>
    <circle class="star" cx="84.04%" cy="36.13%" r="1.4"></circle>
    <circle class="star" cx="23.78%" cy="79.93%" r="1.1"></circle>
    <circle class="star" cx="60.97%" cy="72.73%" r="1.5"></circle>
    <circle class="star" cx="39.32%" cy="44.82%" r="0.7"></circle>
    <circle class="star" cx="5.51%" cy="36.16%" r="1.3"></circle>
    <circle class="star" cx="98.5%" cy="19.86%" r="0.7"></circle>
    <circle class="star" cx="83.57%" cy="4.37%" r="1"></circle>
    <circle class="star" cx="91.62%" cy="61.97%" r="1.2"></circle>
    <circle class="star" cx="95.43%" cy="6.18%" r="0.6"></circle>
    <circle class="star" cx="98.62%" cy="38.4%" r="1.4"></circle>
    <circle class="star" cx="77.45%" cy="18.92%" r="0.6"></circle>
    <circle class="star" cx="0.57%" cy="75.51%" r="1"></circle>
    <circle class="star" cx="78.14%" cy="17.51%" r="1.4"></circle>
    <circle class="star" cx="94.69%" cy="77.55%" r="1.4"></circle>
    <circle class="star" cx="48.01%" cy="97.33%" r="1"></circle>
    <circle class="star" cx="85.42%" cy="23.46%" r="1.4"></circle>
    <circle class="star" cx="95.28%" cy="31.4%" r="0.7"></circle>
    <circle class="star" cx="92.09%" cy="8.68%" r="1.4"></circle>
    <circle class="star" cx="23.91%" cy="46.71%" r="1.3"></circle>
    <circle class="star" cx="11.78%" cy="84.22%" r="1"></circle>
    <circle class="star" cx="5.15%" cy="50.38%" r="1"></circle>
    <circle class="star" cx="11.08%" cy="51.79%" r="1.3"></circle>
    <circle class="star" cx="20.29%" cy="59.91%" r="1.3"></circle>
    <circle class="star" cx="22.21%" cy="13.03%" r="0.8"></circle>
    <circle class="star" cx="48.01%" cy="79.32%" r="0.6"></circle>
    <circle class="star" cx="98.28%" cy="40.58%" r="0.9"></circle>
    <circle class="star" cx="72.29%" cy="84.43%" r="1.2"></circle>
    <circle class="star" cx="76.06%" cy="2.93%" r="1.4"></circle>
    <circle class="star" cx="7.97%" cy="62.07%" r="1.3"></circle>
    <circle class="star" cx="85.81%" cy="60.77%" r="0.9"></circle>
    <circle class="star" cx="89.38%" cy="15.1%" r="1.1"></circle>
    <circle class="star" cx="23.17%" cy="59.04%" r="1"></circle>
    <circle class="star" cx="1.15%" cy="38.86%" r="0.5"></circle>
    <circle class="star" cx="4.55%" cy="50.94%" r="0.7"></circle>
    <circle class="star" cx="98.89%" cy="46.54%" r="0.6"></circle>
    <circle class="star" cx="11.17%" cy="92.66%" r="0.8"></circle>
    <circle class="star" cx="56.35%" cy="63.45%" r="1.1"></circle>
    <circle class="star" cx="99.9%" cy="89.99%" r="1.3"></circle>
    <circle class="star" cx="63.21%" cy="87.55%" r="0.8"></circle>
    <circle class="star" cx="90.35%" cy="45.6%" r="0.7"></circle>
    <circle class="star" cx="67.83%" cy="38.75%" r="1.5"></circle>
    <circle class="star" cx="25.01%" cy="68.3%" r="1.3"></circle>
    <circle class="star" cx="84.51%" cy="17.49%" r="0.8"></circle>
    <circle class="star" cx="68.12%" cy="44.01%" r="1.2"></circle>
    <circle class="star" cx="58.34%" cy="89.1%" r="1"></circle>
    <circle class="star" cx="96.97%" cy="60.95%" r="1"></circle>
    <circle class="star" cx="53.9%" cy="40.5%" r="1.2"></circle>
    <circle class="star" cx="36.85%" cy="10.72%" r="0.5"></circle>
    <circle class="star" cx="25.36%" cy="40.59%" r="0.7"></circle>
    <circle class="star" cx="58.46%" cy="89.86%" r="0.7"></circle>
    <circle class="star" cx="17.9%" cy="5.98%" r="1"></circle>
    <circle class="star" cx="14.04%" cy="70.67%" r="0.7"></circle>
    <circle class="star" cx="2.35%" cy="85.39%" r="1.5"></circle>
    <circle class="star" cx="85.82%" cy="49.64%" r="1.1"></circle>
    <circle class="star" cx="3.35%" cy="80.36%" r="0.7"></circle>
    <circle class="star" cx="62.49%" cy="69.9%" r="0.5"></circle>
    <circle class="star" cx="58.15%" cy="74.46%" r="0.7"></circle>
    <circle class="star" cx="13.96%" cy="25.55%" r="1.2"></circle>
    <circle class="star" cx="62.66%" cy="41.97%" r="1.3"></circle>
    <circle class="star" cx="89.94%" cy="27.33%" r="1.2"></circle>
    <circle class="star" cx="54.09%" cy="73.47%" r="1.4"></circle>
    <circle class="star" cx="9.75%" cy="64.73%" r="0.6"></circle>
    <circle class="star" cx="41.73%" cy="7.72%" r="1"></circle>
    <circle class="star" cx="66.54%" cy="80.21%" r="1"></circle>
    <circle class="star" cx="29.58%" cy="32.86%" r="0.7"></circle>
    <circle class="star" cx="9.72%" cy="15.98%" r="1.5"></circle>
    <circle class="star" cx="27.63%" cy="56.71%" r="1.3"></circle>
    <circle class="star" cx="29.28%" cy="87.77%" r="1"></circle>
    <circle class="star" cx="32.25%" cy="97.57%" r="0.8"></circle>
    <circle class="star" cx="19.05%" cy="48.38%" r="1.1"></circle>
    <circle class="star" cx="9.64%" cy="86.74%" r="1.4"></circle>
    <circle class="star" cx="44.41%" cy="49.67%" r="1.2"></circle>
    <circle class="star" cx="12.36%" cy="97.22%" r="1.5"></circle>
    <circle class="star" cx="20.84%" cy="49.79%" r="0.8"></circle>
    <circle class="star" cx="29.54%" cy="66.35%" r="0.6"></circle>
    <circle class="star" cx="53.83%" cy="61.11%" r="0.6"></circle>
    <circle class="star" cx="93.94%" cy="55.26%" r="1"></circle>
    <circle class="star" cx="76.71%" cy="18.96%" r="1.1"></circle>
    <circle class="star" cx="23.51%" cy="89.55%" r="1.4"></circle>
    <circle class="star" cx="30.2%" cy="3.41%" r="0.7"></circle>
    <circle class="star" cx="73.17%" cy="87.09%" r="1.4"></circle>
    <circle class="star" cx="61.51%" cy="33.67%" r="0.6"></circle>
    <circle class="star" cx="57.85%" cy="89.95%" r="1.2"></circle>
    <circle class="star" cx="66.12%" cy="70.5%" r="1.3"></circle>
    <circle class="star" cx="3.1%" cy="37.97%" r="0.6"></circle>
    <circle class="star" cx="75.49%" cy="84.68%" r="1.3"></circle>
    <circle class="star" cx="87.18%" cy="52.48%" r="1.2"></circle>
    <circle class="star" cx="17.3%" cy="15.34%" r="0.5"></circle>
    <circle class="star" cx="64.27%" cy="78.47%" r="1.5"></circle>
    <circle class="star" cx="28.17%" cy="0.28%" r="1.2"></circle>
    <circle class="star" cx="98.52%" cy="3.49%" r="0.5"></circle>
    <circle class="star" cx="24.18%" cy="66.33%" r="0.9"></circle>
    <circle class="star" cx="25.78%" cy="70.57%" r="1.4"></circle>
    <circle class="star" cx="35.98%" cy="28.1%" r="0.9"></circle>
    <circle class="star" cx="56.36%" cy="97.11%" r="0.5"></circle>
    <circle class="star" cx="32.97%" cy="19.28%" r="1.2"></circle>
    <circle class="star" cx="4.97%" cy="55.66%" r="0.9"></circle>
    <circle class="star" cx="13.46%" cy="38.32%" r="1"></circle>
    <circle class="star" cx="1.32%" cy="43.67%" r="1.5"></circle>
    <circle class="star" cx="69.58%" cy="2.84%" r="0.5"></circle>
    <circle class="star" cx="83.14%" cy="80.85%" r="1"></circle>
    <circle class="star" cx="95.43%" cy="28.15%" r="1"></circle>
    <circle class="star" cx="15.48%" cy="29.13%" r="0.6"></circle>
    <circle class="star" cx="87.33%" cy="73.63%" r="1"></circle>
    <circle class="star" cx="94.51%" cy="75.95%" r="1.2"></circle>
    <circle class="star" cx="93.87%" cy="21.9%" r="1.1"></circle>
    <circle class="star" cx="43.34%" cy="11.74%" r="1.5"></circle>
    <circle class="star" cx="3.47%" cy="72.48%" r="0.9"></circle>
    <circle class="star" cx="64.31%" cy="81.84%" r="1.2"></circle>
    <circle class="star" cx="29.9%" cy="34.14%" r="1.4"></circle>
    <circle class="star" cx="21.7%" cy="76.05%" r="0.9"></circle>
    <circle class="star" cx="56.93%" cy="15.29%" r="0.6"></circle>
    <circle class="star" cx="12.47%" cy="61.4%" r="0.7"></circle>
    <circle class="star" cx="41.36%" cy="30.86%" r="1.5"></circle>
    <circle class="star" cx="50.09%" cy="55.89%" r="1"></circle>
    <circle class="star" cx="97.73%" cy="6.26%" r="1.1"></circle>
    <circle class="star" cx="37.87%" cy="84.13%" r="1"></circle>
    <circle class="star" cx="60.51%" cy="58%" r="1.3"></circle>
    <circle class="star" cx="54.94%" cy="1.57%" r="1.5"></circle>
    <circle class="star" cx="91.89%" cy="49.1%" r="1.4"></circle>
    <circle class="star" cx="27.61%" cy="43.54%" r="1.3"></circle>
    <circle class="star" cx="35.14%" cy="15.59%" r="1.4"></circle>
    <circle class="star" cx="53.74%" cy="70.21%" r="1.4"></circle>
    <circle class="star" cx="71.67%" cy="86.67%" r="1.5"></circle>
    <circle class="star" cx="57.67%" cy="17.89%" r="1.4"></circle>
    <circle class="star" cx="18.04%" cy="12.48%" r="1"></circle>
    <circle class="star" cx="76.37%" cy="5.35%" r="1"></circle>
    <circle class="star" cx="92.3%" cy="98.54%" r="1.1"></circle>
    <circle class="star" cx="69.48%" cy="56.47%" r="0.6"></circle>
    <circle class="star" cx="94.19%" cy="24.34%" r="0.9"></circle>
    <circle class="star" cx="45.8%" cy="67.68%" r="1.3"></circle>
    <circle class="star" cx="33.44%" cy="63.8%" r="1.1"></circle>
    <circle class="star" cx="26.15%" cy="98.6%" r="0.6"></circle>
    <circle class="star" cx="25.13%" cy="7.46%" r="1.1"></circle>
    <circle class="star" cx="14%" cy="27.31%" r="1.2"></circle>
    <circle class="star" cx="31.46%" cy="39.42%" r="1.2"></circle>
    <circle class="star" cx="68.63%" cy="98.36%" r="0.6"></circle>
    <circle class="star" cx="93.06%" cy="84.15%" r="0.8"></circle>
    <circle class="star" cx="29.31%" cy="15.12%" r="1.5"></circle>
    <circle class="star" cx="14.61%" cy="89.22%" r="1.3"></circle>
    <circle class="star" cx="83.54%" cy="22.36%" r="1.1"></circle>
    <circle class="star" cx="97.71%" cy="5.32%" r="1"></circle>
    <circle class="star" cx="15.58%" cy="22.82%" r="0.7"></circle>
    <circle class="star" cx="95.01%" cy="28.72%" r="1.1"></circle>
    <circle class="star" cx="17.99%" cy="43.1%" r="1"></circle>
    <circle class="star" cx="43.22%" cy="71.73%" r="0.9"></circle>
    <circle class="star" cx="79.42%" cy="61.64%" r="0.7"></circle>
    <circle class="star" cx="18.83%" cy="2.1%" r="0.9"></circle>
    <circle class="star" cx="90.66%" cy="3.52%" r="1.1"></circle>
    <circle class="star" cx="87.17%" cy="21.66%" r="1.3"></circle>
    <circle class="star" cx="94.61%" cy="31.53%" r="0.9"></circle>
    <circle class="star" cx="22.82%" cy="94.63%" r="0.6"></circle>
    <circle class="star" cx="92.04%" cy="3.93%" r="1.2"></circle>
    <circle class="star" cx="75.73%" cy="56.45%" r="1.4"></circle>
    <circle class="star" cx="48.97%" cy="31.58%" r="1.2"></circle>
    <circle class="star" cx="45.57%" cy="78.45%" r="1.2"></circle>
  </svg>
  <svg class="extras" width="100%" height="100%" preserveAspectRatio="none">
    <defs>
      <radialGradient id="comet-gradient" ="" cx="0" cy=".5" r="0.5">
        <stop offset="0%" stop-color="rgba(255,255,255,.8)"></stop>
        <stop offset="100%" stop-color="rgba(255,255,255,0)"></stop>
      </radialGradient>
    </defs>
    <g transform="rotate(-135)">
      <ellipse class="comet comet-a" fill="url(#comet-gradient)" cx="0" cy="0" rx="150" ry="2"></ellipse>
    </g>
    <g transform="rotate(20)">
      <ellipse class="comet comet-b" fill="url(#comet-gradient)" cx="100%" cy="0" rx="150" ry="2"></ellipse>
    </g>
    <g transform="rotate(300)">
      <ellipse class="comet comet-c" fill="url(#comet-gradient)" cx="40%" cy="100%" rx="150" ry="2"></ellipse>
    </g>
  </svg>
</div>
<!-- partial -->
  
</body>
</html>
