<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="{{asset('vendors/images/favicon-32x32.png')}}">
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('vendors/images/favicon-16x16.png')}}">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/core.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/icon-font.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('vendors/styles/style.css')}}">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="login.html">
					<img src="{{ asset('vendors/images/deskapp-logo.svg')}}" alt="">
				</a>
			</div>
			{{-- <div class="login-menu">
				<ul>
					<li><a href="login.html">Inicio</a></li>
				</ul>
			</div> --}}
			<div class="login-menu">
				<ul>
					<li><a href="register.html">Registrar</a></li>
				</ul>
			</div>
		</div>
	</div>
	@yield('content')
	<!-- js -->
	<script src="{{ asset('vendors/scripts/core.js')}}"></script>
	<script src="{{ asset('vendors/scripts/script.min.js')}}"></script>
	<script src="{{ asset('vendors/scripts/process.js')}}"></script>
	<script src="{{ asset('vendors/scripts/layout-settings.js')}}"></script>
</body>
</html>