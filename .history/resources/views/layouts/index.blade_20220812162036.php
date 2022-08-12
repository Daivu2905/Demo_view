<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Electro - HTML Ecommerce Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/> -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


		<!-- Slick -->
		<!-- <link type="text/css" rel="stylesheet" href="css/slick.css"/> -->
    <link href="{{asset('css/slick-theme.css')}}" rel="stylesheet">

		<!-- <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/> -->
    <link href="{{asset('css/slick.css')}}" rel="stylesheet">

		<!-- nouislider -->
		<!-- <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/> -->
    <link href="{{asset('css/nouislider.min.css')}}" rel="stylesheet">


		<!-- Font Awesome Icon -->
		<!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

		<!-- Custom stlylesheet -->
		<!-- <link type="text/css" rel="stylesheet" href="css/style.css"/> -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
        

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
<body>
<!-- HEADER -->
@yield('header')
<!-- /HEADER -->

<!-- NAVIGATION -->
@yield('navigation')
<!-- /NAVIGATION -->

@yield('content')

<!-- NEWSLETTER -->
@yield('newsletter')
<!-- /NEWSLETTER -->

<!-- FOOTER -->
@yield('footer')
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="{{asset('themes/js/jquery.min.js')}}"></script>
<script src="{{asset('themes/js/bootstrap.min.js')}}"></script>
<script src="{{asset('themes/js/slick.min.js')}}"></script>
<script src="{{asset('themes/js/nouislider.min.js')}}"></script>
<script src="{{asset('themes/js/jquery.zoom.min.js')}}"></script>
<script src="{{asset('themes/js/main.js')}}"></script>

</body>
</html>