<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Helvetica Neue|Lucida Grande|Arial|Verdana|sans-serif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pukka Media | Images</title>
    
    <style>
        .form-group{
            padding-bottom: 7px;
        }

        body {
            background-image: url("{{ asset('assets/images/bg.jpg') }}");
            background-color: #ccc;
        }

        .contact-form {
            background: #fff;
            margin-top: 7%;
            margin-bottom: 7%;
            width: 70%;
        }

        .contact-form .form-control {
            border-radius: 1rem;
        }

        .contact-image {
            text-align: center;
        }

        .contact-image img {
            border-radius: 6rem;
            width: 11%;
            margin-top: -3%;
			overflow: hidden;
			box-shadow: 10px 10px 5px #ccc;
            -moz-box-shadow: 10px 10px 5px #ccc;
            -webkit-box-shadow: 10px 10px 5px #ccc;
            -khtml-box-shadow: 10px 10px 5px #ccc;
			display: inline-block;
			background-color: #FFFF;
			border-radius: 50%;
        }

        .contact-form form {
            padding: 12% 10%;
        }

        .contact-form form .row {
            margin-bottom: -7%;
        }

        .contact-form h3 {
            margin-bottom: 1%;
            margin-top: -10%;
            text-align: center;
            color: #0062cc;
        }

		.contact-form h5 {
            margin-bottom: 3%;
            text-align: center;
            color: #0062cc;
        }

        .contact-form .btnContact {
            width: 50%;
            border: none;
            border-radius: 1rem;
            padding: 1.5%;
            background: #dc3545;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin-top: 15px;
        }

        .btnContactSubmit {
            width: 50%;
            border-radius: 1rem;
            padding: 1.5%;
            color: #fff;
            background-color: #0062cc;
            border: none;
            cursor: pointer;
        }

        .error{
            color: red;
            font-weight: 500;
            /* margin-left: 14px; */
        }
        
        @media only screen and (max-width: 500px) {
            .svg {
                width: auto !important;
                height: auto !important;
            }
        }

        .svg {
            position: relative;
            margin: 0 auto;
        }

        svg {
            position:absolute; 
        }
    </style>
</head>
<body>
    <div class="container contact-form" id="container">
        <div class="contact-image">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Pukka Media" />
        </div>
        <div class="row">
            <div class="col-lg-12 mb-5">
                <!-- <h1 class="text-center">Download Your Image</h1> -->
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="text-center">We are updating</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>
</html>