<!DOCTYPE html>
<html>
<head>
	<title>
	{{--Dynamic title section create--}}
	@yield('title')
	
	</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- //for-mobile-apps -->
	<link href="{{asset('vendor/singleProduct/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="{{asset('vendor/singleProduct/css/flexslider.css')}}" type="text/css" media="screen" />
	
	<!-- pignose css -->
    <link href="{{asset('vendor/singleProduct/css/pignose.layerslider.css')}}" rel="stylesheet" type="text/css" media="all" />
    <!-- //pignose css -->
    
    <link rel="stylesheet" type="text/css" href="{{asset('vendor/singleProduct/css/jquery-ui.css')}}">
    
    <link href="{{asset('vendor/singleProduct/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    
    <link href="{{asset('vendor/singleProduct/css/custom.css')}}" rel="stylesheet" type="text/css" media="all" />
    
    <link href="{{asset('vendor/singleProduct/css/bootstrap-datepicker3.min.css')}}" rel="stylesheet" type="text/css" media="all" />
    
	<!-- js -->
	<script type="text/javascript" src="{{asset('vendor/singleProduct/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //js -->
	<!-- single -->
	<script src="{{asset('vendor/singleProduct/js/imagezoom.js')}}"></script>
	<script src="{{asset('vendor/singleProduct/js/jquery.flexslider.js')}}"></script>
	<!-- single -->
	<!-- cart -->
	<!--script src="{{asset('vendor/singleProduct/js/simpleCart.min.js')}}"></script-->
	<!-- cart -->
	<!-- for bootstrap working -->
	<script type="text/javascript" src="{{asset('vendor/singleProduct/js/bootstrap-3.1.1.min.js')}}"></script>
                <script type="text/javascript" src="{{asset('vendor/singleProduct/js/bootstrap-datepicker.min.js')}}"></script>
	<!-- //for bootstrap working -->
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
	<script src="{{asset('vendor/singleProduct/js/jquery.easing.min.js')}}"></script>
</head>
<body>
<!-- header -->
@include('frontEnd.include.header')
<!-- //header-bot -->
<!-- banner -->
@include('frontEnd.include.menu')
<!-- //banner-top -->

<!--dynamic content section create-->
@yield('mainContent')


<!-- //product-nav -->
@include('frontEnd.include.cupon')
<!-- footer -->
@include('frontEnd.include.footer')
<!-- //footer -->

<!-- login -->
@include('frontEnd.include.loginRegModal')			
<!-- //login -->

<!--dynamic content section create-->
@yield('scriptOnFooter')    
    
</body>
</html>

