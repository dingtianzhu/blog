const canvas = document.getElementById('canvas');
const ctx = canvas.getContext('2d');
canvas.width = 2000;
canvas.height = 400;
canvas.style.backgroundColor = '#000';

//2. xiaoqiu class
class Ball {
    constructor(x, y, color,) {
        this.x = x;
        this.y = y;
        this.color = color;
        this.r = 40;
    }

    render() {
        ctx.save();
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fillStyle = this.color;
        ctx.fill();
        ctx.restore();
    }


}

//3 move ball clas
class MoveBall extends Ball {
    constructor(x, y, color) {
        super(x, y, color);
        this.dx = _.random(-5, 5); //_.random(-5,5);
        this.dy = _.random(-5, 5);
        this.dr = _.random(1, 3);

    }

    upDate() {
        this.x += this.dx;
        this.y += this.dy;
        this.r -= this.dr;
        if (this.r < 0) {
            this.r = 0;
        }
    }

}

//4.
let ballArr = [];
let colorArr = ['red', 'green', 'blue', 'yellow', 'pink', 'purple', 'orange'];

//5.mouse
canvas.addEventListener('mousemove', function (e) {

    ballArr.push(new MoveBall(e.offsetX, e.offsetY, colorArr[_.random(0, colorArr.length - 1)]));
});

//6.start time
setInterval(function () {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    for (let i = 0; i < ballArr.length; i++) {
        ballArr[i].render();
        ballArr[i].upDate();
    }
}, 50);
//
// function show_black(a) {
//
//     let black = document.getElementById('index-black');
//     let carousel = document.getElementById('index-carousel');
//     let idown = document.getElementById('i-down');
//
//     if (black.style.display === 'none') {
//         black.style.display = 'block';
//         carousel.style.display = "none";
//         idown.className = 'glyphicon glyphicon-menu-up';
//     } else {
//         black.style.display = 'none';
//         carousel.style.display = 'block';
//         idown.className = 'glyphicon glyphicon-menu-down';
//     }
//
//
// }

