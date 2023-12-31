<!DOCTYPE html>
<html lang="en">
<head>
	<title>Saurov Profile</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
    <body >
	
	
    @include('layout.nav')

    @yield('content')

    @include('layout.footer')



		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('js/scrollax.min.js')}}"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="{{asset('js/google-map.js')}}"></script>
		
		<script src="{{asset('js/main.js')}}"></script>
		
	</body>
	</html>