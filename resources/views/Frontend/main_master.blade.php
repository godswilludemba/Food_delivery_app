<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/swiper-min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/fancybox.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/aos.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/odometre.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('frontend/assets/css/dark-theme.css')}}">
<title>@yield('title')</title>
<link rel="icon" type="image/png" href="{{asset('frontend/assets/img/logo-white.jpeg')}}">

</head>

<body>

<div class="preloader js-preloader">
<img src="{{asset('frontend/assets/img/preloader.gif')}}" alt="Image">
</div>


<div class="switch-theme-mode">
<label id="switch" class="switch">
<input type="checkbox" onchange="toggleTheme()" id="slider">
<span class="slider round"></span>
</label>
</div>


<div class="page-wrapper ">
<!-- header -->
@include('Frontend.body.header')
<!-- end of header -->

<!-- Main section-->
@yield('index')
<!-- end of main section -->


<!-- Footer -->
@include('Frontend.body.footer')
<!-- end of Footer -->



<a href="javascript:void(0)" class="back-to-top"><i class="las la-arrow-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/form-validator.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/contact-form-script.js')}}"></script>
<script src="{{asset('frontend/assets/js/aos.js')}}"></script>
<script src="{{asset('frontend/assets/js/swiper-min.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery-magnific-popup.js')}}"></script>
<script src="{{asset('frontend/assets/js/fancybox.js')}}"></script>
<script src="{{asset('frontend/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('frontend/assets/js/odometre.min.js')}}"></script>
<script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>