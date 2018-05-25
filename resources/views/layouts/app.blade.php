<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
    <!-- Start WOWSlider.com HEAD section -->

    <!-- End WOWSlider.com HEAD section -->
    <script src="https://use.fontawesome.com/dc93e799a4.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .card-img-top {
            width: 100%;
            border-top-left-radius: calc(.25rem - 1px);
            border-top-right-radius: calc(.25rem - 1px);
            max-height: 145px;
        }
        .h4, h4 {
            font-size: 1rem!important;
            font-weight: bolder;
            text-align: center;
        }
        .card-img-top{
            max-height: 145px;
        }
   .sec-3-b{
       background: url(http://www.olery.com/wp-content/uploads/2015/04/dubai_background.jpg);
       padding: 20px 20px;
       background-attachment: fixed;
       background-repeat: no-repeat;
       background-size: cover;
   }
        .sec-3-c{
       background: url(https://www.csudh.edu/Assets/uploads/images/backgrounds/background-colleges.jpg);
       padding: 20px 20px;
       background-attachment: fixed;
       background-repeat: no-repeat;
       background-size: cover;
   }
        .col-md-6 {

            float: left;
        }
        #footer {
            background-color: #ffffff;
            margin-top: 0px;
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .pb-4, .py-4 {
            padding-bottom: 0rem!important;
        }
        .pt-4, .py-4 {
            padding-top: 0rem!important;
        }
        .icon_box.style_1 .icon i {
            display: block;
            vertical-align: middle;
            width: 50px;
            height: 50px;
            line-height: 50px;
            background: #002e5b;
            text-align: center;
            color: #fff;
            border-radius: 50%;
            float: left;
        }
        .icon_box.style_1.icon_left h5, .icon_box.style_1.icon_left_transparent h5 {

            font-size: 18px;
            color: #002e5b;
            padding-top: 1rem;
            padding-left: 4rem;
            font-weight: 700;
        }
        .icon_box.style_1.icon_left p, .icon_box.style_1.icon_left_transparent p {
            font-size: 13px;
            line-height: 18px;
            margin-top: 2rem;
        }
        .icon_box.style_1.icon_left h5.no_stripe, .icon_box.style_1.icon_left_transparent h5.no_stripe {
            margin-bottom: 15px;
        }

    </style>
    <style>

        @media (min-width: 768px) {

            /* show 3 items */
            .carousel-inner .active,
            .carousel-inner .active + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item,
            .carousel-inner .active + .carousel-item + .carousel-item + .carousel-item  {
                display: block;
            }

            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left),
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item,
            .carousel-inner .carousel-item.active:not(.carousel-item-right):not(.carousel-item-left) + .carousel-item + .carousel-item + .carousel-item {
                transition: none;
            }

            .carousel-inner .carousel-item-next,
            .carousel-inner .carousel-item-prev {
                position: relative;
                transform: translate3d(0, 0, 0);
            }

            .carousel-inner .active.carousel-item + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: absolute;
                top: 0;
                right: -25%;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* left or forward direction */
            .active.carousel-item-left + .carousel-item-next.carousel-item-left,
            .carousel-item-next.carousel-item-left + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item,
            .carousel-item-next.carousel-item-left + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(-100%, 0, 0);
                visibility: visible;
            }

            /* farthest right hidden item must be abso position for animations */
            .carousel-inner .carousel-item-prev.carousel-item-right {
                position: absolute;
                top: 0;
                left: 0;
                z-index: -1;
                display: block;
                visibility: visible;
            }

            /* right or prev direction */
            .active.carousel-item-right + .carousel-item-prev.carousel-item-right,
            .carousel-item-prev.carousel-item-right + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item,
            .carousel-item-prev.carousel-item-right + .carousel-item + .carousel-item + .carousel-item + .carousel-item {
                position: relative;
                transform: translate3d(100%, 0, 0);
                visibility: visible;
                display: block;
                visibility: visible;
            }

        }

        /* Bootstrap Lightbox using Modal */

        #profile-grid { overflow: auto; white-space: normal; }
        #profile-grid .profile { padding-bottom: 40px; }
        #profile-grid .panel { padding: 0 }
        #profile-grid .panel-body { padding: 15px }
        #profile-grid .profile-name { font-weight: bold; }
        #profile-grid .thumbnail {margin-bottom:6px;}
        #profile-grid .panel-thumbnail { overflow: hidden; }
        #profile-grid .img-rounded { border-radius: 4px 4px 0 0;}

    </style>

    <link rel="stylesheet" type="text/css" href="engine1/style.css" />
    <script type="text/javascript" src="engine1/jquery.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.12/jquery-ui.min.js"></script>
    <!-- End WOWSlider.com HEAD section -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{--{{ config('app.name', 'Laravel') }}--}}
                    <img src="images/logo.png" style="max-height: 40px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            {{--<li><a class="nav-link" href="/">Home</a></li>--}}
                            {{--<li><a class="nav-link" href="/">Popular Colleges</a></li>--}}
                            {{--<li><a class="nav-link" href="/">Top Courses</a></li>--}}
                            {{--<li><a class="nav-link" href="/">Colleges</a></li>--}}
                            <li><a class="btn btn-success" href="/Apply">Apply Now</a></li>
                            {{--<li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>--}}
                            {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>


    </div>
    <div id="footer">
        <div class="container">
            <p class="text-muted">&copy; Admission.Life 2018</p>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <script>


        $('#carouselExample').on('slide.bs.carousel', function (e) {


            var $e = $(e.relatedTarget);
            var idx = $e.index();
            var itemsPerSlide = 4;
            var totalItems = $('.carousel-item').length;

            if (idx >= totalItems-(itemsPerSlide-1)) {
                var it = itemsPerSlide - (totalItems - idx);
                for (var i=0; i<it; i++) {
                    // append slides to end
                    if (e.direction=="left") {
                        $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    }
                    else {
                        $('.carousel-item').eq(0).appendTo('.carousel-inner');
                    }
                }
            }
        });


        $('#carouselExample').carousel({
            interval: 2000
        });


        $(document).ready(function() {
            /* show lightbox when clicking a thumbnail */
            $('a.thumb').click(function(event){
                event.preventDefault();
                var content = $('.modal-body');
                content.empty();
                var title = $(this).attr("title");
                $('.modal-title').html(title);
                content.html($(this).html());
                $(".modal-profile").modal({show:true});
            });

        });

    </script>
    <script>(function($) {
            "use strict";

            // manual carousel controls
            $('.next').click(function(){ $('.carousel').carousel('next');return false; });
            $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });

        })(jQuery);</script>
</body>
</html>
