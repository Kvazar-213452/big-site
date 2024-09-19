<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Warp </title>
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
<canvas id="c"></canvas>
<!-- partial -->
<script>
var c = document.getElementById("c");
var ctx = c.getContext("2d");
var w = c.width = window.innerWidth;
var h = c.height = window.innerHeight;
var particles = [];
var max = 500;
var clearColor = "rgba(0, 0, 0, 0.1)"; // Колір очищення фону з прозорістю
var fov = 20;
var hue = 187;

function random(min, max) {
    return (Math.random() * (max - min)) + min;
}

function P() {}

P.prototype.init = function() {
    this.x = random(-20, 20);
    this.y = random(-20, 20);
    this.z = random(200, 300);
    this.vx = random(-2, 2);
    this.vy = random(-2, 2);
    this.vz = random(.5, 1);
    this.color = "hsla(" + hue + ", 100%, 50%, .5)";
    this.size = random(5, 15);
};

P.prototype.draw = function() {
    var scale = fov / (fov + this.z);
    var x2d = this.x * scale + w / 2;
    var y2d = this.y * scale + h / 2;
    ctx.fillStyle = this.color;
    ctx.fillRect(x2d, y2d, this.size * scale, this.size * scale);

    if (x2d < 0 || x2d > w || y2d < 0 || y2d > h) {
        this.init();
    }

    this.update();
};


P.prototype.update = function() {
    this.z -= this.vz;
    this.x += this.vx;
    this.y += this.vy;
    if (this.z < -fov) {
        this.init();
    }
};

for (var i = 0; i < max; i++) {
    (function(x) {
        setTimeout(function() {
            var p = new P();
            p.init();
            particles.push(p);
        }, x * 10)
    })(i)
}

window.addEventListener("resize", function() {
    w = c.width = window.innerWidth;
    h = c.height = window.innerHeight;
})

function anim() {
    ctx.clearRect(0, 0, w, h); // Очищення canvas замість заповнення кольором з прозорістю

    for (var i in particles) {
        particles[i].draw();
    }

    hue += .15;
    window.requestAnimationFrame(anim);
}

anim();

</script>

</body>
</html>
