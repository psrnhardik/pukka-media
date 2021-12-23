<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico|Helvetica Neue|Lucida Grande|Arial|Verdana|sans-serif">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pukka Media | Contact US</title>

    <style>
        .form-group{
            padding-bottom: 7px;
        }

        body {
            background-image: url("{{ asset('assets/images/bg.jpg') }}");
            background-color: #cccccc;
        }

        .contact-form {
            background: #fff;
            margin-top: 7%;
            margin-bottom: 5%;
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
    </style>
</head>
<body>
    <div class="container contact-form">
        <div class="contact-image">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Pukka Media" />
        </div>
        <form action="{{ route('contactus') }}" method="post" id="form" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <center>
				<h3>Get your FREE Diwali Post just fill in the following details</h3>
				<h5>We will send your custom designed post soon via WhatsApp or Email</h5>
			</center>

            <div class="row">
                <div class="form-group col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" placeholder="Business Name *" value="{{ @old('name') }}">
                    <span class="kt-form__help error name"></span>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Business email *" value="{{ @old('email') }}">
                    <span class="kt-form__help error email"></span>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" name="phone" id="phone" class="form-control phone" placeholder="Business phone number *" value="{{ @old('phone') }}">
                    <span class="kt-form__help error phone"></span>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" name="website" id="website" class="form-control" placeholder="Business website *" value="{{ @old('website') }}">
                    <span class="kt-form__help error website"></span>
                </div>
                <div class="form-group col-sm-12">
                    <input type="file" name="image" id="image" class="form-control" placeholder="Business Logo JPG / PNG *">
                    <span class="kt-form__help error image"></span>
                </div>
                <div class="form-group col-sm-12">
                    <textarea name="address" class="form-control" placeholder="Business Address *"></textarea>
                    <span class="kt-form__help error address"></span>
                </div>
            
                <h4>Personal Details</h4>
            
                <div class="form-group col-sm-6">
                    <input type="text" name="p_name" id="p_name" class="form-control" placeholder="Personal name *" value="{{ @old('p_name') }}">
                    <span class="kt-form__help error p_name"></span>
                </div>
                <div class="form-group col-sm-6">
                    <input type="email" name="p_email" id="p_email" class="form-control" placeholder="Personal email *" value="{{ @old('p_email') }}">
                    <span class="kt-form__help error p_email"></span>
                </div>
                <div class="form-group col-sm-6">
                    <input type="text" name="p_phone" id="p_phone" class="form-control phone" placeholder="Mobile number *" value="{{ @old('p_phone') }}">
                    <span class="kt-form__help error p_phone"></span>
                </div>
                
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <button type="submit" class="btnContact">Submit</button>
                </div>
            </div>            
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $(".phone").keypress(function(e){
                var keyCode = e.keyCode || e.which;
                var $this = $(this);
                //Regex for Valid Characters i.e. Numbers.
                var regex = new RegExp("^[0-9\b]+$");

                var str = String.fromCharCode(!e.charCode ? e.which : e.charCode);
                // for 10 digit number only
                if ($this.val().length > 9) {
                    e.preventDefault();
                    return false;
                }
                if (e.charCode < 54 && e.charCode > 47) {
                    if ($this.val().length == 0) {
                        e.preventDefault();
                        return false;
                    } else {
                        return true;
                    }
                }
                if (regex.test(str)) {
                    return true;
                }
                e.preventDefault();
                return false;
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            var form = $('#form');
            $('.kt-form__help').html('');
            form.submit(function(e) {
                $('.help-block').html('');
                $('.m-form__help').html('');
                $.ajax({
                    url: form.attr('action'),
                    type: form.attr('method'),
                    // data: form.serialize(),
                    data: new FormData($(this)[0]),
                    dataType: 'json',
                    async: false,
                    processData: false,
                    contentType: false,
                    success: function(json) {
                        return true;
                    },
                    error: function(json) {
                        if (json.status === 422) {
                            e.preventDefault();
                            var errors_ = json.responseJSON;
                            $('.kt-form__help').html('');
                            $.each(errors_.errors, function(key, value) {
                                $('.' + key).html(value);
                            });
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>