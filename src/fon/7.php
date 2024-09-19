<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Neon Rain</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>
  body {
  overflow: hidden;
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<canvas id="canvas-club"></canvas>
<!-- partial -->
<script>
 var c = document.getElementById("canvas-club");
var ctx = c.getContext("2d", { alpha: true }); // Встановлюємо атрибут alpha в true
var w = c.width = window.innerWidth;
var h = c.height = window.innerHeight;
var max = 30;
var drops = [];
var clearColor = 'rgba(0, 0, 0, 0.1)'; // Колір очищення фону з прозорістю

function random(min, max) {
    return Math.random() * (max - min) + min;
}

function O() {}

O.prototype = {
    init: function() {
        this.x = random(0, w);
        this.y = 0;
        this.color = 'hsl(180, 100%, 50%)';
        this.w = 2;
        this.h = 1;
        this.vy = random(4, 5);
        this.vw = 3;
        this.vh = 1;
        this.size = 2;
        this.hit = random(h * .8, h * .9);
        this.a = 1;
        this.va = .96;
    },
    draw: function() {
        if (this.y > this.hit) {
            ctx.beginPath();
            ctx.moveTo(this.x, this.y - this.h / 2);

            ctx.bezierCurveTo(
                this.x + this.w / 2, this.y - this.h / 2,
                this.x + this.w / 2, this.y + this.h / 2,
                this.x, this.y + this.h / 2);

            ctx.bezierCurveTo(
                this.x - this.w / 2, this.y + this.h / 2,
                this.x - this.w / 2, this.y - this.h / 2,
                this.x, this.y - this.h / 2);

            ctx.strokeStyle = 'hsla(180, 100%, 50%, '+this.a+')';
            ctx.stroke();
            ctx.closePath();
            
        } else {
            ctx.fillStyle = this.color;
            ctx.fillRect(this.x, this.y, this.size, this.size * 5);
        }
        this.update();
    },
    update: function() {
        if(this.y < this.hit){
            this.y += this.vy;
        } else {
            if(this.a > .03){
                this.w += this.vw;
                this.h += this.vh;
                if(this.w > 100){
                    this.a *= this.va;
                    this.vw *= .98;
                    this.vh *= .98;
                }
            } else {
                this.init();
            }
        }
        
    }
}

function resize(){
    w = c.width = window.innerWidth;
    h = c.height = window.innerHeight;
}

function setup(){
    for(var i = 0; i < max; i++){
        (function(j){
            setTimeout(function(){
                var o = new O();
                o.init();
                drops.push(o);
            }, j * 200)
        }(i));
    }
}


function anim() {
    ctx.clearRect(0, 0, w, h); // Очищення canvas замість заповнення кольором з прозорістю

    for(var i in drops){
        drops[i].draw();
    }
    requestAnimationFrame(anim);
}

window.addEventListener("resize", resize);

setup();
anim();

</script>

</body>
</html>
 