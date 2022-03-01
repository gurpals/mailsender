<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 @yield('title')
<meta name="author" content="Active Expert">
<meta name="description" content="Active Expert">
<meta name="keywords" content="Active Expert" />
<meta name="title" content="Active Expert - Advanced Wireless and Security Training and Services" />
<meta name="apple-mobile-web-app-title" content="Active Expert" />
<meta name="application-name" content="Active Expert" />
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="shortcut icon" href="https://activeexpert.com/frontend/css/images/favicon-16x16.png" />
<link rel=icon type=image/png sizes=16x16 href="https://activeexpert.com/frontend/css/images/favicon-16x16.png" />
<link rel=icon type=image/png sizes=32x32 href="https://activeexpert.com/frontend/css/images/favicon-32x32.png" />
<link rel="apple-touch-icon" href="https://activeexpert.com/frontend/css/images/180x180.png" />
<meta property="og:site_name" content="Active Expert" />
<meta property="og:country-name" content="USA" />
<meta property="og:image" content="https://activeexpert.com/frontend/css/images/activeexpert.jpg" />
<meta property="og:type" content="website" />
<meta property="og:description" content="Active Expert" />
<meta property="og:title" content="Active Expert - Advanced Wireless and Security Training and Services" />
<link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap')}}">
<link rel="stylesheet" href="{{asset('frontend/css/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/css/LineIcons.2.0.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/css/animate.css')}}" />  
<link rel="stylesheet" href="{{asset('frontend/css/css/tiny-slider.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/css/glightbox.min.css')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/css/main.css?deko40')}}" />
<link rel="stylesheet" href="{{asset('frontend/css/css/owl.carousel.css')}}" />
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119222795-1"></script>
<script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-119222795-1');
    </script>
</head>
<body>
    <div class="wrapper">
        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')

     </div>
     <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>
    <script src='https://www.google.com/recaptcha/api.js' async defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{asset('frontend/css/Js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/css/Js/count-up.min.js')}}"></script>
    <script src="{{asset('frontend/css/Js/wow.min.js')}}"></script>
    <script src="{{asset('frontend/css/Js/tiny-slider.js')}}"></script>
    <script src="{{asset('frontend/css/Js/glightbox.min.js')}}"></script>
    <script src="{{asset('frontend/css/Js/isotope.min.js')}}"></script>
    <script src="{{asset('frontend/css/Js/main.js')}}"></script>
    <script src="{{asset('frontend/css/Js/owl.carousel.js')}}"></script>
    <script src="{{asset('frontend/css/Js/owl-carousel.js')}}"></script>
    <script  src="https://kit.fontawesome.com/bb02d19058.js" crossorigin="anonymous "></script>
    
    @yield('script')
</body>
</html>
