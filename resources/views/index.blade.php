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
    </style>
</head>
<body>
    <div class="outsideWrapper">
        <div class="insideWrapper">
            <canvas class="coveringCanvas" id="canvas"></canvas>
            <center class="coveredImage">
                <div style="z-index: 10;">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Pukka Media" style="height: 300px; width:auto; filter: invert(100%);margin-bottom: -3%;margin-top: 10%; position: relative;" />
                    <h1>
                        <p style="color:white; font-size: 60px; margin:0px; font-family: Pacifico;">We are Pukka Media</p>
                    </h1>
                    <a href="{{ route('contact') }}" type="button" class="btn btn-outline-light btn-lg" style="margin-top: 1%;">Get a FREE Diwali Image</a>
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