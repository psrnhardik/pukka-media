<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Helvetica Neue|Lucida Grande|Arial|Verdana|sans-serif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    

    <title>Pukka Media</title>

    <style>
        * {
            margin: 0;
            padding: 0;
        }

        a:hover {
            color: #fff;
        }

        .outsideWrapper {
            width: 100%;
            height: 100%;
        }

        .insideWrapper {
            width: 100%;
            height: 100%;
            position: fixed;
        }

        .coveredImage {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
        }

        .coveringCanvas {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0px;
            left: 0px;
            background-image: url({{ asset('assets/images/bg.jpg') }});
        }

        .button {
            display: inline-block;
            -webkit-box-sizing:border-box;
                -moz-box-sizing:border-box;
                    box-sizing:border-box;
            min-width:100px;
            padding: 22px 33px;
            font-size: 26px;
            line-height: 26px;
            text-decoration: none;
            color: #FFF;
            text-shadow: 0 1px 2px rgba(0,0,0,0.75);
            background: #5e0d0c;
            outline: none;
            border-radius: 15px;
            border: 1px solid #4c0300;
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #a23227, /* inner glow */
                inset 0 80px 80px -40px #ac3223, /* gradient */
                1px 1px 3px rgba(0,0,0,0.75); /* shadow */
                
            position: relative;
            overflow: visible; /* IE9 & 10 */
            -webkit-transition: 500ms linear;
                -moz-transition: 500ms linear;
                -o-transition: 500ms linear;
                    transition: 500ms linear;
        }

        .button::before {
            content: '';
            display: block;
            position: absolute;
            top: -7px;
            left: -3px;
            right: 0;
            height: 23px;
            background: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACsAAAAXCAYAAACS5bYWAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAABFpJREFUeNrUV0tIo1cUvpkYjQ4xxSA6DxuNqG0dtaUKOgs3s6i0dFd3pSsXdjeIixakiGA34sZuXCkoONLFwJTK4GMYLYXg29gatTpiXurkbd7vv9/5ub+IxuhA7eiFQ5Kbc8/57ne/e87/ywRBYLdl3GG3aNwqsLJ0k0tLS+fmcnNzWUVFBVMoFGx2djarvLxcm5OTw+bm5iytra2xc4ExNjY27iqVyvvwK6CpeDzuCYVC1urq6qDA9UcfPp+PHR4esmAwKK6tr68/l5/8rgQ2Ozub1dbWyiYmJooaGxt/VqvV38jlchX9l0qlwoFA4DWS/RKLxRxFRUVf5+XlPcaaT2AP0sVPJBL2SCRiAPBpu93+vKamZo/Ae71eZjabWV1dXVqw7CKwp43ksrCw8Bhg7MJ/PLDZ5PHx8cz29vYT5JGD/bSYLgTrcDgYdk6siSc6NjZWDaAe4ZoHQL+cmZnRpZPnhWDpD8kw7uKo9ML/NMCsd2tr61vkzboMrEyv138M7TyLRqMWMBsX3sMgaZhMpp+AR5EJrCocDpuEGzKg4x8khs+CVWxubvZfR9JkMik4nU7BarUKLpeLmLsKuwIqTLynp4fqmIzASrqQT09Pf1VVVfX0KsWZ6uHBwQHTaDSsoKAgo6/H4xHLEcrVyRwuEisrKzs5XrrIVAVwiUVDKRRrL+YI32ewdVhMApuHWvcj6vids6J2u90MF4yBHUZNgKoEBaRBQalJqFSqtJfUYrGIlQX+ydXVVTN+u0tKSjQNDQ1axJVl2iTypebn55d7e3v/kqoDgZU1NTU9LCws/Py0M+2ekuGincxJ3yF+18jIyHJLS0slQJUWFxczrBeBE0vE5tHRkbixlZWVfSR8gTX/0P5gH7S1tX3Z3t7+BW8qAvwSfr8/jA0EIRM/qoFtampqbW9vTw+XA+ojUruVd3Z2tvb19T2TQFEim81GgVJoCvvj4+NLOJZgaWmpemdn5y3a6BbcnJDAw8HBwac6ne6eqCW5XDwB3qVSqM9/DAwMUNy/eVLabT7sI25qwgujThCBhWE+mAt2yNc4SQKSZrOQQE1HS22VJkmPAGTr7+//fX19fRk+Zgq0trbGeFAKEAQT98BSqKOj47vm5uaa/Px8JeIk4GcaHh6eWlxcfAU/A8xG67BxAX3fwdcbYUpSDJ06Z49Ak8ZC3OL8f3YiA4PBYKdLQ2AJ9OTk5GpXV9cQiCVh79M94QtlPLDUE/1gPNrd3f0W33W4cBoco48zQuy/IZYAMnGqlSc4c66L9JruQUaSARXeT8HGKzxAqFBekni6+h46+pMzGiJGMgTOJh1yU/KNEGDvZWvfBawkA9ppwGg0mrRa7SOI2g+gxOgbJIpdFpj72PnxSnPX8vqRxTURgBQWKisrH+GThOm+CtAzoK/9/Uiqq/6hoaHfdnd3jaOjo7/yY7yxbwqkWy3sQzpS2C6YirwvUJk0y7hurfyGRrnduPGvAAMASmo8wzeVwfsAAAAASUVORK5CYII=) no-repeat 0 0,
            url(data:image/png;base64,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) no-repeat 50% 0,
            url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACEAAAAXCAYAAACFxybfAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAodJREFUeNrsVb1rWlEUv2pN/GqspKRSKFYXWzEloIWif0Fn6dJChQ7OQil0qd3EzcEpg0OgdHDr4CQODk7VRlLMEIVqApX4We0zflR9/Z1Ui4T34ksaaAYP/Hzc673n/M6550PG8zz73yKjn0wm83fDYDAwo9HINBrNnwOQg4MDs0ql2lQqlfdAWont7ng8Pjw+Ps44nc4G1pI9EXWaSOzt7TGO42aH5Pv7+08ajUZ0MBiUeXEZd7vdL5VK5fX29rZ+5tQiEmdxKrlcjsEYczgcynK5/BKKv/IXFNz/XiqVXkHdjUuRIA9SqdRD8or/R8Ez9fr9fqHVakUR4c2z0REjIQuHw2ZcrPBXLCA0RHTezEdHjIQqkUhEr9I4HOILhQLf6/VoOUFEvDMiQiToDx1Cdz+bzZ6bUFarlel0OkkVUK/XWbvdPoVer5fh3ntsfwJ+CJ2XA4p0Op1bpBgJyxDehQQ6nQ5DZXHBYDBZq9V+EhFUndnr9drEqoc2bwJbwGPgtohuVSwWe2Gz2TZMJpNgRKi6qtUqg2EWj8dTgUDgo0KhWPN4PC70EvXOzs67fD6/S6kiRIKeZA1YJ2MiJNbdbvfTUCjkV6vVK2hcDF8GI2w0GrGTkxM2HA5PDxaLxSOfz/cWEfk81X0XIMMFgJJ/srBjCgk8IdcfuVyuZ36//7nFYtkQyAMumUzuRiKRD0jMFLa+AZOpYwqgB/ziBVqmVBKUO7eAB/R0WG/Z7XaTVqtdbTabHJL6EK2djBaBPHA0NSqpbUsiMUeEBgpF4Q5AbZrmSJ/yEWgBTaBNHl9kdkgmMUeG7qwAq9PqovceTA3zlxlgsuswyuXsGsiSxJLEkoSY/BZgAEjRodi+uBruAAAAAElFTkSuQmCC) no-repeat 100% 0;    
        }

        .button:hover {
            background: #a61715;
            text-shadow: 0 1px 2px rgba(0,0,0,0.75), 0 0 40px #FFF;
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #da3b2c, /* inner glow */
                inset 0 80px 80px -40px #dd4330, /* gradient */
                1px 1px 3px rgba(0,0,0,0.75); /* shadow */    
        }

        .button:focus {
            outline: none; /*FF*/
        }

        .button:active {
            box-shadow:
                inset 1px 1px 0px rgba(255,255,255,0.25), /* highlight */
                inset 0 0 6px #da3b2c, /* inner glow */
                inset 0 80px 80px -40px #dd4330, /* gradient */
                0px 1px 0px rgba(255,255,255,0.25); /* shadow */
                
            -webkit-transition: 50ms linear;
                -moz-transition: 50ms linear;
                -o-transition: 50ms linear;
                    transition: 50ms linear;
        }

        /* other styles */
      
        .centerer {
            display: table-cell;
            vertical-align: middle;
            text-align: center;
            /* noise image */
            background-image: url(data:image/png;base64,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);
        }  
    </style>
</head>
<body>
    <div class="outsideWrapper">
        <div class="insideWrapper">
            <canvas class="coveringCanvas" id="canvas"></canvas>
            <center class="coveredImage">
                <div style="z-index: 10;">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Pukka Media" style="height: 300px; width:auto; filter: invert(100%);margin-bottom: -4%; margin-top: 0%; position: relative;" />
                    <h1>
                        <p style="color:white; font-size: 60px; margin:0px; font-family: Pacifico !importent;">We are Pukka Media</p>
                    </h1>
                    <a href="{{ route('contact') }}" type="button" class="button">Get a FREE Christmas Image</a>
                    <div class="container mt-2 d-flex justify-content-center align-items-center flex-column flex-md-row flex-sm-row" style="clear:both">
                        <img src="{{ asset('assets/images/post1.jpg') }}" width="250px" height="250px" class="m-1">
                        <img src="{{ asset('assets/images/post2.jpg') }}" width="250px" height="250px" class="m-1">
                        <img src="{{ asset('assets/images/post1.jpg') }}" width="250px" height="250px" class="m-1">
                    </div>
                </div>
            </center>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        var canvas = document.getElementById("canvas"), ctx = canvas.getContext('2d');

        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        var stars = [],
            FPS = 60,
            x = 100,
            mouse = {
                x: 0,
                y: 0
            };

        for (var i = 0; i < x; i++) {
            stars.push({
                x: Math.random() * canvas.width,
                y: Math.random() * canvas.height,
                radius: Math.random() * 1 + 1,
                vx: Math.floor(Math.random() * 50) - 25,
                vy: Math.floor(Math.random() * 50) - 25
            });
        }

        function draw() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            ctx.globalCompositeOperation = "lighter";

            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                ctx.fillStyle = "#fff";
                ctx.beginPath();
                ctx.arc(s.x, s.y, s.radius, 0, 3 * Math.PI);
                ctx.fill();
                ctx.fillStyle = 'black';
                ctx.stroke();
            }

            ctx.beginPath();
            for (var i = 0, x = stars.length; i < x; i++) {
                var starI = stars[i];
                ctx.moveTo(starI.x, starI.y);
                
                if (distance(mouse, starI) < 150) ctx.lineTo(mouse.x, mouse.y);
                
                for (var j = 0, x = stars.length; j < x; j++) {
                    var starII = stars[j];
                    if (distance(starI, starII) < 150) {
                        ctx.lineTo(starII.x, starII.y);
                    }
                }
            }
            ctx.lineWidth = 0.05;
            ctx.strokeStyle = 'white';
            ctx.stroke();
        }

        function distance(point1, point2) {
            var xs = 0;
            var ys = 0;

            xs = point2.x - point1.x;
            xs = xs * xs;

            ys = point2.y - point1.y;
            ys = ys * ys;

            return Math.sqrt(xs + ys);
        }

        function update() {
            for (var i = 0, x = stars.length; i < x; i++) {
                var s = stars[i];

                s.x += s.vx / FPS;
                s.y += s.vy / FPS;

                if (s.x < 0 || s.x > canvas.width) s.vx = -s.vx;
                if (s.y < 0 || s.y > canvas.height) s.vy = -s.vy;
            }
        }

        canvas.addEventListener('mousemove', function (e) {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        });

        function tick() {
            draw();
            update();
            requestAnimationFrame(tick);
        }

        tick();
    </script>
</body>
</html>