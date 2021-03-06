<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            background-color: green;
        }

        div {
            background-color: black;
        }

        p {
            background-color: yellow;
        }
    </style>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="booking/css/booking.css">
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.js"></script>
    <script src="js/script.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.ui.totop.js"></script>
    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.mobilemenu.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/camera.js"></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
    <script src="js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    <script src="booking/js/booking.js"></script>
    <script>
        $(document).ready(function(){
            jQuery('#camera_wrap').camera({
                loader: false,
                pagination: false ,
                minHeight: '444',
                thumbnails: false,
                height: '48.375%',
                caption: true,
                navigation: true,
                fx: 'mosaic'
            });
            /*carousel*/
            var owl=$("#owl");
            owl.owlCarousel({
                items : 2, //10 items above 1000px browser width
                itemsDesktop : [995,2], //5 items between 1000px and 901px
                itemsDesktopSmall : [767, 2], // betweem 900px and 601px
                itemsTablet: [700, 2], //2 items between 600 and 0
                itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
                navigation : true,
                pagination : false
            });
            $().UItoTop({ easingType: 'easeOutQuart' });
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">
    <![endif]-->
</head>
<body class="page1" id="top">
<!--==============================header=================================-->
<header>
    <div class="container_12"  >
        <div class="grid_12">
            <div class="menu_block" style="background: #c86866" !important>
                <nav class="horizontal-nav full-width horizontalNav-notprocessed" >
                    <ul class="sf-menu">
                        <li><a href="{{route('/')}}">Pagrindinis puslapis</a></li>
                        @if(Auth::user()->role == 2) <li><a href="{{route('hotels')}}">Visi viešbučiai</a></li>@endif
                        @if(Auth::user()->role == 2) <li><a href="{{route('events')}}">Visi renginiai</a></li>@endif
                        @if(Auth::user()->role == 2) <li><a href="{{route('allUsers')}}">Visi vartotojai</a></li>@endif
                        @if(Auth::user()->role == 1) <li><a href="{{route('ownerHotels')}}">Atstovaujami viešbučiai</a></li>@endif
                        @if(Auth::user()->role == 1) <li><a href="{{route('ownerReservations')}}">Viešbučių rezervacijos</a></li>@endif
                        @if(Auth::user()->role == 0) <li><a href="{{route('hotels')}}">Visi viešbučiai</a></li>@endif
                        @if(Auth::user()->role == 0) <li><a href="{{route('events')}}">Artėjantys renginiai</a></li>@endif
                        @if(Auth::user()->role == 0) <li><a href="{{route('profileUser')}}">Mano profilis</a></li>@endif
                        <li><a href="{{ route('logout') }}">Atsijungti</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<!--==============================footer=================================-->
<footer>
    <div class="container_12" >
        <div class="grid_12">
            <div class="socials">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-google-plus"></a>
            </div>
        </div>
    </div>
</footer>
<script>
    $(function (){
        $('#bookingForm').bookingForm({
            ownerEmail: '#'
        });
    })
    $(function() {
        $('#bookingForm input, #bookingForm textarea').placeholder();
    });
</script>
</body>
</html>

