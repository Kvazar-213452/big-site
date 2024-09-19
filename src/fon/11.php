<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Tri Travelers</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<style>
  html, body, .wrap {
  height: 100%;
}

body {
  overflow: hidden;
}

.wrap {
  transform-style: preserve-3d;
  perspective: 800px;
}

.tri {
  height: 0;
  width: 0;
  position: absolute;
  top: 50%;
  left: 50%;
}

.tri:nth-child(1) {
  border-top: 23px solid #88ff00;
  border-right: 23px solid transparent;
  border-left: 23px solid transparent;
  margin-left: -11.5px;
  margin-top: -11.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(27deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim1 10s infinite linear;
  animation-delay: -0.05s;
  opacity: 0;
}

@keyframes anim1 {
  0% {
    opacity: 1;
    transform: rotate(40.5deg) translate3d(189px, 879px, 1000px) scale(1);
  }
}
.tri:nth-child(2) {
  border-top: 23px solid #ff4d00;
  border-right: 23px solid transparent;
  border-left: 23px solid transparent;
  margin-left: -11.5px;
  margin-top: -11.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(349deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim2 10s infinite linear;
  animation-delay: -0.1s;
  opacity: 0;
}

@keyframes anim2 {
  0% {
    opacity: 1;
    transform: rotate(523.5deg) translate3d(844px, 106px, 1000px) scale(1);
  }
}
.tri:nth-child(3) {
  border-top: 20px solid #ffe600;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  margin-left: -10px;
  margin-top: -10px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(276deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim3 10s infinite linear;
  animation-delay: -0.15s;
  opacity: 0;
}

@keyframes anim3 {
  0% {
    opacity: 1;
    transform: rotate(414deg) translate3d(89px, 472px, 1000px) scale(1);
  }
}
.tri:nth-child(4) {
  border-top: 43px solid #55ff00;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(51deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim4 10s infinite linear;
  animation-delay: -0.2s;
  opacity: 0;
}

@keyframes anim4 {
  0% {
    opacity: 1;
    transform: rotate(76.5deg) translate3d(24px, 431px, 1000px) scale(1);
  }
}
.tri:nth-child(5) {
  border-top: 22px solid #c800ff;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  margin-left: -11px;
  margin-top: -11px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(208deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim5 10s infinite linear;
  animation-delay: -0.25s;
  opacity: 0;
}

@keyframes anim5 {
  0% {
    opacity: 1;
    transform: rotate(312deg) translate3d(771px, 86px, 1000px) scale(1);
  }
}
.tri:nth-child(6) {
  border-top: 25px solid #00ffd9;
  border-right: 25px solid transparent;
  border-left: 25px solid transparent;
  margin-left: -12.5px;
  margin-top: -12.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(109deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim6 10s infinite linear;
  animation-delay: -0.3s;
  opacity: 0;
}

@keyframes anim6 {
  0% {
    opacity: 1;
    transform: rotate(163.5deg) translate3d(530px, 82px, 1000px) scale(1);
  }
}
.tri:nth-child(7) {
  border-top: 22px solid #b700ff;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  margin-left: -11px;
  margin-top: -11px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(51deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim7 10s infinite linear;
  animation-delay: -0.35s;
  opacity: 0;
}

@keyframes anim7 {
  0% {
    opacity: 1;
    transform: rotate(76.5deg) translate3d(238px, 895px, 1000px) scale(1);
  }
}
.tri:nth-child(8) {
  border-top: 31px solid #ff0900;
  border-right: 31px solid transparent;
  border-left: 31px solid transparent;
  margin-left: -15.5px;
  margin-top: -15.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(99deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim8 10s infinite linear;
  animation-delay: -0.4s;
  opacity: 0;
}

@keyframes anim8 {
  0% {
    opacity: 1;
    transform: rotate(148.5deg) translate3d(184px, 582px, 1000px) scale(1);
  }
}
.tri:nth-child(9) {
  border-top: 14px solid #00ff62;
  border-right: 14px solid transparent;
  border-left: 14px solid transparent;
  margin-left: -7px;
  margin-top: -7px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(173deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim9 10s infinite linear;
  animation-delay: -0.45s;
  opacity: 0;
}

@keyframes anim9 {
  0% {
    opacity: 1;
    transform: rotate(259.5deg) translate3d(591px, 93px, 1000px) scale(1);
  }
}
.tri:nth-child(10) {
  border-top: 36px solid #ffee00;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(98deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim10 10s infinite linear;
  animation-delay: -0.5s;
  opacity: 0;
}

@keyframes anim10 {
  0% {
    opacity: 1;
    transform: rotate(147deg) translate3d(347px, 838px, 1000px) scale(1);
  }
}
.tri:nth-child(11) {
  border-top: 45px solid #ff0026;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(343deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim11 10s infinite linear;
  animation-delay: -0.55s;
  opacity: 0;
}

@keyframes anim11 {
  0% {
    opacity: 1;
    transform: rotate(514.5deg) translate3d(677px, 143px, 1000px) scale(1);
  }
}
.tri:nth-child(12) {
  border-top: 32px solid #ff00c8;
  border-right: 32px solid transparent;
  border-left: 32px solid transparent;
  margin-left: -16px;
  margin-top: -16px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(221deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim12 10s infinite linear;
  animation-delay: -0.6s;
  opacity: 0;
}

@keyframes anim12 {
  0% {
    opacity: 1;
    transform: rotate(331.5deg) translate3d(399px, 236px, 1000px) scale(1);
  }
}
.tri:nth-child(13) {
  border-top: 39px solid #ff00b7;
  border-right: 39px solid transparent;
  border-left: 39px solid transparent;
  margin-left: -19.5px;
  margin-top: -19.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(5deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim13 10s infinite linear;
  animation-delay: -0.65s;
  opacity: 0;
}

@keyframes anim13 {
  0% {
    opacity: 1;
    transform: rotate(7.5deg) translate3d(660px, 956px, 1000px) scale(1);
  }
}
.tri:nth-child(14) {
  border-top: 19px solid #00ff3c;
  border-right: 19px solid transparent;
  border-left: 19px solid transparent;
  margin-left: -9.5px;
  margin-top: -9.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(203deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim14 10s infinite linear;
  animation-delay: -0.7s;
  opacity: 0;
}

@keyframes anim14 {
  0% {
    opacity: 1;
    transform: rotate(304.5deg) translate3d(996px, 510px, 1000px) scale(1);
  }
}
.tri:nth-child(15) {
  border-top: 12px solid #ea00ff;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  margin-left: -6px;
  margin-top: -6px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(158deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim15 10s infinite linear;
  animation-delay: -0.75s;
  opacity: 0;
}

@keyframes anim15 {
  0% {
    opacity: 1;
    transform: rotate(237deg) translate3d(206px, 671px, 1000px) scale(1);
  }
}
.tri:nth-child(16) {
  border-top: 37px solid #ffea00;
  border-right: 37px solid transparent;
  border-left: 37px solid transparent;
  margin-left: -18.5px;
  margin-top: -18.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(213deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim16 10s infinite linear;
  animation-delay: -0.8s;
  opacity: 0;
}

@keyframes anim16 {
  0% {
    opacity: 1;
    transform: rotate(319.5deg) translate3d(432px, 340px, 1000px) scale(1);
  }
}
.tri:nth-child(17) {
  border-top: 27px solid #00ff95;
  border-right: 27px solid transparent;
  border-left: 27px solid transparent;
  margin-left: -13.5px;
  margin-top: -13.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(51deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim17 10s infinite linear;
  animation-delay: -0.85s;
  opacity: 0;
}

@keyframes anim17 {
  0% {
    opacity: 1;
    transform: rotate(76.5deg) translate3d(683px, 630px, 1000px) scale(1);
  }
}
.tri:nth-child(18) {
  border-top: 17px solid #002fff;
  border-right: 17px solid transparent;
  border-left: 17px solid transparent;
  margin-left: -8.5px;
  margin-top: -8.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(171deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim18 10s infinite linear;
  animation-delay: -0.9s;
  opacity: 0;
}

@keyframes anim18 {
  0% {
    opacity: 1;
    transform: rotate(256.5deg) translate3d(452px, 698px, 1000px) scale(1);
  }
}
.tri:nth-child(19) {
  border-top: 41px solid #8800ff;
  border-right: 41px solid transparent;
  border-left: 41px solid transparent;
  margin-left: -20.5px;
  margin-top: -20.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(334deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim19 10s infinite linear;
  animation-delay: -0.95s;
  opacity: 0;
}

@keyframes anim19 {
  0% {
    opacity: 1;
    transform: rotate(501deg) translate3d(881px, 61px, 1000px) scale(1);
  }
}
.tri:nth-child(20) {
  border-top: 34px solid #0011ff;
  border-right: 34px solid transparent;
  border-left: 34px solid transparent;
  margin-left: -17px;
  margin-top: -17px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(343deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim20 10s infinite linear;
  animation-delay: -1s;
  opacity: 0;
}

@keyframes anim20 {
  0% {
    opacity: 1;
    transform: rotate(514.5deg) translate3d(778px, 934px, 1000px) scale(1);
  }
}
.tri:nth-child(21) {
  border-top: 49px solid #2fff00;
  border-right: 49px solid transparent;
  border-left: 49px solid transparent;
  margin-left: -24.5px;
  margin-top: -24.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(53deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim21 10s infinite linear;
  animation-delay: -1.05s;
  opacity: 0;
}

@keyframes anim21 {
  0% {
    opacity: 1;
    transform: rotate(79.5deg) translate3d(713px, 259px, 1000px) scale(1);
  }
}
.tri:nth-child(22) {
  border-top: 15px solid #3c00ff;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  margin-left: -7.5px;
  margin-top: -7.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(299deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim22 10s infinite linear;
  animation-delay: -1.1s;
  opacity: 0;
}

@keyframes anim22 {
  0% {
    opacity: 1;
    transform: rotate(448.5deg) translate3d(355px, 646px, 1000px) scale(1);
  }
}
.tri:nth-child(23) {
  border-top: 39px solid #0080ff;
  border-right: 39px solid transparent;
  border-left: 39px solid transparent;
  margin-left: -19.5px;
  margin-top: -19.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(132deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim23 10s infinite linear;
  animation-delay: -1.15s;
  opacity: 0;
}

@keyframes anim23 {
  0% {
    opacity: 1;
    transform: rotate(198deg) translate3d(869px, 90px, 1000px) scale(1);
  }
}
.tri:nth-child(24) {
  border-top: 33px solid #dd00ff;
  border-right: 33px solid transparent;
  border-left: 33px solid transparent;
  margin-left: -16.5px;
  margin-top: -16.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(40deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim24 10s infinite linear;
  animation-delay: -1.2s;
  opacity: 0;
}

@keyframes anim24 {
  0% {
    opacity: 1;
    transform: rotate(60deg) translate3d(73px, 793px, 1000px) scale(1);
  }
}
.tri:nth-child(25) {
  border-top: 33px solid #c800ff;
  border-right: 33px solid transparent;
  border-left: 33px solid transparent;
  margin-left: -16.5px;
  margin-top: -16.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(135deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim25 10s infinite linear;
  animation-delay: -1.25s;
  opacity: 0;
}

@keyframes anim25 {
  0% {
    opacity: 1;
    transform: rotate(202.5deg) translate3d(171px, 556px, 1000px) scale(1);
  }
}
.tri:nth-child(26) {
  border-top: 8px solid #00ff51;
  border-right: 8px solid transparent;
  border-left: 8px solid transparent;
  margin-left: -4px;
  margin-top: -4px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(252deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim26 10s infinite linear;
  animation-delay: -1.3s;
  opacity: 0;
}

@keyframes anim26 {
  0% {
    opacity: 1;
    transform: rotate(378deg) translate3d(475px, 920px, 1000px) scale(1);
  }
}
.tri:nth-child(27) {
  border-top: 5px solid #ff0066;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(42deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim27 10s infinite linear;
  animation-delay: -1.35s;
  opacity: 0;
}

@keyframes anim27 {
  0% {
    opacity: 1;
    transform: rotate(63deg) translate3d(218px, 916px, 1000px) scale(1);
  }
}
.tri:nth-child(28) {
  border-top: 25px solid #8800ff;
  border-right: 25px solid transparent;
  border-left: 25px solid transparent;
  margin-left: -12.5px;
  margin-top: -12.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(175deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim28 10s infinite linear;
  animation-delay: -1.4s;
  opacity: 0;
}

@keyframes anim28 {
  0% {
    opacity: 1;
    transform: rotate(262.5deg) translate3d(215px, 933px, 1000px) scale(1);
  }
}
.tri:nth-child(29) {
  border-top: 17px solid #a2ff00;
  border-right: 17px solid transparent;
  border-left: 17px solid transparent;
  margin-left: -8.5px;
  margin-top: -8.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(8deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim29 10s infinite linear;
  animation-delay: -1.45s;
  opacity: 0;
}

@keyframes anim29 {
  0% {
    opacity: 1;
    transform: rotate(12deg) translate3d(762px, 657px, 1000px) scale(1);
  }
}
.tri:nth-child(30) {
  border-top: 5px solid #ff00cc;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(46deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim30 10s infinite linear;
  animation-delay: -1.5s;
  opacity: 0;
}

@keyframes anim30 {
  0% {
    opacity: 1;
    transform: rotate(69deg) translate3d(51px, 657px, 1000px) scale(1);
  }
}
.tri:nth-child(31) {
  border-top: 45px solid #ff1100;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(183deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim31 10s infinite linear;
  animation-delay: -1.55s;
  opacity: 0;
}

@keyframes anim31 {
  0% {
    opacity: 1;
    transform: rotate(274.5deg) translate3d(982px, 607px, 1000px) scale(1);
  }
}
.tri:nth-child(32) {
  border-top: 36px solid #00ff44;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(199deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim32 10s infinite linear;
  animation-delay: -1.6s;
  opacity: 0;
}

@keyframes anim32 {
  0% {
    opacity: 1;
    transform: rotate(298.5deg) translate3d(273px, 43px, 1000px) scale(1);
  }
}
.tri:nth-child(33) {
  border-top: 38px solid #3c00ff;
  border-right: 38px solid transparent;
  border-left: 38px solid transparent;
  margin-left: -19px;
  margin-top: -19px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(256deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim33 10s infinite linear;
  animation-delay: -1.65s;
  opacity: 0;
}

@keyframes anim33 {
  0% {
    opacity: 1;
    transform: rotate(384deg) translate3d(539px, 604px, 1000px) scale(1);
  }
}
.tri:nth-child(34) {
  border-top: 27px solid #0026ff;
  border-right: 27px solid transparent;
  border-left: 27px solid transparent;
  margin-left: -13.5px;
  margin-top: -13.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(135deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim34 10s infinite linear;
  animation-delay: -1.7s;
  opacity: 0;
}

@keyframes anim34 {
  0% {
    opacity: 1;
    transform: rotate(202.5deg) translate3d(104px, 573px, 1000px) scale(1);
  }
}
.tri:nth-child(35) {
  border-top: 7px solid #00ff51;
  border-right: 7px solid transparent;
  border-left: 7px solid transparent;
  margin-left: -3.5px;
  margin-top: -3.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(84deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim35 10s infinite linear;
  animation-delay: -1.75s;
  opacity: 0;
}

@keyframes anim35 {
  0% {
    opacity: 1;
    transform: rotate(126deg) translate3d(298px, 97px, 1000px) scale(1);
  }
}
.tri:nth-child(36) {
  border-top: 48px solid #55ff00;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(29deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim36 10s infinite linear;
  animation-delay: -1.8s;
  opacity: 0;
}

@keyframes anim36 {
  0% {
    opacity: 1;
    transform: rotate(43.5deg) translate3d(878px, 924px, 1000px) scale(1);
  }
}
.tri:nth-child(37) {
  border-top: 40px solid #00ffe6;
  border-right: 40px solid transparent;
  border-left: 40px solid transparent;
  margin-left: -20px;
  margin-top: -20px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(96deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim37 10s infinite linear;
  animation-delay: -1.85s;
  opacity: 0;
}

@keyframes anim37 {
  0% {
    opacity: 1;
    transform: rotate(144deg) translate3d(999px, 490px, 1000px) scale(1);
  }
}
.tri:nth-child(38) {
  border-top: 18px solid #00ddff;
  border-right: 18px solid transparent;
  border-left: 18px solid transparent;
  margin-left: -9px;
  margin-top: -9px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(30deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim38 10s infinite linear;
  animation-delay: -1.9s;
  opacity: 0;
}

@keyframes anim38 {
  0% {
    opacity: 1;
    transform: rotate(45deg) translate3d(952px, 575px, 1000px) scale(1);
  }
}
.tri:nth-child(39) {
  border-top: 15px solid #2200ff;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  margin-left: -7.5px;
  margin-top: -7.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(273deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim39 10s infinite linear;
  animation-delay: -1.95s;
  opacity: 0;
}

@keyframes anim39 {
  0% {
    opacity: 1;
    transform: rotate(409.5deg) translate3d(777px, 521px, 1000px) scale(1);
  }
}
.tri:nth-child(40) {
  border-top: 50px solid #80ff00;
  border-right: 50px solid transparent;
  border-left: 50px solid transparent;
  margin-left: -25px;
  margin-top: -25px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(336deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim40 10s infinite linear;
  animation-delay: -2s;
  opacity: 0;
}

@keyframes anim40 {
  0% {
    opacity: 1;
    transform: rotate(504deg) translate3d(521px, 945px, 1000px) scale(1);
  }
}
.tri:nth-child(41) {
  border-top: 21px solid blue;
  border-right: 21px solid transparent;
  border-left: 21px solid transparent;
  margin-left: -10.5px;
  margin-top: -10.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(214deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim41 10s infinite linear;
  animation-delay: -2.05s;
  opacity: 0;
}

@keyframes anim41 {
  0% {
    opacity: 1;
    transform: rotate(321deg) translate3d(586px, 272px, 1000px) scale(1);
  }
}
.tri:nth-child(42) {
  border-top: 26px solid #6600ff;
  border-right: 26px solid transparent;
  border-left: 26px solid transparent;
  margin-left: -13px;
  margin-top: -13px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(278deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim42 10s infinite linear;
  animation-delay: -2.1s;
  opacity: 0;
}

@keyframes anim42 {
  0% {
    opacity: 1;
    transform: rotate(417deg) translate3d(33px, 668px, 1000px) scale(1);
  }
}
.tri:nth-child(43) {
  border-top: 13px solid #ee00ff;
  border-right: 13px solid transparent;
  border-left: 13px solid transparent;
  margin-left: -6.5px;
  margin-top: -6.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(271deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim43 10s infinite linear;
  animation-delay: -2.15s;
  opacity: 0;
}

@keyframes anim43 {
  0% {
    opacity: 1;
    transform: rotate(406.5deg) translate3d(521px, 491px, 1000px) scale(1);
  }
}
.tri:nth-child(44) {
  border-top: 43px solid #ffea00;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(260deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim44 10s infinite linear;
  animation-delay: -2.2s;
  opacity: 0;
}

@keyframes anim44 {
  0% {
    opacity: 1;
    transform: rotate(390deg) translate3d(112px, 585px, 1000px) scale(1);
  }
}
.tri:nth-child(45) {
  border-top: 45px solid #ff00c4;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(135deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim45 10s infinite linear;
  animation-delay: -2.25s;
  opacity: 0;
}

@keyframes anim45 {
  0% {
    opacity: 1;
    transform: rotate(202.5deg) translate3d(282px, 275px, 1000px) scale(1);
  }
}
.tri:nth-child(46) {
  border-top: 34px solid #00ff5e;
  border-right: 34px solid transparent;
  border-left: 34px solid transparent;
  margin-left: -17px;
  margin-top: -17px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(282deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim46 10s infinite linear;
  animation-delay: -2.3s;
  opacity: 0;
}

@keyframes anim46 {
  0% {
    opacity: 1;
    transform: rotate(423deg) translate3d(128px, 715px, 1000px) scale(1);
  }
}
.tri:nth-child(47) {
  border-top: 44px solid #ff9900;
  border-right: 44px solid transparent;
  border-left: 44px solid transparent;
  margin-left: -22px;
  margin-top: -22px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(16deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim47 10s infinite linear;
  animation-delay: -2.35s;
  opacity: 0;
}

@keyframes anim47 {
  0% {
    opacity: 1;
    transform: rotate(24deg) translate3d(393px, 448px, 1000px) scale(1);
  }
}
.tri:nth-child(48) {
  border-top: 11px solid #ffbb00;
  border-right: 11px solid transparent;
  border-left: 11px solid transparent;
  margin-left: -5.5px;
  margin-top: -5.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(301deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim48 10s infinite linear;
  animation-delay: -2.4s;
  opacity: 0;
}

@keyframes anim48 {
  0% {
    opacity: 1;
    transform: rotate(451.5deg) translate3d(114px, 630px, 1000px) scale(1);
  }
}
.tri:nth-child(49) {
  border-top: 6px solid #00ffc4;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  margin-left: -3px;
  margin-top: -3px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(148deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim49 10s infinite linear;
  animation-delay: -2.45s;
  opacity: 0;
}

@keyframes anim49 {
  0% {
    opacity: 1;
    transform: rotate(222deg) translate3d(879px, 906px, 1000px) scale(1);
  }
}
.tri:nth-child(50) {
  border-top: 34px solid #00ff66;
  border-right: 34px solid transparent;
  border-left: 34px solid transparent;
  margin-left: -17px;
  margin-top: -17px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(43deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim50 10s infinite linear;
  animation-delay: -2.5s;
  opacity: 0;
}

@keyframes anim50 {
  0% {
    opacity: 1;
    transform: rotate(64.5deg) translate3d(214px, 668px, 1000px) scale(1);
  }
}
.tri:nth-child(51) {
  border-top: 44px solid #ff0088;
  border-right: 44px solid transparent;
  border-left: 44px solid transparent;
  margin-left: -22px;
  margin-top: -22px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(190deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim51 10s infinite linear;
  animation-delay: -2.55s;
  opacity: 0;
}

@keyframes anim51 {
  0% {
    opacity: 1;
    transform: rotate(285deg) translate3d(793px, 499px, 1000px) scale(1);
  }
}
.tri:nth-child(52) {
  border-top: 43px solid #004dff;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(296deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim52 10s infinite linear;
  animation-delay: -2.6s;
  opacity: 0;
}

@keyframes anim52 {
  0% {
    opacity: 1;
    transform: rotate(444deg) translate3d(159px, 13px, 1000px) scale(1);
  }
}
.tri:nth-child(53) {
  border-top: 36px solid #00ff40;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(188deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim53 10s infinite linear;
  animation-delay: -2.65s;
  opacity: 0;
}

@keyframes anim53 {
  0% {
    opacity: 1;
    transform: rotate(282deg) translate3d(531px, 510px, 1000px) scale(1);
  }
}
.tri:nth-child(54) {
  border-top: 25px solid #00eaff;
  border-right: 25px solid transparent;
  border-left: 25px solid transparent;
  margin-left: -12.5px;
  margin-top: -12.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(112deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim54 10s infinite linear;
  animation-delay: -2.7s;
  opacity: 0;
}

@keyframes anim54 {
  0% {
    opacity: 1;
    transform: rotate(168deg) translate3d(609px, 564px, 1000px) scale(1);
  }
}
.tri:nth-child(55) {
  border-top: 14px solid #e600ff;
  border-right: 14px solid transparent;
  border-left: 14px solid transparent;
  margin-left: -7px;
  margin-top: -7px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(149deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim55 10s infinite linear;
  animation-delay: -2.75s;
  opacity: 0;
}

@keyframes anim55 {
  0% {
    opacity: 1;
    transform: rotate(223.5deg) translate3d(485px, 178px, 1000px) scale(1);
  }
}
.tri:nth-child(56) {
  border-top: 24px solid #0037ff;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(72deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim56 10s infinite linear;
  animation-delay: -2.8s;
  opacity: 0;
}

@keyframes anim56 {
  0% {
    opacity: 1;
    transform: rotate(108deg) translate3d(390px, 38px, 1000px) scale(1);
  }
}
.tri:nth-child(57) {
  border-top: 47px solid #ffcc00;
  border-right: 47px solid transparent;
  border-left: 47px solid transparent;
  margin-left: -23.5px;
  margin-top: -23.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(128deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim57 10s infinite linear;
  animation-delay: -2.85s;
  opacity: 0;
}

@keyframes anim57 {
  0% {
    opacity: 1;
    transform: rotate(192deg) translate3d(65px, 327px, 1000px) scale(1);
  }
}
.tri:nth-child(58) {
  border-top: 4px solid #00ff22;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  margin-left: -2px;
  margin-top: -2px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(63deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim58 10s infinite linear;
  animation-delay: -2.9s;
  opacity: 0;
}

@keyframes anim58 {
  0% {
    opacity: 1;
    transform: rotate(94.5deg) translate3d(537px, 768px, 1000px) scale(1);
  }
}
.tri:nth-child(59) {
  border-top: 38px solid #001eff;
  border-right: 38px solid transparent;
  border-left: 38px solid transparent;
  margin-left: -19px;
  margin-top: -19px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(274deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim59 10s infinite linear;
  animation-delay: -2.95s;
  opacity: 0;
}

@keyframes anim59 {
  0% {
    opacity: 1;
    transform: rotate(411deg) translate3d(834px, 253px, 1000px) scale(1);
  }
}
.tri:nth-child(60) {
  border-top: 28px solid #8c00ff;
  border-right: 28px solid transparent;
  border-left: 28px solid transparent;
  margin-left: -14px;
  margin-top: -14px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(144deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim60 10s infinite linear;
  animation-delay: -3s;
  opacity: 0;
}

@keyframes anim60 {
  0% {
    opacity: 1;
    transform: rotate(216deg) translate3d(823px, 277px, 1000px) scale(1);
  }
}
.tri:nth-child(61) {
  border-top: 29px solid #ff0059;
  border-right: 29px solid transparent;
  border-left: 29px solid transparent;
  margin-left: -14.5px;
  margin-top: -14.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(316deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim61 10s infinite linear;
  animation-delay: -3.05s;
  opacity: 0;
}

@keyframes anim61 {
  0% {
    opacity: 1;
    transform: rotate(474deg) translate3d(329px, 256px, 1000px) scale(1);
  }
}
.tri:nth-child(62) {
  border-top: 14px solid #ffb700;
  border-right: 14px solid transparent;
  border-left: 14px solid transparent;
  margin-left: -7px;
  margin-top: -7px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(275deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim62 10s infinite linear;
  animation-delay: -3.1s;
  opacity: 0;
}

@keyframes anim62 {
  0% {
    opacity: 1;
    transform: rotate(412.5deg) translate3d(392px, 626px, 1000px) scale(1);
  }
}
.tri:nth-child(63) {
  border-top: 50px solid #00ff1a;
  border-right: 50px solid transparent;
  border-left: 50px solid transparent;
  margin-left: -25px;
  margin-top: -25px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(220deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim63 10s infinite linear;
  animation-delay: -3.15s;
  opacity: 0;
}

@keyframes anim63 {
  0% {
    opacity: 1;
    transform: rotate(330deg) translate3d(531px, 951px, 1000px) scale(1);
  }
}
.tri:nth-child(64) {
  border-top: 44px solid #b7ff00;
  border-right: 44px solid transparent;
  border-left: 44px solid transparent;
  margin-left: -22px;
  margin-top: -22px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(29deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim64 10s infinite linear;
  animation-delay: -3.2s;
  opacity: 0;
}

@keyframes anim64 {
  0% {
    opacity: 1;
    transform: rotate(43.5deg) translate3d(961px, 674px, 1000px) scale(1);
  }
}
.tri:nth-child(65) {
  border-top: 9px solid #d9ff00;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(104deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim65 10s infinite linear;
  animation-delay: -3.25s;
  opacity: 0;
}

@keyframes anim65 {
  0% {
    opacity: 1;
    transform: rotate(156deg) translate3d(305px, 711px, 1000px) scale(1);
  }
}
.tri:nth-child(66) {
  border-top: 41px solid #ff00c4;
  border-right: 41px solid transparent;
  border-left: 41px solid transparent;
  margin-left: -20.5px;
  margin-top: -20.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(333deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim66 10s infinite linear;
  animation-delay: -3.3s;
  opacity: 0;
}

@keyframes anim66 {
  0% {
    opacity: 1;
    transform: rotate(499.5deg) translate3d(570px, 445px, 1000px) scale(1);
  }
}
.tri:nth-child(67) {
  border-top: 48px solid #f2ff00;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(3deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim67 10s infinite linear;
  animation-delay: -3.35s;
  opacity: 0;
}

@keyframes anim67 {
  0% {
    opacity: 1;
    transform: rotate(4.5deg) translate3d(21px, 772px, 1000px) scale(1);
  }
}
.tri:nth-child(68) {
  border-top: 16px solid #ff00fb;
  border-right: 16px solid transparent;
  border-left: 16px solid transparent;
  margin-left: -8px;
  margin-top: -8px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(7deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim68 10s infinite linear;
  animation-delay: -3.4s;
  opacity: 0;
}

@keyframes anim68 {
  0% {
    opacity: 1;
    transform: rotate(10.5deg) translate3d(216px, 433px, 1000px) scale(1);
  }
}
.tri:nth-child(69) {
  border-top: 32px solid #0037ff;
  border-right: 32px solid transparent;
  border-left: 32px solid transparent;
  margin-left: -16px;
  margin-top: -16px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(303deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim69 10s infinite linear;
  animation-delay: -3.45s;
  opacity: 0;
}

@keyframes anim69 {
  0% {
    opacity: 1;
    transform: rotate(454.5deg) translate3d(626px, 442px, 1000px) scale(1);
  }
}
.tri:nth-child(70) {
  border-top: 25px solid #00ffd0;
  border-right: 25px solid transparent;
  border-left: 25px solid transparent;
  margin-left: -12.5px;
  margin-top: -12.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(309deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim70 10s infinite linear;
  animation-delay: -3.5s;
  opacity: 0;
}

@keyframes anim70 {
  0% {
    opacity: 1;
    transform: rotate(463.5deg) translate3d(656px, 888px, 1000px) scale(1);
  }
}
.tri:nth-child(71) {
  border-top: 1px solid #59ff00;
  border-right: 1px solid transparent;
  border-left: 1px solid transparent;
  margin-left: -0.5px;
  margin-top: -0.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(309deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim71 10s infinite linear;
  animation-delay: -3.55s;
  opacity: 0;
}

@keyframes anim71 {
  0% {
    opacity: 1;
    transform: rotate(463.5deg) translate3d(372px, 625px, 1000px) scale(1);
  }
}
.tri:nth-child(72) {
  border-top: 2px solid #ff4400;
  border-right: 2px solid transparent;
  border-left: 2px solid transparent;
  margin-left: -1px;
  margin-top: -1px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(288deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim72 10s infinite linear;
  animation-delay: -3.6s;
  opacity: 0;
}

@keyframes anim72 {
  0% {
    opacity: 1;
    transform: rotate(432deg) translate3d(139px, 770px, 1000px) scale(1);
  }
}
.tri:nth-child(73) {
  border-top: 24px solid #0037ff;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(236deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim73 10s infinite linear;
  animation-delay: -3.65s;
  opacity: 0;
}

@keyframes anim73 {
  0% {
    opacity: 1;
    transform: rotate(354deg) translate3d(145px, 770px, 1000px) scale(1);
  }
}
.tri:nth-child(74) {
  border-top: 9px solid #00ffb7;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(32deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim74 10s infinite linear;
  animation-delay: -3.7s;
  opacity: 0;
}

@keyframes anim74 {
  0% {
    opacity: 1;
    transform: rotate(48deg) translate3d(946px, 94px, 1000px) scale(1);
  }
}
.tri:nth-child(75) {
  border-top: 9px solid #f700ff;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(242deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim75 10s infinite linear;
  animation-delay: -3.75s;
  opacity: 0;
}

@keyframes anim75 {
  0% {
    opacity: 1;
    transform: rotate(363deg) translate3d(294px, 733px, 1000px) scale(1);
  }
}
.tri:nth-child(76) {
  border-top: 17px solid #bbff00;
  border-right: 17px solid transparent;
  border-left: 17px solid transparent;
  margin-left: -8.5px;
  margin-top: -8.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(225deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim76 10s infinite linear;
  animation-delay: -3.8s;
  opacity: 0;
}

@keyframes anim76 {
  0% {
    opacity: 1;
    transform: rotate(337.5deg) translate3d(821px, 703px, 1000px) scale(1);
  }
}
.tri:nth-child(77) {
  border-top: 1px solid #ff2600;
  border-right: 1px solid transparent;
  border-left: 1px solid transparent;
  margin-left: -0.5px;
  margin-top: -0.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(84deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim77 10s infinite linear;
  animation-delay: -3.85s;
  opacity: 0;
}

@keyframes anim77 {
  0% {
    opacity: 1;
    transform: rotate(126deg) translate3d(717px, 643px, 1000px) scale(1);
  }
}
.tri:nth-child(78) {
  border-top: 43px solid #ffaa00;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(242deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim78 10s infinite linear;
  animation-delay: -3.9s;
  opacity: 0;
}

@keyframes anim78 {
  0% {
    opacity: 1;
    transform: rotate(363deg) translate3d(784px, 680px, 1000px) scale(1);
  }
}
.tri:nth-child(79) {
  border-top: 47px solid #00ddff;
  border-right: 47px solid transparent;
  border-left: 47px solid transparent;
  margin-left: -23.5px;
  margin-top: -23.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(293deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim79 10s infinite linear;
  animation-delay: -3.95s;
  opacity: 0;
}

@keyframes anim79 {
  0% {
    opacity: 1;
    transform: rotate(439.5deg) translate3d(602px, 219px, 1000px) scale(1);
  }
}
.tri:nth-child(80) {
  border-top: 13px solid #1500ff;
  border-right: 13px solid transparent;
  border-left: 13px solid transparent;
  margin-left: -6.5px;
  margin-top: -6.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(109deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim80 10s infinite linear;
  animation-delay: -4s;
  opacity: 0;
}

@keyframes anim80 {
  0% {
    opacity: 1;
    transform: rotate(163.5deg) translate3d(419px, 531px, 1000px) scale(1);
  }
}
.tri:nth-child(81) {
  border-top: 46px solid #0022ff;
  border-right: 46px solid transparent;
  border-left: 46px solid transparent;
  margin-left: -23px;
  margin-top: -23px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(170deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim81 10s infinite linear;
  animation-delay: -4.05s;
  opacity: 0;
}

@keyframes anim81 {
  0% {
    opacity: 1;
    transform: rotate(255deg) translate3d(989px, 83px, 1000px) scale(1);
  }
}
.tri:nth-child(82) {
  border-top: 21px solid #00ff95;
  border-right: 21px solid transparent;
  border-left: 21px solid transparent;
  margin-left: -10.5px;
  margin-top: -10.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(92deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim82 10s infinite linear;
  animation-delay: -4.1s;
  opacity: 0;
}

@keyframes anim82 {
  0% {
    opacity: 1;
    transform: rotate(138deg) translate3d(88px, 661px, 1000px) scale(1);
  }
}
.tri:nth-child(83) {
  border-top: 38px solid #ff0900;
  border-right: 38px solid transparent;
  border-left: 38px solid transparent;
  margin-left: -19px;
  margin-top: -19px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(322deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim83 10s infinite linear;
  animation-delay: -4.15s;
  opacity: 0;
}

@keyframes anim83 {
  0% {
    opacity: 1;
    transform: rotate(483deg) translate3d(635px, 409px, 1000px) scale(1);
  }
}
.tri:nth-child(84) {
  border-top: 36px solid #00ffc4;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(57deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim84 10s infinite linear;
  animation-delay: -4.2s;
  opacity: 0;
}

@keyframes anim84 {
  0% {
    opacity: 1;
    transform: rotate(85.5deg) translate3d(969px, 831px, 1000px) scale(1);
  }
}
.tri:nth-child(85) {
  border-top: 45px solid #00ff09;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(352deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim85 10s infinite linear;
  animation-delay: -4.25s;
  opacity: 0;
}

@keyframes anim85 {
  0% {
    opacity: 1;
    transform: rotate(528deg) translate3d(180px, 898px, 1000px) scale(1);
  }
}
.tri:nth-child(86) {
  border-top: 47px solid #ff0044;
  border-right: 47px solid transparent;
  border-left: 47px solid transparent;
  margin-left: -23.5px;
  margin-top: -23.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(200deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim86 10s infinite linear;
  animation-delay: -4.3s;
  opacity: 0;
}

@keyframes anim86 {
  0% {
    opacity: 1;
    transform: rotate(300deg) translate3d(481px, 424px, 1000px) scale(1);
  }
}
.tri:nth-child(87) {
  border-top: 49px solid #51ff00;
  border-right: 49px solid transparent;
  border-left: 49px solid transparent;
  margin-left: -24.5px;
  margin-top: -24.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(42deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim87 10s infinite linear;
  animation-delay: -4.35s;
  opacity: 0;
}

@keyframes anim87 {
  0% {
    opacity: 1;
    transform: rotate(63deg) translate3d(943px, 529px, 1000px) scale(1);
  }
}
.tri:nth-child(88) {
  border-top: 32px solid #ff00ae;
  border-right: 32px solid transparent;
  border-left: 32px solid transparent;
  margin-left: -16px;
  margin-top: -16px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(159deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim88 10s infinite linear;
  animation-delay: -4.4s;
  opacity: 0;
}

@keyframes anim88 {
  0% {
    opacity: 1;
    transform: rotate(238.5deg) translate3d(984px, 49px, 1000px) scale(1);
  }
}
.tri:nth-child(89) {
  border-top: 9px solid #0055ff;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(199deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim89 10s infinite linear;
  animation-delay: -4.45s;
  opacity: 0;
}

@keyframes anim89 {
  0% {
    opacity: 1;
    transform: rotate(298.5deg) translate3d(104px, 302px, 1000px) scale(1);
  }
}
.tri:nth-child(90) {
  border-top: 18px solid #0080ff;
  border-right: 18px solid transparent;
  border-left: 18px solid transparent;
  margin-left: -9px;
  margin-top: -9px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(327deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim90 10s infinite linear;
  animation-delay: -4.5s;
  opacity: 0;
}

@keyframes anim90 {
  0% {
    opacity: 1;
    transform: rotate(490.5deg) translate3d(261px, 28px, 1000px) scale(1);
  }
}
.tri:nth-child(91) {
  border-top: 20px solid #ffb300;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  margin-left: -10px;
  margin-top: -10px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(136deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim91 10s infinite linear;
  animation-delay: -4.55s;
  opacity: 0;
}

@keyframes anim91 {
  0% {
    opacity: 1;
    transform: rotate(204deg) translate3d(713px, 658px, 1000px) scale(1);
  }
}
.tri:nth-child(92) {
  border-top: 5px solid #ff4000;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(287deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim92 10s infinite linear;
  animation-delay: -4.6s;
  opacity: 0;
}

@keyframes anim92 {
  0% {
    opacity: 1;
    transform: rotate(430.5deg) translate3d(931px, 879px, 1000px) scale(1);
  }
}
.tri:nth-child(93) {
  border-top: 50px solid #ff00e1;
  border-right: 50px solid transparent;
  border-left: 50px solid transparent;
  margin-left: -25px;
  margin-top: -25px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(9deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim93 10s infinite linear;
  animation-delay: -4.65s;
  opacity: 0;
}

@keyframes anim93 {
  0% {
    opacity: 1;
    transform: rotate(13.5deg) translate3d(976px, 274px, 1000px) scale(1);
  }
}
.tri:nth-child(94) {
  border-top: 36px solid #3cff00;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(264deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim94 10s infinite linear;
  animation-delay: -4.7s;
  opacity: 0;
}

@keyframes anim94 {
  0% {
    opacity: 1;
    transform: rotate(396deg) translate3d(777px, 253px, 1000px) scale(1);
  }
}
.tri:nth-child(95) {
  border-top: 3px solid #00ff48;
  border-right: 3px solid transparent;
  border-left: 3px solid transparent;
  margin-left: -1.5px;
  margin-top: -1.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(84deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim95 10s infinite linear;
  animation-delay: -4.75s;
  opacity: 0;
}

@keyframes anim95 {
  0% {
    opacity: 1;
    transform: rotate(126deg) translate3d(660px, 159px, 1000px) scale(1);
  }
}
.tri:nth-child(96) {
  border-top: 35px solid #ff002f;
  border-right: 35px solid transparent;
  border-left: 35px solid transparent;
  margin-left: -17.5px;
  margin-top: -17.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(20deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim96 10s infinite linear;
  animation-delay: -4.8s;
  opacity: 0;
}

@keyframes anim96 {
  0% {
    opacity: 1;
    transform: rotate(30deg) translate3d(954px, 364px, 1000px) scale(1);
  }
}
.tri:nth-child(97) {
  border-top: 16px solid aqua;
  border-right: 16px solid transparent;
  border-left: 16px solid transparent;
  margin-left: -8px;
  margin-top: -8px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(19deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim97 10s infinite linear;
  animation-delay: -4.85s;
  opacity: 0;
}

@keyframes anim97 {
  0% {
    opacity: 1;
    transform: rotate(28.5deg) translate3d(848px, 301px, 1000px) scale(1);
  }
}
.tri:nth-child(98) {
  border-top: 39px solid #ffb300;
  border-right: 39px solid transparent;
  border-left: 39px solid transparent;
  margin-left: -19.5px;
  margin-top: -19.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(159deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim98 10s infinite linear;
  animation-delay: -4.9s;
  opacity: 0;
}

@keyframes anim98 {
  0% {
    opacity: 1;
    transform: rotate(238.5deg) translate3d(304px, 495px, 1000px) scale(1);
  }
}
.tri:nth-child(99) {
  border-top: 26px solid #00ff44;
  border-right: 26px solid transparent;
  border-left: 26px solid transparent;
  margin-left: -13px;
  margin-top: -13px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(7deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim99 10s infinite linear;
  animation-delay: -4.95s;
  opacity: 0;
}

@keyframes anim99 {
  0% {
    opacity: 1;
    transform: rotate(10.5deg) translate3d(531px, 116px, 1000px) scale(1);
  }
}
.tri:nth-child(100) {
  border-top: 15px solid #1aff00;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  margin-left: -7.5px;
  margin-top: -7.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(359deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim100 10s infinite linear;
  animation-delay: -5s;
  opacity: 0;
}

@keyframes anim100 {
  0% {
    opacity: 1;
    transform: rotate(538.5deg) translate3d(400px, 140px, 1000px) scale(1);
  }
}
.tri:nth-child(101) {
  border-top: 23px solid #ff0015;
  border-right: 23px solid transparent;
  border-left: 23px solid transparent;
  margin-left: -11.5px;
  margin-top: -11.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(360deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim101 10s infinite linear;
  animation-delay: -5.05s;
  opacity: 0;
}

@keyframes anim101 {
  0% {
    opacity: 1;
    transform: rotate(540deg) translate3d(843px, 254px, 1000px) scale(1);
  }
}
.tri:nth-child(102) {
  border-top: 12px solid #ff0033;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  margin-left: -6px;
  margin-top: -6px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(151deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim102 10s infinite linear;
  animation-delay: -5.1s;
  opacity: 0;
}

@keyframes anim102 {
  0% {
    opacity: 1;
    transform: rotate(226.5deg) translate3d(688px, 146px, 1000px) scale(1);
  }
}
.tri:nth-child(103) {
  border-top: 9px solid #aa00ff;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(157deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim103 10s infinite linear;
  animation-delay: -5.15s;
  opacity: 0;
}

@keyframes anim103 {
  0% {
    opacity: 1;
    transform: rotate(235.5deg) translate3d(844px, 896px, 1000px) scale(1);
  }
}
.tri:nth-child(104) {
  border-top: 11px solid #ff1100;
  border-right: 11px solid transparent;
  border-left: 11px solid transparent;
  margin-left: -5.5px;
  margin-top: -5.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(355deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim104 10s infinite linear;
  animation-delay: -5.2s;
  opacity: 0;
}

@keyframes anim104 {
  0% {
    opacity: 1;
    transform: rotate(532.5deg) translate3d(431px, 790px, 1000px) scale(1);
  }
}
.tri:nth-child(105) {
  border-top: 42px solid #1a00ff;
  border-right: 42px solid transparent;
  border-left: 42px solid transparent;
  margin-left: -21px;
  margin-top: -21px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(181deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim105 10s infinite linear;
  animation-delay: -5.25s;
  opacity: 0;
}

@keyframes anim105 {
  0% {
    opacity: 1;
    transform: rotate(271.5deg) translate3d(940px, 598px, 1000px) scale(1);
  }
}
.tri:nth-child(106) {
  border-top: 34px solid #ff0088;
  border-right: 34px solid transparent;
  border-left: 34px solid transparent;
  margin-left: -17px;
  margin-top: -17px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(167deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim106 10s infinite linear;
  animation-delay: -5.3s;
  opacity: 0;
}

@keyframes anim106 {
  0% {
    opacity: 1;
    transform: rotate(250.5deg) translate3d(988px, 991px, 1000px) scale(1);
  }
}
.tri:nth-child(107) {
  border-top: 23px solid #00ff48;
  border-right: 23px solid transparent;
  border-left: 23px solid transparent;
  margin-left: -11.5px;
  margin-top: -11.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(333deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim107 10s infinite linear;
  animation-delay: -5.35s;
  opacity: 0;
}

@keyframes anim107 {
  0% {
    opacity: 1;
    transform: rotate(499.5deg) translate3d(178px, 483px, 1000px) scale(1);
  }
}
.tri:nth-child(108) {
  border-top: 7px solid #ff004d;
  border-right: 7px solid transparent;
  border-left: 7px solid transparent;
  margin-left: -3.5px;
  margin-top: -3.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(217deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim108 10s infinite linear;
  animation-delay: -5.4s;
  opacity: 0;
}

@keyframes anim108 {
  0% {
    opacity: 1;
    transform: rotate(325.5deg) translate3d(893px, 365px, 1000px) scale(1);
  }
}
.tri:nth-child(109) {
  border-top: 1px solid #ff0091;
  border-right: 1px solid transparent;
  border-left: 1px solid transparent;
  margin-left: -0.5px;
  margin-top: -0.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(331deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim109 10s infinite linear;
  animation-delay: -5.45s;
  opacity: 0;
}

@keyframes anim109 {
  0% {
    opacity: 1;
    transform: rotate(496.5deg) translate3d(312px, 474px, 1000px) scale(1);
  }
}
.tri:nth-child(110) {
  border-top: 24px solid #0084ff;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(312deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim110 10s infinite linear;
  animation-delay: -5.5s;
  opacity: 0;
}

@keyframes anim110 {
  0% {
    opacity: 1;
    transform: rotate(468deg) translate3d(193px, 88px, 1000px) scale(1);
  }
}
.tri:nth-child(111) {
  border-top: 16px solid #ff002b;
  border-right: 16px solid transparent;
  border-left: 16px solid transparent;
  margin-left: -8px;
  margin-top: -8px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(31deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim111 10s infinite linear;
  animation-delay: -5.55s;
  opacity: 0;
}

@keyframes anim111 {
  0% {
    opacity: 1;
    transform: rotate(46.5deg) translate3d(822px, 782px, 1000px) scale(1);
  }
}
.tri:nth-child(112) {
  border-top: 12px solid #d0ff00;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  margin-left: -6px;
  margin-top: -6px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(153deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim112 10s infinite linear;
  animation-delay: -5.6s;
  opacity: 0;
}

@keyframes anim112 {
  0% {
    opacity: 1;
    transform: rotate(229.5deg) translate3d(81px, 343px, 1000px) scale(1);
  }
}
.tri:nth-child(113) {
  border-top: 10px solid #0044ff;
  border-right: 10px solid transparent;
  border-left: 10px solid transparent;
  margin-left: -5px;
  margin-top: -5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(16deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim113 10s infinite linear;
  animation-delay: -5.65s;
  opacity: 0;
}

@keyframes anim113 {
  0% {
    opacity: 1;
    transform: rotate(24deg) translate3d(893px, 801px, 1000px) scale(1);
  }
}
.tri:nth-child(114) {
  border-top: 9px solid #ff4000;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(128deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim114 10s infinite linear;
  animation-delay: -5.7s;
  opacity: 0;
}

@keyframes anim114 {
  0% {
    opacity: 1;
    transform: rotate(192deg) translate3d(342px, 430px, 1000px) scale(1);
  }
}
.tri:nth-child(115) {
  border-top: 30px solid #ffc400;
  border-right: 30px solid transparent;
  border-left: 30px solid transparent;
  margin-left: -15px;
  margin-top: -15px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(97deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim115 10s infinite linear;
  animation-delay: -5.75s;
  opacity: 0;
}

@keyframes anim115 {
  0% {
    opacity: 1;
    transform: rotate(145.5deg) translate3d(218px, 668px, 1000px) scale(1);
  }
}
.tri:nth-child(116) {
  border-top: 39px solid #26ff00;
  border-right: 39px solid transparent;
  border-left: 39px solid transparent;
  margin-left: -19.5px;
  margin-top: -19.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(344deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim116 10s infinite linear;
  animation-delay: -5.8s;
  opacity: 0;
}

@keyframes anim116 {
  0% {
    opacity: 1;
    transform: rotate(516deg) translate3d(62px, 717px, 1000px) scale(1);
  }
}
.tri:nth-child(117) {
  border-top: 20px solid #001aff;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  margin-left: -10px;
  margin-top: -10px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(39deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim117 10s infinite linear;
  animation-delay: -5.85s;
  opacity: 0;
}

@keyframes anim117 {
  0% {
    opacity: 1;
    transform: rotate(58.5deg) translate3d(697px, 228px, 1000px) scale(1);
  }
}
.tri:nth-child(118) {
  border-top: 9px solid #2f00ff;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(257deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim118 10s infinite linear;
  animation-delay: -5.9s;
  opacity: 0;
}

@keyframes anim118 {
  0% {
    opacity: 1;
    transform: rotate(385.5deg) translate3d(396px, 526px, 1000px) scale(1);
  }
}
.tri:nth-child(119) {
  border-top: 13px solid #f2ff00;
  border-right: 13px solid transparent;
  border-left: 13px solid transparent;
  margin-left: -6.5px;
  margin-top: -6.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(230deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim119 10s infinite linear;
  animation-delay: -5.95s;
  opacity: 0;
}

@keyframes anim119 {
  0% {
    opacity: 1;
    transform: rotate(345deg) translate3d(359px, 737px, 1000px) scale(1);
  }
}
.tri:nth-child(120) {
  border-top: 2px solid #00ffd0;
  border-right: 2px solid transparent;
  border-left: 2px solid transparent;
  margin-left: -1px;
  margin-top: -1px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(146deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim120 10s infinite linear;
  animation-delay: -6s;
  opacity: 0;
}

@keyframes anim120 {
  0% {
    opacity: 1;
    transform: rotate(219deg) translate3d(37px, 953px, 1000px) scale(1);
  }
}
.tri:nth-child(121) {
  border-top: 30px solid #fb00ff;
  border-right: 30px solid transparent;
  border-left: 30px solid transparent;
  margin-left: -15px;
  margin-top: -15px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(317deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim121 10s infinite linear;
  animation-delay: -6.05s;
  opacity: 0;
}

@keyframes anim121 {
  0% {
    opacity: 1;
    transform: rotate(475.5deg) translate3d(971px, 403px, 1000px) scale(1);
  }
}
.tri:nth-child(122) {
  border-top: 41px solid #ff0062;
  border-right: 41px solid transparent;
  border-left: 41px solid transparent;
  margin-left: -20.5px;
  margin-top: -20.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(322deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim122 10s infinite linear;
  animation-delay: -6.1s;
  opacity: 0;
}

@keyframes anim122 {
  0% {
    opacity: 1;
    transform: rotate(483deg) translate3d(482px, 851px, 1000px) scale(1);
  }
}
.tri:nth-child(123) {
  border-top: 45px solid #0015ff;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(223deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim123 10s infinite linear;
  animation-delay: -6.15s;
  opacity: 0;
}

@keyframes anim123 {
  0% {
    opacity: 1;
    transform: rotate(334.5deg) translate3d(575px, 474px, 1000px) scale(1);
  }
}
.tri:nth-child(124) {
  border-top: 31px solid #ff00b3;
  border-right: 31px solid transparent;
  border-left: 31px solid transparent;
  margin-left: -15.5px;
  margin-top: -15.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(11deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim124 10s infinite linear;
  animation-delay: -6.2s;
  opacity: 0;
}

@keyframes anim124 {
  0% {
    opacity: 1;
    transform: rotate(16.5deg) translate3d(943px, 455px, 1000px) scale(1);
  }
}
.tri:nth-child(125) {
  border-top: 31px solid #2f00ff;
  border-right: 31px solid transparent;
  border-left: 31px solid transparent;
  margin-left: -15.5px;
  margin-top: -15.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(119deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim125 10s infinite linear;
  animation-delay: -6.25s;
  opacity: 0;
}

@keyframes anim125 {
  0% {
    opacity: 1;
    transform: rotate(178.5deg) translate3d(675px, 204px, 1000px) scale(1);
  }
}
.tri:nth-child(126) {
  border-top: 45px solid #ffa200;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(195deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim126 10s infinite linear;
  animation-delay: -6.3s;
  opacity: 0;
}

@keyframes anim126 {
  0% {
    opacity: 1;
    transform: rotate(292.5deg) translate3d(718px, 874px, 1000px) scale(1);
  }
}
.tri:nth-child(127) {
  border-top: 22px solid #ff0095;
  border-right: 22px solid transparent;
  border-left: 22px solid transparent;
  margin-left: -11px;
  margin-top: -11px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(71deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim127 10s infinite linear;
  animation-delay: -6.35s;
  opacity: 0;
}

@keyframes anim127 {
  0% {
    opacity: 1;
    transform: rotate(106.5deg) translate3d(123px, 169px, 1000px) scale(1);
  }
}
.tri:nth-child(128) {
  border-top: 4px solid #ff9900;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  margin-left: -2px;
  margin-top: -2px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(9deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim128 10s infinite linear;
  animation-delay: -6.4s;
  opacity: 0;
}

@keyframes anim128 {
  0% {
    opacity: 1;
    transform: rotate(13.5deg) translate3d(412px, 318px, 1000px) scale(1);
  }
}
.tri:nth-child(129) {
  border-top: 48px solid #7700ff;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(62deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim129 10s infinite linear;
  animation-delay: -6.45s;
  opacity: 0;
}

@keyframes anim129 {
  0% {
    opacity: 1;
    transform: rotate(93deg) translate3d(736px, 154px, 1000px) scale(1);
  }
}
.tri:nth-child(130) {
  border-top: 9px solid #7bff00;
  border-right: 9px solid transparent;
  border-left: 9px solid transparent;
  margin-left: -4.5px;
  margin-top: -4.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(138deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim130 10s infinite linear;
  animation-delay: -6.5s;
  opacity: 0;
}

@keyframes anim130 {
  0% {
    opacity: 1;
    transform: rotate(207deg) translate3d(961px, 826px, 1000px) scale(1);
  }
}
.tri:nth-child(131) {
  border-top: 18px solid #a200ff;
  border-right: 18px solid transparent;
  border-left: 18px solid transparent;
  margin-left: -9px;
  margin-top: -9px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(101deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim131 10s infinite linear;
  animation-delay: -6.55s;
  opacity: 0;
}

@keyframes anim131 {
  0% {
    opacity: 1;
    transform: rotate(151.5deg) translate3d(344px, 36px, 1000px) scale(1);
  }
}
.tri:nth-child(132) {
  border-top: 21px solid #00ff95;
  border-right: 21px solid transparent;
  border-left: 21px solid transparent;
  margin-left: -10.5px;
  margin-top: -10.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(342deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim132 10s infinite linear;
  animation-delay: -6.6s;
  opacity: 0;
}

@keyframes anim132 {
  0% {
    opacity: 1;
    transform: rotate(513deg) translate3d(414px, 975px, 1000px) scale(1);
  }
}
.tri:nth-child(133) {
  border-top: 50px solid #48ff00;
  border-right: 50px solid transparent;
  border-left: 50px solid transparent;
  margin-left: -25px;
  margin-top: -25px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(259deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim133 10s infinite linear;
  animation-delay: -6.65s;
  opacity: 0;
}

@keyframes anim133 {
  0% {
    opacity: 1;
    transform: rotate(388.5deg) translate3d(113px, 615px, 1000px) scale(1);
  }
}
.tri:nth-child(134) {
  border-top: 36px solid #d5ff00;
  border-right: 36px solid transparent;
  border-left: 36px solid transparent;
  margin-left: -18px;
  margin-top: -18px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(82deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim134 10s infinite linear;
  animation-delay: -6.7s;
  opacity: 0;
}

@keyframes anim134 {
  0% {
    opacity: 1;
    transform: rotate(123deg) translate3d(864px, 772px, 1000px) scale(1);
  }
}
.tri:nth-child(135) {
  border-top: 33px solid #3300ff;
  border-right: 33px solid transparent;
  border-left: 33px solid transparent;
  margin-left: -16.5px;
  margin-top: -16.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(268deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim135 10s infinite linear;
  animation-delay: -6.75s;
  opacity: 0;
}

@keyframes anim135 {
  0% {
    opacity: 1;
    transform: rotate(402deg) translate3d(823px, 174px, 1000px) scale(1);
  }
}
.tri:nth-child(136) {
  border-top: 23px solid #9dff00;
  border-right: 23px solid transparent;
  border-left: 23px solid transparent;
  margin-left: -11.5px;
  margin-top: -11.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(358deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim136 10s infinite linear;
  animation-delay: -6.8s;
  opacity: 0;
}

@keyframes anim136 {
  0% {
    opacity: 1;
    transform: rotate(537deg) translate3d(866px, 114px, 1000px) scale(1);
  }
}
.tri:nth-child(137) {
  border-top: 48px solid #ff1100;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(349deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim137 10s infinite linear;
  animation-delay: -6.85s;
  opacity: 0;
}

@keyframes anim137 {
  0% {
    opacity: 1;
    transform: rotate(523.5deg) translate3d(948px, 569px, 1000px) scale(1);
  }
}
.tri:nth-child(138) {
  border-top: 42px solid #ffd500;
  border-right: 42px solid transparent;
  border-left: 42px solid transparent;
  margin-left: -21px;
  margin-top: -21px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(116deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim138 10s infinite linear;
  animation-delay: -6.9s;
  opacity: 0;
}

@keyframes anim138 {
  0% {
    opacity: 1;
    transform: rotate(174deg) translate3d(889px, 280px, 1000px) scale(1);
  }
}
.tri:nth-child(139) {
  border-top: 14px solid #ffbb00;
  border-right: 14px solid transparent;
  border-left: 14px solid transparent;
  margin-left: -7px;
  margin-top: -7px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(321deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim139 10s infinite linear;
  animation-delay: -6.95s;
  opacity: 0;
}

@keyframes anim139 {
  0% {
    opacity: 1;
    transform: rotate(481.5deg) translate3d(205px, 898px, 1000px) scale(1);
  }
}
.tri:nth-child(140) {
  border-top: 12px solid #a200ff;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  margin-left: -6px;
  margin-top: -6px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(5deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim140 10s infinite linear;
  animation-delay: -7s;
  opacity: 0;
}

@keyframes anim140 {
  0% {
    opacity: 1;
    transform: rotate(7.5deg) translate3d(107px, 11px, 1000px) scale(1);
  }
}
.tri:nth-child(141) {
  border-top: 48px solid #00ff26;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(360deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim141 10s infinite linear;
  animation-delay: -7.05s;
  opacity: 0;
}

@keyframes anim141 {
  0% {
    opacity: 1;
    transform: rotate(540deg) translate3d(564px, 360px, 1000px) scale(1);
  }
}
.tri:nth-child(142) {
  border-top: 3px solid #00ff55;
  border-right: 3px solid transparent;
  border-left: 3px solid transparent;
  margin-left: -1.5px;
  margin-top: -1.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(205deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim142 10s infinite linear;
  animation-delay: -7.1s;
  opacity: 0;
}

@keyframes anim142 {
  0% {
    opacity: 1;
    transform: rotate(307.5deg) translate3d(972px, 365px, 1000px) scale(1);
  }
}
.tri:nth-child(143) {
  border-top: 31px solid #ffc400;
  border-right: 31px solid transparent;
  border-left: 31px solid transparent;
  margin-left: -15.5px;
  margin-top: -15.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(226deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim143 10s infinite linear;
  animation-delay: -7.15s;
  opacity: 0;
}

@keyframes anim143 {
  0% {
    opacity: 1;
    transform: rotate(339deg) translate3d(280px, 866px, 1000px) scale(1);
  }
}
.tri:nth-child(144) {
  border-top: 49px solid #ff00e6;
  border-right: 49px solid transparent;
  border-left: 49px solid transparent;
  margin-left: -24.5px;
  margin-top: -24.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(130deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim144 10s infinite linear;
  animation-delay: -7.2s;
  opacity: 0;
}

@keyframes anim144 {
  0% {
    opacity: 1;
    transform: rotate(195deg) translate3d(203px, 112px, 1000px) scale(1);
  }
}
.tri:nth-child(145) {
  border-top: 11px solid yellow;
  border-right: 11px solid transparent;
  border-left: 11px solid transparent;
  margin-left: -5.5px;
  margin-top: -5.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(297deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim145 10s infinite linear;
  animation-delay: -7.25s;
  opacity: 0;
}

@keyframes anim145 {
  0% {
    opacity: 1;
    transform: rotate(445.5deg) translate3d(159px, 902px, 1000px) scale(1);
  }
}
.tri:nth-child(146) {
  border-top: 6px solid #ff00cc;
  border-right: 6px solid transparent;
  border-left: 6px solid transparent;
  margin-left: -3px;
  margin-top: -3px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(31deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim146 10s infinite linear;
  animation-delay: -7.3s;
  opacity: 0;
}

@keyframes anim146 {
  0% {
    opacity: 1;
    transform: rotate(46.5deg) translate3d(96px, 797px, 1000px) scale(1);
  }
}
.tri:nth-child(147) {
  border-top: 43px solid #ff0011;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(276deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim147 10s infinite linear;
  animation-delay: -7.35s;
  opacity: 0;
}

@keyframes anim147 {
  0% {
    opacity: 1;
    transform: rotate(414deg) translate3d(401px, 303px, 1000px) scale(1);
  }
}
.tri:nth-child(148) {
  border-top: 2px solid #00d0ff;
  border-right: 2px solid transparent;
  border-left: 2px solid transparent;
  margin-left: -1px;
  margin-top: -1px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(112deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim148 10s infinite linear;
  animation-delay: -7.4s;
  opacity: 0;
}

@keyframes anim148 {
  0% {
    opacity: 1;
    transform: rotate(168deg) translate3d(621px, 476px, 1000px) scale(1);
  }
}
.tri:nth-child(149) {
  border-top: 26px solid #51ff00;
  border-right: 26px solid transparent;
  border-left: 26px solid transparent;
  margin-left: -13px;
  margin-top: -13px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(83deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim149 10s infinite linear;
  animation-delay: -7.45s;
  opacity: 0;
}

@keyframes anim149 {
  0% {
    opacity: 1;
    transform: rotate(124.5deg) translate3d(112px, 524px, 1000px) scale(1);
  }
}
.tri:nth-child(150) {
  border-top: 35px solid #0033ff;
  border-right: 35px solid transparent;
  border-left: 35px solid transparent;
  margin-left: -17.5px;
  margin-top: -17.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(19deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim150 10s infinite linear;
  animation-delay: -7.5s;
  opacity: 0;
}

@keyframes anim150 {
  0% {
    opacity: 1;
    transform: rotate(28.5deg) translate3d(774px, 336px, 1000px) scale(1);
  }
}
.tri:nth-child(151) {
  border-top: 37px solid #2200ff;
  border-right: 37px solid transparent;
  border-left: 37px solid transparent;
  margin-left: -18.5px;
  margin-top: -18.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(106deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim151 10s infinite linear;
  animation-delay: -7.55s;
  opacity: 0;
}

@keyframes anim151 {
  0% {
    opacity: 1;
    transform: rotate(159deg) translate3d(792px, 616px, 1000px) scale(1);
  }
}
.tri:nth-child(152) {
  border-top: 46px solid #5500ff;
  border-right: 46px solid transparent;
  border-left: 46px solid transparent;
  margin-left: -23px;
  margin-top: -23px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(191deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim152 10s infinite linear;
  animation-delay: -7.6s;
  opacity: 0;
}

@keyframes anim152 {
  0% {
    opacity: 1;
    transform: rotate(286.5deg) translate3d(555px, 431px, 1000px) scale(1);
  }
}
.tri:nth-child(153) {
  border-top: 5px solid #ff004d;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(68deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim153 10s infinite linear;
  animation-delay: -7.65s;
  opacity: 0;
}

@keyframes anim153 {
  0% {
    opacity: 1;
    transform: rotate(102deg) translate3d(924px, 289px, 1000px) scale(1);
  }
}
.tri:nth-child(154) {
  border-top: 43px solid #5100ff;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(209deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim154 10s infinite linear;
  animation-delay: -7.7s;
  opacity: 0;
}

@keyframes anim154 {
  0% {
    opacity: 1;
    transform: rotate(313.5deg) translate3d(60px, 592px, 1000px) scale(1);
  }
}
.tri:nth-child(155) {
  border-top: 43px solid #00ff2b;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(273deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim155 10s infinite linear;
  animation-delay: -7.75s;
  opacity: 0;
}

@keyframes anim155 {
  0% {
    opacity: 1;
    transform: rotate(409.5deg) translate3d(276px, 396px, 1000px) scale(1);
  }
}
.tri:nth-child(156) {
  border-top: 17px solid #00c4ff;
  border-right: 17px solid transparent;
  border-left: 17px solid transparent;
  margin-left: -8.5px;
  margin-top: -8.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(108deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim156 10s infinite linear;
  animation-delay: -7.8s;
  opacity: 0;
}

@keyframes anim156 {
  0% {
    opacity: 1;
    transform: rotate(162deg) translate3d(386px, 376px, 1000px) scale(1);
  }
}
.tri:nth-child(157) {
  border-top: 33px solid #eaff00;
  border-right: 33px solid transparent;
  border-left: 33px solid transparent;
  margin-left: -16.5px;
  margin-top: -16.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(161deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim157 10s infinite linear;
  animation-delay: -7.85s;
  opacity: 0;
}

@keyframes anim157 {
  0% {
    opacity: 1;
    transform: rotate(241.5deg) translate3d(360px, 766px, 1000px) scale(1);
  }
}
.tri:nth-child(158) {
  border-top: 42px solid #66ff00;
  border-right: 42px solid transparent;
  border-left: 42px solid transparent;
  margin-left: -21px;
  margin-top: -21px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(64deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim158 10s infinite linear;
  animation-delay: -7.9s;
  opacity: 0;
}

@keyframes anim158 {
  0% {
    opacity: 1;
    transform: rotate(96deg) translate3d(905px, 13px, 1000px) scale(1);
  }
}
.tri:nth-child(159) {
  border-top: 11px solid #3cff00;
  border-right: 11px solid transparent;
  border-left: 11px solid transparent;
  margin-left: -5.5px;
  margin-top: -5.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(359deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim159 10s infinite linear;
  animation-delay: -7.95s;
  opacity: 0;
}

@keyframes anim159 {
  0% {
    opacity: 1;
    transform: rotate(538.5deg) translate3d(160px, 815px, 1000px) scale(1);
  }
}
.tri:nth-child(160) {
  border-top: 49px solid #00ff2b;
  border-right: 49px solid transparent;
  border-left: 49px solid transparent;
  margin-left: -24.5px;
  margin-top: -24.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(8deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim160 10s infinite linear;
  animation-delay: -8s;
  opacity: 0;
}

@keyframes anim160 {
  0% {
    opacity: 1;
    transform: rotate(12deg) translate3d(190px, 886px, 1000px) scale(1);
  }
}
.tri:nth-child(161) {
  border-top: 48px solid #26ff00;
  border-right: 48px solid transparent;
  border-left: 48px solid transparent;
  margin-left: -24px;
  margin-top: -24px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(338deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim161 10s infinite linear;
  animation-delay: -8.05s;
  opacity: 0;
}

@keyframes anim161 {
  0% {
    opacity: 1;
    transform: rotate(507deg) translate3d(931px, 882px, 1000px) scale(1);
  }
}
.tri:nth-child(162) {
  border-top: 24px solid #0077ff;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(316deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim162 10s infinite linear;
  animation-delay: -8.1s;
  opacity: 0;
}

@keyframes anim162 {
  0% {
    opacity: 1;
    transform: rotate(474deg) translate3d(281px, 632px, 1000px) scale(1);
  }
}
.tri:nth-child(163) {
  border-top: 5px solid #ff1100;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(59deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim163 10s infinite linear;
  animation-delay: -8.15s;
  opacity: 0;
}

@keyframes anim163 {
  0% {
    opacity: 1;
    transform: rotate(88.5deg) translate3d(815px, 857px, 1000px) scale(1);
  }
}
.tri:nth-child(164) {
  border-top: 20px solid #6fff00;
  border-right: 20px solid transparent;
  border-left: 20px solid transparent;
  margin-left: -10px;
  margin-top: -10px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(215deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim164 10s infinite linear;
  animation-delay: -8.2s;
  opacity: 0;
}

@keyframes anim164 {
  0% {
    opacity: 1;
    transform: rotate(322.5deg) translate3d(676px, 216px, 1000px) scale(1);
  }
}
.tri:nth-child(165) {
  border-top: 32px solid yellow;
  border-right: 32px solid transparent;
  border-left: 32px solid transparent;
  margin-left: -16px;
  margin-top: -16px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(208deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim165 10s infinite linear;
  animation-delay: -8.25s;
  opacity: 0;
}

@keyframes anim165 {
  0% {
    opacity: 1;
    transform: rotate(312deg) translate3d(852px, 401px, 1000px) scale(1);
  }
}
.tri:nth-child(166) {
  border-top: 27px solid #ffc400;
  border-right: 27px solid transparent;
  border-left: 27px solid transparent;
  margin-left: -13.5px;
  margin-top: -13.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(92deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim166 10s infinite linear;
  animation-delay: -8.3s;
  opacity: 0;
}

@keyframes anim166 {
  0% {
    opacity: 1;
    transform: rotate(138deg) translate3d(705px, 728px, 1000px) scale(1);
  }
}
.tri:nth-child(167) {
  border-top: 18px solid #00ff0d;
  border-right: 18px solid transparent;
  border-left: 18px solid transparent;
  margin-left: -9px;
  margin-top: -9px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(78deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim167 10s infinite linear;
  animation-delay: -8.35s;
  opacity: 0;
}

@keyframes anim167 {
  0% {
    opacity: 1;
    transform: rotate(117deg) translate3d(321px, 807px, 1000px) scale(1);
  }
}
.tri:nth-child(168) {
  border-top: 5px solid #c400ff;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(273deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim168 10s infinite linear;
  animation-delay: -8.4s;
  opacity: 0;
}

@keyframes anim168 {
  0% {
    opacity: 1;
    transform: rotate(409.5deg) translate3d(417px, 128px, 1000px) scale(1);
  }
}
.tri:nth-child(169) {
  border-top: 34px solid #ff0059;
  border-right: 34px solid transparent;
  border-left: 34px solid transparent;
  margin-left: -17px;
  margin-top: -17px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(94deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim169 10s infinite linear;
  animation-delay: -8.45s;
  opacity: 0;
}

@keyframes anim169 {
  0% {
    opacity: 1;
    transform: rotate(141deg) translate3d(703px, 337px, 1000px) scale(1);
  }
}
.tri:nth-child(170) {
  border-top: 45px solid #ff2b00;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(359deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim170 10s infinite linear;
  animation-delay: -8.5s;
  opacity: 0;
}

@keyframes anim170 {
  0% {
    opacity: 1;
    transform: rotate(538.5deg) translate3d(97px, 166px, 1000px) scale(1);
  }
}
.tri:nth-child(171) {
  border-top: 13px solid #002fff;
  border-right: 13px solid transparent;
  border-left: 13px solid transparent;
  margin-left: -6.5px;
  margin-top: -6.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(75deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim171 10s infinite linear;
  animation-delay: -8.55s;
  opacity: 0;
}

@keyframes anim171 {
  0% {
    opacity: 1;
    transform: rotate(112.5deg) translate3d(117px, 845px, 1000px) scale(1);
  }
}
.tri:nth-child(172) {
  border-top: 33px solid #00ffee;
  border-right: 33px solid transparent;
  border-left: 33px solid transparent;
  margin-left: -16.5px;
  margin-top: -16.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(189deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim172 10s infinite linear;
  animation-delay: -8.6s;
  opacity: 0;
}

@keyframes anim172 {
  0% {
    opacity: 1;
    transform: rotate(283.5deg) translate3d(176px, 295px, 1000px) scale(1);
  }
}
.tri:nth-child(173) {
  border-top: 43px solid #2600ff;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(7deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim173 10s infinite linear;
  animation-delay: -8.65s;
  opacity: 0;
}

@keyframes anim173 {
  0% {
    opacity: 1;
    transform: rotate(10.5deg) translate3d(791px, 856px, 1000px) scale(1);
  }
}
.tri:nth-child(174) {
  border-top: 18px solid #ff9d00;
  border-right: 18px solid transparent;
  border-left: 18px solid transparent;
  margin-left: -9px;
  margin-top: -9px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(151deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim174 10s infinite linear;
  animation-delay: -8.7s;
  opacity: 0;
}

@keyframes anim174 {
  0% {
    opacity: 1;
    transform: rotate(226.5deg) translate3d(404px, 320px, 1000px) scale(1);
  }
}
.tri:nth-child(175) {
  border-top: 32px solid #cc00ff;
  border-right: 32px solid transparent;
  border-left: 32px solid transparent;
  margin-left: -16px;
  margin-top: -16px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(269deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim175 10s infinite linear;
  animation-delay: -8.75s;
  opacity: 0;
}

@keyframes anim175 {
  0% {
    opacity: 1;
    transform: rotate(403.5deg) translate3d(731px, 494px, 1000px) scale(1);
  }
}
.tri:nth-child(176) {
  border-top: 43px solid #00ff7b;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(115deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim176 10s infinite linear;
  animation-delay: -8.8s;
  opacity: 0;
}

@keyframes anim176 {
  0% {
    opacity: 1;
    transform: rotate(172.5deg) translate3d(809px, 48px, 1000px) scale(1);
  }
}
.tri:nth-child(177) {
  border-top: 28px solid #ff4000;
  border-right: 28px solid transparent;
  border-left: 28px solid transparent;
  margin-left: -14px;
  margin-top: -14px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(331deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim177 10s infinite linear;
  animation-delay: -8.85s;
  opacity: 0;
}

@keyframes anim177 {
  0% {
    opacity: 1;
    transform: rotate(496.5deg) translate3d(269px, 112px, 1000px) scale(1);
  }
}
.tri:nth-child(178) {
  border-top: 24px solid #00fff7;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(223deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim178 10s infinite linear;
  animation-delay: -8.9s;
  opacity: 0;
}

@keyframes anim178 {
  0% {
    opacity: 1;
    transform: rotate(334.5deg) translate3d(826px, 166px, 1000px) scale(1);
  }
}
.tri:nth-child(179) {
  border-top: 7px solid #4400ff;
  border-right: 7px solid transparent;
  border-left: 7px solid transparent;
  margin-left: -3.5px;
  margin-top: -3.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(357deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim179 10s infinite linear;
  animation-delay: -8.95s;
  opacity: 0;
}

@keyframes anim179 {
  0% {
    opacity: 1;
    transform: rotate(535.5deg) translate3d(191px, 710px, 1000px) scale(1);
  }
}
.tri:nth-child(180) {
  border-top: 37px solid #ff0099;
  border-right: 37px solid transparent;
  border-left: 37px solid transparent;
  margin-left: -18.5px;
  margin-top: -18.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(207deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim180 10s infinite linear;
  animation-delay: -9s;
  opacity: 0;
}

@keyframes anim180 {
  0% {
    opacity: 1;
    transform: rotate(310.5deg) translate3d(431px, 977px, 1000px) scale(1);
  }
}
.tri:nth-child(181) {
  border-top: 26px solid #ff0011;
  border-right: 26px solid transparent;
  border-left: 26px solid transparent;
  margin-left: -13px;
  margin-top: -13px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(181deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim181 10s infinite linear;
  animation-delay: -9.05s;
  opacity: 0;
}

@keyframes anim181 {
  0% {
    opacity: 1;
    transform: rotate(271.5deg) translate3d(768px, 746px, 1000px) scale(1);
  }
}
.tri:nth-child(182) {
  border-top: 44px solid #cc00ff;
  border-right: 44px solid transparent;
  border-left: 44px solid transparent;
  margin-left: -22px;
  margin-top: -22px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(104deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim182 10s infinite linear;
  animation-delay: -9.1s;
  opacity: 0;
}

@keyframes anim182 {
  0% {
    opacity: 1;
    transform: rotate(156deg) translate3d(772px, 51px, 1000px) scale(1);
  }
}
.tri:nth-child(183) {
  border-top: 10px solid #00ff09;
  border-right: 10px solid transparent;
  border-left: 10px solid transparent;
  margin-left: -5px;
  margin-top: -5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(47deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim183 10s infinite linear;
  animation-delay: -9.15s;
  opacity: 0;
}

@keyframes anim183 {
  0% {
    opacity: 1;
    transform: rotate(70.5deg) translate3d(132px, 299px, 1000px) scale(1);
  }
}
.tri:nth-child(184) {
  border-top: 12px solid #0022ff;
  border-right: 12px solid transparent;
  border-left: 12px solid transparent;
  margin-left: -6px;
  margin-top: -6px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(81deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim184 10s infinite linear;
  animation-delay: -9.2s;
  opacity: 0;
}

@keyframes anim184 {
  0% {
    opacity: 1;
    transform: rotate(121.5deg) translate3d(432px, 144px, 1000px) scale(1);
  }
}
.tri:nth-child(185) {
  border-top: 14px solid #ffaa00;
  border-right: 14px solid transparent;
  border-left: 14px solid transparent;
  margin-left: -7px;
  margin-top: -7px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(246deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim185 10s infinite linear;
  animation-delay: -9.25s;
  opacity: 0;
}

@keyframes anim185 {
  0% {
    opacity: 1;
    transform: rotate(369deg) translate3d(962px, 896px, 1000px) scale(1);
  }
}
.tri:nth-child(186) {
  border-top: 43px solid #00ff8c;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(78deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim186 10s infinite linear;
  animation-delay: -9.3s;
  opacity: 0;
}

@keyframes anim186 {
  0% {
    opacity: 1;
    transform: rotate(117deg) translate3d(91px, 297px, 1000px) scale(1);
  }
}
.tri:nth-child(187) {
  border-top: 45px solid #40ff00;
  border-right: 45px solid transparent;
  border-left: 45px solid transparent;
  margin-left: -22.5px;
  margin-top: -22.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(239deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim187 10s infinite linear;
  animation-delay: -9.35s;
  opacity: 0;
}

@keyframes anim187 {
  0% {
    opacity: 1;
    transform: rotate(358.5deg) translate3d(678px, 176px, 1000px) scale(1);
  }
}
.tri:nth-child(188) {
  border-top: 30px solid #0066ff;
  border-right: 30px solid transparent;
  border-left: 30px solid transparent;
  margin-left: -15px;
  margin-top: -15px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(159deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim188 10s infinite linear;
  animation-delay: -9.4s;
  opacity: 0;
}

@keyframes anim188 {
  0% {
    opacity: 1;
    transform: rotate(238.5deg) translate3d(196px, 393px, 1000px) scale(1);
  }
}
.tri:nth-child(189) {
  border-top: 24px solid #00ff8c;
  border-right: 24px solid transparent;
  border-left: 24px solid transparent;
  margin-left: -12px;
  margin-top: -12px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(206deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim189 10s infinite linear;
  animation-delay: -9.45s;
  opacity: 0;
}

@keyframes anim189 {
  0% {
    opacity: 1;
    transform: rotate(309deg) translate3d(210px, 974px, 1000px) scale(1);
  }
}
.tri:nth-child(190) {
  border-top: 5px solid #5100ff;
  border-right: 5px solid transparent;
  border-left: 5px solid transparent;
  margin-left: -2.5px;
  margin-top: -2.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(305deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim190 10s infinite linear;
  animation-delay: -9.5s;
  opacity: 0;
}

@keyframes anim190 {
  0% {
    opacity: 1;
    transform: rotate(457.5deg) translate3d(870px, 621px, 1000px) scale(1);
  }
}
.tri:nth-child(191) {
  border-top: 4px solid #f200ff;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent;
  margin-left: -2px;
  margin-top: -2px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(5deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim191 10s infinite linear;
  animation-delay: -9.55s;
  opacity: 0;
}

@keyframes anim191 {
  0% {
    opacity: 1;
    transform: rotate(7.5deg) translate3d(789px, 648px, 1000px) scale(1);
  }
}
.tri:nth-child(192) {
  border-top: 15px solid #ea00ff;
  border-right: 15px solid transparent;
  border-left: 15px solid transparent;
  margin-left: -7.5px;
  margin-top: -7.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(290deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim192 10s infinite linear;
  animation-delay: -9.6s;
  opacity: 0;
}

@keyframes anim192 {
  0% {
    opacity: 1;
    transform: rotate(435deg) translate3d(61px, 103px, 1000px) scale(1);
  }
}
.tri:nth-child(193) {
  border-top: 17px solid #0004ff;
  border-right: 17px solid transparent;
  border-left: 17px solid transparent;
  margin-left: -8.5px;
  margin-top: -8.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(86deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim193 10s infinite linear;
  animation-delay: -9.65s;
  opacity: 0;
}

@keyframes anim193 {
  0% {
    opacity: 1;
    transform: rotate(129deg) translate3d(376px, 303px, 1000px) scale(1);
  }
}
.tri:nth-child(194) {
  border-top: 31px solid #00ff22;
  border-right: 31px solid transparent;
  border-left: 31px solid transparent;
  margin-left: -15.5px;
  margin-top: -15.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(245deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim194 10s infinite linear;
  animation-delay: -9.7s;
  opacity: 0;
}

@keyframes anim194 {
  0% {
    opacity: 1;
    transform: rotate(367.5deg) translate3d(322px, 252px, 1000px) scale(1);
  }
}
.tri:nth-child(195) {
  border-top: 26px solid #ff2f00;
  border-right: 26px solid transparent;
  border-left: 26px solid transparent;
  margin-left: -13px;
  margin-top: -13px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(282deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim195 10s infinite linear;
  animation-delay: -9.75s;
  opacity: 0;
}

@keyframes anim195 {
  0% {
    opacity: 1;
    transform: rotate(423deg) translate3d(210px, 11px, 1000px) scale(1);
  }
}
.tri:nth-child(196) {
  border-top: 11px solid #88ff00;
  border-right: 11px solid transparent;
  border-left: 11px solid transparent;
  margin-left: -5.5px;
  margin-top: -5.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(116deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim196 10s infinite linear;
  animation-delay: -9.8s;
  opacity: 0;
}

@keyframes anim196 {
  0% {
    opacity: 1;
    transform: rotate(174deg) translate3d(575px, 80px, 1000px) scale(1);
  }
}
.tri:nth-child(197) {
  border-top: 43px solid #4000ff;
  border-right: 43px solid transparent;
  border-left: 43px solid transparent;
  margin-left: -21.5px;
  margin-top: -21.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(118deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim197 10s infinite linear;
  animation-delay: -9.85s;
  opacity: 0;
}

@keyframes anim197 {
  0% {
    opacity: 1;
    transform: rotate(177deg) translate3d(469px, 740px, 1000px) scale(1);
  }
}
.tri:nth-child(198) {
  border-top: 37px solid #e100ff;
  border-right: 37px solid transparent;
  border-left: 37px solid transparent;
  margin-left: -18.5px;
  margin-top: -18.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(87deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim198 10s infinite linear;
  animation-delay: -9.9s;
  opacity: 0;
}

@keyframes anim198 {
  0% {
    opacity: 1;
    transform: rotate(130.5deg) translate3d(171px, 80px, 1000px) scale(1);
  }
}
.tri:nth-child(199) {
  border-top: 10px solid #00ffbb;
  border-right: 10px solid transparent;
  border-left: 10px solid transparent;
  margin-left: -5px;
  margin-top: -5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(306deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim199 10s infinite linear;
  animation-delay: -9.95s;
  opacity: 0;
}

@keyframes anim199 {
  0% {
    opacity: 1;
    transform: rotate(459deg) translate3d(577px, 74px, 1000px) scale(1);
  }
}
.tri:nth-child(200) {
  border-top: 19px solid #ff00b7;
  border-right: 19px solid transparent;
  border-left: 19px solid transparent;
  margin-left: -9.5px;
  margin-top: -9.5px;
  -webkit-filter: grayscale(1);
  filter: grayscale(1);
  transform: rotate(360deg) translate3d(0, 0, -1500px) scale(0);
  animation: anim200 10s infinite linear;
  animation-delay: -10s;
  opacity: 0;
}

@keyframes anim200 {
  0% {
    opacity: 1;
    transform: rotate(540deg) translate3d(982px, 5px, 1000px) scale(1);
  }
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<div class='wrap'>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
  <div class='tri'></div>
</div>
<!-- partial -->
  
</body>
</html>
