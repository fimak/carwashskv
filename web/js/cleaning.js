function el(id) {
    return document.getElementById(id)
};

function initCanvas() {
    X = 0;
    Y = 0;
    r = d / 2;
    var car = document.createElement('canvas');
    car.height = el('cover').offsetHeight;
    car.width = el('cover').offsetWidth;

//    var clean = document.createElement('img');
//    clean.src = '/images/sedan_clean.jpg';
//    clean.style.width = "100%";
//    clean.style.height = "100%";

//    console.log(car);
//    console.log(clean);
    if (car.getContext) {
        ctx = car.getContext('2d');
        ctx.strokeStyle = ctx.createPattern(clean, 'no-repeat');
        ctx.fillStyle = ctx.createPattern(clean, 'no-repeat');
        draw = function(x, y) {
            ctx.lineWidth = 1;
            ctx.beginPath();
            ctx.arc(x, y, r, 0, Math.PI * 2, false);
            ctx.fill();
            ctx.closePath();
            if ((X == 0) && (Y == 0)) {
                X = x;
                Y = y;
                return;
            };
            ctx.lineWidth = d;
            ctx.beginPath();
            ctx.moveTo(x, y);
            ctx.lineTo(X, Y);
            ctx.stroke();
            ctx.closePath();
            X = x;
            Y = y;
        };
        clearAll = function() {
            void(ctx.drawImage(clean, 0, 0))
        };
        blurAll = function() {
            void(ctx.clearRect(0, 0, el('cover').offsetWidth, el('cover').offsetHeight))
        };
    } else {
        car = document.createElement('div');
        clearAll = function() {
            car.innerHTML = '';
            car.style.background = 'url(' + clean.src + ')'
        };
        blurAll = function() {
            car.innerHTML = '';
            car.style.background = 'url(' + dirty.src + ')'
        };
        draw = function(x, y) {
            var div = document.createElement('div');
            div.className = 'arc';
            div.style.left = x - r + "px";
            div.style.top = y - r + "px";
            div.style.width = d + "px";
            div.style.height = d + "px";
            div.style.backgroundPosition = (r - x) + "px " + (r - y) + "px";
            el('car-canvas').appendChild(div);
        }
    }
    el('cover').parentNode.insertBefore(car, el('cover'));
    car.id = 'car-canvas';
    car.style.position = "absolute";
    car.style.background = 'url(' + dirty.src + ')';
    //car.style.backgroundSize = '1302px 700px';
    car.style.left = el('cover').offsetLeft + "px";
    car.style.top = el('cover').offsetTop + "px";
    car.style.width = el('cover').offsetWidth + "px";
    car.style.height = el('cover').offsetHeight + "px";
}