<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="utf-8" name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Sanera Responsive Bootstrap 4 Medical HTML5 Template" />
    <title>{{ $settings->apps }}</title>
    <link href="{{ asset('assets/files/dharma/logo.png') }}" rel="icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/style1.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 70px;
            right: 20px;
            z-index: 9999;
        }

        .whatsapp-float img {
            width: 70px;
            height: auto;
        }

        .service-iconku img {
            width: 30px;
            height: 110px;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
    <div class="wrapper clearfix" id="wrapperParallax">
        <div class="module-content module-search-warp">
            <div class="pos-vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="type words then enter" />
                                <button></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        </div>
        @include('frontend.menu')
        @include('sweetalert::alert')
        @yield('content')
        <div class="whatsapp-float">
            <a href="https://api.whatsapp.com/send?phone={{ $settings->contact ? $settings->contact : '' }}"
                target="_blank" rel="noopener noreferrer">
                <img src="{{ asset('assets/files/dharma/wa.png') }}" alt="WhatsApp" />
            </a>
        </div>
        @include('frontend.footer')
    </div>
    <script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
</body>

</html>
