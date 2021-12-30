<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pukka Media</title>

    <style>
        .video_contain {
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
        }

        video {
            position: fixed;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            margin: auto;
            min-height: 100%;
            min-width: 100%;
        }

        .content {
            position: fixed;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            color: #f1f1f1;
            width: 100%;
        }

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: rgb(243 236 236 / 60%);
        }

        @media only screen and (max-width: 890px) {
            .main-image{
                margin-top: -120px;
            }

            .h1{
                font-size: 45px !important;
            }

            .main-image{
                height: 270px !important;
                margin-top: -105px !important;
            }

            video {
                position: absolute;
                top: -50%;
                bottom: 0;
                right: 0;
                left: -50%;
                margin: auto;
                min-height: 100%;
                min-width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="video_contain">
        <video autoplay muted loop>
            <source type="video/mp4" src="{{ asset('assets/video/firework.mp4') }}" />
        </video>
    </div>

    <div class="content d-flex flex-column justify-content-center align-items-center min-vw-100 min-vh-100">
        <img src="{{ asset('assets/images/logo.png') }}" class="main-image" alt="Pukka Media" style="height: 300px; width:auto; filter: invert(100%); margin-bottom: -4%; margin-top: 0%; position: relative;" />
        <h1 style="font-size: 60px; font-family: Pacifico !importent;" class="h1 text-white font-weight-bold text-center">We are Pukka Media</h1>
        <a href="{{ route('contact') }}" type="button" class="text-white m-3 btn btn-danger btn-2x px-3 py-3">Get a FREE New Year Image</a>
    </div>

    <footer class="footer d-flex align-items-center justify-content-between flex-column flex-sm-row flex-md-row px-5 py-2">
        <div class="d-flex align-items-center justify-content-between flex-column flex-sm-row flex-md-row px-4">
            <div class="px-2">
                <i class="fa fa-address-book"></i><span> +91 63566 10101</span>
            </div>
            <div class="px-2">
                <i class="fa fa-globe"></i><span> www.pukkamedia.com</span>
            </div>
            <div class="px-2">
                <i class="fa fa-envelope"></i><span> pukkamediaagency@gmail.com</span>
            </div>
        </div>
        <h6 class="m-0">All Rights Reserved by <a href="https://www.pukka.cypherocean.com" target="_blank">Pukka Media</a></h6>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>